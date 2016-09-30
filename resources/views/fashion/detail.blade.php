<!DOCTYPE html>
<html>
<head>
    <title>Detail | Fashion</title>
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet/less" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet/less" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet/less" type="text/css" href="assets/css/camera.css">
    <link rel="stylesheet/less" type="text/css" href="assets/prettyPhoto/css/prettyPhoto.css"> 
    <link rel="stylesheet" type="text/css" href="assets/css/video-js.css">
    <link rel="stylesheet" type="text/css" href="assets/css/cs.style.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/main.less">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <style type="text/css">
        .video-js {padding-top: 56.25%}
        .vjs-fullscreen {padding-top: 0px}
    </style>
</head>
<body>
    @include('includes.header') 
    @include('content.details') 
    @include('includes.footer')
    <script src="assets/js/jquery-1.9.1.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/videojs-ie8.min.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/Youtube.js"></script>
    <script src="assets/js/less.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/camera.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>



    <script type="text/javascript">
        // Once the video is ready
        $("#content_video").ready(function () {

            var myPlayer = $(this);
            var aspectRatio = 9 / 16;

            function resizeVideoJS() {
                var width = document.getElementById("content_video").parentElement.offsetWidth;
                myPlayer.width(width).height(width * aspectRatio);
            }

            resizeVideoJS();
            window.onresize = resizeVideoJS;
        });
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
                                            $("a[rel^='prettyPhoto']").prettyPhoto();
                                        });
                                    </script>

                                </body>
                                </html>

