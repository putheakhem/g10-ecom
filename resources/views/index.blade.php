<!DOCTYPE html>
<html>
<head>
    <title>Markito A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Markito Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
    <!--//fonts-->

    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

    <script src="js/simpleCart.min.js"> </script>
</head>
<body>
<!--header-->
@include('partials.header')
<!--banner-->

<div class="banner">
    <div class="container">
        <div class="wmuSlider example1">
            <div class="wmuSliderWrapper">
                <article style="position: absolute; width: 100%; opacity: 0;">
                    <div class="banner-wrap">

                        <div class="banner-top">
                            <a href="single.html">
                                <div class="banner-top-in">
                                    <img src="images/ba.png" class="img-responsive" alt="">
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
                                <div class="off">
                                    <label>35% off !</label>
                                    <p>White Blended Cotton "still fresh" t-shirt</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                        </div>


                        <div class="banner-top banner-bottom">
                            <a href="single.html">
                                <div class="banner-top-in at">
                                    <img src="images/ba2.png" class="img-responsive" alt="">
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
                                <div class="off">
                                    <label>35% off !</label>
                                    <p>White Blended Cotton "still fresh" t-shirt</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                        </div>

                        <div class="clearfix"> </div>

                    </div>
                </article>
                <article style="position: absolute; width: 100%; opacity: 0;">
                    <div class="banner-wrap">

                        <div class="banner-top">
                            <a href="single.html">
                                <div class="banner-top-in">
                                    <img src="images/ba11.png" class="img-responsive" alt="">
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
                                <div class="off">
                                    <label>35% off !</label>
                                    <p>White Blended Cotton "still fresh" t-shirt</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                        </div>


                        <div class="banner-top banner-bottom">
                            <a href="single.html">
                                <div class="banner-top-in at">
                                    <img src="images/ba21.png" class="img-responsive" alt="">
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
                                <div class="off">
                                    <label>35% off !</label>
                                    <p>White Blended Cotton "still fresh" t-shirt</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                        </div>

                        <div class="clearfix"> </div>

                    </div>
                </article>
                <article style="position: absolute; width: 100%; opacity: 0;">
                    <div class="banner-wrap">

                        <div class="banner-top">
                            <a href="single.html">
                                <div class="banner-top-in">
                                    <img src="images/ba12.png" class="img-responsive" alt="">
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
                                <div class="off">
                                    <label>35% off !</label>
                                    <p>White Blended Cotton "still fresh" t-shirt</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                        </div>


                        <div class="banner-top banner-bottom">
                            <a href="single.html">
                                <div class="banner-top-in at">
                                    <img src="images/ba22.png" class="img-responsive" alt="">
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add"><span class="item_price" >123 $ <i> </i> </span></div>
                                <div class="off">
                                    <label>35% off !</label>
                                    <p>White Blended Cotton "still fresh" t-shirt</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                        </div>
                        <div class="clearfix"> </div>

                    </div>
                </article>
            </div>
            <ul class="wmuSliderPagination">
                <li><a href="#" class="">0</a></li>
                <li><a href="#" class="">1</a></li>
                <li><a href="#" class="wmuActive">2</a></li>
            </ul>
        </div>
        <!---->
        <script src="js/jquery.wmuSlider.js"></script>
        <script>
            $('.example1').wmuSlider({
                pagination : true,
                nav : false,
            });
        </script>

    </div>
