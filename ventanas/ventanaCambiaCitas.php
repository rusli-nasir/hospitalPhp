<?php require("/configuracion/ventanasEmergentes.php"); ?>
<style>
    

/*** ESSENTIAL STYLES ***/
.sf-menu, .sf-menu * {
	margin:			0;
	padding:		0;
	list-style:		none;
}
.sf-menu {
	line-height:	1.0;
}
.sf-menu ul {
	position:		absolute;
	top:			-999em;
	width:			10em; /* left offset of submenus need to match (see below) */
}
.sf-menu ul li {
	width:			100%;
}
.sf-menu li:hover {
	visibility:		inherit; /* fixes IE7 'sticky bug' */
}
.sf-menu li {
	float:			left;
	position:		relative;
}
.sf-menu a {
	display:		block;
	position:		relative;
}
.sf-menu li:hover ul,
.sf-menu li.sfHover ul {
	left:			0;
	top:			2.5em; /* match top ul list item height */
	z-index:		99;
}
ul.sf-menu li:hover li ul,
ul.sf-menu li.sfHover li ul {
	top:			-999em;
}
ul.sf-menu li li:hover ul,
ul.sf-menu li li.sfHover ul {
	left:			10em; /* match ul width */
	top:			0;
}
ul.sf-menu li li:hover li ul,
ul.sf-menu li li.sfHover li ul {
	top:			-999em;
}
ul.sf-menu li li li:hover ul,
ul.sf-menu li li li.sfHover ul {
	left:			10em; /* match ul width */
	top:			0;
}

/*** DEMO SKIN ***/
.sf-menu {
	float:			left;
	margin-bottom:	1em;
}
.sf-menu a {
	border-left:	1px solid #fff;
	border-top:		1px solid #CFDEFF;
	padding: 		.75em 1em;
	text-decoration:none;
}
.sf-menu a, .sf-menu a:visited  { /* visited pseudo selector so IE6 applies text colour*/
	color:			#13a;
}
.sf-menu li {
	background:		#BDD2FF;
}
.sf-menu li li {
	background:		#AABDE6;
}
.sf-menu li li li {
	background:		#9AAEDB;
}
.sf-menu li:hover, .sf-menu li.sfHover,
.sf-menu a:focus, .sf-menu a:hover, .sf-menu a:active {
	background:		#CFDEFF;
	outline:		0;
}

/*** arrows **/
.sf-menu a.sf-with-ul {
	padding-right: 	2.25em;
	min-width:		1px; /* trigger IE7 hasLayout so spans position accurately */
}
.sf-sub-indicator {
	position:		absolute;
	display:		block;
	right:			.75em;
	top:			1.05em; /* IE6 only */
	width:			10px;
	height:			10px;
	text-indent: 	-999em;
	overflow:		hidden;
	background:		url('../images/arrows-ffffff.png') no-repeat -10px -100px; /* 8-bit indexed alpha png. IE6 gets solid image only */
}
a > .sf-sub-indicator {  /* give all except IE6 the correct values */
	top:			.8em;
	background-position: 0 -100px; /* use translucent arrow for modern browsers*/
}
/* apply hovers to modern browsers */
a:focus > .sf-sub-indicator,
a:hover > .sf-sub-indicator,
a:active > .sf-sub-indicator,
li:hover > a > .sf-sub-indicator,
li.sfHover > a > .sf-sub-indicator {
	background-position: -10px -100px; /* arrow hovers for modern browsers*/
}

/* point right for anchors in subs */
.sf-menu ul .sf-sub-indicator { background-position:  -10px 0; }
.sf-menu ul a > .sf-sub-indicator { background-position:  0 0; }
/* apply hovers to modern browsers */
.sf-menu ul a:focus > .sf-sub-indicator,
.sf-menu ul a:hover > .sf-sub-indicator,
.sf-menu ul a:active > .sf-sub-indicator,
.sf-menu ul li:hover > a > .sf-sub-indicator,
.sf-menu ul li.sfHover > a > .sf-sub-indicator {
	background-position: -10px 0; /* arrow hovers for modern browsers*/
}

