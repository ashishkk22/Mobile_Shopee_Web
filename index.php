<?php
    ob_start();
  //include header php file
include('header.php');
?>

<?php
//include banner area
include ('Template/_banner-area.php');
//!include banner area
//include top sale
include ('Template/_top-sale.php');
//!include top sale
//include special price
include ('Template/_special-price.php');
//!include special price
//include banner ads
include ('Template/_banner-ads.php');
//!include banner ads
//include new phone
include ('Template/_new-phone.php');
//!include new phone
//include blogs
include ('Template/_blogs.php');
//!include blogs
?>

<?php
//include footer php file
include('footer.php');
?>