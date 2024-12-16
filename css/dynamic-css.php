<?php global $themesbazar; ?>

<style>

body {
	font-size: <?php echo $themesbazar['body-font']['font-size']?>;
	width:100%;
	font-family: SolaimanLipiNormal;
}
.date {
    text-align: center;
    padding: 20px 0px;
    font-size: <?php echo $themesbazar['header-font']['font-size']?>;
    font-weight: normal;
	color:<?php echo $themesbazar['header-font']['color']?>;
}
.scrool_1{
    padding:5px;
    font-size:17px;
    background:<?php echo $themesbazar['hscrool-background']?>;
    color:<?php echo $themesbazar['hscrool-font']['color']?>;
	text-align:<?php echo $themesbazar['hscrool-font']['text-align']?>;
    font-weight: 400;
}
.footer-scrool {
    position: fixed;
    background: aliceblue;
    color:<?php echo $themesbazar['fscrool-font']['color']?>;
    z-index: 99;
    overflow: hidden;
    bottom: 0;
    left: 0;
    right: 0;
}
.footer-scrool-1 {
    float: <?php echo $themesbazar['fscrool-font']['text-align']?>;
    width: 18%;
    background:<?php echo $themesbazar['fscrool-background']?>;
    padding: 6px;
    font-size: 18px;
}
.cat_title{
    display: block;
    margin-bottom:7px;
    background-color: #b0d2f4;
} 
.cat_title a{ 
    color:<?php echo $themesbazar['cat_one-title-font']['color']?>;
    font-weight:<?php echo $themesbazar['cat_one-title-font']['font-weight']?>;
    font-size: <?php echo $themesbazar['cat_one-title-font']['font-size']?>;
    text-decoration: none; 
    position:relative;
    display: inline-block; 
    margin: 0px 0 0 0 !important;
    background: <?php echo $themesbazar['cat_one-title-background']?>;
    padding:6px 10px;
}
.cat_title a:after{
    left: 100%;
    height: 0;
    width: 7px;
    position: absolute;
    top: 0;
    content: "";
    pointer-events: none;
    margin-left: 0;
    margin-top: 0;
    border-bottom: 35px solid <?php echo $themesbazar['cat_one-title-background']?>;
    border-right: 28px solid transparent;
}
.cat_title p{ 
    color:<?php echo $themesbazar['cat_one-title-font']['color']?>;
    font-weight:<?php echo $themesbazar['cat_one-title-font']['font-weight']?>;
    font-size: <?php echo $themesbazar['cat_one-title-font']['font-size']?>;
    text-decoration: none; 
    position:relative;
    display: inline-block; 
    margin: 0px 0 0 0 !important;
    background: <?php echo $themesbazar['cat_one-title-background']?>;
    padding:6px 10px;
}
.cat_title p:after{
    left: 100%;
    height: 0;
    width: 7px;
    position: absolute;
    top: 0;
    content: "";
    pointer-events: none;
    margin-left: 0;
    margin-top: 0;
    border-bottom: 35px solid <?php echo $themesbazar['cat_one-title-background']?>;
    border-right: 28px solid transparent;
}

.cat_title_two{
    background:#F0F0F0;
}
#pointer a{
    color:<?php echo $themesbazar['cat_two-title-font']['color']?>;
    font-weight:<?php echo $themesbazar['cat_two-title-font']['font-weight']?>;
    font-size: <?php echo $themesbazar['cat_two-title-font']['font-size']?>;
    text-decoration: none;
}

 #pointer {
    width: 180px;
    height: 40px;
    position: relative;
    background: <?php echo $themesbazar['cat_two-title-background']?>;
    padding-top:8px;
    padding-left:10px;
    margin:0;
	color:<?php echo $themesbazar['cat_two-title-font']['color']?>;
    font-weight:<?php echo $themesbazar['cat_two-title-font']['font-weight']?>;
    font-size: <?php echo $themesbazar['cat_two-title-font']['font-size']?>;
    margin-bottom:5px;
    margin-top:10px;
  }
 #pointer:after {     
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 0 white;
  }
#pointer:before {
    content: "";
    position: absolute;
    right: -20px;
    bottom: 0;
    width: 0;
    height: 0;
    border-left: 20px solid <?php echo $themesbazar['cat_two-title-background']?>;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
  }