/*** shadows for all but IE6 ***/
.sf-shadow ul {
	background:	url('/sima/images/shadow.png') no-repeat bottom right;
	padding: 0 8px 9px 0;
	-moz-border-radius-bottomleft: 17px;
	-moz-border-radius-topright: 17px;
	-webkit-border-top-right-radius: 17px;
	-webkit-border-bottom-left-radius: 17px;
}
.sf-shadow ul.sf-shadow-off {
	background: transparent;
}
    
    
@media screen and (max-width:1009px)
{
	blockquote
	{
		padding-left: 23px;
		margin-bottom: 23px;
	}
	/* --- headers --- */
	h1
	{
		font-size: 24px;
	}
	h2
	{
		font-size: 22px;
	}
	h3
	{
		font-size: 16px;
	}
	h4
	{
		font-size: 14px;
	}
	h5
	{
		font-size: 12px;
	}
	.sentence
	{
		margin-top: 21px;
	}
	/* --- header --- */
	.header
	{
		width: 750px;
	}
	.header_left
	{
		width: 195px;
	}
	.header_left a img
	{
		margin-right: 10px;
	}
	.box_header.margin
	{
		margin-top: 21px;
	}
	/* --- menu --- */
	.sf-menu li
	{
		height: 39px;
		margin-left: 5px;
	}
	.sf-menu li a, .sf-menu li a:visited
	{
		padding: 12px 7px;
	}
	.sf-menu li ul
	{
		width: 174px;
	}
	.sf-menu li:hover ul, .sf-menu li.sfHover ul
	{
		top: 38px;
	}
	.sf-menu li ul li
	{
		padding: 0 7px;
	}
	.sf-menu li ul li a,
	.sf-menu li:hover ul a, .sf-menu li.submenu:hover ul a
	{
		padding: 12px 0;
	}
	.sf-menu li ul li a:hover, .sf-menu li ul li.selected a,
	.sf-menu li.submenu ul li a:hover, .sf-menu li.submenu:hover ul li.selected a,
	.sf-menu li.submenu:hover ul li.selected ul li a:hover, .sf-menu li.submenu:hover ul li ul li.selected a, .sf-menu li.submenu:hover ul li.selected ul li.selected a
	{
		padding-bottom: 11px;
	}
	ul.sf-menu li li:hover ul, ul.sf-menu li li.sfHover ul
	{
		left: 171px;
	}
	.sf-menu li.submenu.wide ul
	{
		width: 348px;
	}
	.sf-menu li ul.wide
	{
		width: 184px;
	}
	.sf-menu .timetable_submenu
	{
		margin-left: -264px;
	}
	/* --- page --- */
	.page
	{
		width: 750px;
		padding-bottom: 40px;
	}
	.page_left
	{
		width: 475px;
	}
	.page_right
	{
		width: 250px;
	}
	.page_margin_top
	{
		margin-top: 23px;
	}
	.page_margin_top_section
	{
		margin-top: 40px;
	}
	.top_hint
	{
		margin-top: -115px;
	}
	/* --- page header --- */
	.page_header
	{
		padding-bottom: 23px;
	}
	.page_header_left
	{
		width: 460px;
	}
	/* --- bread crumb --- */
	.bread_crumb
	{
		padding: 10px 0 0;
	}
	/* --- footer --- */
	.footer
	{
		width: 750px;
	}
	/* --- slider --- */
	.slider li
	{
		height: 520px;
		background-size: auto 520px;
		-moz-background-size: auto 418px;
		-webkit-background-size: auto 418px;
		-o-background-size: auto 418px;
	}
	.slider_content_box
	{
		margin-top: -488px;
		min-height: 286px;
	}
	.slider_content .subtitle
	{
		line-height: 120%;	
	}
	.slider_navigation .slider_control
	{
		height: 36px;
	}
	.slider_content h1
	{
		font-size: 56px;
	}
	/* --- home box --- */
	.home_box_container
	{
		margin-top: 0;
	}
	.home_box
	{
		width: 204px;
		padding: 20px 23px 23px;
	}
	.home_box .header_left
	{
		width: 142px;
	}
	.home_box .news
	{
		margin-top: 14px;
	}
	.home_box .more
	{
		margin-top: 15px;
	}
	/* --- items list --- */
	.items_list li
	{
		padding: 10px 0;
	}
	.items_list li.icon_clock_black:first-child
	{
		padding-top: 10px;
	}
	/* --- scrolling list --- */
	.scrolling_list_wrapper
	{
		margin-top: 12px;
	}
	.scrolling_list li
	{
		width: 232px;
	}
	.scrolling_list li .left
	{
		width: 195px;
	}
	.columns.full_width .scrolling_list li
	{
		width: 345px;
	}
	.columns.full_width .scrolling_list li .left
	{
		width: 308px;
	}
	/* --- blog --- */
	.blog.column_left,
	.blog.column_right
	{
		width: 475px;
	}
	.comment_box
	{
		margin-right: 23px;
	}
	.columns .comment_box
	{
		margin-bottom: 23px;
	}
	.post
	{
		margin-top: 23px;
	}
	.post_content
	{
		padding-bottom: 18px;
	}
	.post_content, .post_content a.post_image img, .post_content .gallery_box img
	{
		width: 367px;
	}
	.post_content a.post_image
	{
		margin-bottom: 23px;
	}
	.post_content h2
	{
		margin-bottom: 19px;
	}
	.post_footer
	{
		margin-top: 23px;
	}
	.columns .post_content a.post_image img,
	.columns .post_content
	{
		width: 475px;
	}
	/* --- comments --- */
	#comments_list li.comment
	{
		width: 367px;
	}
	#comments_list .comment_author_avatar
	{
		margin-right: 23px;
	}
	#comments_list li.comment, #comments_list .children
	{
		margin-top: 25px;
	}
	#comments_list .comment_details
	{
		width: 269px;
	}
	#comments_list .comment_details p
	{
		padding: 15px 0;
	}
	#comments_list .children li.comment
	{
		width: 332px;
	}
	#comments_list .children .comment_details
	{
		width: 232px;
	}
	/* --- comment form --- */
	.comment_form_container
	{
		margin-left: 108px;
	}
	.comment_form, .contact_form
	{
		margin-top: 23px;
	}
	.comment_form .left, .comment_form .right
	{
		width: 173px;
	}
	.contact_form .left, .contact_form .right
	{
		width: 227px;
	}
	.contact_form .right
	{
		margin-left: 20px;
	}
	.comment_form .text_input, .comment_form textarea
	{
		width: 137px;
	}
	.contact_form .text_input
	{
		width: 191px;
	}
	.contact_form textarea
	{
		width: 439px;
	}
	/* --- sidebar box --- */
	.sidebar_box
	{
		width: 250px;
		margin-top: 40px;
	}
	.sidebar_box .header_left, .footer_box.last .header_left
	{
		width: 188px;
	}
	.footer_box .header_left
	{
		width: 165px;
	}
	/* --- departments --- */
	.item_content .text
	{
		width: 155px;
	}
	.item_content .thumb_image,
	.features_image
	{
		margin-right: 23px;
	}
	.columns .item_content .text
	{
		width: 265px;
	}
	.accordion.wide .about_img
	{
		width: 372px;
		margin-bottom: 19px;
	}
	.accordion.medium .ui-accordion-content
	{
		padding: 23px 0;
	}
	.item_content,
	.page_margin_top.item_content:first-child
	{
		margin-top: 23px;
	}
	.accordion.wide .gallery_box img
	{
		width: 225px;
		height: 150px;
	}
	.accordion .doctors_list li.item
	{
		margin-top: 23px;
	}
	.accordion.wide .tabs_navigation
	{
		margin-bottom: 23px;
	}
	.accordion.wide .columns .info_list li .text
	{
		width: 135px;
	}
	/* --- tabs --- */
	.ui-tabs-panel p
	{
		padding: 20px 0 21px;
	}
	/* tabs navigation */
	.tabs_navigation.page_margin_top
	{
		margin-top: 15px;
	}
	/* --- columns --- */
	.column_left, .column_right
	{
		width: 226px;
	}
	.column_left
	{
		margin-right: 23px;
	}
	.columns p
	{
		padding: 21px 0;
	}
	.columns.full_width .column_left
	{
		width: 364px;
	}
	.columns.full_width .column_right
	{
		width: 363px;
	}
	.page_right .columns .column_left, 
	.page_right .columns .column_right
	{
		width: 95px;
	}
	.page_right .columns.no_padding .column_left, 
	.page_right .columns.no_padding .column_right
	{
		width: 100%;
	}
	.page_right .columns.no_padding .column_left
	{
		margin-right: 0;
	}
	.page_right .columns.no_padding .column_right
	{
		margin-top: 23px;
	}
	.columns.full_width .columns .column_left, 
	.columns.full_width .columns .column_right
	{
		width: 170px;
	}
	/* --- columns_3 --- */
	.columns_3 .column
	{
		width: 234px;
		margin-left: 23px;
	}
	.columns_3 .item_content .text
	{
		width: 154px;
	}
	/* --- list --- */
	.list
	{
		padding: 21px 0;
	}
	/* --- info list --- */
	.info_list li .text
	{
		width: 260px;
	}
	/* --- announcement --- */
	.announcement p
	{
		padding: 10px 0;
	}
	.announcement .vertical_align
	{
		height: 63px;
	}
	/* --- pricing plan ---*/
	.pricing_plan li
	{
		width: 156px;
		padding-left: 18px;
	}
	/* --- timetable --- */
	.timetable
	{
		margin-top: 23px;
	}
	.timetable th, .timetable td,
	.tooltip .tooltip_content
	{
		padding: 4px 8px 5px;
	}
	/* --- isotope gallery --- */
	.gallery
	{
		width: 750px;
	}
	.page_left .gallery
	{
		width: 475px;
	}
	.gallery_box
	{
		margin-top: 23px;
	}
	.gallery_box img
	{
		width: 230px;
		height: auto;
	}
	.gallery_item_details_list
	{
		padding-bottom: 23px;
	}
	.gallery_item_details_list .gallery_box
	{
		width: 375px;
		margin-right: 23px;
	}
	.gallery_item_details_list .details_box
	{
		width: 352px;
	}
	.gallery_item_details_list .gallery_box img
	{
		width: 375px;
	}
	.gallery_item_details_list .details_box .column_left,
	.gallery_item_details_list .details_box .column_right
	{
		width: 164px;
	}
	.gallery_item_details_list .details_box p
	{
		padding: 15px 0;
	}
	.gallery_2_columns .gallery_box img
	{
		width: 360px;
		height: auto;
	}
	.gallery_3_columns .gallery_box img
	{
		width: 230px;
		height: auto;
	}
	.gallery_2_columns_sidebar .gallery_box img
	{
		width: 222px;
		height: auto;
	}
	.page_left .gallery_item_details_list .gallery_box,
	.page_left .gallery_item_details_list .column_right,
	.page_left .gallery_item_details_list .details_box,
	.page_left .gallery_item_details_list .gallery_box img
	{
		width: 475px;
	}
	.page_left .gallery_item_details_list .column_right
	{
		margin-top: 23px;
	}
	/* --- photostream --- */
	.photostream
	{
		width: 261px;
		margin-top: 11px;
	}
	.photostream .gallery_box
	{
		margin-right: 12px;
		margin-top: 12px;
	}
	/* --- contact details --- */
	.contact_details_about
	{
		width: 168px;
		padding: 10px;
	}
	.contact_details_map
	{
		width: 188px;
		height: 220px;
	}
	/* --- footer banner box --- */
	.footer_banner_box
	{
		width: 204px;
		padding: 20px 23px 30px;
	}
	/* --- footer box --- */
	.footer_box_container
	{
		margin-top: 23px;
	}
	.footer_box
	{
		float: left;
		width: 227px;
		padding-right: 23px;
	}
	.footer_box.last
	{
		width: 250px;
	}
	/* --- footer contact info --- */
	.footer_contact_info_left
	{
		width: 87px;
	}
	/* --- footer_social_icons --- */
	.footer_social_icons
	{
		margin-top: 23px;
	}
	/* --- opening hours --- */
	.opening_hours
	{
		margin-top: 7px;
	}
}
@media screen and (max-width:767px)
{
	/* --- header --- */
	.header
	{
		width: 462px;
		padding: 18px 0;
	}
	.box_header.margin
	{
		margin-top: 0;
	}
	/* --- menu --- */
	.sf-menu
	{
		display: none;
	}
	.mobile_menu
	{
		display: block;
	}
	.tabs_box_navigation.sf-menu
	{
		display: block;
	}
	/* --- page --- */
	.page, .page_left, .page_right
	{
		width: 462px;
	}
	.page_right
	{
		margin-top: 50px;
	}
	/* --- page header --- */
	.page_header_left
	{
		width: auto;
	}
	.page_header_right
	{
		float: left;
		clear: both;
		margin-top: 25px;
	}
	.top_hint
	{
		margin-top: -85px;
	}
	/* --- footer --- */
	.footer
	{
		width: 462px;
		height: auto;
	}
	/* --- slider --- */
	.slider li
	{
		height: 315px;
		background-size: auto 315px;
		-moz-background-size: auto 315px;
		-webkit-background-size: auto 315px;
		-o-background-size: auto 315px;
	}
	.slider_content_box
	{
		margin-top: -285px;
		min-height: 230px;
	}
	.slider_content .subtitle
	{
		margin-top: 10px;
	}
	.slider_content h1
	{
		font-size: 36px;
	}
	/* --- home box --- */
	.home_box
	{
		width: 416px;
		height: auto;
	}
	.home_box .header_left
	{
		width: 372px;
	}
	.home_box .news .banner_icon
	{
		display: block;
	}
	/* --- scrolling list --- */
	.scrolling_list li,
	.columns.full_width .scrolling_list li
	{
		width: 444px;
	}
	.scrolling_list li .left,
	.columns.full_width .scrolling_list li .left
	{
		width: 407px;
	}
	/* --- info list --- */
	.info_list li .text,
	.accordion.wide .columns .info_list li .text
	{
		width: 370px;
	}
	/* --- blog --- */
	.blog.column_left,
	.blog.column_right
	{
		width: 462px;
	}
	.blog.column_left
	{
		margin-right: 0;
	}
	.post_content, .post_content a.post_image img, .post_content .gallery_box img
	{
		width: 354px;
	}
	.columns .post_content a.post_image img, .columns .post_content
	{
		width: 462px;
	}
	/* --- comments --- */
	#comments_list li.comment
	{
		width: 354px;
	}
	#comments_list .comment_details
	{
		width: 256px;
	}
	#comments_list .children li.comment
	{
		width: 337px;
	}
	#comments_list .children .comment_details
	{
		width: 237px;
	}
	/* --- comment form --- */
	.comment_form .left, .comment_form .right
	{
		width: 167px;
	}
	.comment_form .text_input, .comment_form textarea
	{
		width: 131px;
	}
	.contact_form .left, .contact_form .right
	{
		width: 221px;
	}
	.contact_form .text_input
	{
		width: 185px;
	}
	.contact_form textarea
	{
		width: 426px;
	}
	/* --- sidebar_box --- */
	.sidebar_box
	{
		width: 462px;
	}
	.sidebar_box .header_left
	{
		width: 418px;
	}
	/* --- departments --- */
	.accordion.wide .about_img
	{
		width: 377px;
	}
	.columns .item_content .text,
	.item_content .text
	{
		width: 366px;
	}
	.accordion.medium .ui-accordion-content
	{
		padding: 20px 0;
	}
	.item_content .thumb_image, .features_image
	{
		margin-right: 20px;
	}
	.accordion.wide .gallery_box img
	{
		width: 100%;
		height: auto;
	}
	/* --- columns --- */
	.column_left, .column_right
	{
		clear: both;
		float: none;
		width: auto;
	}
	.column_left
	{
		margin-right: 0;
	}
	.column_right
	{
		margin-top: 23px;
	}
	.caroufredsel_wrapper .column_left
	{
		float: left;
	}
	.columns.full_width .column_left, .columns.full_width .column_right,
	.columns_3 .column
	{
		width: 462px;
		margin-left: 0;
		margin-right: 0;
	}
	.columns_3 .column
	{
		margin-top: 23px;
	}
	.columns_3 .item_content .text
	{
		width: 385px;
	}
	.page_right .columns .column_left, 
	.page_right .columns .column_right 
	{
		float: left;
		clear: none;
		width: 113px;
		margin-right: 23px;
		margin-top: 0;
	}
	.page_right .columns.no_padding .column_right
	{
		margin-right: 0;
	}
	.columns.full_width .columns .column_left, 
	.columns.full_width .columns .column_right
	{
		float: left;
		clear: none;
		width: 219px;
	}
	.columns.full_width .columns .column_left
	{
		margin-right: 23px;
	}
	.columns.full_width .columns .column_right
	{
		margin-top: 0;
	}
	/* --- announcement --- */
	.announcement .vertical_align
	{
		height: auto;
	}
	/* --- pricing plan ---*/
	.pricing_plan li
	{
		width: 159px;
	}
	/* --- timetable --- */
	.timetable
	{
		display: none;
	}
	.timetable.small
	{
		display: block;
	}
	.timetable.small .items_list a
	{
		width: 356px;
	}
	/* --- isotope gallery --- */
	.page_left .gallery
	{
		width: 462px;
	}
	.gallery_box img
	{
		width: 225px;
		height: 150px;
	}
	.gallery, 
	.gallery_item_details_list .gallery_box, 
	.gallery_item_details_list .gallery_box img, 
	.gallery_item_details_list .details_box
	{
		width: 462px;
	}
	.gallery_item_details_list .gallery_box
	{
		margin-right: 0;
	}
	.gallery_item_details_list .details_box
	{
		margin-top: 23px;
	}
	.gallery_item_details_list .details_box .column_left,
	.gallery_item_details_list .details_box .column_right
	{
		width: 164px;
	}
	.gallery_2_columns .gallery_box img
	{
		width: 462px;
		height: 300px;
	}
	.gallery_3_columns .gallery_box img
	{
		width: 225px;
		height: 150px;
	}
	.gallery_2_columns_sidebar .gallery_box img
	{
		width: 225px;
	}
	.page_left .gallery_item_details_list .gallery_box,
	.page_left .gallery_item_details_list .column_right,
	.page_left .gallery_item_details_list .details_box,
	.page_left .gallery_item_details_list .gallery_box img
	{
		width: 462px;
	}
	/* --- photostream --- */
	.photostream
	{
		width: 480px;
		margin-top: 2px;
	}
	.photostream .gallery_box
	{
		margin-right: 21px;
		margin-top: 21px;
	}
	/* --- scrolling gallery --- */
	.gallery.horizontal_carousel li.gallery_box
	{
		margin-right: 12px;
	}
	/* --- contact details --- */
	.contact_details_about
	{
		width: 200px;
		padding: 20px;
	}
	.contact_details_map
	{
		width: 240px;
		height: 240px;
	}
	/* --- footer banner box --- */
	.footer_banner_box
	{
		width: 416px;
	}
	/* --- footer box --- */
	.footer_box
	{
		width: 462px;
		padding-right: 0;
		margin-top: 23px;
	}
	.footer_box:first-child
	{
		margin-top: 0;
	}
	.footer_box.last
	{
		width: 462px;
	}
	.footer_box .header_left,
	.footer_box.last .header_left
	{
		width: 400px;
	}
	/* --- footer contact info --- */
	.footer_contact_info_left
	{
		width: 255px;
	}
	.footer_contact_info_right
	{
		width: 187px;
	}
}
@media screen and (max-width:479px)
{
	/* --- header --- */
	h1
	{
		font-size: 22px;
	}
	h2
	{
		font-size: 18px;
	}
	h3
	{
		font-size: 14px;
	}
	h4
	{
		font-size: 13px;
	}
	/* --- header --- */
	.header
	{
		width: 300px;
	}
	/* --- menu --- */
	.mobile_menu
	{
		clear: both;
		float: none;
		text-align: center;
	}
	.mobile_menu select
	{
		width: 100%;
	}
	.sf-menu li.submenu.wide ul
	{
		width: 278px;
	}
	/* --- page --- */
	.page, .page_left, .page_right, .sidebar_box
	{
		width: 300px;
	}
	.top_hint
	{
		display: none;
	}
	/* --- bread crumb --- */
	.bread_crumb
	{
		clear: both;
		margin-left: 0;
	}
	/* --- footer --- */
	.footer
	{
		width: 300px;
	}
	/* --- slider --- */
	.slider li
	{
		height: 210px;
		background-size: auto 210px;
		-moz-background-size: auto 210px;
		-webkit-background-size: auto 210px;
		-o-background-size: auto 210px;
	}
	.slider_content_box
	{
		margin-top: -195px;
		min-height: 175px;
	}
	.slider_content h1
	{
		font-size: 24px;
	}
	/* --- home box --- */
	.home_box
	{
		width: 254px;
	}
	.home_box .header_left
	{
		width: 192px;
	}
	/* --- scrolling list ---*/
	.scrolling_list li,
	.columns.full_width .scrolling_list li
	{
		width: 282px;
	}
	.scrolling_list li .left,
	.columns.full_width .scrolling_list li .left
	{
		width: 245px;
	}
	/* --- info list --- */
	.info_list li .text
	{
		width: 208px;
	}
	/* --- blog --- */
	.blog.column_left,
	.blog.column_right
	{
		width: 300px;
	}
	.post_content, .post_content a.post_image img, .post_content .gallery_box img
	{
		width: 300px;
	}
	.comment_box
	{
		float: left;
		width: auto;
		margin-bottom: 23px;
		margin-right: 0;
	}
	.comment_box li
	{
		float: left;
		width: auto;
	}
	.comment_box .comments_number
	{
		width: auto;
		margin-top: 0;
		margin-left: 2px;
	}
	.comment_box .date .value
	{
		width: auto;
	}
	.comment_box .date .arrow_date,
	.comment_box .arrow_comments
	{
		clear: both;
		float: none;
	}
	.columns .post_content a.post_image img,
	.columns .post_content
	{
		width: 300px;
	}
	/* --- comments --- */
	#comments_list li.comment, #comments_list .comment_details
	{
		width: 300px;
	}
	#comments_list .comment_author_avatar
	{
		display: none;
	}
	#comments_list .children li.comment, #comments_list .children .comment_details
	{
		width: 260px;
	}
	/* --- comment form --- */
	.comment_form_container
	{
		margin-left: 0;
	}
	.comment_form .right, .contact_form .right
	{
		margin-top: 10px;
		margin-left: 0;
	}
	.comment_form .left, .comment_form .right,
	.contact_form .left, .contact_form .right
	{
		width: 300px;
	}
	.comment_form .text_input, .comment_form textarea,
	.contact_form .text_input, .contact_form textarea
	{
		width: 264px;
	}
	.contact_form .sf-menu li.submenu.wide ul
	{
		width: 298px;
	}
	/* --- departments --- */
	.accordion .ui-accordion-content .text,
	.accordion.wide .columns .info_list li .text
	{
		width: 205px;
	}
	.accordion.wide .about_img
	{
		width: 300px;
	}
	.item_content .thumb_image,
	.features_image
	{
		margin-right: 20px;
	}
	.columns .item_content .text
	{
		width: 204px;
	}
	/* --- columns --- */
	.column_left, .column_right, .columns.full_width .column_left, .columns.full_width .column_right,
	.columns_3 .column
	{
		width: 300px;
	}
	.column_left
	{
		margin-right: 0;
	}
	.columns_3 .item_content .text
	{
		width: 223px;
	}
	.page_right .columns .column_left, 
	.page_right .columns .column_right 
	{
		width: 120px;
	}
	.page_right .columns .column_right 
	{
		margin-right: 0;
	}
	.columns.full_width .columns .column_left, 
	.columns.full_width .columns .column_right
	{
		width: 138px;
	}
	/* --- pricing plan ---*/
	.pricing_plan li
	{
		width: 282px;
	}
	/* --- timetable --- */
	.timetable.small .items_list a
	{
		width: 194px;
	}
	/* --- sidebar box --- */
	.sidebar_box .header_left
	{
		width: 238px;
	}
	.sidebar_box .categories
	{
		width: auto;
	}
	.sidebar_box .categories li
	{
		float: left;
		clear: none;
		margin-right: 2px;
	}
	/* --- isotope gallery --- */
	.gallery, .page_left .gallery
	{
		width: 225px;
	}
	.gallery_item_details_list .gallery_box, 
	.gallery_item_details_list .gallery_box img, 
	.gallery_item_details_list .details_box,
	.gallery_item_details_list .details_box .column_left,
	.gallery_item_details_list .details_box .column_right,
	.gallery.gallery_2_columns,
	.gallery.gallery_3_columns,
	.page_left .gallery_item_details_list .gallery_box,
	.page_left .gallery_item_details_list .column_right,
	.page_left .gallery_item_details_list .details_box,
	.page_left .gallery_item_details_list .gallery_box img
	{
		width: 300px;
	}
	.gallery_2_columns .gallery_box img,
	.gallery_3_columns .gallery_box img
	{
		width: 300px;
		height: auto;
	}
	/* --- photostream --- */
	.photostream
	{
		width: 336px;
		margin-top: -14px;
	}
	.photostream .gallery_box
	{
		margin-right: 37px;
		margin-top: 37px;
	}
	/* --- scrolling gallery --- */
	.gallery.horizontal_carousel li.gallery_box
	{
		margin-left: 37.5px;
		margin-right: 0;
	}
	/* --- contact details --- */
	.contact_details_about
	{
		width: 260px;
	}
	.contact_details_map
	{
		width: 300px;
	}
	/* --- footer banner box --- */
	.footer_banner_box
	{
		width: 254px;
	}
	/* --- footer box --- */
	.footer_box
	{
		width: 300px;
	}
	.footer_box.last
	{
		width: 300px;
	}
	.footer_box .header_left,
	.footer_box.last .header_left
	{
		width: 238px;
	}
	/* --- footer contact info --- */
	.footer_contact_info_left
	{
		width: 155px;
	}
	.footer_contact_info_right
	{
		width: 130px;
		margin-left: 15px;
	}
}    
    
    
    
