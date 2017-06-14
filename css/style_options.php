<?php
global $pmc_data; 
$use_bg = ''; $background = ''; $custom_bg = ''; $body_face = ''; $use_bg_full = ''; $bg_img = ''; $bg_prop = '';
if(isset($pmc_data['background_image_full'])) {
	$use_bg_full = $pmc_data['background_image_full'];
	
}
if(isset($pmc_data['use_boxed'])){
	$use_boxed = $pmc_data['use_boxed'];
}
else{
	$use_boxed = 0;
}
if($use_bg_full) {
	if($use_bg_full && isset($pmc_data['use_boxed']) && $pmc_data['use_boxed'] == 1) {
		$bg_img = $pmc_data['image_background'];
		$bg_prop = '';
	}
	
	
	$background = 'url('. $bg_img .') '.$bg_prop ;
}
function ieOpacity($opacityIn){
	
	$opacity = explode('.',$opacityIn);
	if($opacity[0] == 1)
		$opacity = 100;
	else
		$opacity = $opacity[1] * 10;
		
	return $opacity;
}
function HexToRGB($hex,$opacity) {
		$hex = preg_replace("/#/", "", $hex);
		$color = array();
 
		if(strlen($hex) == 3) {
			$color['r'] = hexdec(substr($hex, 0, 1) . $r);
			$color['g'] = hexdec(substr($hex, 1, 1) . $g);
			$color['b'] = hexdec(substr($hex, 2, 1) . $b);
		}
		else if(strlen($hex) == 6) {
			$color['r'] = hexdec(substr($hex, 0, 2));
			$color['g'] = hexdec(substr($hex, 2, 2));
			$color['b'] = hexdec(substr($hex, 4, 2));
		}
 
		return 'rgba('.$color['r'] .','.$color['g'].','.$color['b'].','.$opacity.')';
	}
	
		if(isset($pmc_data['google_menu_custom']) && $pmc_data['google_menu_custom'] != ''){
			$font_menu = $pmc_data['google_menu_custom'];
		}else{
			$font_menu = str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$pmc_data['menu_font']['face']))));
		}		

		if(isset($pmc_data['google_heading_custom']) && $pmc_data['google_heading_custom'] != ''){
			$font_heading = $pmc_data['google_heading_custom'];
		}else{
			$font_heading = str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$pmc_data['heading_font']['face']))));
		}

		if(isset($pmc_data['google_body_custom']) && $pmc_data['google_body_custom'] != ''){
			$font_body = $pmc_data['google_body_custom'];
		}else{
			$font_body = str_replace("%20"," ",str_replace(":300"," ",str_replace(":200"," ",str_replace(":400"," ",$pmc_data['body_font']['face']))));
		}					
	
