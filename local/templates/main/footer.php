<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Date: 18.12.2016
 * Time: 11:12
 */
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<div class="cleaner"></div>
</div> <!-- END of main -->

<div id="templatemo_footer">
    <div class="col col_16">
        <h4>Categories</h4>
        <ul class="footer_menu">
            <li><a href="#">Aenean et dolor diam</a></li>
            <li><a href="#">Aenean pulvinar</a></li>
            <li><a href="#">Cras bibendum auctor</a></li>
            <li><a href="#">Donec sodales bibendum</a></li>
        </ul>
    </div>
    <div class="col col_16">
        <h4>Pages</h4>
        <ul class="footer_menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Shipping</a></li>
            <li><a href="#">Privacy</a></li>
        </ul>
    </div>
    <div class="col col_16">
        <h4>Partners</h4>
        <ul class="footer_menu">
            <li><a href="http://www.flashmo.com/">Free Flash Templates</a></li>
            <li><a href="http://www.templatemo.com/">Free CSS Templates</a></li>
            <li><a href="http://www.koflash.com/">Website Gallery</a></li>
            <li><a href="http://www.webdesignmo.com/blog/">Web Design Resources</a></li>
        </ul>
    </div>
    <div class="col col_16">
        <h4>Social</h4>
        <ul class="footer_menu">
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Youtube</a></li>
            <li><a href="#">LinkedIn</a></li>
        </ul>
    </div>
    <div class="col col_13 no_margin_right">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper quam sit amet turpis rhoncus id venenatis tellus sollicitudin. Fusce ullamcorper, dolor non mollis pulvinar, turpis tortor commodo nisl. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
    </div>

    <div class="cleaner h40"></div>
    <h2><span>Contact</span></h2>
    <b><?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "COMPONENT_TEMPLATE" => ".default",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => SITE_TEMPLATE_PATH."/include_areas/email.php"
            )
        );?>
    </b>
    <b><?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "COMPONENT_TEMPLATE" => ".default",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => SITE_TEMPLATE_PATH."/include_areas/phone.php"
            )
        );?>
    </b>
</div> <!-- END of footer -->

</div>

</body>
</html>