/* --- general --- */
.clearfix:after
{
    font-size: 0px;
    content: ".";
    display: block;
    height: 0px;
    visibility: hidden;
    clear: both;
}
body
{
	background: #D8D8D8;
	padding: 0px;
	margin: 0px;
	font-family: 'Arial';
	font-size: 13px;
	color: #666;
}
.site_container
{
	max-width: 1590px;
	margin-left: auto;
	margin-right: auto;
	background-color: #F8F8F8;
}
.site_container.narrow
{
	max-width: 1090px;
}
a
{
	border-bottom: 1px dotted #3156A3;
	color: #3156A3;
	text-decoration: none;
	outline: none;
}
a:hover
{
	border-style: solid;
}
p
{
	padding: 1em 0;
	color: #666;
	line-height: 150%;
}
strong
{
	color: #000;
}
blockquote
{
	padding-left: 25px;
	color: #3156A3;
	font-size: 15px;
	font-family: 'Volkhov';
	border-left: 2px solid #3156A3;
	line-height: 150%;
	margin-bottom: 25px;
}
pre
{
	font-family: 'Courier new';
    font-size: 14px;
    line-height: 170%;
	background: url('/sima/images/code_background.png') repeat;
	text-shadow: 0 1px 0 #FFF;
	zoom:1;
	filter: dropshadow(color=#ffffff, offx=0, offy=1); 
	padding: 0 5px;
	margin: 0;
	overflow: auto;
}
.relative
{
	position: relative;
}
input, textarea
{
	font-family: arial;
	font-size: 13px;
}
.margin_top_10
{
	margin-top: 10px;
}
.margin_left_10
{
	margin-left: 10px;
}
/* --- font face --- */
/*@font-face 
{
  font-family: 'Droid Sans';
  font-style: normal;
  font-weight: normal;
  src: url('../font/DroidSans.eot');
  src: local('Droid Sans'), local('DroidSans'), url('../font/DroidSans.ttf') format('truetype');
}
@font-face 
{
  font-family: 'Droid Serif';
  font-style: normal;
  font-weight: normal;
  src: url('../font/DroidSerif-Regular-webfont.eot');
  src: local('Droid Serif'), local('DroidSerif'), url('../font/DroidSerif-Regular-webfont.ttf') format('truetype');
}*/
/* --- text colors --- */
.list li
{
	color: #666;
}
/* --- headers --- */
h1, h2, h3, h4, h5
{
	font-family: 'PT Sans';
	margin: 0;
	padding: 0;
	font-weight: normal;
	color: #000;
}
h1 a, h2 a, h3 a, h4 a, h5 a
{
	color: #000;
}
h1
{
	font-size: 30px;
}
h2
{
	font-size: 24px;
}
h3
{
	font-size: 18px;
}
h4
{
	font-size: 16px;
}
h5
{
	font-size: 13px;
}
h1.not_found
{
	font-size: 150px;
	color: #E8E8E8;
}
.box_header:after
{
	content: "";
	display: block;
	bottom: 0;
	width: 50px;
	height: 2px;
	background: #42B3E5;
	margin-top: 10px;
}
.box_header.margin
{
	margin-top: 27px;
}
.sentence
{
	font-family: 'Volkhov';
	color: #3156A3;
	font-style: italic;
	margin-top: 25px;
	line-height: 150%;
}
.sentence_author
{
	float: right;
	margin-top: 10px;
	color: #909090;
	font-style: normal;
}
.info
{
	padding: 25px 0 28px;
}
/* --- header --- */
.header_container
{
	background-color: #fff;
}
.header
{
	width: 990px;
	margin-left: auto;
	margin-right: auto;
	padding: 38px 0;
}
.header_left
{
	float: left;
	width: 320px;
}
.header_right
{
	float: right;
}
.header_left a
{
	display: block;
}
.header_left a, .logo
{
	font-family: 'PT Sans';
	font-size: 30px;
}
.header_left a:hover
{
	text-decoration: none;
}
.header_left a img
{
	float: left;
	margin-right: 20px;
}
.logo
{
	float: left;
	padding-top: 3px;
	color: #000000;
}
/* --- menu --- */
.sf-menu
{
	padding: 0;
	margin: 0;
}
.sf-menu li
{
	margin-left: 5px;
	height: 45px;
}
.sf-menu li:first-child
{
	margin-left: 0;
}
.sf-menu li, .sf-menu li:hover, .sf-menu li.sfHover, .sf-menu a:focus, .sf-menu a:hover, .sf-menu a:active
{
	background: none #fff;
}
.sf-menu li a, .sf-menu li a:visited
{
	font-family: 'arial';
	color: #888;
	border: 1px solid #FFF;
	padding: 15px;
}
.sf-menu li:hover a, .sf-menu li.selected a
{
	color: #FFF;
	background: #42B3E5;
}
.sf-menu li.submenu:hover a
{
	color: #000;
	background: #FFF;
	border-color: #E8E8E8;
	border-bottom-color: #FFF;
}
.sf-menu li.submenu:hover:after
{
	content: "";
	position: absolute;
	display: block;
	bottom: 0;
	z-index: 4;
	width: 1px;
	height: 1px;
	background: #E8E8E8;
}
.sf-menu li.submenu:hover a
{
	z-index: 4;
}
.sf-menu li ul
{
	width: 190px;
	background: #FFF;
	border: 1px solid #E8E8E8;
	padding-bottom: 10px;
}
.sf-menu li ul.wide
{
	width: 200px;
}
.sf-menu li ul.wide li
{
	width: 170px;
}
.sf-menu li.submenu.wide ul
{
	width: 380px;
}
.sf-menu li:hover ul, .sf-menu li.sfHover ul
{
	top: 44px;
}
.sf-menu li ul li
{
	width: 160px;
	height: auto;
	margin-left: 0;
	background-color: #fff;
	padding: 0 15px;
}
.sf-menu li:hover ul a,
.sf-menu li.submenu:hover ul a
{
	border: none;
	color: #888;
	background: #FFF;
	border-bottom: 1px solid #E8E8E8;
	padding: 15px 0;
}
.sf-menu li.submenu:hover ul
{
	z-index: 3;
}
/*.sf-menu li ul li:hover, .sf-menu li ul li.selected
{
	border-top: 1px solid #E0E0E0;
}*/
.sf-menu li ul li a
{
	padding: 15px 0;
	font-size: 12px;
}
.sf-menu li ul li a:hover, .sf-menu li ul li.selected a,
.sf-menu li.submenu ul li a:hover, .sf-menu li.submenu:hover ul li.selected a,
.sf-menu li.submenu:hover ul li.selected ul li a:hover, .sf-menu li.submenu:hover ul li ul li.selected a, .sf-menu li.submenu:hover ul li.selected ul li.selected a
{
	border-bottom: 2px solid #42B3E5;
	color: #000;
	padding-bottom: 14px;
}
.sf-menu li.submenu:hover ul li.selected ul li a
{
	color: #888;
	border-bottom: 1px solid #E8E8E8;
	padding-bottom: 15px;
}
ul.sf-menu li li:hover ul, ul.sf-menu li li.sfHover ul,
ul.sf-menu li li li:hover ul, ul.sf-menu li li li.sfHover ul
{
	left: 180px;
}
.sf-menu .timetable_submenu
{
	margin-left: -280px;
}
.mobile_menu
{
	display: none;
	float: right;
	padding: 12px 0;
}
.mobile_menu select
{
	border: 1px solid #E0E0E0;
}
/* --- page --- */
.page
{
	width: 990px;
	margin-left: auto;
	margin-right: auto;
	padding-bottom: 50px;
	border-top: 8px solid #F0F0F0;
}
.page.noborder
{
	border: none;
}
.page_left
{
	float: left;
	width: 630px;
}
.left_sidebar .page_left
{
	float: right;
}
.page_right
{
	float: right;
	width: 330px;
}
.left_sidebar .page_right
{
	float: left;
}
.page_margin_top
{
	margin-top: 30px;
}
.page_margin_top_section
{
	margin-top: 50px;
}
.top_hint
{
	position: relative;
	float: right;
	color: #FFF;
	background-color: #42B3E5;
	padding: 9px 10px;
	margin-top: -70px;
}
.page_right .home_box
{
	height: auto;
}
/* --- page header --- */
.page_header
{
	border-bottom: 1px solid #E8E8E8;
	padding-bottom: 30px;
}
.page_header_left
{
	float: left;
	width: 670px;
}
.page_header_right
{
	float: right;
}
.page_header_left .page_title
{
	float: left;
}
/* --- search --- */
.search
{
}
.search input
{
	float: left;
	background: transparent;
	padding: 11px 18px;
	border: none;
	color: #000;
	margin: 0;
}
.search .search_input
{
	width: 174px;
	background: #F0F0F0;
	border-top: 1px solid #E0E0E0;
	transition: width 0.5s;
	-moz-transition: width 0.5s; /* Firefox */
	-webkit-transition: width 0.5s; /* Safari and Chrome */
	-o-transition: width 0.5s; /* Opera */
}
.search .search_input::-webkit-input-placeholder,
.search .search_input:-moz-placeholder,
.search .search_input:-ms-input-placeholder
{
	color: #666666;
}
.search .search_input:focus
{
	width: 225px;
	border-color: #42B3E5;
}
/* --- bread crumb --- */
.bread_crumb
{
	float: left;
	padding: 17px 0 0;
	margin-left: 20px;
}
.bread_crumb li
{
	float: left;
	font-size: 11px;
	margin-left: 3px;
}
.bread_crumb li:first-child
{
	margin-left: 0;
}
.bread_crumb li.separator
{
	width: 8px;
	padding: 0 4px;
	text-decoration: none;
}
.bread_crumb li a:hover
{
	color: #3156A3;
}
/* --- footer --- */
.footer_container
{
	background-color: #202020;
}
.footer
{
	width: 990px;
	margin-left: auto;
	margin-right: auto;
}
.footer .box_header
{
	color: #FFF;
}
.footer a
{
	color: #D5D5D5;
}
/* --- icons --- */
/* --- icon small arrow --- */
.icon_small_arrow
{
	background-position: center center;
	background-repeat: no-repeat;
}
.icon_small_arrow.left_black
{
	background-image: url('/sima/images/icon_arrow_left_black.png');
}
.icon_small_arrow.right_black
{
	background-image: url('/sima/images/icon_arrow_right_black.png');
}
.icon_small_arrow.margin_right_black
{
	background-image: url('/sima/images/icon_arrow_margin_right_black.png');
}
.icon_small_arrow.left_white
{
	background-image: url('/sima/images/icon_arrow_left_white.png');
}
.icon_small_arrow.margin_right_white
{
	background-image: url('/sima/images/icon_arrow_margin_right_white.png');
}
.icon_small_arrow.right_white
{
	background-image: url('/sima/images/icon_arrow_right_white.png');
}
.icon_small_arrow.top_white
{
	background-image: url('/sima/images/icon_arrow_top_white.png');
}
.icon_small_arrow.top_black
{
	background-image: url('/sima/images/icon_arrow_top_black.png');
}
.icon_small_arrow.right_gray
{
	background-image: url('/sima/images/icon_arrow_right_gray.png');
}
.icon_small_arrow.square
{
	background-image: url('/sima/images/icon_arrow_square.png');
}
.icon_small_arrow.mark
{
	background-image: url('/sima/images/icon_arrow_mark.png');
}
.icon_small_arrow.tick
{
	background-image: url('/sima/images/icon_tick.png');
}
/* --- icon clock --- */
.icon_clock_green
{
	background-image: url('/sima/images/icon_clock_green.png');
}
.icon_clock_black
{
	background-image: url('/sima/images/icon_clock_black.png');
}
/* --- icon card --- */
.icon_card_green
{
	background-image: url('/sima/images/icon_card_green.png');
}
.icon_card_white
{
	background-image: url('/sima/images/icon_card_white.png');
}
/* --- social icon --- */
.social_icon
{
	display: block;
	width: 29px;
	height: 29px;
	background-repeat: no-repeat;
	transition: background-position .3s ease;
	-moz-transition: background-position .3s ease;
	-webkit-transition: background-position .3s ease;
	-o-transition: background-position .3s ease; 
}
a.social_icon:hover
{
	transition: background-position .3s ease;
	-moz-transition: background-position .3s ease;
	-webkit-transition: background-position .3s ease;
	-o-transition: background-position .3s ease; 
	background-position: 0 -29px;
	text-decoration: none;
}
.social_icon.blogger
{
	background-image: url('/sima/images/social_body/blogger.png');
}
.social_icon.devianart
{
	background-image: url('/sima/images/social_body/devianart.png');
}
.social_icon.dribble
{
	background-image: url('/sima/images/social_body/dribble.png');
}
.social_icon.envato
{
	background-image: url('/sima/images/social_body/envato.png');
}
.social_icon.facebook
{
	background-image: url('/sima/images/social_body/facebook.png');
}
.social_icon.flickr
{
	background-image: url('/sima/images/social_body/flickr.png');
}
.social_icon.form
{
	background-image: url('/sima/images/social_body/form.png');
}
.social_icon.forrst
{
	background-image: url('/sima/images/social_body/forrst.png');
}
.social_icon.googleplus
{
	background-image: url('/sima/images/social_body/googleplus.png');
}
.social_icon.linkedin
{
	background-image: url('/sima/images/social_body/linkedin.png');
}
.social_icon.mail
{
	background-image: url('/sima/images/social_body/mail.png');
}
.social_icon.myspace
{
	background-image: url('/sima/images/social_body/myspace.png');
}
.social_icon.phone
{
	background-image: url('/sima/images/social_body/phone.png');
}
.social_icon.picasa
{
	background-image: url('/sima/images/social_body/picasa.png');
}
.social_icon.skype
{
	background-image: url('/sima/images/social_body/skype.png');
}
.social_icon.soundcloud
{
	background-image: url('/sima/images/social_body/soundcloud.png');
}
.social_icon.stumbleupon
{
	background-image: url('/sima/images/social_body/stumbleupon.png');
}
.social_icon.tumblr
{
	background-image: url('/sima/images/social_body/tumblr.png');
}
.social_icon.twitter
{
	background-image: url('/sima/images/social_body/twitter.png');
}
.social_icon.vimeo
{
	background-image: url('../images/social_body/vimeo.png');
}
.social_icon.xing
{
	background-image: url('/sima/images/social_body/xing.png');
}
.social_icon.youtube
{
	background-image: url('/sima/images/social_body/youtube.png');
}
.footer .social_icon.blogger
{
	background-image: url('/sima/images/social_footer/blogger.png');
}
.footer .social_icon.devianart
{
	background-image: url('/sima/images/social_footer/devianart.png');
}
.footer .social_icon.dribble
{
	background-image: url('/sima/images/social_footer/dribble.png');
}
.footer .social_icon.envato
{
	background-image: url('/sima/images/social_footer/envato.png');
}
.footer .social_icon.facebook
{
	background-image: url('/sima/images/social_footer/facebook.png');
}
.footer .social_icon.form
{
	background-image: url('/sima/images/social_footer/form.png');
}
.footer .social_icon.flickr
{
	background-image: url('/sima/images/social_footer/flickr.png');
}
.footer .social_icon.forrst
{
	background-image: url('/sima/images/social_footer/forrst.png');
}
.footer .social_icon.googleplus
{
	background-image: url('/sima/images/social_footer/googleplus.png');
}
.footer .social_icon.linkedin
{
	background-image: url('/sima/images/social_footer/linkedin.png');
}
.footer .social_icon.mail
{
	background-image: url('/sima/images/social_footer/mail.png');
}
.footer .social_icon.myspace
{
	background-image: url('/sima/images/social_footer/myspace.png');
}
.footer .social_icon.phone
{
	background-image: url('/sima/images/social_footer/phone.png');
}
.footer .social_icon.picasa
{
	background-image: url('/sima/images/social_footer/picasa.png');
}
.footer .social_icon.skype
{
	background-image: url('/sima/images/social_footer/skype.png');
}
.footer .social_icon.soundcloud
{
	background-image: url('/sima/images/social_footer/soundcloud.png');
}
.footer .social_icon.stumbleupon
{
	background-image: url('/sima/images/social_footer/stumbleupon.png');
}
.footer .social_icon.tumblr
{
	background-image: url('/sima/images/social_footer/tumblr.png');
}
.footer .social_icon.twitter
{
	background-image: url('/sima/images/social_footer/twitter.png');
}
.footer .social_icon.vimeo
{
	background-image: url('/sima/images/social_footer/vimeo.png');
}
.footer .social_icon.xing
{
	background-image: url('/sima/images/social_footer/xing.png');
}
.footer .social_icon.youtube
{
	background-image: url('/sima/images/social_footer/youtube.png');
}
/* --- social_icons --- */
.social_icons
{
	margin-top: 30px;
}
.social_icons li
{
	float: left;
	margin-left: 5px;
}
.social_icons li:first-child
{
	margin-left: 0;
}
/* --- notification boxes --- */
.notification_box
{
	padding: 20px 30px 20px 80px;
	line-height: 150%;
}
.notification_box h2,
.notification_box h2 a,
.notification_box h3,
.notification_box h3 a,
.notification_box h5,
.notification_box h5 a
{
	color: #FFF;
}
.notification_box h5
{
	font-family: arial;
	margin-top: 5px;
}
.notification_box.nb_success
{
	background: url('/sima/images/notification_success.png') no-repeat 20px center #5FAA4B;
}
.notification_box.nb_error
{
	background: url('/sima/images/notification_error.png') no-repeat 20px center #EB6D58;
}
.notification_box.nb_info
{
	background: url('/sima/images/notification_info.png') no-repeat 20px center #42B3E5;
}
.closing_in
{
	display: block;
	float: right;
	margin-top: 5px;
	color: #909090;
	font-size: 11px;
}
/* --- vertical align --- */
.vertical_align
{
	display: table-row;
}
.vertical_align_cell
{
	display: table-cell;
	vertical-align: middle;
}
/* --- slider --- */
.caroufredsel_wrapper
{
	width: 100% !important;
	margin: 0 !important;
	overflow: hidden;
}
.caroufredsel_wrapper_slider
{
	/*top: 65px !important;*/
}
.slider
{
	/*position: absolute;*/
	padding: 0;
}
.slider li
{
	float: left;
	height: 670px;
	background-position: top center;
	background-repeat: no-repeat;
}
.slider li .slider_img
{
	position: relative;
	height: 100%;
	top: 0;
	left: 0;
}
/* --- slider content --- */
.slider_content_box
{
	margin-top: -577px;
	min-height: 367px;
	position: relative;
}
.slider_content
{
	display: none;
	padding-top: 11px;
	padding-bottom: 17px;
}
.slider_content:after
{
	content: "";
}
.slider_content .subtitle
{
	margin-top: 19px;
	line-height: 150%;
	color: #FFF;
	text-shadow: 0px 1px 0px rgba(0,0,0,0.5);
}
.slider_content h1
{
	font-size: 72px;
	color: #FFF;
	text-shadow: 0px 1px 0px rgba(0,0,0,0.5);
}
/* --- slider navigation --- */
.slider_navigation
{
	position: absolute;
	clear: both;
	width: 100%;
	bottom: 0;
}
.slider_navigation .slider_control
{
	float: left;
}
.slider_navigation .slider_control a
{
	display: block;
	height: 41px;
	font-size: 11px;
	padding: 0;
	color: #FFF;
	line-height: 160%;
}
.slider_navigation .slider_control a:hover
{
	text-decoration: none;
}
.slider_navigation .top_border
{
	display: block;
	width: 100%;
	height: 1px;
	background: #FFF;
	opacity: 0.4;
	filter: alpha(opacity = 40);
}
.slider_navigation .slider_control .slider_control_bar
{
	display: none;
	background-color: #FFFFFF;
    height: 4px;
    margin-top: -4px;
}
.slider_navigation .slider_bar
{
	position: relative;
	height: 4px;
	margin-left: 0;
	margin-bottom: -1px;
	background: #FFF;
}
/* --- home box --- */
.home_box
{
	float: left;
	width: 270px;
	height: 159px;
	padding: 21px 30px 30px;
}
.home_box h2,
.home_box h2 a
{
	color: #FFF;
}
.home_box h3
{
	font-style: italic;
	color: #FFF;
	margin-top: 5px;
}
.home_box.light_blue
{
	background-color: #42B3E5;
}
.home_box.blue
{
	background-color: #0384CE;
}
.home_box.dark_blue
{
	background-color: #3156A3;
}
.home_box.dark h3
{
	color: #999;
}
.home_box .header_left
{
	width: 198px;
}
.home_box .header_right
{
	width: 62px
}
.home_box .news
{
	margin-top: 21px;
	line-height: 150%;
}
.home_box .news .text
{
	padding: 0;
	color: #FFF;
}
.home_box .more
{
	margin-top: 25px;
}
.home_box .more.light
{
	color: #FFF;
}
.home_box .more.light:hover
{
	background-image: url('/sima/images/icon_arrow_margin_right_black.png');
}
/* --- items list --- */
.items_list
{
	
}
.items_list.margin_top
{
	margin-top: 8px;
}
.items_list li
{
	padding: 12px 0;
	border-bottom: 1px solid #E0E0E0;
	background-position: left center;
	background-repeat: no-repeat;
	line-height: 120%;
}
.items_list.simple li
{
	padding-left: 10px;
}
.items_list li:first-child
{
	padding-top: 0;
}
.items_list li.icon_clock_black
{
	padding-left: 25px;
}
.items_list li.icon_clock_black:first-child
{
	padding-top: 12px;
	/*background-position: left 0;*/
}
.items_list a, .items_list span
{
	float: left;
	color: #000;
	font-weight: bold;
}
.items_list.thin a, .items_list.thin span
{
	font-weight: normal
}
.items_list .value
{
	float: right;
	color: #666;
}
.items_list.dark_blue li span, .items_list.dark_blue .value
{
	color: #FFF;
}
.items_list.dark_blue li
{
	border-color: #4468B2;
}
.home_box .items_list li:first-child
{
	padding-top: 12px;
}
/* --- scrolling list --- */
.scrolling_list_wrapper
{
	margin-top: 16px;
}
.scrolling_list
{
}
.scrolling_list_control_left, .scrolling_list_control_right
{
	float: left;
	width: 28px;
	height: 28px;
}
.scrolling_list_control_right
{
	margin-left: 2px;
}
.scrolling_list li
{
	width: 312px;
	color: #C5C5C5;
	background-position: left 18px;
	padding: 10px 0 10px 18px;
	line-height: 150%;
}
.scrolling_list li a
{
	clear: both;
	float: left;
	color: #666;
	border: none;
}
.footer .scrolling_list li a
{
	color: #D5D5D5;
}
.scrolling_list.latest_tweets li
{
	width: 312px;
}
.scrolling_list.latest_tweets li a
{
	float: none;
}
.scrolling_list.latest_tweets li p
{
	padding: 0;
}
.scrolling_list li .left
{
	float: left;
	width: 275px;
}
.scrolling_list li .number
{
	float: right;
	width: 30px;
	color: #666;
    padding: 8px 0;
	margin-left: 5px;
	font-size: 11px;
	text-align: center;
	line-height: 1;
}
.footer .timeago
{
	color: #42B3E5;
}
.timeago
{
	clear: both;
	display: block;
	margin-top: 2px;
	font-size: 11px;
	color: #909090;
}
.columns.full_width .scrolling_list li
{
	width: 462px;
}
.columns.full_width .scrolling_list li .left
{
	width: 425px;
}
/* --- more --- */
.more
{
	float: left;
	color: #3156A3;
	line-height: normal;
}
.more.dark_blue,
.more.light,
.more.blue
{
	padding: 5px 8px 7px;
	background-position: right center;
	color: #FFF;
	border: 1px solid #FFF;
}
.more.dark_blue:hover,
.more.light:hover,
.more.blue:hover
{
	text-decoration: none;
}
.more.dark_blue,
.more.blue:hover
{
	background-color: #42B3E5;
	border: 1px solid #42B3E5;
}
.more.dark_blue:hover
{
	background-color: #3156A3;
	border-color: #3156A3;
}
.more.light
{
	color: #666;
	border-color: #EEE;
}
.more.light:hover
{
	background-color: #FFF;
	color: #000;
	border-color: #FFF;
}
.more.blue
{
	border-color: #3156A3;
	background-color: #3156A3;
}
.more.tiny
{
	padding: 4px 8px;
	font-size: 11px;
}
.more.medium
{
	padding: 9px 15px;
}
.more.large
{
	padding: 15px 20px;
	font-size: 15px;
}
.more.icon_small_arrow
{
	padding: 5px 24px 7px 8px;
}
.more.icon_small_arrow.tiny
{
	padding: 4px 24px 4px 8px;
}
.more.icon_small_arrow.medium
{
	padding: 9px 24px 9px 15px;
}
.more.icon_small_arrow.large
{
	padding: 15px 24px 15px 20px;
}
/* --- blog --- */
.blog
{
}
.comment_box
{
	float: left;
	width: 85px;
	text-align: center;
	margin-right: 25px;
}
.columns .comment_box
{
	clear: both;
	width: 100%;
	margin-bottom: 25px;
	margin-right: 0;
}
.post
{
	float: left;
	margin-top: 30px;
}
.comment_box li
{
	width: 100%;
}
.columns .comment_box li
{
	float: left;
	width: auto;
}
.comment_box .date .value
{
	float: left;
	width: 60px;
	background-color: #3156A3;
	color: #FFF;
	padding: 9px 10px;
	font-size: 11px;
	text-align: center;
}
.comment_box .date .arrow_date,
.comment_box .arrow_comments
{
	float: right;
	width: 5px;
	height: 5px;
	background: url('/sima/images/arrow_date.png');
}
.comment_box .arrow_comments
{
	background: url('/sima/images/arrow_comments.png');
}
.columns .comment_box .date .value,
.columns .comment_box .date .arrow_date
{
	clear: both;
	float: none;
}
.columns .comment_box .date .value
{
	width: auto;
	padding: 10px 13px;
}
.comment_box .comments_number
{
	width: 80px;
	margin-top: 2px;
}
.columns .comment_box .comments_number
{
	width: auto;
	margin-left: 2px;
	margin-top: 0;
}
.comment_box .comments_number a
{
	display: block;
	text-align: center;
	font-size: 11px;
	background-color: #42B3E5;
	padding: 9px 10px;
	color: #FFF;
}
.columns .comment_box .comments_number a
{
	padding: 10px 12px;
}
.comment_box .comments_number:hover
{
	border-color: #409915;
}
.post_content
{
	float: right;
	width: 520px;
	padding-bottom: 25px;
	border-bottom: 1px solid #E0E0E0;
}
.columns .post_content
{
	width: 300px;
}
.post_content a.post_image
{
	display: block;
	margin-bottom: 27px;
}
.post_content a.post_image img
{
	display: block;
	width: 520px;
	height: auto;
	min-height: 15px;
	background: url('/sima/images/preloader.gif') no-repeat center center;
}
.post_content .gallery_box
{
	margin-top: 0;
	margin-bottom: 27px;
}
.post_content .gallery_box img
{
	width: 520px;
	height: auto;
}
.columns .post_content a.post_image img
{
	width: 300px;
}
.post_content h2
{
	margin-bottom: 24px;
}
.post_content p, .columns .post_content p
{
	line-height: 150%;
	padding-top: 0;
	padding-bottom: 1em;
}
.post_content .more
{
	clear: both;
	float: none;
	line-height: 150%;
}
.post_footer
{
	margin-top: 25px;
}
.post_footer_details
{
	float: left;
	margin-right: 20px;
	margin-bottom: 5px;
}
.post_footer_details:last-child
{
	margin-right: 0;
}
.post_footer_details li
{
	float: left;
	font-size: 11px;
	color: #909090;
	margin-right: 5px;
}
.post_footer_details li:last-child
{
	margin-right: 0;
}
.post_footer_details li a
{
	display: block;
}
.show_all
{
	margin-top: 20px;
}
.show_all .more
{
	float: right;
}
/* --- comments --- */
.comments .comments_number a
{
	float: left;
	width: 60px;
}
.comments .comments_number
{
	width: 85px;
	margin-top: 0;
}
#comments_list
{
	float: right;
}
#comments_list li.comment
{
	width: 520px;
	margin-top: 30px;
	border-bottom: 1px solid #E0E0E0;
	padding-bottom: 30px;
}
#comments_list li.comment:first-child
{
	margin-top: 0;
}
#comments_list .comment_author_avatar
{
	float: left;
	width: 73px;
	height: 73px;
	margin-right: 30px;
	border: 1px solid #E0E0E0;
}
#comments_list .comment_details
{
	float: left;
	width: 415px;
}
#comments_list .comment_details .posted_by
{
	font-size: 11px;
	color: #909090;
	line-height: 140%;
}
#comments_list .comment_details .posted_by a
{
	border: none;
}
#comments_list .comment_details p
{
	color: #666;
	line-height: 150%;
	padding: 20px 0;
}
#comments_list .reply_button
{
	line-height: 150%;
}
#comments_list .children
{
	clear: both;
	float: left;
	margin-left: 40px;
	margin-top: 30px;
}
#comments_list .children .children
{
	margin-left: 0;
}
#comments_list .children li.comment
{
	width: 480px;
	border-bottom: none;
	border-top: 1px solid #E0E0E0;
	padding-top: 30px;
	margin-top: 0;
}
#comments_list .children li.comment:last-child
{
	padding-bottom: 0;
}
#comments_list .children .comment_details
{
	width: 375px;
}
#comments_list .pagination
{
	margin-top: 20px;
}
/* --- forms --- */
.comment_form_container
{
	float: left;
	margin-left: 110px;
	margin-top: 25px;
}
.comment_form,
.contact_form
{
	float: left;
	width: 100%;
	margin-top: 30px;
}
.comment_form .left, .comment_form .right,
.contact_form .left, .contact_form .right
{
	float: left;
	width: 250px;
}
.contact_form .left, .contact_form .right
{
	width: 300px;
}
.comment_form .right
{
	float: right;
	margin-left: 20px;
}
.contact_form .right
{
	margin-left: 30px;
}
.comment_form label,
.contact_form label
{
	display: block;
	color: #909090;
	margin-top: 10px;
	margin-bottom: 10px;
}
.comment_form label.first,
.contact_form label.first
{
	margin-top: 0;
}
.comment_form input, .comment_form textarea,
.contact_form input, .contact_form textarea
{
	padding: 11px 18px;
	color: #000;
	margin: 0;
	background: #F0F0F0;
	border: none;
	border-top: 1px solid #E0E0E0;
}
.comment_form .text_input:focus, .comment_form textarea:focus,
.contact_form .text_input:focus, .contact_form textarea:focus
{
	border-color: #42B3E5;
}
.comment_form textarea
{
	width: 214px;
	height: 88px;
}
.contact_form textarea
{
	width: 594px;
}
.comment_form .text_input
{
	width: 214px;
}
.contact_form .block
{
	margin-top: 10px;
}
.contact_form .text_input
{
	width: 264px;
}
.comment_form .text_input:first-child,
.contact_form .block:first-child
{
	margin-top: 0;
}
.comment_form input[type='submit'],
.contact_form input[type='submit']
{
	float: right;
	width: 70px;
	height: 36px;
	margin-top: 20px;
	padding: 5px 0 7px;
	cursor: pointer;
	text-align: center;
	outline: none;
}
#cancel_comment
{
	display: none;
	float: right;
	font-size: 11px;
	margin-top: 32px;
	margin-right: 20px;
}
.contact_form .tabs_box_navigation.sf-menu .tabs_box_navigation_selected
{
	width: 276px;
	background-position: 275px center;
}
/* --- pagination --- */
.pagination
{
	float: right;
}
.pagination li
{
	float: left;
	margin-left: 2px;
}
.pagination li:first-child
{
	margin-left: 0;
}
.pagination li a
{
	display: block;
	height: 12px;
	color: #666;
	padding: 9px 11px 7px;
	font-size: 11px;
}
/* --- sidebar box --- */
.sidebar_box
{
	float: left;
	width: 330px;
	margin-top: 50px;
	overflow: hidden;
}
.sidebar_box.first
{
	margin-top: 0;
}
.sidebar_box .header_left, .footer_box.last .header_left
{
	width: 268px;
}
.footer_box .header_left
{
	width: 238px;
}
.sidebar_box .header_right, .footer_box .header_right
{
	width: 62px;
}
.sidebar_box .accordion
{
	margin-top: 30px;
}
.sidebar_box .accordion .item_content p
{
	padding: 0;
}
/* --- categories --- */
.categories li
{
	float: left;
	font-size: 11px;
	color: #666;
	margin-right: 2px;
	margin-bottom: 2px;
}
.categories li:last-child
{
	margin-right: 0;
}
.categories li a
{
	display: block;
	color: #666;
	padding: 8px 9px;
}
/* --- departments --- */
.accordion .ui-accordion-header h3
{
	color: #666;
	background: url('/sima/images/accordion_plus.png') no-repeat right center;
	padding-right: 13px;
}
.accordion .ui-accordion-header
{
	cursor: pointer;
	padding: 12px 13px 12px 0;
	border-bottom: 1px solid #E0E0E0;
	color: #666;
}
.accordion .ui-accordion-header.ui-state-hover h3
{
	color: #3156A3;
}
.accordion .ui-accordion-header.ui-state-active
{
	border-bottom: 1px solid #3156A3;
	background: #3156A3;
	padding: 10px 12px;
	margin-top: -1px;
}
.accordion .ui-accordion-header.ui-state-active h3
{
	background: url('/sima/images/accordion_minus.png') no-repeat right center;
	color: #FFF;
}
.accordion .ui-accordion-content
{
	padding: 20px 0;
	color: #666;
	line-height: 150%;
}
.accordion.medium .ui-accordion-content
{
	padding: 30px 0;
}
.accordion.wide .ui-accordion-content
{
	padding: 0 0 30px;
}
.accordion.wide .tabs_navigation
{
	margin-bottom: 30px;
}
.item_footer
{
	margin-top: 20px;
	line-height: 1;
}
.accordion .ui-accordion-content .item_footer .more.blue
{
	float: right;
	margin-right: 2px;
}
.accordion .ui-accordion-content .item_footer .more.blue:first-child
{
	margin-right: 0;
}
.accordion.wide .about_img
{
	width: 500px;
	height: auto;
	margin-bottom: 23px;
}
.accordion .doctors_list li.item
{
	margin-top: 30px;
}
.accordion .doctors_list li.item:first-child
{
	margin-top: 0;
}
/* --- item content --- */
.item_content
{
	margin-top: 30px;
	list-style: none;
}
.page_margin_top.item_content:first-child
{
	margin-top: 30px;
}
.item_content:first-child
{
	margin-top: 0;
}
.item_content .text
{
	color: #666;
}
.item_content .text h3
{
	margin-bottom: 10px;
}
.features_image,
.features_image img
{
	display: block;
	width: 76px;
	height: 88px;
}
.item_content .thumb_image, .item_content .thumb_image img
{
	display: block;
	width: 75px;
	height: 75px;
}
.item_content .thumb_image,
.features_image
{
	float: left;
	margin-right: 30px;
}
.sidebar_box .accordion .item_content .thumb_image,
.sidebar_box .accordion .item_content .features_image
{
	margin-right: 20px;
}
.item_content .text
{
	float: right;
	width: 235px;
	line-height: 150%;
}
.columns .item_content .text
{
	width: 374px;
}
/* --- tabs --- */
.ui-tabs-hide
{
	display: none;
}
.ui-tabs-panel p
{
	padding: 24px 0 25px;
}
/* tabs navigation */
.tabs_navigation
{
	float: none;
	clear: both;
	width: 100%;
}
.tabs_navigation li
{
	float: left;
	margin-top: 0;
	margin-right: 20px;
}
.tabs_navigation li:last-child
{
	margin-right: 0;
}
.tabs_navigation li a
{
	width: auto;
	display: block;
	text-align: center;
	color: #666;
	padding: 8px 0;
	border-bottom: 1px solid #E0E0E0;
}
.tabs_navigation li a:hover,
.tabs_navigation li a.selected,
.tabs_navigation li.ui-tabs-active a
{
	border-bottom-width: 2px;
	padding-bottom: 7px;
}
/* --- tabs box navigation --- */
.tabs_box_navigation.sf-menu
{
	float: none;
	clear: both;
}
.tabs_box_navigation.sf-menu li.submenu:hover:after
{
	background: none;
}
.tabs_box_navigation.sf-menu .tabs_box_navigation_selected
{
	width: 256px;
	height: auto;
    padding: 13px 12px;
	background: url("/sima/images/dropdown_plus.png") no-repeat scroll 255px center #3156A3;
    color: #FFFFFF;
	cursor: pointer;
}
.tabs_box_navigation.sf-menu .tabs_box_navigation_selected:hover
{
	background-color: #42B3E5;
	background-image: url("/sima/images/accordion_minus.png"); 
}
.tabs_box_navigation.sf-menu li:hover ul, .tabs_box_navigation.sf-menu li.sfHover ul
{
	top: 38px;
	border: 1px solid #42B3E5;
}
.tabs_box_navigation_hidden
{
	display: none;
}
/* --- columns --- */
.columns
{
}
.column_left, .column_right
{
	width: 300px;
}
.column_left
{
	float: left;
	margin-right: 30px;
}
.column_right
{
	float: right;
}
.columns p
{
	clear: both;
	padding: 25px 0;
}
.columns.full_width .column_left,
.columns.full_width .column_right
{
	width: 480px;
}
.columns.no_width .column_left,
.columns.no_width .column_right
{
	width: auto;
}
.columns.no_width .column_left
{
	margin-right: 0;
}
.columns.full_width .columns .column_left,
.columns.full_width .columns .column_right
{
	width: 225px;
}
.page_right .columns .column_left,
.page_right .columns .column_right
{
	width: 132px;
}
.page_right .columns.no_padding .column_left,
.page_right .columns.no_padding .column_right
{
	width: 150px;
	line-height: 150%;
}
/* --- columns_3 --- */
.columns_3 .column
{
	float: left;
	width: 310px;
	margin-left: 30px;
}
.columns_3 .column:first-child
{
	margin-left: 0;
}
.columns_3 .item_content .features_image, .columns_3 .features_image img,
.features_icons_small .features_image, .features_icons_small .features_image img
{
	width: 57px;
	height: 66px;
}
.columns_3 .item_content .text
{
	width: 223px;
}
/* --- dropcap --- */
.dropcap
{
	line-height: 150%;
}
.dropcap .dropcap_label
{
	float: left;
	padding: 7px 13px;
	background-color: #3156A3;
	text-align: center;
	margin-right: 15px;
}
.dropcap .dropcap_label h3
{
	color: #FFF;
}
/* --- list --- */
.list
{
	clear: both;
	padding: 25px 0;
}
.list li
{
	line-height: 150%;
	background-position: left center;
	padding: 5px 0 5px 18px;
}
.list li a
{
	border: none;
}
.list.top_marker li
{
	background-position: left 8px;
}
.sidebar_box .list
{
	padding-bottom: 0;
}
/* --- info list --- */
.info_list li
{
	padding: 10px 0;
	border-bottom: 1px solid #E0E0E0;
	line-height: 150%;
}
.info_list li:first-child
{
	padding-top: 0;
}
.info_list li label
{
	float: left;
	width: 92px;
	color: #000;
	font-weight: bold;
}
.info_list li .text
{
	float: left;
	width: 388px;
	color: #666;
}
.accordion.wide .columns .info_list li .text
{
	width: 208px;
}
/* --- announcement --- */
.announcement
{
	background: #F0F0F0;
	padding: 20px 30px;
}
.announcement p
{
	padding: 10px 0;
}
.announcement .vertical_align
{
	height: 69px;
}
/* --- pricing plan --- */
.pricing_plan
{
	clear: both;
	float: left;
	margin-top: 13px;
}
.pricing_plan li
{
	width: 217px;
	padding-left: 18px;
}
/* --- timetable --- */
.timetable
{
	width: 100%;
	font-size: 11px;
	color: #666;
	margin-top: 30px;
}
.timetable tbody tr
{
	background: url('/sima/images/dotted_line.png') left top repeat-x;
}
.timetable th,
.timetable td:first-child
{
	text-align: center;
	vertical-align: middle;
}
.timetable th, .timetable td
{
	width: 12.5%;
	padding: 10px 15px 12px;
}
.timetable td
{
	vertical-align: top;
}
.timetable .last
{
	padding-right: 0;
}
.timetable .hours
{
	color: #A6C3FF;
}
.timetable .event
{
	background-color: #3156A3;
	color: #FFF;
	border-bottom: 1px solid #FFF;
	border-right: 1px solid #FFF;
	line-height: 140%;
}
.timetable .event a
{
	display: block;
	color: #FFF;
	font-weight: bold;
	margin-bottom: 2px;
}
.timetable .row_gray
{
	background-color: #F0F0F0;
}
.timetable .event:hover
{
	background-color: #42B3E5;
}
.timetable .event:hover .hours
{
	color: #FFF;
}
.timetable.small
{
	display: none;
	font-size: 13px;
}
/* --- tip/tooltip/qtip --- */
.tip
{
	background: url('/sima/images/icon_tip.png') #3156A3 no-repeat 15px center;
	color: #FFF;
	padding: 10px 10px 10px 35px;
	float: right;
	border-radius: 15px;
	-moz-border-radius: 15px;
	-webkit-border-radius: 15px;
}
.tooltip
{
	cursor: pointer;
}
.tooltip .tooltip_text
{
	display: block;
	padding-bottom: 15px;
	visibility: hidden;
    opacity: 0;
	position: absolute;
	z-index: 1000;
	left: -19px;
	bottom: 100%;
	/* CSS3 Transitions */
	-webkit-transition-duration: 0.25s;
	-moz-transition-duration: 0.25s;
	-o-transition-duration: 0.25s;
	-ms-transition-duration: 0.25s;
	transition-duration: 0.25s;
	-webkit-transition-timing-function: cubic-bezier(0.35,0,0.35,1);
	-moz-transition-timing-function: cubic-bezier(0.35,0,0.35,1);
	-o-transition-timing-function: cubic-bezier(0.35,0,0.35,1);
	-ms-transition-timing-function: cubic-bezier(0.35,0,0.35,1);
	transition-timing-function: cubic-bezier(0.35,0,0.35,1);
	/* CSS3 Transitions */
	-webkit-transition-property: opacity, visibility;
	-moz-transition-property: opacity, visibility;
	-o-transition-property: opacity, visibility;
	-ms-transition-property: opacity, visibility;
	transition-property: opacity, visibility;
	background: url('/sima/images/tooltip_arrow.png') no-repeat 15px bottom;
}
.tooltip .tooltip_content
{
	background: #42B3E5;
	color: #FFF;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	padding: 10px 15px 12px;
	line-height: 150%;
	font-family: arial, sans-serif;
	font-size: 11px;
	text-align: left;
}
.tooltip:hover .tooltip_text
{	
	visibility: visible;
	opacity: 1;
}
.ui-tooltip-error .ui-tooltip-content,
.ui-tooltip-success .ui-tooltip-content
{
	font-size: 13px;
	font-family: arial;
	color: #FFF;
}

.ui-tooltip-error .ui-tooltip-content,
.ui-tooltip-success .ui-tooltip-content
{
	border:none; 
}

.ui-tooltip-content
{
	padding:10px 20px 10px 20px;
}

.ui-tooltip-error .ui-tooltip-content
{
	background:#E9431C;
}

.ui-tooltip-success .ui-tooltip-content
{
	background:#61911B;
}
/* --- controls --- */
.controls
{
	padding: 0;
}
.controls li
{
	float: left;
}
.controls .open_details, .controls .open_lightbox, .controls .open_video_lightbox, .controls .open_iframe_lightbox, .controls .close, .controls .prev, .controls .next
{
	display: block;
	width: 40px;
	height: 40px;
	background-position: 0 0;
	background-repeat: no-repeat;
}
.controls .close, .controls .prev, .controls .next
{
	width: 30px;
	height: 30px;
	border: 1px solid #E0E0E0;
	background-position: center;
}
.controls .open_details:hover, .controls .open_lightbox:hover, .controls .open_video_lightbox:hover, .controls .open_iframe_lightbox:hover
{
	background-position: 0 -40px;
}
.controls .open_details
{
	background-image: url('/sima/images/media_icon_details.png');
	margin-left: 0;
}
.controls .open_lightbox
{
	background-image: url('/sima/images/media_icon_image.png');
}
.controls .open_video_lightbox
{
	background-image: url('/sima/images/media_icon_video.png');
}
.controls .open_iframe_lightbox
{
	background-image: url('/sima/images/media_icon_url.png');
}
.controls .close
{
	background-image: url('/sima/images/close_icon.png');
}
.slider_navigation .more
{
	display: none;
}
/* --- isotope gallery --- */
.isotope-item 
{
	z-index: 2;
}
.isotope-hidden.isotope-item 
{
	pointer-events: none;
	z-index: 1;
}
.isotope,
.isotope .isotope-item 
{
	-webkit-transition-duration: 0.8s;
	-moz-transition-duration: 0.8s;
	-ms-transition-duration: 0.8s;
	-o-transition-duration: 0.8s;
	transition-duration: 0.8s;
}

.isotope 
{
	-webkit-transition-property: height, width;
	-moz-transition-property: height, width;
	-ms-transition-property: height, width;
	-o-transition-property: height, width;
	transition-property: height, width;
}

.isotope .isotope-item 
{
	-webkit-transition-property: -webkit-transform, opacity;
	-moz-transition-property:    -moz-transform, opacity;
	-ms-transition-property:     -ms-transform, opacity;
	-o-transition-property:         top, left, opacity;
	transition-property:         transform, opacity;
}
.isotope.no-transition,
.isotope.no-transition .isotope-item,
.isotope .isotope-item.no-transition 
{
	-webkit-transition-duration: 0s;
	-moz-transition-duration: 0s;
	-ms-transition-duration: 0s;
	-o-transition-duration: 0s;
	transition-duration: 0s;
}
.gallery
{
	margin-left: auto;
	margin-right: auto;
}
.gallery_box
{
	display: block;
	position: relative;
	cursor: pointer;
	margin-top: 30px;
	overflow: hidden;
}
.accordion .gallery_box
{
	margin-top: 0;
}
.gallery_box img
{
	display: block;
	width: 225px;
	height: 150px;
	background: url('/sima/images/preloader.gif') no-repeat center center;
}
.gallery_2_columns .gallery_box img
{
	width: 480px;
	height: 300px;
}
.gallery_3_columns .gallery_box img
{
	width: 310px;
	height: 200px;
}
.gallery_2_columns_sidebar .gallery_box img
{
	width: 300px;
	height: 190px;
}
.accordion.wide .gallery_box img
{
	width: 300px;
	height: 190px;
}
.gallery_box .description
{
	position: relative;
	z-index: 1;
	background-color: #F0F0F0;
	padding: 15px;
	background-position: 220px center;
	text-align: center;
	line-height: normal;
}
.gallery .description h3,
.gallery_box .description h3,
.gallery_box .description h5
{
	font-family: 'arial';
	font-size: 13px;
}
.gallery .description h3,
.gallery_box .description h3
{
	font-weight: bold;
}
.gallery_box .description h5
{
	margin-top: 5px;
	color: #666666;
}
.gallery_box:hover .description
{
	background-color: #42B3E5;
}
.gallery_box:hover h3,
.gallery_box:hover h5
{
	color: #FFF;
}
.gallery_box .controls
{
	display: none;
	position: absolute;
	padding: 10px;
	background: transparent;
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#3F000000,endColorstr=#3F000000)";/* IE8 */    
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3F000000,endColorstr=#3F000000);/* IE6 & 7 */ 
	background: rgba(0, 0, 0, 0.25);
	zoom: 1;
}
.gallery_box:hover .controls
{
	display: block;
}
.gallery_box .item_details
{
	width: 225px;
	border-bottom: 1px solid #E0E0E0;
	color: #666666;
	text-align: center;
	line-height: 150%;
	padding: 20px 0;
}
.gallery_box:hover .item_details
{
	border-color: #42B3E5;
	border-width: 2px;
	padding-bottom: 19px;
}
.gallery_box .social_icons,
.gallery_item_details_list .social_icons
{
	margin-top: 10px;
}
.gallery_item_details_list
{
	padding-bottom: 30px;
	border-bottom: 1px solid #E0E0E0;
}
ul.gallery_item_details_list
{
	height: 0;
	overflow: hidden;
	display: none;
}
.gallery_item_details_list li.gallery_item_details
{
	display: none;
	position: relative;
}
.gallery_item_details_list .gallery_box
{
	width: 480px;
	margin-right: 30px;
	margin-top: 0;
}
.gallery_item_details_list .details_box
{
	width: 480px;
}
.gallery_item_details_list .details_box .controls li
{
	margin-left: 2px;
}
.gallery_item_details_list .details_box .controls li:first-child
{
	margin-left: 0;
}
.gallery_item_details_list .gallery_box img
{
	display: block;
	width: 480px;
	height: auto;
	background: url('/sima/images/preloader.gif') no-repeat center center;
}
.gallery_item_details_list .gallery_box .slider_navigation,
.post_content .gallery_box .slider_navigation
{
	width: 90%;
	margin-left: 5%;
	margin-right: 5%;
}
.gallery_item_details_list .gallery_box .slider_navigation .slider_control,
.post_content .gallery_box .slider_navigation .slider_control,
.gallery_item_details_list .gallery_box .slider_control a,
.post_content .gallery_box .slider_control a
{
	height: 30px;
}
.gallery_item_details_list .details_box .subheader
{
	color: #59B42D;
	font-family: 'Droid Serif';
	font-style: italic;
	margin-top: 5px;
}
.gallery_item_details_list .details_box p
{
	clear: both;
	color: #666666;
	line-height: 150%;
	padding: 20px 0;
}
.gallery_item_details_list .details_box .columns
{
	clear: both;
}
.gallery_item_details_list .details_box .column_left,
.gallery_item_details_list .details_box .column_right
{
	width: 210px;
}
.gallery_item_details_list .details_box .list
{
	line-height: 150%;
	color: #C5C5C5;
}
.page_left .gallery_item_details_list .gallery_box
{
	width: 630px;
	margin-right: 0;
}
.page_left .gallery_item_details_list .column_right
{
	margin-top: 30px;
}
.page_left .gallery_item_details_list .details_box
{
	width: 630px;
}
.page_left .gallery_item_details_list .gallery_box img
{
	width: 630px;
	height: auto;
}
/* --- photostream --- */
.photostream
{
	width: 340px;
	margin-top: 20px;
}
.photostream .gallery_box
{
	float: left;
	margin-top: 10px;
	margin-right: 10px;
}
.photostream .gallery_box img
{
	width: 75px;
	height: 75px;
}
/* --- scrolling gallery --- */
.gallery.horizontal_carousel li.gallery_box
{
	float: left;
	margin-right: 30px;
}
/* --- image carousel --- */
.image_carousel li
{
	float: left;
}
/* --- fancybox --- */
#fancybox-title-float-main
{
	background: #FFF;
	padding: 0;
	color: #000;
}
/* --- contact --- */
.contact_map
{
	width: 100%;
	height: 300px;
}
/* --- contact data --- */
.contact_data li
{
	padding: 10px 0;
	color: #666;
	border-bottom: 1px solid #E0E0E0;
}
.contact_data li:first-child
{
	border-top: 1px solid #E0E0E0;
}
.contact_data li .social_icon
{
	float: left;
}
.contact_data li:hover .social_icon
{
	transition: background-position .3s ease;
	-moz-transition: background-position .3s ease;
	-webkit-transition: background-position .3s ease;
	-o-transition: background-position .3s ease; 
	background-position: 0 -29px;
}
.contact_data li .value
{
	float: left;
	clear: none;
	padding: 5px 0;
	margin-left: 10px;
}
/* --- footer banner box --- */
.footer_banner_box_container
{
}
.footer_banner_box
{
	float: left;
	width: 270px;
	height: 60px;
	padding: 20px 30px;
}
.footer_banner_box h2,
.footer_banner_box h2 a
{
	color: #FFF;
}
.footer_banner_box a
{
	color: #FFF;
	background-position: right center;
	padding-right: 17px;
}
.footer_banner_box.super_light_blue
{
	background-color: #42B3E5;
}
.footer_banner_box.light_blue
{
	background-color: #0384CE;
}
.footer_banner_box.blue
{
	background-color: #3156A3;
}
.footer_banner_box .more.light
{
	color: #FFF;
}
.footer_banner_box .more.light:hover
{
	background-image: url('/sima/images/icon_arrow_margin_right_white.png');
}
/* --- footer box --- */
.footer_box_container
{
	margin-top: 30px;
}
.footer_box
{
	float: left;
	width: 300px;
	padding-right: 30px;
	color: #909090;
}
.footer_box.last
{
	width: 330px;
	padding-right: 0;
}
.footer_box p
{
	color: #909090;
}
/* --- footer contact info --- */
.footer_contact_info_container
{
	clear: both;
}
.footer_contact_info_row
{
	clear: both;
	padding-top: 5px;
}
.footer_contact_info_row:first-child
{
	padding-top: 0;
}
.footer_contact_info_left
{
	float: left;
	width: 150px;
}
.footer_contact_info_right
{
	float: right;
	width: 120px;
	margin-left: 20px;
}
/* --- opening hours --- */
.opening_hours
{
	margin-top: 12px;
}
/* --- footer recent posts --- */
.footer_recent_posts
{
	
}
/* --- copyright area --- */
.copyright_area
{
	border-top: 1px solid #353535;
	padding: 15px 0;
	font-size: 11px;
	color: #909090;
	margin-top: 15px;
}
.copyright_left
{
	float: left;
}
.copyright_right
{
	float: right;
}
.copyright_right .scroll_top
{
	font-size: 11px;
	color: #C5C5C5;
	background-position: right center;
	padding-right: 15px;
}
/* --- links --- */
.list li a
{
	color: #666;
}
.list li a:hover,
.scrolling_list li a:hover .left
{
	color: #000;
}
.header_right a.scrolling_list_control_left, 
.header_right a.scrolling_list_control_right,
.pagination li a,
.categories li a,
.scrolling_list li .number
{
	border: 1px solid #E0E0E0;
}
.footer .header_right a.scrolling_list_control_left, 
.footer .header_right a.scrolling_list_control_right
{
	border-color: #353535;
}
.footer .header_right a.scrolling_list_control_left:hover, 
.footer .header_right a.scrolling_list_control_right:hover
{
	border-color: #42B3E5;
	color: #fff;
}
.header_right a.scrolling_list_control_left:hover, 
.header_right a.scrolling_list_control_right:hover,
.pagination li a:hover,
.pagination li.selected a,
.tabs_navigation li a:hover,
.tabs_navigation li a.selected,
.tabs_navigation li.ui-tabs-active a,
.categories li a:hover,
.scrolling_list li a:hover .number,
.controls .close:hover, .controls .prev:hover, .controls .next:hover
{
	border-color: #42B3E5;
	color: #000;
}
.bread_crumb li,
#comments_list .comment_details .posted_by a,
.bread_crumb li a,
.post_footer_details li a,
#cancel_comment
{
	color: #909090;
	text-decoration: underline;
}
.post_footer_details li a:hover,
#comments_list .comment_details .posted_by a:hover,
#cancel_comment:hover
{
	color: #3156A3;
}
.sf-menu a:hover,
.controls .prev:hover, 
.controls .next:hover,
.controls .close:hover,
.comments_number:hover,
.scrolling_list_control_left:hover, 
.scrolling_list_control_right:hover,
.home_box #upcoming_class_prev:hover, 
.home_box #upcoming_class_next:hover,
.social_icon:hover,
.pagination li a:hover,
.tabs_navigation li a:hover,
.footer a.social_icon:hover
{
	text-decoration: none;
}
.footer a:hover,
.post_content h2 a:hover,
.list li a:hover,
.footer_banner_box a:hover,
.timetable .event a:hover,
.items_list li a:hover,
.item_content .text h3 a:hover,
.scrolling_list li a:hover .left
{
	text-decoration: underline;
}

a.social_icon,
.header_left a,
.sf-menu li ul li a,
.slider_navigation .slider_control a,
.home_box h2 a,
.comment_box .comments_number a,
.post_content a.post_image,
.post_content h2 a,
.post_footer_details li a,
.item_content .thumb_image,
.features_image,
.features_image:hover,
.item_content .text h3 a,
.footer a,
.footer_banner_box h2 a,
.footer_banner_box a,
.bread_crumb li a,
.controls a,
#fancybox-wrap a,
#cancel_comment,
.timetable .event a,
.items_list li a,
.ui-datepicker .ui-datepicker-prev, 
.ui-datepicker .ui-datepicker-next,
.gmnoprint a
{
	border: none;
}    
    
</style>










    <?php 
	  if($_POST['fechaSolicitud']){
	   $fecha2=$_POST['fechaSolicitud'];
	  } else {
	   
	   $fecha2=$fecha1;
	  } ?>



<!-Hoja de estilos del calendario --> 
  <link rel="stylesheet" type="text/css" media="all" href="/sima/calendario/calendar-blue.css" title="win2k-cold-1" /> 
  <!-- librer�a principal del calendario --> 
 <script type="text/javascript" src="/sima/calendario/calendar.js"></script> 

 <!-- librer�a para cargar el lenguaje deseado --> 
  <script type="text/javascript" src="/sima/calendario/lang/calendar-es.js"></script> 

  <!-- librer�a que declara la funci�n Calendar.setup, que ayuda a generar un calendario en unas pocas l�neas de c�digo --> 
  <script type="text/javascript" src="/sima/calendario/calendar-setup.js"></script> 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php
$estilos= new muestraEstilos();
$estilos->styles();

?>
</head>

<body>
    















<form id="form2" name="form2" method="post" >

    
    
 <p align="center"><span class="Estilo25">Escoje la Fecha
      <input name="fechaSolicitud" type="text" class="Estilo24" id="campo_fecha"
	  value="<?php 
	  echo $fecha2;
	  ?>" size="10" readonly="" onChange="javascript:this.form.submit();"/>
    <input name="button" type="image" src="/sima/imagenes/calendario.png" id="lanzador" value="..." />    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<div class="page relative">
	<div class="page_layout page_margin_top clearfix">
		
	
		<div class="clearfix tabs page_margin_top">
			
			
			<div id="all-departments">
				
             
                            
                            
                            
                            
                            

						

                      
<table class="timetable">
					<thead>
						<tr>
							<th></th>
							<th>DOMINGO</th>
							<th>LUNES</th>
							<th>MARTES</th>
							<th>MIERCOLES</th>
							<th>JUEVES</th>
							<th>VIERNES</th>
							<th>SABADO</th>
						</tr>
					</thead>
    
    
					<tbody>
                                            
                                            
                                            
                                            
<?php    
if($_POST['fechaSolicitud']){ 

$f1=explode("/", $_POST['fechaSolicitud']);
//haces una cadena en formato mes/dia/a�o
$f2=$f1[1].$f1[0].$f1[2];
$fech=date("w",strtotime($f2));
//$fech tendra un numero del 0 al 6 ke son los dias de la semana donde
//0=Domingo y 6=Sabado
if($fech==0){
$dia='Sunday';
}elseif($fech==1){
$dia='Monday';
}elseif($fech==2){
$dia='Tuesday';
}elseif($fech==3){
$dia='Wednesday';
}elseif($fech==4){
$dia='Thursday';
}elseif($fech==5){
$dia='Friday';
}elseif($fech==6){
$dia='Saturday';
}
}





//***********************



$sSQL= "SELECT *
FROM
medicosCitas
WHERE 
entidad='".$entidad."'
    and
id_medico='".trim($_GET['id_medico'])."'
and
almacen='".$_GET['almacen']."'
group by guiaHora
order by guiaHora
";



if($result=mysql_db_query($basedatos,$sSQL)){
while($myrow = mysql_fetch_array($result)){
$a[0]+=1;
    
    
print '<tr class="'.$class.'">';
print '<td>';    
print $myrow['codHora'];
print '</td>';
print '</tr>';
}
}
?>                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
						<tr class="row_gray">
							<td>
								06.00 - 07.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								07.00 - 08.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								08.00 - 09.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								09.00 - 10.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								10.00 - 11.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								11.00 - 12.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								12.00 - 13.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								13.00 - 14.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="3" class="event">
								<a href="?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">Outpatient Rehabilitation</a>
								<span class="hours">13.00 - 16.00</span><br />Robert van Hex, Gym Arena
							</td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								14.00 - 15.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								15.00 - 16.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								16.00 - 17.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="3" class="event">
								<a href="?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">Outpatient Rehabilitation</a>
								<span class="hours">16.00 - 19.00</span><br />Robert van Hex, Gym Arena
							</td>
						</tr>
						<tr>
							<td>
								17.00 - 18.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								18.00 - 19.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								19.00 - 20.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="8" class="last">
								<div class="tip">
									Hover over table block to get additional info
								</div>
							</td>
						</tr>
					</tbody>
				</table>                               
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
<table class="timetable">
					<thead>
						<tr>
							<th></th>
							<th>MONDAY</th>
							<th>TUESDAY</th>
							<th>WEDNESDAY</th>
							<th>THURSDAY</th>
							<th>FRIDAY</th>
							<th>SATURDAY</th>
							<th>SUNDAY</th>
						</tr>
					</thead>
					<tbody>
						<tr class="row_gray">
							<td>
								06.00 - 07.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								07.00 - 08.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								08.00 - 09.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								09.00 - 10.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								10.00 - 11.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								11.00 - 12.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								12.00 - 13.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								13.00 - 14.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="3" class="event">
								<a href="?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">Outpatient Rehabilitation</a>
								<span class="hours">13.00 - 16.00</span><br />Robert van Hex, Gym Arena
							</td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								14.00 - 15.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								15.00 - 16.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								16.00 - 17.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="3" class="event">
								<a href="?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">Outpatient Rehabilitation</a>
								<span class="hours">16.00 - 19.00</span><br />Robert van Hex, Gym Arena
							</td>
						</tr>
						<tr>
							<td>
								17.00 - 18.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								18.00 - 19.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								19.00 - 20.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="8" class="last">
								<div class="tip">
									Hover over table block to get additional info
								</div>
							</td>
						</tr>
					</tbody>
				</table>                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <table class="timetable">
					<thead>
						<tr>
							<th></th>
							<th>DOMINGO</th>
							<th>LUNES</th>
							<th>MARTES</th>
							<th>MIERCOLES</th>
							<th>JUEVES</th>
							<th>VIERNES</th>
							<th>SABADO</th>
						</tr>
					</thead>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
					<tbody>
						<tr class="row_gray">
							<td>
								06.00 - 07.00
							</td>
							
                                                        
                                                        
                                                        
                                                        <td rowspan="1" class="event tooltip">
								<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Helath Care</a>
								<span class="hours">06.00 - 07.00</span><br />Ann Blyumin, Office 367, Hall A
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
										06.00 - 07.00<br />
										Ann Blyumin,
										Office 367, Hall A
									</div>
								</div>
							</td>
                                                        
                                                        
                                                        
                                                        
							<td rowspan="1" class="event tooltip">
								<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
								<span class="hours">06.00 - 07.00</span><br />Ann Blyumin, Office 367, Hall A
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
										06.00 - 07.00<br />
										Ann Blyumin,
										Office 367, Hall A
									</div>
								</div>
							</td>
                                                        
                                                        
                                                        
                                                        
							<td></td>
							<td rowspan="4" class="event tooltip">
								<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
								<span class="hours">06.00 - 10.00</span><br />John D. Tom, Office 6, Hall B
								<br/><br/><br/>
								<a href="?page=departments#ophthalmology-clinic" title="Ophthalmology Clinic">Ophthalmology Clinic</a>
								<span class="hours">06.30 - 07.30</span><br />Sue Collins, Office 114, Hall C
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
										06.00 - 10.00<br />
										John D. Tom,
										Office 6, Hall B
										<br/><br/>
										<a href="?page=departments#ophthalmology-clinic" title="Ophthalmology Clinic">Ophthalmology Clinic</a>
										06.30 - 07.30<br />
										Sue Collins,
										Office 114, Hall C
									</div>
								</div>
							</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
						<tr>
							<td>
								07.00 - 08.00
							</td>
							<td rowspan="2" class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">07.00 - 09.00</span><br />Robert Brown, Office 224, Hall B
							</td>
							<td rowspan="2" class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">07.00 - 09.00</span><br />Robert Brown, Office 224, Hall B
							</td>
							<td rowspan="2" class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">07.00 - 09.00</span><br />Robert Brown, Office 224, Hall B
							</td>
							<td rowspan="4" class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">07.00 - 11.00</span><br />Robert Brown, Office 224, Hall B
							</td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								08.00 - 09.00
							</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								09.00 - 10.00
							</td>
							<td></td>
							<td rowspan="2" class="event">
								<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">Pediatric Clinic</a>
								<span class="hours">09.00 - 11.00</span><br />Clare Mitchell, Office 112, Hall C
							</td>
							<td></td>
							<td rowspan="1" class="event tooltip">
								<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
								<span class="hours">09.00 - 10.00</span><br />Robert van Hex, Office 207, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
										09.00 - 10.00<br />
										Robert van Hex,
										Office 207, Hall B
									</div>
								</div>
							</td>
							<td rowspan="1" class="event tooltip">
								<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
								<span class="hours">09.00 - 10.00</span><br />Robert van Hex, Office 207, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
										09.00 - 10.00<br />
										Robert van Hex,
										Office 207, Hall B
									</div>
								</div>
							</td>
						</tr>
						<tr class="row_gray">
							<td>
								10.00 - 11.00
							</td>
							<td rowspan="3" class="event">
								<a href="?page=departments#laryngological-clinic" title="Laryngological Clinic">Laryngological Clinic</a>
								<span class="hours">10.00 - 13.00</span><br />Earlene Milone, Office 150, Hall B
							</td>
							<td rowspan="2" class="event">
								<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">Pediatric Clinic</a>
								<span class="hours">10.00 - 12.00</span><br />Clare Mitchell, Office 112, Hall C
							</td>
							<td></td>
							<td class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">10.00 - 11.00</span><br />Robert Brown, Office 224, Hall B
							</td>
							<td class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">10.00 - 11.00</span><br />Robert Brown, Office 224, Hall B
							</td>
						</tr>
						<tr>
							<td>
								11.00 - 12.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								12.00 - 13.00
							</td>
							<td></td>
							<td></td>
							<td rowspan="1" class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">12.00 - 13.00</span><br />Tim Duncan, Office 224, Hall B
							</td>
							<td rowspan="4" class="event tooltip">
								<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
								<span class="hours">12.00 - 16.00</span><br />John D. Tom, Office 6, Hall B
								<br/><br/><br/>
								<a href="?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">Outpatient Rehabilitation</a>
								<span class="hours">13.00 - 16.00</span><br />Robert van Hex, Gym Arena
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
										12.00 - 16.00<br />
										John D. Tom,
										Office 6, Hall B
										<br/><br/>
										<a href="?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">Outpatient Rehabilitation</a>
										13.00 - 16.00<br />
										Robert van Hex,
										Gym Arena
									</div>
								</div>
							</td>
							<td rowspan="1" class="event">
								<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">Pediatric Clinic</a>
								<span class="hours">12.00 - 13.00</span><br />Clare Mitchell, Office 112, Hall C
							</td>
							<td rowspan="1" class="event">
								<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">Pediatric Clinic</a>
								<span class="hours">12.00 - 13.00</span><br />Clare Mitchell, Office 112, Hall C
							</td>
						</tr>
						<tr>
							<td>
								13.00 - 14.00
							</td>
							<td></td>
							<td rowspan="2" class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">13.00 - 15.00</span><br />Tim Duncan, Office 224, Hall B
							</td>
							<td rowspan="1" class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">13.00 - 14.00</span><br />Tim Duncan, Office 224, Hall B
							</td>
							<td rowspan="4" class="event">
								<a href="?page=departments#laryngological-clinic" title="Laryngological Clinic">Laryngological Clinic</a>
								<span class="hours">13.00 - 17.00</span><br />Earlene Milone, Office 150, Hall B
							</td>
							<td rowspan="4" class="event">
								<a href="?page=departments#laryngological-clinic" title="Laryngological Clinic">Laryngological Clinic</a>
								<span class="hours">13.00 - 17.00</span><br />Earlene Milone, Office 150, Hall B
								<br/><br/><br/>
								<a href="?page=departments#ophthalmology-clinic" title="Ophthalmology Clinic">Ophthalmology Clinic</a>
								<span class="hours">13.00 - 17.00</span><br />Sue Collins, Office 114, Hall C
							</td>
							<td rowspan="1" class="event tooltip">
								<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
								<span class="hours">13.00 - 14.00</span><br />John D. Tom, Office 6, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
										13.00 - 14.00<br />
										John D. Tom,
										Office 6, Hall B
									</div>
								</div>
							</td>
						</tr>
						<tr class="row_gray">
							<td>
								14.00 - 15.00
							</td>
							<td></td>
							<td rowspan="2" class="event tooltip">
								<a href="?page=departments#cardiac-clinic" title="Cardiac Clinic">Cardiac Clinic</a>
								<span class="hours">14.00 - 16.00</span><br />John D. Tom, Office 25, Hall A
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#cardiac-clinic" title="Cardiac Clinic">Cardiac Clinic</a>
										14.00 - 16.00<br />
										John D. Tom,
										Office 25, Hall A
									</div>
								</div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td>
								15.00 - 16.00
							</td>
							<td rowspan="1" class="event">
								<a href="?page=departments#dental-clinic" title="Dental Clinic">Dental Clinic</a>
								<span class="hours">15.00 - 16.00</span><br />Norma Blueman, Office 8, Hall A
							</td>
							<td rowspan="4" class="event tooltip">
								<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
								<span class="hours">15.00 - 19.00</span><br />John D. Tom, Office 6, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
										15.00 - 19.00<br />
										John D. Tom,
										Office 6, Hall B
									</div>
								</div>
							</td>
							<td rowspan="4" class="event tooltip">
								<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
								<span class="hours">15.00 - 19.00</span><br />John D. Tom, Office 6, Hall B
								<br/><br/><br/>
								<a href="?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">Outpatient Rehabilitation</a>
								<span class="hours">16.00 - 19.00</span><br />Robert van Hex, Gym Arena
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
										15.00 - 19.00<br />
										John D. Tom,
										Office 6, Hall B
										<br/><br/>
										<a href="?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">Outpatient Rehabilitation</a>
										16.00 - 19.00<br/>
										Robert van Hex,
										Gym Arena
									</div>
								</div>
							</td>
						</tr>
						<tr class="row_gray">
							<td>
								16.00 - 17.00
							</td>
							<td rowspan="2" class="event tooltip">
								<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
								<span class="hours">16.00 - 18.00</span><br />John D. Tom, Office 6, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
										16.00 - 18.00<br />
										John D. Tom,
										Office 6, Hall B
									</div>
								</div>
							</td>
							<td class="event">
								<a href="?page=departments#dental-clinic" title="Dental Clinic">Dental Clinic</a>
								<span class="hours">16.00 - 17.00</span><br />Norma Blueman, Office 8, Hall A
							</td>
							<td class="event">
								<a href="?page=departments#dental-clinic" title="Dental Clinic">Dental Clinic</a>
								<span class="hours">16.00 - 17.00</span><br />Norma Blueman, Office 8, Hall A
							</td>
						</tr>
						<tr>
							<td>
								17.00 - 18.00
							</td>
							<td></td>
							<td rowspan="3" class="event tooltip">
								<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
								<span class="hours">17.00 - 20.00</span><br />Earlene Milone, Office 150, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
										17.00 - 20.00<br />
										Earlene Milone,
										Office 150, Hall B
									</div>
								</div>
							</td>
							<td rowspan="3" class="event tooltip">
								<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
								<span class="hours">17.00 - 20.00</span><br />Earlene Milone, Office 150, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
										17.00 - 20.00<br />
										Earlene Milone,
										Office 150, Hall B
									</div>
								</div>
							</td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								18.00 - 19.00
							</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								19.00 - 20.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="8" class="last">
								<div class="tip">
									Hover over table block to get additional info
								</div>
							</td>
						</tr>
					</tbody>
				</table>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
				<div class="timetable small">
					<h3 class="box_header">
						Monday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#primary-health-care" title="Primary Health Care">
								Primary Health Care, Ann Blyumin, Office 367, Hall A
							</a>
							<div class="value">
								06.00 - 07.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Robert Brown, Office 224, Hall B
							</a>
							<div class="value">
								07.00 - 09.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#laryngological-clinic" title="Laryngological Clinic">
								Laryngological Clinic, Earlene Milone, Office 150, Hall B
							</a>
							<div class="value">
								10.00 - 13.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">
								Pediatric Clinic, Clare Mitchell, Office 112, Hall C
							</a>
							<div class="value">
								15.00 - 16.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">
								Outpatient Surgery, John D. Tom, Office 6, Hall B
							</a>
							<div class="value">
								16.00 - 18.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Tuesday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#primary-health-care" title="Primary Health Care">
								Primary Health Care, Ann Blyumin, Office 367, Hall A
							</a>
							<div class="value">
								06.00 - 07.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Robert Brown, Office 224, Hall B
							</a>
							<div class="value">
								07.00 - 09.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">
								Pediatric Clinic, Clare Mitchell, Office 112, Hall C
							</a>
							<div class="value">
								09.00 - 11.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Tim Duncan, Office 224, Hall B
							</a>
							<div class="value">
								13.00 - 15.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">
								Outpatient Surgery, John D. Tom, Office 6, Hall B
							</a>
							<div class="value">
								15.00 - 19.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Wednesday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Robert Brown, Office 224, Hall B
							</a>
							<div class="value">
								07.00 - 09.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">
								Pediatric Clinic, Clare Mitchell, Office 112, Hall C
							</a>
							<div class="value">
								10.00 - 12.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Tim Duncan, Office 224, Hall B
							</a>
							<div class="value">
								13.00 - 14.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#cardiac-clinic" title="Cardiac Clinic">
								Cardiac Clinic, John D. Tom, Office 25, Hall A
							</a>
							<div class="value">
								14.00 - 16.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#dental-clinic" title="Dental Clinic">
								Dental Clinic, Norma Blueman, Office 8, Hall A
							</a>
							<div class="value">
								16.00 - 17.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Thursday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">
								Outpatient Surgery, John D. Tom, Office 6, Hall B
							</a>
							<div class="value">
								06.00 - 10.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#ophthalmology-clinic" title="Ophthalmology Clinic">
								Ophthalmology Clinic, Sue Collins, Office 114, Hall C
							</a>
							<div class="value">
								06.30 - 07.30
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Tim Duncan, Office 224, Hall B
							</a>
							<div class="value">
								12.00 - 13.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#laryngological-clinic" title="Laryngological Clinic">
								Laryngological Clinic, Earlene Milone, Office 150, Hall B
							</a>
							<div class="value">
								13.00 - 17.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#primary-health-care" title="Primary Health Care">
								Primary Health Care, Earlene Milone, Office 150, Hall B
							</a>
							<div class="value">
								17.00 - 20.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Friday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Robert Brown, Office 224, Hall B
							</a>
							<div class="value">
								07.00 - 11.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">
								Outpatient Surgery, John D. Tom, Office 6, Hall B
							</a>
							<div class="value">
								12.00 - 16.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">
								Outpatient Rehabilitation, Robert van Hex, Gym Arena
							</a>
							<div class="value">
								13.00 - 16.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#dental-clinic" title="Dental Clinic">
								Dental Clinic, Norma Blueman, Office 8, Hall A
							</a>
							<div class="value">
								16.00 - 17.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#primary-health-care" title="Primary Health Care">
								Primary Health Care, Earlene Milone, Office 150, Hall B
							</a>
							<div class="value">
								17.00 - 20.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Saturday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#primary-health-care" title="Primary Health Care">
								Primary Health Care, Robert van Hex, Office 207, Hall B
							</a>
							<div class="value">
								09.00 - 10.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Robert Brown, Office 224, Hall B
							</a>
							<div class="value">
								10.00 - 11.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">
								Pediatric Clinic, Clare Mitchell, Office 112, Hall C
							</a>
							<div class="value">
								12.00 - 13.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#laryngological-clinic" title="Laryngological Clinic">
								Laryngological Clinic, Earlene Milone, Office 150, Hall B
							</a>
							<div class="value">
								13.00 - 17.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#ophthalmology-clinic" title="Ophthalmology Clinic">
								Ophthalmology Clinic, Sue Collins, Office 114, Hall C
							</a>
							<div class="value">
								13.00 - 17.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Sunday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#primary-health-care" title="Primary Health Care">
								Primary Health Care, Robert van Hex, Office 207, Hall B
							</a>
							<div class="value">
								09.00 - 10.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Robert Brown, Office 224, Hall B
							</a>
							<div class="value">
								10.00 - 11.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">
								Pediatric Clinic, Clare Mitchell, Office 112, Hall C
							</a>
							<div class="value">
								12.00 - 13.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">
								Outpatient Surgery, John D. Tom, Office 6, Hall B
							</a>
							<div class="value">
								13.00 - 14.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">
								Outpatient Surgery, John D. Tom, Office 6, Hall B
							</a>
							<div class="value">
								15.00 - 19.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">
								Outpatient Rehabilitation, Robert van Hex, Gym Arena
							</a>
							<div class="value">
								16.00 - 19.00
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div id="primary-health-care">
				<table class="timetable">
					<thead>
						<tr>
							<th></th>
							<th>MONDAY</th>
							<th>TUESDAY</th>
							<th>WEDNESDAY</th>
							<th>THURSDAY</th>
							<th>FRIDAY</th>
							<th>SATURDAY</th>
							<th>SUNDAY</th>
						</tr>
					</thead>
					<tbody>
						<tr class="row_gray">
							<td>
								06.00 - 07.00
							</td>
							<td rowspan="1" class="event tooltip">
								<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
								<span class="hours">06.00 - 07.00</span><br />Ann Blyumin, Office 367, Hall A
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
										06.00 - 07.00<br />
										Ann Blyumin,
										Office 367, Hall A
									</div>
								</div>
							</td>
							<td rowspan="1" class="event tooltip">
								<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
								<span class="hours">06.00 - 07.00</span><br />Ann Blyumin, Office 367, Hall A
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
										06.00 - 07.00<br />
										Ann Blyumin,
										Office 367, Hall A
									</div>
								</div>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								07.00 - 08.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								08.00 - 09.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								09.00 - 10.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="1" class="event tooltip">
								<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
								<span class="hours">09.00 - 10.00</span><br />Robert van Hex, Office 207, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
										09.00 - 10.00<br />
										Robert van Hex,
										Office 207, Hall B
									</div>
								</div>
							</td>
							<td rowspan="1" class="event tooltip">
								<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
								<span class="hours">09.00 - 10.00</span><br />Robert van Hex, Office 207, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
										09.00 - 10.00<br />
										Robert van Hex,
										Office 207, Hall B
									</div>
								</div>
							</td>
						</tr>
						<tr class="row_gray">
							<td>
								10.00 - 11.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								11.00 - 12.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								12.00 - 13.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								13.00 - 14.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								14.00 - 15.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								15.00 - 16.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								16.00 - 17.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								17.00 - 18.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="3" class="event tooltip">
								<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
								<span class="hours">17.00 - 20.00</span><br />Earlene Milone, Office 150, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
										17.00 - 20.00<br />
										Earlene Milone,
										Office 150, Hall B
									</div>
								</div>
							</td>
							<td rowspan="3" class="event tooltip">
								<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
								<span class="hours">17.00 - 20.00</span><br />Earlene Milone, Office 150, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#primary-health-care" title="Primary Health Care">Primary Health Care</a>
										17.00 - 20.00<br />
										Earlene Milone,
										Office 150, Hall B
									</div>
								</div>
							</td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								18.00 - 19.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								19.00 - 20.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="8" class="last">
								<div class="tip">
									Hover over table block to get additional info
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="timetable small">
					<h3 class="box_header">
						Monday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#primary-health-care" title="Primary Health Care">
								Primary Health Care, Ann Blyumin, Office 367, Hall A
							</a>
							<div class="value">
								06.00 - 07.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Tuesday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#primary-health-care" title="Primary Health Care">
								Primary Health Care, Ann Blyumin, Office 367, Hall A
							</a>
							<div class="value">
								06.00 - 07.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Thursday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#primary-health-care" title="Primary Health Care">
								Primary Health Care, Earlene Milone, Office 150, Hall B
							</a>
							<div class="value">
								17.00 - 20.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Friday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#primary-health-care" title="Primary Health Care">
								Primary Health Care, Earlene Milone, Office 150, Hall B
							</a>
							<div class="value">
								17.00 - 20.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Saturday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#primary-health-care" title="Primary Health Care">
								Primary Health Care, Robert van Hex, Office 207, Hall B
							</a>
							<div class="value">
								09.00 - 10.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Sunday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#primary-health-care" title="Primary Health Care">
								Primary Health Care, Robert van Hex, Office 207, Hall B
							</a>
							<div class="value">
								09.00 - 10.00
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div id="pediatric-clinic">
				<table class="timetable">
					<thead>
						<tr>
							<th></th>
							<th>MONDAY</th>
							<th>TUESDAY</th>
							<th>WEDNESDAY</th>
							<th>THURSDAY</th>
							<th>FRIDAY</th>
							<th>SATURDAY</th>
							<th>SUNDAY</th>
						</tr>
					</thead>
					<tbody>
						<tr class="row_gray">
							<td>
								06.00 - 07.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								07.00 - 08.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								08.00 - 09.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								09.00 - 10.00
							</td>
							<td></td>
							<td rowspan="2" class="event">
								<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">Pediatric Clinic</a>
								<span class="hours">09.00 - 11.00</span><br />Clare Mitchell, Office 112, Hall C
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								10.00 - 11.00
							</td>
							<td></td>
							<td rowspan="2" class="event">
								<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">Pediatric Clinic</a>
								<span class="hours">10.00 - 12.00</span><br />Clare Mitchell, Office 112, Hall C
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								11.00 - 12.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								12.00 - 13.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="1" class="event">
								<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">Pediatric Clinic</a>
								<span class="hours">12.00 - 13.00</span><br />Clare Mitchell, Office 112, Hall C
							</td>
							<td rowspan="1" class="event">
								<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">Pediatric Clinic</a>
								<span class="hours">12.00 - 13.00</span><br />Clare Mitchell, Office 112, Hall C
							</td>
						</tr>
						<tr>
							<td>
								13.00 - 14.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								14.00 - 15.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								15.00 - 16.00
							</td>
							<td rowspan="1" class="event">
								<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">Pediatric Clinic</a>
								<span class="hours">15.00 - 16.00</span><br />Clare Mitchell, Office 112, Hall C
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								16.00 - 17.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								17.00 - 18.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								18.00 - 19.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								19.00 - 20.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="8" class="last">
								<div class="tip">
									Hover over table block to get additional info
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="timetable small">
					<h3 class="box_header">
						Monday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">
								Pediatric Clinic, Clare Mitchell, Office 112, Hall C
							</a>
							<div class="value">
								15.00 - 16.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Tuesday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">
								Pediatric Clinic, Clare Mitchell, Office 112, Hall C
							</a>
							<div class="value">
								09.00 - 11.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Wednesday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">
								Pediatric Clinic, Clare Mitchell, Office 112, Hall C
							</a>
							<div class="value">
								10.00 - 12.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Saturday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">
								Pediatric Clinic, Clare Mitchell, Office 112, Hall C
							</a>
							<div class="value">
								12.00 - 13.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Sunday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">
								Pediatric Clinic, Clare Mitchell, Office 112, Hall C
							</a>
							<div class="value">
								12.00 - 13.00
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div id="outpatient-surgery">
				<table class="timetable">
					<thead>
						<tr>
							<th></th>
							<th>MONDAY</th>
							<th>TUESDAY</th>
							<th>WEDNESDAY</th>
							<th>THURSDAY</th>
							<th>FRIDAY</th>
							<th>SATURDAY</th>
							<th>SUNDAY</th>
						</tr>
					</thead>
					<tbody>
						<tr class="row_gray">
							<td>
								06.00 - 07.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="4" class="event tooltip">
								<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
								<span class="hours">06.00 - 10.00</span><br />John D. Tom, Office 6, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
										06.00 - 10.00<br />
										John D. Tom,
										Office 6, Hall B
									</div>
								</div>
							</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								07.00 - 08.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								08.00 - 09.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								09.00 - 10.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								10.00 - 11.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								11.00 - 12.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								12.00 - 13.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="4" class="event tooltip">
								<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
								<span class="hours">12.00 - 16.00</span><br />John D. Tom, Office 6, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
										12.00 - 16.00<br />
										John D. Tom,
										Office 6, Hall B
									</div>
								</div>
							</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								13.00 - 14.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="1" class="event tooltip">
								<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
								<span class="hours">13.00 - 14.00</span><br />John D. Tom, Office 6, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
										13.00 - 14.00<br />
										John D. Tom,
										Office 6, Hall B
									</div>
								</div>
							</td>
						</tr>
						<tr class="row_gray">
							<td>
								14.00 - 15.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								15.00 - 16.00
							</td>
							<td></td>
							<td rowspan="4" class="event tooltip">
								<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
								<span class="hours">15.00 - 19.00</span><br />John D. Tom, Office 6, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
										15.00 - 19.00<br />
										John D. Tom,
										Office 6, Hall B
									</div>
								</div>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="4" class="event tooltip">
								<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
								<span class="hours">15.00 - 19.00</span><br />John D. Tom, Office 6, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
										15.00 - 19.00<br />
										John D. Tom,
										Office 6, Hall B
									</div>
								</div>
							</td>
						</tr>
						<tr class="row_gray">
							<td>
								16.00 - 17.00
							</td>
							<td rowspan="2" class="event tooltip">
								<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
								<span class="hours">16.00 - 18.00</span><br />John D. Tom, Office 6, Hall B
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">Outpatient Surgery</a>
										16.00 - 18.00<br />
										John D. Tom,
										Office 6, Hall B
									</div>
								</div>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								17.00 - 18.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								18.00 - 19.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								19.00 - 20.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="8" class="last">
								<div class="tip">
									Hover over table block to get additional info
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="timetable small">
					<h3 class="box_header">
						Monday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">
								Outpatient Surgery, John D. Tom, Office 6, Hall B
							</a>
							<div class="value">
								16.00 - 18.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Tuesday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">
								Outpatient Surgery, John D. Tom, Office 6, Hall B
							</a>
							<div class="value">
								15.00 - 19.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Thursday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">
								Outpatient Surgery, John D. Tom, Office 6, Hall B
							</a>
							<div class="value">
								06.00 - 10.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Friday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">
								Outpatient Surgery, John D. Tom, Office 6, Hall B
							</a>
							<div class="value">
								12.00 - 16.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Sunday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">
								Outpatient Surgery, John D. Tom, Office 6, Hall B
							</a>
							<div class="value">
								13.00 - 14.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">
								Outpatient Surgery, John D. Tom, Office 6, Hall B
							</a>
							<div class="value">
								15.00 - 19.00
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div id="gynaecological-clinic">
				<table class="timetable">
					<thead>
						<tr>
							<th></th>
							<th>MONDAY</th>
							<th>TUESDAY</th>
							<th>WEDNESDAY</th>
							<th>THURSDAY</th>
							<th>FRIDAY</th>
							<th>SATURDAY</th>
							<th>SUNDAY</th>
						</tr>
					</thead>
					<tbody>
						<tr class="row_gray">
							<td>
								06.00 - 07.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								07.00 - 08.00
							</td>
							<td rowspan="2" class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">07.00 - 09.00</span><br />Robert Brown, Office 224, Hall B
							</td>
							<td rowspan="2" class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">07.00 - 09.00</span><br />Robert Brown, Office 224, Hall B
							</td>
							<td rowspan="2" class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">07.00 - 09.00</span><br />Robert Brown, Office 224, Hall B
							</td>
							<td></td>
							<td rowspan="4" class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">07.00 - 11.00</span><br />Robert Brown, Office 224, Hall B
							</td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								08.00 - 09.00
							</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								09.00 - 10.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								10.00 - 11.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">10.00 - 11.00</span><br />Robert Brown, Office 224, Hall B
							</td>
							<td class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">10.00 - 11.00</span><br />Robert Brown, Office 224, Hall B
							</td>
						</tr>
						<tr>
							<td>
								11.00 - 12.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								12.00 - 13.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="1" class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">12.00 - 13.00</span><br />Tim Duncan, Office 224, Hall B
							</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								13.00 - 14.00
							</td>
							<td></td>
							<td rowspan="2" class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">13.00 - 15.00</span><br />Tim Duncan, Office 224, Hall B
							</td>
							<td rowspan="1" class="event">
								<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">Gynaecological Clinic</a>
								<span class="hours">13.00 - 14.00</span><br />Tim Duncan, Office 224, Hall B
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								14.00 - 15.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								15.00 - 16.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								16.00 - 17.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								17.00 - 18.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								18.00 - 19.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								19.00 - 20.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="8" class="last">
								<div class="tip">
									Hover over table block to get additional info
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="timetable small">
					<h3 class="box_header">
						Monday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Robert Brown, Office 224, Hall B
							</a>
							<div class="value">
								07.00 - 09.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Tuesday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Robert Brown, Office 224, Hall B
							</a>
							<div class="value">
								07.00 - 09.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Tim Duncan, Office 224, Hall B
							</a>
							<div class="value">
								13.00 - 15.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Wednesday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Robert Brown, Office 224, Hall B
							</a>
							<div class="value">
								07.00 - 09.00
							</div>
						</li>
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Tim Duncan, Office 224, Hall B
							</a>
							<div class="value">
								13.00 - 14.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Thursday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Tim Duncan, Office 224, Hall B
							</a>
							<div class="value">
								12.00 - 13.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Friday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Robert Brown, Office 224, Hall B
							</a>
							<div class="value">
								07.00 - 11.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Saturday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Robert Brown, Office 224, Hall B
							</a>
							<div class="value">
								10.00 - 11.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Sunday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
								Gynaecological Clinic, Robert Brown, Office 224, Hall B
							</a>
							<div class="value">
								10.00 - 11.00
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div id="cardiac-clinic">
				<table class="timetable">
					<thead>
						<tr>
							<th></th>
							<th>MONDAY</th>
							<th>TUESDAY</th>
							<th>WEDNESDAY</th>
							<th>THURSDAY</th>
							<th>FRIDAY</th>
							<th>SATURDAY</th>
							<th>SUNDAY</th>
						</tr>
					</thead>
					<tbody>
						<tr class="row_gray">
							<td>
								06.00 - 07.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								07.00 - 08.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								08.00 - 09.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								09.00 - 10.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								10.00 - 11.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								11.00 - 12.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								12.00 - 13.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								13.00 - 14.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								14.00 - 15.00
							</td>
							<td></td>
							<td></td>
							<td rowspan="2" class="event tooltip">
								<a href="?page=departments#cardiac-clinic" title="Cardiac Clinic">Cardiac Clinic</a>
								<span class="hours">14.00 - 16.00</span><br />John D. Tom, Office 25, Hall A
								<div class="tooltip_text">
									<div class="tooltip_content">
										<a href="?page=departments#cardiac-clinic" title="Cardiac Clinic">Cardiac Clinic</a>
										14.00 - 16.00<br />
										John D. Tom,
										Office 25, Hall A
									</div>
								</div>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								15.00 - 16.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								16.00 - 17.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								17.00 - 18.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								18.00 - 19.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								19.00 - 20.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="8" class="last">
								<div class="tip">
									Hover over table block to get additional info
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="timetable small">
					<h3 class="box_header page_margin_top">
						Wednesday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#cardiac-clinic" title="Cardiac Clinic">
								Cardiac Clinic, John D. Tom, Office 25, Hall A
							</a>
							<div class="value">
								14.00 - 16.00
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div id="laryngological-clinic">
				<table class="timetable">
					<thead>
						<tr>
							<th></th>
							<th>MONDAY</th>
							<th>TUESDAY</th>
							<th>WEDNESDAY</th>
							<th>THURSDAY</th>
							<th>FRIDAY</th>
							<th>SATURDAY</th>
							<th>SUNDAY</th>
						</tr>
					</thead>
					<tbody>
						<tr class="row_gray">
							<td>
								06.00 - 07.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								07.00 - 08.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								08.00 - 09.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								09.00 - 10.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								10.00 - 11.00
							</td>
							<td rowspan="3" class="event">
								<a href="?page=departments#laryngological-clinic" title="Laryngological Clinic">Laryngological Clinic</a>
								<span class="hours">10.00 - 13.00</span><br />Earlene Milone, Office 150, Hall B
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								11.00 - 12.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								12.00 - 13.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								13.00 - 14.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="4" class="event">
								<a href="?page=departments#laryngological-clinic" title="Laryngological Clinic">Laryngological Clinic</a>
								<span class="hours">13.00 - 17.00</span><br />Earlene Milone, Office 150, Hall B
							</td>
							<td></td>
							<td rowspan="4" class="event">
								<a href="?page=departments#laryngological-clinic" title="Laryngological Clinic">Laryngological Clinic</a>
								<span class="hours">13.00 - 17.00</span><br />Earlene Milone, Office 150, Hall B
							</td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								14.00 - 15.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								15.00 - 16.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								16.00 - 17.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								17.00 - 18.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								18.00 - 19.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								19.00 - 20.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="8" class="last">
								<div class="tip">
									Hover over table block to get additional info
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="timetable small">
					<h3 class="box_header">
						Monday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#laryngological-clinic" title="Laryngological Clinic">
								Laryngological Clinic, Earlene Milone, Office 150, Hall B
							</a>
							<div class="value">
								10.00 - 13.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Thursday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#laryngological-clinic" title="Laryngological Clinic">
								Laryngological Clinic, Earlene Milone, Office 150, Hall B
							</a>
							<div class="value">
								13.00 - 17.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Saturday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#laryngological-clinic" title="Laryngological Clinic">
								Laryngological Clinic, Earlene Milone, Office 150, Hall B
							</a>
							<div class="value">
								13.00 - 17.00
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div id="ophthalmology-clinic">
				<table class="timetable">
					<thead>
						<tr>
							<th></th>
							<th>MONDAY</th>
							<th>TUESDAY</th>
							<th>WEDNESDAY</th>
							<th>THURSDAY</th>
							<th>FRIDAY</th>
							<th>SATURDAY</th>
							<th>SUNDAY</th>
						</tr>
					</thead>
					<tbody>
						<tr class="row_gray">
							<td>
								06.00 - 07.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="2" class="event">
								<a href="?page=departments#ophthalmology-clinic" title="Ophthalmology Clinic">Ophthalmology Clinic</a>
								<span class="hours">06.30 - 07.30</span><br />Sue Collins, Office 114, Hall C
							</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								07.00 - 08.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								08.00 - 09.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								09.00 - 10.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								10.00 - 11.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								11.00 - 12.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								12.00 - 13.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								13.00 - 14.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="4" class="event">
								<a href="?page=departments#ophthalmology-clinic" title="Ophthalmology Clinic">Ophthalmology Clinic</a>
								<span class="hours">13.00 - 17.00</span><br />Sue Collins, Office 114, Hall C
							</td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								14.00 - 15.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								15.00 - 16.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								16.00 - 17.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								17.00 - 18.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								18.00 - 19.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								19.00 - 20.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="8" class="last">
								<div class="tip">
									Hover over table block to get additional info
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="timetable small">
					<h3 class="box_header page_margin_top">
						Thursday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#ophthalmology-clinic" title="Ophthalmology Clinic">
								Ophthalmology Clinic, Sue Collins, Office 114, Hall C
							</a>
							<div class="value">
								06.30 - 07.30
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Saturday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#ophthalmology-clinic" title="Ophthalmology Clinic">
								Ophthalmology Clinic, Sue Collins, Office 114, Hall C
							</a>
							<div class="value">
								13.00 - 17.00
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div id="dental-clinic">
				<table class="timetable">
					<thead>
						<tr>
							<th></th>
							<th>MONDAY</th>
							<th>TUESDAY</th>
							<th>WEDNESDAY</th>
							<th>THURSDAY</th>
							<th>FRIDAY</th>
							<th>SATURDAY</th>
							<th>SUNDAY</th>
						</tr>
					</thead>
					<tbody>
						<tr class="row_gray">
							<td>
								06.00 - 07.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								07.00 - 08.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								08.00 - 09.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								09.00 - 10.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								10.00 - 11.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								11.00 - 12.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								12.00 - 13.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								13.00 - 14.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								14.00 - 15.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								15.00 - 16.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								16.00 - 17.00
							</td>
							<td></td>
							<td></td>
							<td class="event">
								<a href="?page=departments#dental-clinic" title="Dental Clinic">Dental Clinic</a>
								<span class="hours">16.00 - 17.00</span><br />Norma Blueman, Office 8, Hall A
							</td>
							<td></td>
							<td class="event">
								<a href="?page=departments#dental-clinic" title="Dental Clinic">Dental Clinic</a>
								<span class="hours">16.00 - 17.00</span><br />Norma Blueman, Office 8, Hall A
							</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								17.00 - 18.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								18.00 - 19.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								19.00 - 20.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="8" class="last">
								<div class="tip">
									Hover over table block to get additional info
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="timetable small">
					<h3 class="box_header page_margin_top">
						Wednesday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#dental-clinic" title="Dental Clinic">
								Dental Clinic, Norma Blueman, Office 8, Hall A
							</a>
							<div class="value">
								16.00 - 17.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Friday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#dental-clinic" title="Dental Clinic">
								Dental Clinic, Norma Blueman, Office 8, Hall A
							</a>
							<div class="value">
								16.00 - 17.00
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div id="outpatient-rehabilitation">
				
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <table class="timetable">
					<thead>
						<tr>
							<th></th>
							<th>MONDAY</th>
							<th>TUESDAY</th>
							<th>WEDNESDAY</th>
							<th>THURSDAY</th>
							<th>FRIDAY</th>
							<th>SATURDAY</th>
							<th>SUNDAY</th>
						</tr>
					</thead>
					<tbody>
						<tr class="row_gray">
							<td>
								06.00 - 07.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								07.00 - 08.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								08.00 - 09.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								09.00 - 10.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								10.00 - 11.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								11.00 - 12.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								12.00 - 13.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								13.00 - 14.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="3" class="event">
								<a href="?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">Outpatient Rehabilitation</a>
								<span class="hours">13.00 - 16.00</span><br />Robert van Hex, Gym Arena
							</td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								14.00 - 15.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								15.00 - 16.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								16.00 - 17.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td rowspan="3" class="event">
								<a href="?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">Outpatient Rehabilitation</a>
								<span class="hours">16.00 - 19.00</span><br />Robert van Hex, Gym Arena
							</td>
						</tr>
						<tr>
							<td>
								17.00 - 18.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="row_gray">
							<td>
								18.00 - 19.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>
								19.00 - 20.00
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td colspan="8" class="last">
								<div class="tip">
									Hover over table block to get additional info
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="timetable small">
					<h3 class="box_header">
						Friday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">
								Outpatient Rehabilitation, Robert van Hex, Gym Arena
							</a>
							<div class="value">
								13.00 - 16.00
							</div>
						</li>
					</ul>
					<h3 class="box_header page_margin_top">
						Sunday
					</h3>
					<ul class="items_list thin page_margin_top clearfix">
						<li class="clearfix icon_clock_black">
							<a href="?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">
								Outpatient Rehabilitation, Robert van Hex, Gym Arena
							</a>
							<div class="value">
								16.00 - 19.00
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</form>

            <script type="text/javascript"> 
   Calendar.setup({ 
    inputField     :    "campo_fecha",     // id del campo de texto 
     ifFormat     :     "%Y-%m-%d",     // formato de la fecha que se escriba en el campo de texto 
     button     :    "lanzador"     // el id del bot�n que lanzar� el calendario 
}); 
         </script>      
       
</body>
</html>