.cat_title_three{
	color:<?php echo $themesbazar['cat_three-title-font']['color']?>;
    font-weight:<?php echo $themesbazar['cat_three-title-font']['font-weight']?>;
    font-size: <?php echo $themesbazar['cat_three-title-font']['font-size']?>;
	background:<?php echo $themesbazar['cat_three-title-background']?>;
	border-left:4px solid#B30F0F;
	padding:5px;
	margin-bottom:7px;
}
.cat_title_three a{
	color:<?php echo $themesbazar['cat_three-title-font']['color']?>;
    font-weight:<?php echo $themesbazar['cat_three-title-font']['font-weight']?>;
    font-size: <?php echo $themesbazar['cat_three-title-font']['font-size']?>;
}
.cat_title_four{
    background-color:  #006699;
    padding: 7px;
    border-radius: 5px 5px 0px 0px;
    margin-top: 7px;
    margin-bottom: 5px;
    color:<?php echo $themesbazar['cat_four-title-font']['color']?>;
    font-weight:<?php echo $themesbazar['cat_four-title-font']['font-weight']?>;
    font-size: <?php echo $themesbazar['cat_four-title-font']['font-size']?>;
}
.cat_title_four span a{
    color:<?php echo $themesbazar['cat_four-title-font']['color']?>;
    font-weight:<?php echo $themesbazar['cat_four-title-font']['font-weight']?>;
    font-size: <?php echo $themesbazar['cat_four-title-font']['font-size']?>;
    text-decoration: none;
    background: <?php echo $themesbazar['cat_four-title-background']?>;
    border-radius: 0px 50px 0px 0px;
    padding: 7px 20px 7px 10px;
}
.cat_title_four span {
    color:<?php echo $themesbazar['cat_four-title-font']['color']?>;
    font-weight:<?php echo $themesbazar['cat_four-title-font']['font-weight']?>;
    font-size: <?php echo $themesbazar['cat_four-title-font']['font-size']?>;
    text-decoration: none;
    background: <?php echo $themesbazar['cat_four-title-background']?>;
    border-radius: 0px 50px 0px 0px;
    padding: 7px 20px 7px 10px;
}
.fixed_cat_title{
    padding:7px;
    border-bottom:1px solid<?php echo $themesbazar['fixed_cat-title-background']?>;
    margin-bottom: 7px;
}
.fixed_cat_title span{
    background:<?php echo $themesbazar['fixed_cat-title-background']?>;
    padding:8px 20px;
    margin-left:-7px;
    font-size:<?php echo $themesbazar['fixed_cat-title-font']['font-size']?>;
}
.fixed_cat_title span2{
    padding:8px 8px 0 0;
    margin-right:-10px;
    margin-top: -7px;
    float:right;
    font-size:<?php echo $themesbazar['fixed_cat-title-font']['font-size']?>;
}
.fixed_cat_title a{
    color:<?php echo $themesbazar['fixed_cat-title-font']['color']?>;
}
.fixed_cat_title span2 a{ 
    color:#489DDE; 
    padding-left: 20px;
    border-left: 3px solid#FE0101;  
}



.overly_hadding_1 {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.2); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  padding:10px;
  margin:0;
}
.overly_hadding_1 a {
    text-decoration:none;
    font-size:<?php echo $themesbazar['top-heading-01-font']['font-size']?>;
	line-height:<?php echo $themesbazar['top-heading-01-font']['line-height']?>;
	font-weight:<?php echo $themesbazar['top-heading-01-font']['font-weight']?>;
    color:<?php echo $themesbazar['top-heading-01-font']['color']?>;
}
.overly_hadding_1 a:hover {
    color: #F9FF06
}

.Name .overly_hadding_1 {
  opacity: 1;
}

.overly_hadding_2 {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.2); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  padding: 10px;
  margin:0;
}
.overly_hadding_2 a {
    text-decoration:none;
    font-size:<?php echo $themesbazar['top-heading-02-font']['font-size']?>;
	line-height:<?php echo $themesbazar['top-heading-02-font']['line-height']?>;
	font-weight:<?php echo $themesbazar['top-heading-02-font']['font-weight']?>;
    color:<?php echo $themesbazar['top-heading-02-font']['color']?>;
}
.overly_hadding_2 a:hover {
    color: #F9FF06
}

.Name .overly_hadding_2 {
  opacity: 1;
}
.hadding_01{  
    padding: 3px 0px 5px 5px;
    margin: 0;
}
.hadding_01 a{
    font-size:<?php echo $themesbazar['heading-01-font']['font-size']?>;
	line-height:<?php echo $themesbazar['heading-01-font']['line-height']?>;
	font-weight:<?php echo $themesbazar['heading-01-font']['font-weight']?>;
    color:<?php echo $themesbazar['heading-01-font']['color']?>;
    text-decoration:none;
}
.hadding_01 a:hover{
    color:#960303;
}
.hadding_02{  
    padding-top:3px;
    padding-bottom:5px;
    margin: 0;
}
.hadding_02 a{
    font-size:<?php echo $themesbazar['heading-02-font']['font-size']?>;
	line-height:<?php echo $themesbazar['heading-02-font']['line-height']?>;
	font-weight:<?php echo $themesbazar['heading-02-font']['font-weight']?>;
    color:<?php echo $themesbazar['heading-02-font']['color']?>;
    text-decoration:none;
}
.hadding_02 a:hover{
    color:#020257;
}