</div>
<div class="content">
    <div class="container">
        <div class="content-top">
            <h2 class="new">NEW ARRIVALS</h2>
            <div class="pink">
                <!-- requried-jsfiles-for owl -->
                <link href="css/owl.carousel.css" rel="stylesheet">
                <script src="js/owl.carousel.js"></script>
                <script>
                    $(document).ready(function() {
                        $("#owl-demo").owlCarousel({
                            items : 4,
                            lazyLoad : true,
                            autoPlay : true,
                            pagination : true,
                        });
                    });
                </script>
                <!-- //requried-jsfiles-for owl -->
                <div id="owl-demo" class="owl-carousel text-center">
                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="single.html" > <img src="images/pi.jpg" class="img-responsive" alt="">
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li><span>S</span></li>
                                            <li><span>XS</span></li>
                                            <li><span>M</span></li>
                                            <li><span> L</span></li>
                                            <li><span>XL</span></li>
                                            <li><span> XXL</span></li>
                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li><span class="color"> </span></li>
                                            <li><span class="color1"> </span></li>
                                            <li><span class="color2"> </span></li>
                                            <li><span class="color3"> </span></li>

                                        </ul>

                                    </div> </a>
                            </div>
                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="single.html" > <img src="images/pi11.jpg" class="img-responsive" alt="">
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li><span>S</span></li>
                                            <li><span>XS</span></li>
                                            <li><span>M</span></li>
                                            <li><span> L</span></li>
                                            <li><span>XL</span></li>
                                            <li><span> XXL</span></li>
                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li><span class="color"> </span></li>
                                            <li><span class="color1"> </span></li>
                                            <li><span class="color2"> </span></li>
                                            <li><span class="color3"> </span></li>

                                        </ul>

                                    </div> </a>
                            </div>
                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                            <!---
                        <a class="cup" href="single.html">123 $<i> </i> </a>
                        -->
                        </div>
                    </div>

                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="single.html" > <img src="images/pi12.jpg" class="img-responsive" alt="">
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li><span>S</span></li>
                                            <li><span>XS</span></li>
                                            <li><span>M</span></li>
                                            <li><span> L</span></li>
                                            <li><span>XL</span></li>
                                            <li><span> XXL</span></li>
                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li><span class="color"> </span></li>
                                            <li><span class="color1"> </span></li>
                                            <li><span class="color2"> </span></li>
                                            <li><span class="color3"> </span></li>

                                        </ul>

                                    </div> </a>
                            </div>
                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                        </div>
                    </div>

                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="single.html" > <img src="images/pi13.jpg" class="img-responsive" alt="">
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li><span>S</span></li>
                                            <li><span>XS</span></li>
                                            <li><span>M</span></li>
                                            <li><span> L</span></li>
                                            <li><span>XL</span></li>
                                            <li><span> XXL</span></li>
                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li><span class="color"> </span></li>
                                            <li><span class="color1"> </span></li>
                                            <li><span class="color2"> </span></li>
                                            <li><span class="color3"> </span></li>

                                        </ul>

                                    </div> </a>
                            </div>

                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                        </div>
                    </div>

                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="single.html" > <img src="images/pi11.jpg" class="img-responsive" alt="">
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li><span>S</span></li>
                                            <li><span>XS</span></li>
                                            <li><span>M</span></li>
                                            <li><span> L</span></li>
                                            <li><span>XL</span></li>
                                            <li><span> XXL</span></li>
                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li><span class="color"> </span></li>
                                            <li><span class="color1"> </span></li>
                                            <li><span class="color2"> </span></li>
                                            <li><span class="color3"> </span></li>

                                        </ul>

                                    </div> </a>
                            </div>
                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                        </div>
                    </div>

                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="single.html" > <img src="images/pi13.jpg" class="img-responsive" alt="">
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li><span>S</span></li>
                                            <li><span>XS</span></li>
                                            <li><span>M</span></li>
                                            <li><span> L</span></li>
                                            <li><span>XL</span></li>
                                            <li><span> XXL</span></li>
                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li><span class="color"> </span></li>
                                            <li><span class="color1"> </span></li>
                                            <li><span class="color2"> </span></li>
                                            <li><span class="color3"> </span></li>

                                        </ul>

                                    </div> </a>
                            </div>
                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="single.html" > <img src="images/pi.jpg" class="img-responsive" alt="">
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li><span>S</span></li>
                                            <li><span>XS</span></li>
                                            <li><span>M</span></li>
                                            <li><span> L</span></li>
                                            <li><span>XL</span></li>
                                            <li><span> XXL</span></li>
                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li><span class="color"> </span></li>
                                            <li><span class="color1"> </span></li>
                                            <li><span class="color2"> </span></li>
                                            <li><span class="color3"> </span></li>

                                        </ul>

                                    </div> </a>
                            </div>
                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="single.html" > <img src="images/pi12.jpg" class="img-responsive" alt="">
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li><span>S</span></li>
                                            <li><span>XS</span></li>
                                            <li><span>M</span></li>
                                            <li><span> L</span></li>
                                            <li><span>XL</span></li>
                                            <li><span> XXL</span></li>
                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li><span class="color"> </span></li>
                                            <li><span class="color1"> </span></li>
                                            <li><span class="color2"> </span></li>
                                            <li><span class="color3"> </span></li>

                                        </ul>

                                    </div> </a>
                            </div>
                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="single.html" > <img src="images/pi11.jpg" class="img-responsive" alt="">
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li><span>S</span></li>
                                            <li><span>XS</span></li>
                                            <li><span>M</span></li>
                                            <li><span> L</span></li>
                                            <li><span>XL</span></li>
                                            <li><span> XXL</span></li>
                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li><span class="color"> </span></li>
                                            <li><span class="color1"> </span></li>
                                            <li><span class="color2"> </span></li>
                                            <li><span class="color3"> </span></li>

                                        </ul>

                                    </div> </a>
                            </div>
                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" >123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>

        </div>

        <!---->
        <div class="content-middle">
            <h2 class="middle">BEST SALES</h2>
            <div class="col-best">
                <div class="col-md-4">
                    <a href="single.html"><div class="col-in">
                            <div class="col-in-left">
                                <img src="images/ni.jpg" class="img-responsive" alt="">
                            </div>
                    </a>
                    <div class="col-in-right grid_1 simpleCart_shelfItem">
                        <h5>fuel t-shirt  mod : 9509</h5>
                        <ul class="star">
                            <li><a href="#"><i> </i> </a> </li>
                            <li><a href="#"><i> </i> </a> </li>
                            <li><a href="#"><i> </i> </a> </li>
                            <li><i class="in-star"> </i>  </li>
                        </ul>
                        <!---->
                        <a href="#" class="item_add"><span class="white item_price" >123 $ <i> </i> </span></a>
                        <!---->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="single.html"><div class="col-in">
                        <div class="col-in-left">
                            <img src="images/ni1.jpg" class="img-responsive" alt="">
                        </div>
                </a>
                <div class="col-in-right grid_1 simpleCart_shelfItem">
                    <h5>fuel t-shirt  mod : 9509</h5>
                    <ul class="star">
                        <li><i> </i>  </li>
                        <li><i> </i>  </li>
                        <li><i> </i>  </li>
                        <li><i class="in-star"> </i>  </li>
                    </ul>
                    <!---->
                    <a href="#" class="item_add"><span class="white item_price" >123 $ <i> </i> </span></a>
                    <!---->
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href="single.html"><div class="col-in">
                    <div class="col-in-left">
                        <img src="images/ni.jpg" class="img-responsive" alt="">
                    </div>
            </a>
            <div class="col-in-right grid_1 simpleCart_shelfItem">
                <h5>fuel t-shirt  mod : 9509</h5>
                <ul class="star">
                    <li><i> </i>  </li>
                    <li><i> </i>  </li>
                    <li><i> </i>  </li>
                    <li><i class="in-star"> </i>  </li>
                </ul>
                <!---->
                <a href="#" class="item_add"><span class="white item_price" >123 $ <i> </i> </span></a>
                <!---->
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
</div>
<!---->

<div class="content-bottom">
    <div class="col-md-8 latter">
        <h6>NEWSLETTER</h6>
        <p>sign up now to our newsletter discount! to get the Welcome discount</p>

        <div class="clearfix"> </div>
    </div>
    <div class="col-md-4 latter-right">

        <form>
            <div class="join">
                <input type="text" value="your email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'your email here';}">
                <i> </i>
            </div>
            <input type="submit" value="join us">
        </form>

    </div>
    <div class="clearfix"> </div>
</div>

<!---->
<div class="bottom-content">

    <div class="col-md-4">
        <img src="images/ad1.png" class="img-responsive" alt="">
    </div>
    <div class="col-md-4">
        <img src="images/ad1.png" class="img-responsive" alt="">
    </div>
    <div class="col-md-4">
        <img src="images/ad1.png" class="img-responsive" alt="">
    </div>
    <div class="clearfix"> </div>
</div>

</div>
</div>
@include('partials.footer')
</body>
</html>