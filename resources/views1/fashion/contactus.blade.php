
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <i class="fa fa-angle-right"></i>
                <li class="active">contact us</li>
            </ol>
            <h1 class="page-title">CONTACT US</h1>
        </div>
        <div class="row">
            <div class="col-md-10">
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:345px;width:570px;'><div id='gmap_canvas' style='height:345px;width:570px;'></div><div><small><a href="http://embedgooglemaps.com">                                   embed google maps                           </a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">Find all web directories here!</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map() {
                    var myOptions = {zoom: 14, center: new google.maps.LatLng(-7.939411199999999, 112.67020589999993), mapTypeId: google.maps.MapTypeId.ROADMAP};
                    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                    marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(-7.939411199999999, 112.67020589999993)});
                    infowindow = new google.maps.InfoWindow({content: '<strong>Title</strong><br>araya malang<br>'});
                    google.maps.event.addListener(marker, 'click', function () {
                        infowindow.open(map, marker);
                    });
                    infowindow.open(map, marker);
                }
                google.maps.event.addDomListener(window, 'load', init_map);
            </script>
        </div>
        <div class="col-md-10 register">
            <h1>DROP US A LINE</h1>
            <span>First Name</span>
            <input type="text" name="firstname" class="form-control">
            <span>Email</span><i>*</i>
            <input type="email" name="email" class="form-control">
            <span>Comment</span><i>*</i>
            <textarea rows="6" class="form-control"></textarea>
            <a class="btn btn-pink-black" id="slide-pick-next">
                <span>SUBMIT CONTACT</span>
            </a>
        </div>
    </div>
</div>  