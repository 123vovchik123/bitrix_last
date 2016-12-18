<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 18.12.2016
 * Time: 11:11
 */
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Loc::loadMessages(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    
    <?$APPLICATION->ShowHead();?>

    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/templatemo_style.css");?>

    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/ddsmoothmenu.css");?>

    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.min.js", true);?>
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/ddsmoothmenu.js", true);?>

    <script type="text/javascript">

        ddsmoothmenu.init({
            mainmenuid: "templatemo_menu", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })

    </script>

    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/styles.css");?>

    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/scripts/mootools-1.2.1-core.js", true);?>
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/scripts/mootools-1.2-more.js", true);?>
    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/scripts/slideitmoo-1.1.js", true);?>

    <script language="javascript" type="text/javascript">
        window.addEvents({
            'domready': function(){
                /* thumbnails example , div containers */
                new SlideItMoo({
                    overallContainer: 'SlideItMoo_outer',
                    elementScrolled: 'SlideItMoo_inner',
                    thumbsContainer: 'SlideItMoo_items',
                    itemsVisible: 5,
                    elemsSlide: 2,
                    duration: 200,
                    itemsSelector: '.SlideItMoo_element',
                    itemWidth: 171,
                    showControls:1});
            },

        });

        function clearText(field)
        {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
    </script>

</head>

<body id="home">
<?$APPLICATION->ShowPanel();?>

<div id="templatemo_wrapper">
    <div id="templatemo_header">
        <div id="site_title"><h1><a href="http://www.templatemo.com">Free CSS Templates</a></h1></div>

        <div id="header_right">
            <ul id="language">
                <li><a><img src="<?=SITE_TEMPLATE_PATH;?>/images/usa.png" alt="English" /></a></li>
                <li><a><img src="<?=SITE_TEMPLATE_PATH;?>/images/china.png" alt="Chinese" /></a></li>
                <li><a><img src="<?=SITE_TEMPLATE_PATH;?>/images/germany.png" alt="Germany" /></a></li>
                <li><a><img src="<?=SITE_TEMPLATE_PATH;?>/images/india.png" alt="Indian" /></a></li>
            </ul>
            <div class="cleaner"></div>
            <div id="templatemo_search">
                <form action="#" method="get">
                    <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                    <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
        </div> <!-- END -->
    </div> <!-- END of header -->

    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.html" class="selected">Home</a></li>
            <li><a href="products.html">Products</a>
                <ul>
                    <li><a href="#">Sub menu 1</a></li>
                    <li><a href="#">Sub menu 2</a></li>
                    <li><a href="#">Sub menu 3</a></li>
                </ul>
            </li>
            <li><a href="about.html">About</a>
                <ul>
                    <li><a href="#">Sub menu 1</a></li>
                    <li><a href="#">Sub menu 2</a></li>
                    <li><a href="#">Sub menu 3</a></li>
                    <li><a href="#">Sub menu 4</a></li>
                    <li><a href="#">Sub menu 5</a></li>
                </ul>
            </li>
            <li><a href="faqs.html">FAQs</a></li>
            <li><a href="checkout.html">Checkout</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->

    <div id="templatemo_middle">
        <img src="<?=SITE_TEMPLATE_PATH;?>/images/templatemo_image_01.png" alt="Image 01" />
        <h1>Introducing Web Store</h1>
        <p><a href="http://www.templatemo.com" target="_parent">Web Store</a> is a free css template for your personal or commercial websites. Feel free to download, edit and use this template for any purpose.</p>
        <a href="#" class="buy_now">Browse All Products</a>
    </div> <!-- END of middle -->

    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
        <div id="product_slider">
            <div id="SlideItMoo_outer">
                <div id="SlideItMoo_inner">
                    <div id="SlideItMoo_items">
                        <div class="SlideItMoo_element">
                            <a href="http://www.templatemo.com/page/1" target="_parent">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/images/gallery/01.jpg" alt="product 1" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                            <a href="http://www.templatemo.com/page/2" target="_parent">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/images/gallery/02.jpg" alt="product 2" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                            <a href="http://www.templatemo.com/page/3" target="_parent">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/images/gallery/03.jpg" alt="product 3" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                            <a href="http://www.templatemo.com/page/4" target="_parent">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/images/gallery/04.jpg" alt="product 4" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                            <a href="http://www.templatemo.com/page/5" target="_parent">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/images/gallery/05.jpg" alt="product 5" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                            <a href="http://www.templatemo.com/page/6" target="_parent">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/images/gallery/06.jpg" alt="product 6" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                            <a href="http://www.templatemo.com/page/6" target="_parent">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/images/gallery/07.jpg" alt="product 7" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cleaner"></div>
        </div>

        <!--<div id="sidebar">
            <h3>Categories</h3>
            <ul class="sidebar_menu">
                <li><a href="#">Aenean et dolor diam</a></li>
                <li><a href="#">Aenean pulvinar</a></li>
                <li><a href="#">Cras bibendum auctor</a></li>
                <li><a href="#">Donec sodales bibendum</a></li>
                <li><a href="#">Etiam in tellus</a></li>
                <li><a href="#">Hendrerit justo</a></li>
                <li><a href="#">Integer interdum</a></li>
                <li><a href="#">Maecenas a diam</a></li>
                <li><a href="#">Nullam in semper</a></li>
                <li><a href="#">Posuere in commodo</a></li>
                <li><a href="#">Tincidunt leo</a></li>
                <li><a href="#">Vestibulum blandit</a></li>
            </ul>
            <h3>Newsletter</h3>
            <p>Praesent aliquam mi id tellus pretium pulvinar in vel ligula.</p>
            <div id="newsletter">
                <form action="#" method="get">
                    <input type="text" value="Subscribe" name="email_newsletter" id="email_newsletter" title="email_newsletter" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                    <input type="submit" name="subscribe" value="Subscribe" alt="Subscribe" id="subscribebtn" title="Subscribe" class="subscribebtn"  />
                </form>
                <div class="cleaner"></div>
            </div>
        </div> <!-- END of sidebar -->
