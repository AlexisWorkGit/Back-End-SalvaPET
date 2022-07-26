(function($){

    "use strict";
    
    //active
    $('#visits').addClass('active');

    //get animal by code
    $('#code').select2({
    placeholder:trans("Animal Code"),
    ajax: {
       beforeSend:function()
       {
          $('.preloader').show();
          $('.loader').show();
       },
       url: ajax_url('get_animal_by_code_owner'),
       processResults: function (data) {
             return {
                   results: $.map(data, function (item) {
                      return {
                         text: item.code,
                         id: item.id
                      }
                   })
             };
          },
          complete:function()
          {
             $('.preloader').hide();
             $('.loader').hide();
          }
       }
    });

    //selected code
    $(document).on('select2:select','#code', function (e) {
        var el=$(e.target);
        var data = e.params.data;
        $.ajax({
            url:ajax_url('get_animal'+'?id='+data.id),
            beforeSend:function(){
            $('.preloader').show();
            $('.loader').show();
            },
            success:function(animal)
            {
            $("#name").append('<option value="'+animal.id+'">'+animal.name+'</option>');
            $("#name").val(animal.id).trigger('change');
            $("#gender").val(animal.gender);
            $("#dob").val(animal.dob);
            $("#owner_name").val(animal.owner.name);
            },
            complete:function()
            {
            $('.preloader').hide();
            $('.loader').hide();
            }
        });
    });

    //get animal by name select2
    $('#name').select2({
        placeholder:trans("Animal Name"),
        ajax: {
        beforeSend:function()
        {
            $('.preloader').show();
            $('.loader').show();
        },
        url: ajax_url('get_animal_by_name_owner'),
        processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    })
                };
            },
        complete:function()
        {
            $('.preloader').hide();
            $('.loader').hide();
        }
        }
    });

    //selected name
    $(document).on('select2:select','#name', function (e) {
        var el=$(e.target);
        var data = e.params.data;
        $.ajax({
            url:ajax_url('get_animal'+'?id='+data.id),
            beforeSend:function(){
                $('.preloader').show();
                $('.loader').show();
            },
            success:function(animal)
            {
            $("#code").append('<option value="'+animal.id+'">'+animal.code+'</option>');
            $("#code").val(animal.id).trigger('change');
            $("#gender").val(animal.gender);
            $("#dob").val(animal.dob);
            $("#owner_name").val(animal.owner.name);
            },
        complete:function()
        {
            $('.preloader').hide();
            $('.loader').hide();
        }
        });
    });

})(jQuery);
   



//location on map
let marker;
let map;
let visit_lat=parseFloat($('#visit_lat').val());
let visit_lng=parseFloat($('#visit_lng').val());
let zoom_level=parseInt($('#zoom_level').val());

if(isNaN(visit_lat)||isNaN(visit_lng)||isNaN(zoom_level))
{
    visit_lat=26.8206;
    visit_lng=30.8025;
    zoom_level=4;
}

function initMap() {

    const myLatlng = { lat: visit_lat, lng: visit_lng};

    map = new google.maps.Map(document.getElementById("map"), {
      zoom: zoom_level,
      center: myLatlng
    });

    marker = new google.maps.Marker({
      position: myLatlng,
      map,
      title: "Click to zoom"
    });
    
    map.addListener('click', function(e) {
        placeMarkerAndPanTo(e.latLng, map);
    });
}

function placeMarkerAndPanTo(latLng, map) {
    marker.setMap(null);
    marker = new google.maps.Marker({
    position: latLng,
    map: map
    });
    //set branch lat and lng
    $('#visit_lat').val(latLng.lat());
    $('#visit_lng').val(latLng.lng());
    $('#zoom_level').val(map.getZoom());

}