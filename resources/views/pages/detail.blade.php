@extends('layouts.default')
@section('title')
Detail
@stop
@section('content')
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <i class="fa fa-angle-right"></i>
            <li><a href="#">Accum etiam lobortis purus</a></li>
            <i class="fa fa-angle-right"></i>
            <li class="active">Bellentes sagittis sodales accum etiam lobortis purus dictum</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-15">
            <div class="row-container" style="overflow: hidden;">
                <div class="videocontent">
                    <video id="content_video" class="video-js vjs-default-skin" controls data-setup='{ 
                    "techOrder": ["youtube", "html5"], 
                    "sources": [{ "type": "video/youtube", "src": "http://www.youtube.com/watch?v=2i2khp_npdE"}]}'>
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a web browser that
                        <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>
            </div>
            <section class="image-bottom-video">
                <div>
                    <a href="assets/img/8-back.jpg" rel="prettyPhoto[pp_gal]" title="You can add caption to pictures."><img src="assets/img/8-back.jpg" width="60" height="60" alt="Red round shape" /></a>

                    <a href="assets/img/6-back.jpg" rel="prettyPhoto[pp_gal]"><img src="assets/img/6-back.jpg" width="60" height="60" alt="Nice building" /></a>

                    <a href="assets/img/7-back.jpg" rel="prettyPhoto[pp_gal]"><img src="assets/img/7-back.jpg" width="60" height="60" alt="Fire!" /></a>

                    <a href="assets/img/4-back.jpg" rel="prettyPhoto[pp_gal]"><img src="assets/img/4-back.jpg" width="60" height="60" alt="Rock climbing" /></a>
                </div>
            </section>
        </div>
        <div class="row col-md-20">
            <h1 class="page-title">EELLENTES SAGITTIS SODALES ACCUM ETIAM LOBORTIS PURUS DICTUM</h1>
            <div class="relative">
                <ul class="list-unstyled">
                    <li class="vendor">
                        <span>Vendor :</span>
                        <a href="#">Vendor 1</a>
                    </li>
                    <li class="type">
                        <span>Type :</span>
                        <a href="#">Suspendisse</a>
                    </li>
                    <li class="tags">
                        <span>Tag :</span>
                        <a href="#">adipisc</a>
                    </li>
                </ul>
            </div>
            <ul class="share-buttons">
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><img src="assets/img/Facebook.svg"></a></li>
                <li><a href="https://twitter.com/intent/tweet?source=&text=:%20" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20' + encodeURIComponent(document.URL)); return false;"><img src="assets/img/Twitter.svg"></a></li>
                <li><a href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><img src="assets/img/Google+.svg"></a></li>
                <li><a href="http://www.tumblr.com/share?v=3&u=&t=&s=" target="_blank" title="Post to Tumblr" onclick="window.open('http://www.tumblr.com/share?v=3&u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.title)); return false;"><img src="assets/img/Tumblr.svg"></a></li>
                <li><a href="http://pinterest.com/pin/create/button/?url=&description=" target="_blank" title="Pin it" onclick="window.open('http://pinterest.com/pin/create/button/?url=' + encodeURIComponent(document.URL) + '&description=' + encodeURIComponent(document.title)); return false;"><img src="assets/img/Pinterest.svg"></a></li>
                <li><a href="mailto:?subject=&body=:%20" target="_blank" title="Email" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' + encodeURIComponent(document.URL)); return false;"><img src="assets/img/Email.svg"></a></li>
            </ul> 
            <span class="price-product-detail money"><i class="fa fa-eur"></i>55.00</span>
            <div class="col-sm-10">
                <div class="input-product">
                    <div class="row color">
                        <span>Color</span>
                        <select class="form-control">
                            <option>Pink</option>
                            <option>Blue</option>
                        </select>
                    </div>
                    <div class="row size">
                        <span>Size</span>
                        <select class="form-control">
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                    </div>
                    <div class="row quantity">
                        <span>Quantity</span>
                        <form name="f1">
                            <input class="qua form-control" type='text' name='qty' id='qty' value="1" />
                            <input class="indebut" type='button' name='add' onclick='javascript: document.getElementById("qty").value++;' value='+'/>
                            <input class="indebut" type='button' name='subtract' onclick='javascript: document.getElementById("qty").value--;' value='-'/>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 btn-input">
                <a class="btn btn-pink-black" id="slide-pick-next">
                    <span>ADD TO CART</span>
                </a>
                <a class="btn btn-pink-black" id="slide-pick-next">
                    <span>ADD TO WISH LIST</span>
                </a>
            </div>
        </div>
        <div class="description">
            <h4>Description</h4>
            <h5>PARAGRAPH TEXT</h5>
            <p>Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl.</p>
            <h5>UNORDERED LIST</h5>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Maecenas ullamcorper est et massa mattis condimentum.</li>
                <li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>
                <li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>
                <li>Mauris eget diam magna, in blandit turpis.</li>
            </ul>
            <h5>ORDERED LIST</h5>
            <ol>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Maecenas ullamcorper est et massa mattis condimentum.</li>
                <li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>
                <li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>
                <li>Mauris eget diam magna, in blandit turpis.</li>
            </ol>
            <p>Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl.</p>
        </div>
        <h3 class="title-car">OTHER PRODUCT</h3>
        <div class="customNavigation right-nav">
            <a class="btn prev" id="slide-featured-prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn next" id="slide-featured-next"><i class="fa fa-chevron-right"></i></a>
        </div>
        <div class="row-container" style="overflow: hidden;">
            <div id="slide-featured" class="owl-carousel">
                <div class="product-owl">
                    <div>
                        <a href="#">
                            <span>
                                <img src="assets/img/1-front.jpg" class="img-responsive" alt="Kellentes sagittis sodales accum etiam  lobortis purus dictum">
                            </span>
                        </a>
                        <a href="#" class="link-product">Bellentes sagittis sodales accum etiam  lobortis purus dictum</a>
                        <span class="price-product"><i class="fa fa-eur"></i>55.00</span>
                    </div>
                </div>
                <div class="product-owl">
                    <div>
                        <a href="#">
                            <span>
                                <img src="assets/img/2-front.jpg" class="img-responsive" alt="Kellentes sagittis sodales accum etiam  lobortis purus dictum">
                            </span>
                        </a>
                        <a href="#" class="link-product">Bellentes sagittis sodales accum etiam  lobortis purus dictum</a>
                        <span class="price-product"><i class="fa fa-eur"></i>55.00</span>
                    </div>
                </div>
                <div class="product-owl">
                    <div>
                        <a href="#">
                            <span>
                                <img src="assets/img/3-front.jpg" class="img-responsive" alt="Kellentes sagittis sodales accum etiam  lobortis purus dictum">
                            </span>
                        </a>
                        <a href="#" class="link-product">Bellentes sagittis sodales accum etiam  lobortis purus dictum</a>
                        <span class="price-product"><i class="fa fa-eur"></i>55.00</span>
                    </div>
                </div>
                <div class="product-owl">
                    <div>
                        <a href="#">
                            <span>
                                <img src="assets/img/4-front.jpg" class="img-responsive" alt="Kellentes sagittis sodales accum etiam  lobortis purus dictum">
                            </span>
                        </a>
                        <a href="#" class="link-product">Bellentes sagittis sodales accum etiam  lobortis purus dictum</a>
                        <span class="price-product"><i class="fa fa-eur"></i>55.00</span>
                    </div>
                </div>
                <div class="product-owl">
                    <div>
                        <a href="#">
                            <span>
                                <img src="assets/img/5-front.jpg" class="img-responsive" alt="Kellentes sagittis sodales accum etiam  lobortis purus dictum">
                            </span>
                        </a>
                        <a href="#" class="link-product">Bellentes sagittis sodales accum etiam  lobortis purus dictum</a>
                        <span class="price-product"><i class="fa fa-eur"></i>55.00</span>
                    </div>
                </div>
                <div class="product-owl">
                    <div>
                        <a href="#">
                            <span>
                                <img src="assets/img/6-front.jpg" class="img-responsive" alt="Kellentes sagittis sodales accum etiam  lobortis purus dictum">
                            </span>
                        </a>
                        <a href="#" class="link-product">Bellentes sagittis sodales accum etiam  lobortis purus dictum</a>
                        <span class="price-product"><i class="fa fa-eur"></i>55.00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="prev-next-prod">            
            <a href="#">Previous Product</a>
            <a href="#">Next Product</a>
        </div>
    </div>
    <div class="col-md-5">
        @include('includes.sidebar')
    </div>
</div>
</div>  
@stop
@push('scripts')
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
                                    @endpush

