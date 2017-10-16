<div id="map" style="width: 500px; height: 304px ; margin-top: 76px;" class="info-right" ></div>

                   <script>
                       function initMap() {

//            Map Options

                           var options ={

                               zoom:8,
                               center:{lat:12.6500000,lng:-8.0000000},
                               styles: [
                                   {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                                   {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                                   {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                                   {
                                       featureType: 'administrative.locality',
                                       elementType: 'labels.text.fill',
                                       stylers: [{color: '#d59563'}]
                                   },
                                   {
                                       featureType: 'poi',
                                       elementType: 'labels.text.fill',
                                       stylers: [{color: '#d59563'}]
                                   },
                                   {
                                       featureType: 'poi.park',
                                       elementType: 'geometry',
                                       stylers: [{color: '#263c3f'}]
                                   },
                                   {
                                       featureType: 'poi.park',
                                       elementType: 'labels.text.fill',
                                       stylers: [{color: '#6b9a76'}]
                                   },
                                   {
                                       featureType: 'road',
                                       elementType: 'geometry',
                                       stylers: [{color: '#38414e'}]
                                   },
                                   {
                                       featureType: 'road',
                                       elementType: 'geometry.stroke',
                                       stylers: [{color: '#212a37'}]
                                   },
                                   {
                                       featureType: 'road',
                                       elementType: 'labels.text.fill',
                                       stylers: [{color: '#9ca5b3'}]
                                   },
                                   {
                                       featureType: 'road.highway',
                                       elementType: 'geometry',
                                       stylers: [{color: '#746855'}]
                                   },
                                   {
                                       featureType: 'road.highway',
                                       elementType: 'geometry.stroke',
                                       stylers: [{color: '#1f2835'}]
                                   },
                                   {
                                       featureType: 'road.highway',
                                       elementType: 'labels.text.fill',
                                       stylers: [{color: '#f3d19c'}]
                                   },
                                   {
                                       featureType: 'transit',
                                       elementType: 'geometry',
                                       stylers: [{color: '#2f3948'}]
                                   },
                                   {
                                       featureType: 'transit.station',
                                       elementType: 'labels.text.fill',
                                       stylers: [{color: '#d59563'}]
                                   },
                                   {
                                       featureType: 'water',
                                       elementType: 'geometry',
                                       stylers: [{color: '#17263c'}]
                                   },
                                   {
                                       featureType: 'water',
                                       elementType: 'labels.text.fill',
                                       stylers: [{color: '#515c6d'}]
                                   },
                                   {
                                       featureType: 'water',
                                       elementType: 'labels.text.stroke',
                                       stylers: [{color: '#17263c'}]
                                   }
                               ]
                           };

//            New Map
                           var map = new
                           google.maps.Map(document.getElementById('map'),options);

                           //listen map on click

                           google.maps.event.addListener(map, 'click', function(event){

//                add marker
                               addMarker({coords:event.latLng});


                           });
//
                           //Array of Markers

                           var markers =[


                               {
                                   coords:{lat:12.630435 , lng: -8.028238},
                                   iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
                                   content:'<h1>Orange Mali</h1>'
                               },


                               {
                                   coords:{lat:12.633866 , lng:-8.024445},
                                   content:'<h1>Orange Mall</h1>'
//                iconImage:'http://www.clker.com/cliparts/I/l/L/S/W/9/map-marker-hi.png'
                               }

                           ];


                           //loop through markers

                           for (var i = 0; i < markers.length; i++){

                               //            add marker location to the map
                               addMarker(markers[i]);


                           }


                           //add marker function


                           function addMarker(props){
                               var marker = new google.maps.Marker({
                                   position:props.coords,
                                   map:map
//                icon:props.iconImage
//                icon:'http://www.clker.com/cliparts/I/l/L/S/W/9/map-marker-hi.png'
//
                               });

//                check for custom icon
                               if(props.iconImage){

//                    set icon image

                                   marker.setIcon(props.iconImage);

                               }


                               //check content

                               if(props.content){


                                   var infoWindow = new google.maps.InfoWindow({
                                       content:props.content

                                   });

                                   marker.addListener('click',function(){

                                       infoWindow.open(map,marker);
                                   });

                               }

                           }



                       }
                   </script>

                   <script async defer
                           src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGkrBAgjF9LYMsVpgWyVZ_PhHWULDdpng&callback=initMap">
                   </script>
