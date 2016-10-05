<!DOCTYPE html>
<html>
<head>
    <title>Fashion</title>
    
</head> 
<body>
    @include('includes.header')
    @include('content.home')
    @include('includes.footer')
    <script src="assets/js/jquery-1.9.1.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/less.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/camera.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
                //owl carousel harus di dalam document ready atau $(function() karena html harus terload sempurna dulu
                //karena ada lebih dari satu carousel dengan prev next custom, lebih aman pakai acuan id
                owlPick = $('#slide-pick').owlCarousel({
                    margin: 10,
                    items: 3,
                    responsive: {//responsive: semakin kecil width semakin sedikit items
                        480: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        1024: {
                            items: 3
                        }
                    },
                });

                // Custom Navigation Events
                $("#slide-pick-next").click(function () {
                    owlPick.trigger('owl.next');
                });

                $("#slide-pick-prev").click(function () {
                    owlPick.trigger('owl.prev');
                });


                owlFeatured = $('#slide-featured').owlCarousel({
                    margin: 10,
                    items: 3,
                    responsive: {
                        480: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        1024: {
                            items: 3
                        }
                    },
                });

                // Custom Navigation Events
                $("#slide-featured-next").click(function () {
                    owlFeatured.trigger('owl.next');
                });

                $("#slide-featured-prev").click(function () {
                    owlFeatured.trigger('owl.prev');
                });


                //Camera
                $('.camera_wrap').camera({
                    height: '41%',
                    pagination: false,
                    thumbnails: true
                });
            });
        </script>
    </body>
    </html>