.hadding_03{  
    padding-right: 3px;
    padding-left: 6px;
    padding-bottom:4px;
    margin: 0;
}
.hadding_03 a{
    font-size:<?php echo $themesbazar['heading-03-font']['font-size']?>;
	line-height:<?php echo $themesbazar['heading-03-font']['line-height']?>;
	font-weight:<?php echo $themesbazar['heading-03-font']['font-weight']?>;
    color:<?php echo $themesbazar['heading-03-font']['color']?>;
    text-decoration:none;
}
.hadding_03 a:hover{
    color:#FE0B05;
}

.more_news {
    float:right;
    margin-bottom: 3px;
}
.more_news a{
    display: inline-block;
    font-size:<?php echo $themesbazar['more-news']['font-size']?>;
	font-weight:<?php echo $themesbazar['more-news']['font-weight']?>;
    color:<?php echo $themesbazar['more-news']['color']?>;
    padding: 6px 20px;
    border-radius: 50px;
    transition: .3s;
    margin-top: 2px;
    text-decoration: none;
  }
.more_news a:hover{
    color: #049D0F;
    transition: .7s;
  }

.facebook_title{
	font-size:<?php echo $themesbazar['widget-font']['font-size']?>;
	font-weight:<?php echo $themesbazar['widget-font']['font-weight']?>;
    color:<?php echo $themesbazar['widget-font']['color']?>;
	background:<?php echo $themesbazar['widget-background']?>;
	border-left:4px solid#B30F0F;
	padding:5px;
	margin-bottom:7px;
}
.archive_calender_sec {
	margin: 8px 0px;
	overflow: hidden;
}
.archive_title{
	font-size:<?php echo $themesbazar['widget-font']['font-size']?>;
	font-weight:<?php echo $themesbazar['widget-font']['font-weight']?>;
    color:<?php echo $themesbazar['widget-font']['color']?>;
	background:<?php echo $themesbazar['widget-background']?>;
	border-left:4px solid#B30F0F;
	padding:5px;
	margin-bottom:7px;
}

.widget_area h3{
	font-size:<?php echo $themesbazar['widget-font']['font-size']?>;
	font-weight:<?php echo $themesbazar['widget-font']['font-weight']?>;
    color:<?php echo $themesbazar['widget-font']['color']?>;
	background:<?php echo $themesbazar['widget-background']?>;
	border-left:4px solid#B30F0F;
	padding:5px;
	margin-bottom:7px;
}

.footer_section{
    background: <?php echo $themesbazar['footer-color']?>;
    padding: 20px 0;
}
.footer-menu ul li a{
    color: <?php echo $themesbazar['footer-font']['color']?>;
    text-decoration: none;
}
.footer-border{
    border-bottom :1px solid <?php echo $themesbazar['footer-font']['color']?>;
    padding-top: 10px;
    margin-bottom: 10px;
}
.menu-border{
    border-right: 1px solid <?php echo $themesbazar['footer-font']['color']?>;
}

.editorial-text{
    font-size: 17px;
    color: <?php echo $themesbazar['footer-font']['color']?>;
    text-align: right; 
}
.address-text{
    text-align: left;
    font-size: 17px;
    color: <?php echo $themesbazar['footer-font']['color']?>; 
}
.root{
    padding: 10px 10px;
    background-color: <?php echo $themesbazar['footer-color_02']?>;
    margin-bottom: 35px;
}
.root_01{
    font-size: 16px;
    color: <?php echo $themesbazar['root-font']['color']?>;
}
.root_02 {
    font-size: 16px;
    color: <?php echo $themesbazar['root-font']['color']?>;
    text-align: right;
}

.scrollToTop{
    width:40px; 
    height:40px;
    padding:10px;  
    background: transparent;
    position:fixed;
    right:25px;
    bottom:70px;
    border-radius: 50%;
    z-index: 999;
    border: 2px solid<?php echo $themesbazar['menu-background']?>;
}
.scrollToTop i.fa {
    font-size: 35px;
    color: <?php echo $themesbazar['menu-background']?>;
    font-weight: 400;
    top: -2px;
    display: block;
    position: absolute;
    right: 7px;
}

.menu_section{
    background: <?php echo $themesbazar['menu-background']?>;
    box-shadow: 0 0 10px #dddbdb;
    z-index: 999999;
}
.menu_bottom { 
    background: <?php echo $themesbazar['menu-background']?>;
 }
.menu_area .menu_bottom .mainmenu a , .navbar-default .navbar-nav > li > a {
    font-size: <?php echo $themesbazar['menu-font']['font-size']?>;
    color: <?php echo $themesbazar['menu-font']['color']?>;
    text-transform: capitalize;
    padding: 12px 14px;
    border-right:1px solid<?php echo $themesbazar['search-background']?>;
}

.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, 
.navbar-default .navbar-nav > .active > a:focus {
    color: #fff !important;
    margin: 0px;
    background-color: #9A1515;
}
.search-icon i {
    color: #fff;
    font-size: 20px;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    padding: 11px;
    -webkit-transition: all 0.8s;
    -moz-transition: all 0.8s;
    -o-transition: all 0.8s;
    -ms-transition: all 0.8s;
    transition: all 0.8s;
    background: <?php echo $themesbazar['search-background']?>;
}


</style>