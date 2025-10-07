<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Floral HTML CSS Template</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="templatemo_style.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />



    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/ddsmoothmenu.js">
        /***********************************************
         * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
         * This notice MUST stay intact for legal use
         * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
         ***********************************************/
    </script>

    <script type="text/javascript">
        ddsmoothmenu.init({
            mainmenuid: "templatemo_menu", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })

        function clearText(field) {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
    </script>

    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
    <script type="text/JavaScript" src="js/slimbox2.js"></script>


</head>

<body>
    <div id="templatemo_wrapper_sp">
        <div id="templatemo_header_wh">
            <div id="templatemo_header" class="header_home">
                <div id="site_title"><a href="#">Floral Shop</a></div>
                <div id="templatemo_menu" class="ddsmoothmenu">
                    <ul>
                        <li><a href="{{ url('/index') }}" class="selected">Home</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/products') }}">Products</a>
                            <ul>
                                <li><a href="#subpage1">Sub Page One</a></li>
                                <li><a href="#subpage2">Sub Page Two</a></li>
                                <li><a href="#subpage3">Sub Page Three</a></li>
                                <li><a href="#subpage4">Sub Page Four</a></li>
                                <li><a href="#subpage5">Sub Page Five</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/checkout') }}">Checkout</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li><a href="{{ url('/faqs') }}">FAQs</a></li>
                    </ul>
                    <div id="templatemo_search">
                        <form action="#" method="get">
                            <input type="text" value="Site Search" name="keyword" id="keyword" title="keyword"
                                onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                            <input type="submit" name="Search" value="" alt="Search" id="searchbutton"
                                title="Search" class="sub_btn" />
                        </form>
                    </div>
                    <br style="clear: left" />
                </div> <!-- end of templatemo_menu -->


            </div> <!-- END of header -->
        </div>

        @yield('content')


        <div id="templatemo_footer_wrapper">
            <div id="templatemo_footer">
                <div class="footer_left">
                    <a href="#"><img src="images/1311260370_paypal-straight.png" alt="Paypal" /></a>
                    <a href="#"><img src="images/1311260374_mastercard-straight.png" alt="Master" /></a>
                    <a href="#"><img src="images/1311260374_visa-straight.png" alt="Visa" /></a>
                </div>
                <div class="footer_right">
                    <p><a href="/index.html">Home</a> | <a href="user/products.blade.php">Products</a> | <a
                            href="/about.html">About</a> | <a href="user/faqs.blade.php">FAQs</a> | <a
                            href="/checkout.html">Checkout</a> | <a href="user/contact.blade.php">Contact</a></p>
                    <p>Copyright © 2084 <a href="#">Company Name</a></p>
                </div>
                <div class="cleaner"></div>
            </div> <!-- END of footer -->
        </div> <!-- END of footer wrapper -->




    </div>



</body>

</html>
