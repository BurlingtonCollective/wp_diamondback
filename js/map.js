var map,
    geocoder,
    bounds,
    infoWindow,
    service;

function init() {
  var center = new google.maps.LatLng(38.8951, -77.0367);
  
  bounds = new google.maps.LatLngBounds();
  infoWindow = new google.maps.InfoWindow();
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: center
  });

  service = new google.maps.places.PlacesService(map);
  google.maps.event.addListenerOnce(map, 'tilesloaded', loadMarkers);
  map.fitBounds(bounds);
}

function loadMarkers() {
  $('.location').each(function(index, element) {
    var $element = $(element),
        position = new google.maps.LatLng(
          $element.data('latitude'),
          $element.data('longitude')
        ),
        placeId = $element.data('place'),
        purchaseType = $element.data('purchase-type');

    marker = new google.maps.Marker({
      map: map,
      position: position,
      title: $element.find('.media-heading').text()
    });

    $element.data('marker', marker);

    handleBounds(marker);
    bindInfoWindow(marker, placeId, purchaseType);
  });
}

function handleBounds(marker) {
  bounds.extend(marker.getPosition());
  map.setCenter(bounds.getCenter());
  map.fitBounds(bounds);
  if (map.getZoom() > 12) {
    map.setZoom(12);
  } else {
    map.setZoom(map.getZoom() - 1);
  }
}

function bindInfoWindow(marker, placeId, purchaseType) {
  if (placeId) {
    service.getDetails({placeId: placeId}, function(place, status) {
      if (status == google.maps.places.PlacesServiceStatus.OK) {
        google.maps.event.addListener(marker, 'click', function() {
          var title = '<h4>'+marker.getTitle()+'</h4>',
              type = '<h5>' + purchaseType + '</h5>',
              isOpen = place.open_now,
              status = isOpen ? '<span style="color: green;">Open</span>' : '<span style="color: red;">Closed</span>',
              link = '<small style="display: block;"><a href="'+place.url+'" target="_blank">More Information</a></small>';
          infoWindow.setContent(title + type + status + link);
          infoWindow.open(map, marker);
        });
      } else {
        google.maps.event.addListener(marker, 'click', function() {
          var title = '<h4>'+marker.getTitle()+'</h4>',
              type = '<h5>' + purchaseType + '</h5>';
          infoWindow.setContent(title + type);
          infoWindow.open(map, marker);
        });
      }
    });
  } else {
    google.maps.event.addListener(marker, 'click', function() {
      var title = '<h4>'+marker.getTitle()+'</h4>',
          type = '<h5>' + purchaseType + '</h5>';
      infoWindow.setContent(title + type);
      infoWindow.open(map, marker);
    });
  }
}

google.maps.event.addDomListener(window, 'resize', init);

$(function() {
  var $mapTarget = $('#map');

  if ($mapTarget.length) {
    init();

    $('.location').on('click touchend', function() {
      $('html, body').animate({scrollTop: 0}, 800);
      google.maps.event.trigger(marker, 'click');
    });
  }
});