?>
body {	 
	background:<?php echo $pmc_data['body_background_color'].' '.$background ?>  !important;
	color:<?php echo $pmc_data['body_font']['color']; ?>;
	font-family: <?php echo $font_body; ?>, "Helvetica Neue", Arial, Helvetica, Verdana, sans-serif;
	font-size: <?php echo $pmc_data['body_font']['size']; ?>;
	font-weight: normal;
	line-height: 1.7em;
}
::selection { background: <?php echo $pmc_data['mainColor']; ?>; color:#fff; text-shadow: none; }
h1,h2,h3,h4,h5,h6, .blogpostcategory .posted-date p, .team .title, .term-description p, .titleBottom, .about-us-block-left-title, .about-us-block-right-title,
.team .title{
	font-family: <?php echo $font_heading; ?> !important;
	<?php if(strpos($pmc_data['heading_font']['face'],'200')) {?>
		font-weight: 300;
	<?php } else { ?>
		font-weight: normal;
	<?php }  ?>
	line-height: 150%;
}
h1 { 	
	color:<?php echo $pmc_data['heading_font_h1']['color']; ?>;
	font-size: <?php echo $pmc_data['heading_font_h1']['size'] ?> !important;
	}
	
h2, .term-description p { 	
	color:<?php echo $pmc_data['heading_font_h2']['color']; ?>;
	font-size: <?php echo $pmc_data['heading_font_h2']['size'] ?> !important;
	}
h3 { 	
	color:<?php echo $pmc_data['heading_font_h3']['color']; ?>;
	font-size: <?php echo $pmc_data['heading_font_h3']['size'] ?> !important;
	}
h4 { 	
	color:<?php echo $pmc_data['heading_font_h4']['color']; ?>;
	font-size: <?php echo $pmc_data['heading_font_h4']['size'] ?> !important;
	}	
	
h5 { 	
	color:<?php echo $pmc_data['heading_font_h5']['color']; ?>;
	font-size: <?php echo $pmc_data['heading_font_h5']['size'] ?> !important;
	}	
h6 { 	
	color:<?php echo $pmc_data['heading_font_h6']['color']; ?>;
	font-size: <?php echo $pmc_data['heading_font_h6']['size'] ?> !important;
	}	
.menu > li a {font-family: <?php echo $font_menu; ?> !important;
			  font-size: <?php echo $pmc_data['menu_font']['size'] ?>;
			  font-weight:<?php echo $pmc_data['menu_font']['style'] ?>;
			  color:<?php echo $pmc_data['menu_font']['color'] ?>;
}
.menu-fixedmenu .menu > li > a {color:#fff;}
h2.title a {color:<?php echo $pmc_data['heading_font_h2']['color']; ?>;}
a, a:active, a:visited, .footer_widget .widget_links ul li a{color: <?php echo $pmc_data['body_link_coler']; ?>;}	
.widget_nav_menu ul li a  {color: <?php echo $pmc_data['body_link_coler']; ?>;}
a:hover, h2.title a:hover, .item3 h3:hover,  .item3 h3 a:hover, #portitems2 h3 a:hover {color: <?php echo $pmc_data['mainColor']; ?>;}
.product-remove a:hover {color: <?php echo $pmc_data['mainColor']; ?> !important;}
/* ***********************
--------------------------------------
------------MAIN COLOR----------
--------------------------------------
*********************** */
.accordion .ui-state-default {color:#333;}
a:hover, span,  .one_fourth h3:hover, .homerecent .productR .recentCart a:hover, .aq-block-aq_article_block a, .copyright a,
 .testimonial-texts i, .the-title a:hover, .date-post a, .block-post-author a, .blogpostcategory .post-meta a, .singledefult .meta a, .content ol.commentlist li .reply a,
.comment-author .commentsDate, .single-portfolio-skils i, .rightContentSP .single_add_to_cart_button:hover, .homerecent.productRH h3:hover, .current-menu-item a, 
.ui-tabs .ui-tabs-nav li.ui-tabs-active a, .aq-block-aq_twitter_block a, .pmc-count i, em a, .topNotification i, .aq-posts-block .date-post, 
.textwidget i, .prebuild-contact .textwidget i, .pagewrap a:hover, .respMenu i,.respMenu a i, span.pmcmenutitleimage:hover, #headerwrap.pmc_menu_transparent .menu > li > a:hover,
#footer .widgett a:hover, .pmc-count-icon i, .accordion .ui-state-default:hover, .ui-widget-header .ui-state-default:hover, .accordion .ui-state-active, .ui-state-hover, .top-nav li a:hover,
.woocommerce ul.products li.product h3:hover, .woocommerce-page ul.products li.product h3:hover, .summary.entry-summary .woocommerce-review-link:hover .count, .price ins, .woocommerce del,
.woocommerce div.product .stock, .woocommerce #content div.product .stock, .woocommerce-page div.product .stock, .woocommerce-page #content div.product .stock
{
	color:<?php echo $pmc_data['mainColor']; ?>;
}
.menu-fixedmenu .current-menu-item > a {color:#fff !important;}
.menu > li a:hover, .current-menu-item > a, .testimonial-light .testimonial-author .author span,  .menu > li > a.important_color,.menu .current-menu-item > a, .menu-fixedmenu li li.current-menu-item a,
.mainwrap.smallheader .topNotification-content:hover i,.woocommerce table.cart a.remove:hover, .woocommerce #content table.cart a.remove:hover, .woocommerce-page table.cart a.remove:hover, .woocommerce-page #content table.cart a.remove:hover,
.woocommerce form .form-row .required, .woocommerce-page form .form-row .required, .price del,.cartTopDetails .product_list_widget li a:hover, .accordion .ui-state-active, .accordion .ui-state-default:hover
{color:<?php echo $pmc_data['mainColor']; ?> !important;}
/* ***********************
--------------------------------------
------------WHITE COLOR----------
--------------------------------------
*********************** */
.widget_tag_cloud a, .widget_product_tag_cloud a, .errorpage, .errorpage h2{
	color:#fff;
}
 
 
/* ***********************
--------------------------------------
------------BACKGROUND MAIN COLOR----------
--------------------------------------
*********************** */
.top-cart,  .onsale, .add_to_wishlist, .yith-wcwl-wishlistexistsbrowse, .yith-wcwl-wishlistaddedbrowse, .titleborderh2:after, .titleborderh2:before, .aq-block-aq_contact_block .wpcf7-submit,
.widget_tag_cloud a:hover, .widget_product_tag_cloud a, .menu .pmcbig ul.sub-menu li li:hover a:before, .menu ul.sub-menu li li:hover a:before,.menu ul li:hover a:before,
.aq-posts-block .holder-date, .aq-posts-block .recentdescription-text, .widget_price_filter .ui-slider .ui-slider-handle, .widget_price_filter .ui-widget-content,
.related .one_fourth .image img:hover, #commentform #respond #commentform input#submit:hover, #respond #commentform input#submit:hover,  
.portnavigation  .portprev:hover, .portnavigation  .portnext:hover, 
a.button, input.button, button.button, .place-order .button, .aq-pricetable-wrapper li.aq-pricetable-title h3.title, .errorpage, .aq-block-aq_twitter_block .intent-meta a,
.pmc-icon .pmc-icon-icon, .ih-item.square.effect9 .info h3, .tp-bullets.simplebullets.round .bullet.selected, .tp-bullets.simplebullets.round .bullet:hover,
.catlinkhover, .catlink:hover, .testimonial-texts i, .wp-pagenavi .current, .wp-pagenavi a:link:hover, .blogpostcategory .blogmore,
.wp-pagenavi span.current, .wp-pagenavi a:hover, .blogpost .datecomment .link a,  .aq-posts-block .post-icon:after, .singledefult .post-icon, .blogpostcategory .post-icon,
.closehomeshow-portfolio, .closehomeshow-post,.aq-block-aq_blog_page_block .masonry_pmc .masonry-blog-link, .contact-opus-button a:hover,.store-opus-button a:hover, .mainwrap:hover .titleborderOut .titleborder:after,
.accordion .ui-state-default:hover i, .accordion .ui-state-active i, .testimonial-light .testimonials .bx-prev:hover, .testimonial-light .testimonials .bx-next:hover, .catlink:before,
 .builder-social a, .woocommerce ul.products li.product .onsale, .woocommerce-page ul.products li.product .onsale
  {
	background:<?php echo $pmc_data['mainColor']; ?> ;
}

.catlinkhover:before, .catlink:hover:before {background:#fff;} 


/* WOOCOMMERCE BUTTONS BACKGROUND */
.woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit, .woocommerce #content input.button, .woocommerce-page a.button, .woocommerce-page button.button, 
.woocommerce-page input.button, .woocommerce-page #respond input#submit, .woocommerce-page #content input.button, .woocommerce-tabs ul.tabs  li.active, .woocommerce-tabs ul.tabs  li:hover, .woocommerce span.onsale, 
.woocommerce-page span.onsale, .widget_product_tag_cloud a:hover, .ui-widget-header .ui-state-default:hover
{background:<?php echo $pmc_data['mainColor']; ?> !important;}

.woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce #content input.button:hover, 
.woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce-page input.button:hover, .woocommerce-page #respond input#submit:hover, 
.woocommerce-page #content input.button:hover{background:#333 !important;}

 .woocommerce a.added_to_cart:hover, .woocommerce-page a.added_to_cart:hover{background:<?php echo $pmc_data['mainColor']; ?> !important;}   
 
 
.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, .catlinkhover, .mainwrap.smallheader   .social-notification a img:hover,
.tp-caption.store_button a, .darker .aq-block-aq_contact_block .wpcf7-submit, .aq-block-aq_clear_block .line-cherry::after{background:<?php echo $pmc_data['mainColor']; ?> !important;}
.blogpost .datecomment .link a:hover, .aq-posts-block .post-icon, .singledefult .post-icon:after, .blogpostcategory .post-icon:after {background:<?php echo $pmc_data['gradient_color']; ?>}
.tp-caption.store_button a:hover{background:<?php echo $pmc_data['gradient_color'] ?> !important;}
/* JUST BACKGROUND COLOR */
.bx-next:hover, .bx-prev:hover, .gototop, .woocommerce .button:hover, .postcontent.port .blogsingleimage .nextbutton.port, .postcontent.port .blogsingleimage .prevbutton.port,
mark, .homerecent.SP .bx-next:hover, .homerecent.SP .bx-prev:hover{
	background-color:<?php echo $pmc_data['mainColor']; ?> ;
}
/* TRANSPARENT BACKGROUND COLOR */
.homerecent .recentimage .overdefult, .video-button a, .pmc-image .info, .down-button a:hover, .social-menu .pmc-menu-social a:hover, .projectdetails a.bx-prev, .projectdetails a.bx-next{
	background:<?php echo HexToRGB($pmc_data['mainColor'], 0.85)?>;
}

.pmc-icon-icon.big.top:after {border-top: 10px solid <?php echo $pmc_data['mainColor']; ?> !important;}
.blogpostcategory .overdefultlink{background: <?php echo HexToRGB($pmc_data['mainColor'], 0.8); ?> url(images/plusIcon.png) no-repeat 370px 215px !important;}
.mini-blog .blogpostcategory .overdefultlink {background: <?php echo HexToRGB($pmc_data['mainColor'], 0.8); ?> url(images/plusIcon.png) no-repeat 170px 93px !important;}
.pmc-count:hover .pmc-count-number-border {width:100px;background:<?php echo $pmc_data['mainColor']; ?>;}
.pmc-icon:hover .pmc-icon-border, .pmc-icon-simple .pmc-icon-border {width:120px;background:<?php echo $pmc_data['mainColor']; ?>;}
.one_fifth.categories {border-bottom:2px solid<?php echo $pmc_data['mainColor']; ?>;}
.widget:hover .widget-line {border-bottom:2px solid<?php echo $pmc_data['mainColor']; ?>;}
.product .thumbnails img:hover {border:4px solid<?php echo $pmc_data['mainColor']; ?>;}
.gototop, .blogpostcategory .blogmore, .blogpost .datecomment .link a {border-bottom:4px solid<?php echo $pmc_data['gradient_color']; ?>;}
.rightContentSP .single_add_to_cart_button:hover, .contact-opus-button a:hover, .builder-social a {border:2px solid <?php echo $pmc_data['mainColor']; ?>;}
.catlink:hover, .catlinkhover {border:1px solid <?php echo $pmc_data['mainColor']; ?>;}
.pmc-quote:hover {border-left:4px solid <?php echo $pmc_data['mainColor']; ?> !important;}
.team .image img {border-bottom:5px solid <?php echo $pmc_data['mainColor']; ?> !important;}
.blogpost .datecomment .link a:hover, .tp-caption.store_button a:hover {border-bottom:4px solid <?php echo $pmc_data['mainColor']; ?> !important;}
 .aq-block-aq_contact_block .wpcf7-submit, .tp-caption.store_button a {border-bottom:4px solid<?php echo $pmc_data['gradient_color']; ?>;}
.team .title {border-bottom:1px solid<?php echo $pmc_data['mainColor']; ?>;}
.testimonial-texts i {border-bottom:4px solid<?php echo $pmc_data['gradient_color']; ?>;border-right:3px solid<?php echo $pmc_data['gradient_color']; ?>;border-left:3px solid<?php echo $pmc_data['gradient_color']; ?>;border-top:2px solid<?php echo $pmc_data['gradient_color']; ?>;}
/* ***********************
--------------------------------------
------------MENU----------
--------------------------------------
*********************** */
.menu li li a:hover{color:<?php echo $pmc_data['mainColor']; ?> !important;}



.menu li ul {border-top: 2px solid <?php echo $pmc_data['mainColor']; ?>;}
.menu li:hover ul {border-top: 2px solid <?php echo $pmc_data['mainColor']; ?>;}
.menu ul li a:before, .menu .pmcbig ul.sub-menu li li a:before {border: 2px solid <?php echo $pmc_data['mainColor']; ?>;}
#footer .menu a.important_color {border-bottom:none;}
/* ***********************
--------------------------------------
------------EXTRA TYPOGRAPHY----------
--------------------------------------
*********************** */
.item4 h3 a, .boxdescwraper h2,.socialfooter h3,  #portitems2 h3, #respond #commentform input,.widget_search form div input,
.content ol.commentlist li .comment-author .fn a, .projectdescription h2, .menu ul.sub-menu li a, .menu ul.children li a,.homerecent .productR h3,#remove a, .remove h2,
.widget_price_filter  .price_slider_amount .button, .place-order .button, .widget_login .submitbutton, .rightContentSP .single_add_to_cart_button, .button,
.aq-block-aq_contact_block .wpcf7-submit, .wttitle h4 a, .related h4 a, .accordion h3, .ui-widget, .question h3, .success h3, .info h3, .error h3,
.home.page .aq-block-aq_contact_block textarea, .home.page .aq-block-aq_contact_block input, .aq-block-aq_contact_block .wpcf7-submit
{ font-family: <?php echo $font_body; ?>, "Helvetica Neue", Arial, Helvetica, Verdana, sans-serif !important;}
 
 
.aq-posts-block .widget h3,.infotext-title-small,
 .holder-date{
	font-family: <?php echo $font_heading; ?> !important;
	<?php if(strpos($pmc_data['heading_font']['face'],'200')) {?>
		font-weight: 300;
	<?php } else { ?>
		font-weight: normal;
	<?php }  ?>
	line-height: 110%;}
.woocommerce-billing-fields span, .recentPrice del .amount, .recentPrice del, .total.top span {color:#121212;}

.woocommerce .quantity .plus:hover, .woocommerce #content .quantity .plus:hover, .woocommerce-page .quantity .plus:hover, .woocommerce-page #content .quantity .plus:hover,
.woocommerce .quantity .minus:hover, .woocommerce #content .quantity .minus:hover, .woocommerce-page .quantity .minus:hover, .woocommerce-page #content .quantity .minus:hover {background:<?php echo $pmc_data['mainColor']; ?> !important;}

 /* ***********************
--------------------------------------
------------BOXED---------------------
-----------------------------------*/
<?php if($use_boxed == 0 &&  isset($pmc_data['use_background']) && $pmc_data['use_background'] == 1){ ?>
	body, .cf, .mainwrap, .post-full-width, .titleborderh2, .sidebar  {
	background:<?php echo $pmc_data['body_background_color'].' '.$background ?>  !important; 
	}
	
<?php	} ?>
 <?php if(isset($pmc_data['use_boxed']) &&  $use_boxed == 1){ ?>
header,.outerpagewrap{background:none !important;}
header,.outerpagewrap,.mainwrap{background-color:<?php echo $pmc_data['body_background_color'] ?> ;}
@media screen and (min-width:1240px){
body {width:1240px !important;margin:0 auto !important;}
.top-nav ul{margin-right: -21px !important;}
.mainwrap.shop {float:none;}
.pagenav.fixedmenu { width: 1240px !important;}
.bottom-support-tab,.totop{right:5px;}
<?php if($use_bg_full){ ?>
	body {
	background:<?php echo $pmc_data['body_background_color'].' '.$background ?>  !important; 
	background-attachment:fixed !important;
	background-size:cover !important; 
	}	
<?php	} ?>
 <?php if(!$use_bg_full){ ?>
	body {
	background:<?php echo $pmc_data['body_background_color'].' '.$background ?>  !important; 
	}
	
<?php	} ?>	
}
<?php } ?>
 
 

/* ***********************
--------------------------------------
------------CUSTOM CSS----------
--------------------------------------
*********************** */
<?php echo pmc_stripText($pmc_data['custom_style']) ?>
