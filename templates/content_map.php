<section class="info-title">
    <p class="panel-title">
        Find our bakery!
    </p>
</section>
<section class="info">
    <div id="map"></div>
    <p>
        <script>
            function initMap() {
                var location = {lat: 38.9288844, lng: -120.184667};
                
                var mapelement = document.getElementById('map');
                
                var options = {
                  zoom: 14,
                  center: location,
                  mapTypeId: 'roadmap'
                };

                var googleMap = new google.maps.Map(mapelement, options);
                
                var marker = new google.maps.Marker({
                  position: location,
                  map: googleMap
                });

                // Here is an example of how to "geocode" an address and turn it into a lat-lng
                // geocode means to convert a human address into a set of coordinates for a map
                // https://developers.google.com/maps/documentation/javascript/examples/geocoding-simple
            }
        </script>
    </p>
    <p>
        We are located in California's Desolation Wilderness, accessible 
        via the Granite Lake Trail or the Pacific Crest Trail. 
        Just find the lightning-struck tree and 
        follow the fossilized hoofprints into the trees,
        listening for the sounds of our bone chimes and the smells
        of our oven. 
    </p>
    <p>
        Our previous location, off Prospectors Road near Coloma,
        is now permanently closed. 
    </p>
    <p>
        We are open year-round, sunset to sunrise. 
    </p>
</section>
<!-- API Key: AIzaSyDEiVNN-jAw_gpqzB4P9ioUTVT6d0-8K38-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEiVNN-jAw_gpqzB4P9ioUTVT6d0-8K38&callback=initMap" async defer></script>