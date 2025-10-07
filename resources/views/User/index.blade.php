@extends('layout.layout')
@section('content')
    <div id="templatemo_main_wrapper">
        <div id="templatemo_main">
            <div class="slider-wrapper theme-orman">
                <div class="ribbon"></div>
                <div id="slider" class="nivoSlider">
                    <img src="images/portfolio/01.jpg" alt="slider image 1" />
                    <a href="#">
                        <img src="images/portfolio/02.jpg" alt="slider image 2" title="This is an example of a caption" />
                    </a>
                    <img src="images/portfolio/03.jpg" alt="slider image 3" />
                    <img src="images/portfolio/04.jpg" alt="slider image 4" title="#htmlcaption" />
                    <img src="images/portfolio/05.jpg" alt="slider image 5" title="#htmlcaption" />
                </div>
                <div id="htmlcaption" class="nivo-html-caption">
                    <strong>Example</strong> caption with <a href="http://dev7studios.com" rel="nofollow">a credit
                        link</a> for <em>this slider</em>.
                </div>
            </div>
            <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
            <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
                $(window).load(function() {
                    $('#slider').nivoSlider({
                        controlNav: false
                    });
                });
            </script>

            <div id="sidebar" class="left">
                <div class="sidebar_box"><span class="bottom"></span>
                    <h3>Categories</h3>
                    <div class="content">
                        <ul class="sidebar_list">
                            <li><a href="#">Nulla odio ipsum</a></li>
                            <li><a href="#">Suspendisse posuere</a></li>
                            <li><a href="#">Aliquam euismod</a></li>
                            <li><a href="#">Curabitur ac mauris</a></li>
                            <li><a href="#">Mauris nulla tortor</a></li>
                            <li><a href="#">Nullam ultrices</a></li>
                            <li><a href="#">Vivamus scelerisque</a></li>
                            <li><a href="#">Suspendisse posuere</a></li>
                            <li><a href="#">Quisque vel justo</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar_box"><span class="bottom"></span>
                    <h3>Weekly Special</h3>
                    <div class="content special">
                        <img src="images/templatemo_image_01.jpg" alt="Flowers" />
                        <a href="#">Citrus Burst Bouquet</a>
                        <p>
                            Price:
                            <span class="price normal_price">$160</span>&nbsp;&nbsp;
                            <span class="price special_price">$100</span>
                        </p>
                    </div>
                </div>
            </div>


            <div id="content" class="right">
                <h2>Welcome to Floral Shop</h2>
                <p>Floral Shop is free website template by templatemo. Sed in suscipit risus, eget consectetur justo.
                    Praesent lacinia, nisi quis commodo consectetur, diam magna laoreet felis, a pulvinar mauris enim in
                    felis. Phasellus in mauris velit. In pellentesque massa in nisl auctor pellentesque. Donec fermentum
                    convallis purus, id luctus nulla tempus in. Aliquam diam nibh, consectetur quis fringilla facilisis,
                    egestas sed odio. Validate <a href="http://validator.w3.org/check?uri=referer"
                        rel="nofollow"><strong>XHTML</strong></a> &amp; <a
                        href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>

                <div class="product_box">
                    <a href="/productdetail"><img src="images/product/01.jpg" alt="floral set 1" /></a>
                    <h3>Ut eu feugiat</h3>
                    <p class="product_price">$240</p>
                    <p class="add_to_cart">
                        <a href="/productdetail">Detail</a>
                        <a href="/shoppingcart">Add to Cart</a>
                    </p>
                </div>
                <div class="product_box">
                    <a href="/productdetail"><img src="images/product/02.jpg" alt="flowers 2" /></a>
                    <h3>Donec Est Nisi</h3>
                    <p class="product_price">$160</p>
                    <p class="add_to_cart">
                        <a href="/productdetail">Detail</a>
                        <a href="/shoppingcart">Add to Cart</a>
                    </p>
                </div>
                <div class="product_box">
                    <a href="/productdetail"><img src="images/product/03.jpg" alt="floral 3" /></a>
                    <h3>Tristique Vitae</h3>
                    <p class="product_price">$140</p>
                    <p class="add_to_cart">
                        <a href="productdetail.html">Detail</a>
                        <a href="shoppingcart.html">Add to Cart</a>
                    </p>
                </div>
                <div class="product_box no_margin_right">
                    <a href="/productdetail"><img src="images/product/04.jpg" alt="flowers 4" /></a>
                    <h3>Hendrerit Eu</h3>
                    <p class="product_price">$320</p>
                    <p class="add_to_cart">
                        <a href="/productdetail">Detail</a>
                        <a href="/shoppingcart">Add to Cart</a>
                    </p>
                </div>

                <div class="product_box">
                    <a href="/productdetail"><img src="images/product/05.jpg" alt="floral set 5" /></a>
                    <h3>Tincidunt Nisi</h3>
                    <p class="product_price">$150</p>
                    <p class="add_to_cart">
                        <a href="/productdetail">Detail</a>
                        <a href="/shoppingcart.html">Add to Cart</a>
                    </p>
                </div>
                <div class="product_box">
                    <a href="productdetail.html"><img src="images/product/07.jpg" alt="flowers 7" /></a>
                    <h3>Curabitur et turpis</h3>
                    <p class="product_price">$110</p>
                    <p class="add_to_cart">
                        <a href="productdetail.html">Detail</a>
                        <a href="shoppingcart.html">Add to Cart</a>
                    </p>
                </div>
                <div class="product_box">
                    <a href="productdetail.html"><img src="images/product/06.jpg" alt="flower set 6" /></a>
                    <h3>Mauris consectetur</h3>
                    <p class="product_price">$130</p>
                    <p class="add_to_cart">
                        <a href="productdetail.html">Detail</a>
                        <a href="shoppingcart.html">Add to Cart</a>
                    </p>
                </div>
                <div class="product_box no_margin_right">
                    <a href="productdetail.html"><img src="images/product/08.jpg" alt="floral 8" /></a>
                    <h3>Proin volutpat</h3>
                    <p class="product_price">$170</p>
                    <p class="add_to_cart">
                        <a href="productdetail.html">Detail</a>
                        <a href="shoppingcart.html">Add to Cart</a>
                    </p>
                </div>

                <div class="blank_box">
                    <a href="#"><img src="images/free_shipping.jpg" alt="Free Shipping" /></a>
                </div>
            </div>
            <div class="cleaner"></div>
        </div> <!-- END of main -->
    </div>
@endsection
