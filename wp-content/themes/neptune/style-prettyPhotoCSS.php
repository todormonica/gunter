<?php
	require ("../../../wp-config.php");
	header ("Content-type: text/css");
?>

/* ------------------------------------------------------------------------
	This you can edit.
------------------------------------------------------------------------- */

	div.light_rounded .pp_top .pp_left { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_rounded/sprite.png) -88px -53px no-repeat; } /* Top left corner */
	div.light_rounded .pp_top .pp_middle { background: #fff; } /* Top pattern/color */
	div.light_rounded .pp_top .pp_right { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_rounded/sprite.png) -110px -53px no-repeat; } /* Top right corner */
	
	div.light_rounded .pp_content .ppt { color: #000; }
	div.light_rounded .pp_content_container .pp_left,
	div.light_rounded .pp_content_container .pp_right { background: #fff; }
	div.light_rounded .pp_content { background-color: #fff; } /* Content background */
	div.light_rounded .pp_next:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_rounded/btnNext.png) center right  no-repeat; cursor: pointer; } /* Next button */
	div.light_rounded .pp_previous:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_rounded/btnPrevious.png) center left no-repeat; cursor: pointer; } /* Previous button */
	div.light_rounded .pp_expand { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_rounded/sprite.png) -31px -26px no-repeat; cursor: pointer; } /* Expand button */
	div.light_rounded .pp_expand:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_rounded/sprite.png) -31px -47px no-repeat; cursor: pointer; } /* Expand button hover */
	div.light_rounded .pp_contract { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_rounded/sprite.png) 0 -26px no-repeat; cursor: pointer; } /* Contract button */
	div.light_rounded .pp_contract:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_rounded/sprite.png) 0 -47px no-repeat; cursor: pointer; } /* Contract button hover */
	div.light_rounded .pp_close { width: 75px; height: 22px; background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_rounded/sprite.png) -1px -1px no-repeat; cursor: pointer; } /* Close button */
	div.light_rounded #pp_full_res .pp_inline { color: #000; } 

	div.light_rounded .pp_arrow_previous { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_rounded/sprite.png) 0 -71px no-repeat; } /* The previous arrow in the bottom nav */
		div.light_rounded .pp_arrow_previous.disabled { background-position: 0 -87px; cursor: default; }
	div.light_rounded .pp_arrow_next { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_rounded/sprite.png) -22px -71px no-repeat; } /* The next arrow in the bottom nav */
		div.light_rounded .pp_arrow_next.disabled { background-position: -22px -87px; cursor: default; }

	div.light_rounded .pp_bottom .pp_left { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_rounded/sprite.png) -88px -80px no-repeat; } /* Bottom left corner */
	div.light_rounded .pp_bottom .pp_middle { background: #fff; } /* Bottom pattern/color */
	div.light_rounded .pp_bottom .pp_right { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_rounded/sprite.png) -110px -80px no-repeat; } /* Bottom right corner */

	div.light_rounded .pp_loaderIcon { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_rounded/loader.gif) center center no-repeat; } /* Loader icon */
	
	/* ----------------------------------
		Dark Rounded Theme
	----------------------------------- */
	
	div.dark_rounded .pp_top .pp_left { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/sprite.png) -88px -53px no-repeat; } /* Top left corner */
	div.dark_rounded .pp_top .pp_middle { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/contentPattern.png) top left repeat; } /* Top pattern/color */
	div.dark_rounded .pp_top .pp_right { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/sprite.png) -110px -53px no-repeat; } /* Top right corner */
	
	div.dark_rounded .pp_content_container .pp_left { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/contentPattern.png) top left repeat-y; } /* Left Content background */
	div.dark_rounded .pp_content_container .pp_right { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/contentPattern.png) top right repeat-y; } /* Right Content background */
	div.dark_rounded .pp_content { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/contentPattern.png) top left repeat; } /* Content background */
	div.dark_rounded .pp_next:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/btnNext.png) center right  no-repeat; cursor: pointer; } /* Next button */
	div.dark_rounded .pp_previous:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/btnPrevious.png) center left no-repeat; cursor: pointer; } /* Previous button */
	div.dark_rounded .pp_expand { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/sprite.png) -31px -26px no-repeat; cursor: pointer; } /* Expand button */
	div.dark_rounded .pp_expand:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/sprite.png) -31px -47px no-repeat; cursor: pointer; } /* Expand button hover */
	div.dark_rounded .pp_contract { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/sprite.png) 0 -26px no-repeat; cursor: pointer; } /* Contract button */
	div.dark_rounded .pp_contract:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/sprite.png) 0 -47px no-repeat; cursor: pointer; } /* Contract button hover */
	div.dark_rounded .pp_close { width: 75px; height: 22px; background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/sprite.png) -1px -1px no-repeat; cursor: pointer; } /* Close button */
	div.dark_rounded .currentTextHolder { color: #c4c4c4; }
	div.dark_rounded .pp_description { color: #fff; }
	div.dark_rounded #pp_full_res .pp_inline { color: #fff; } 

	div.dark_rounded .pp_arrow_previous { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/sprite.png) 0 -71px no-repeat; } /* The previous arrow in the bottom nav */
		div.dark_rounded .pp_arrow_previous.disabled { background-position: 0 -87px; cursor: default; }
	div.dark_rounded .pp_arrow_next { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/sprite.png) -22px -71px no-repeat; } /* The next arrow in the bottom nav */
		div.dark_rounded .pp_arrow_next.disabled { background-position: -22px -87px; cursor: default; }

	div.dark_rounded .pp_bottom .pp_left { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/sprite.png) -88px -80px no-repeat; } /* Bottom left corner */
	div.dark_rounded .pp_bottom .pp_middle { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/contentPattern.png) top left repeat; } /* Bottom pattern/color */
	div.dark_rounded .pp_bottom .pp_right { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/sprite.png) -110px -80px no-repeat; } /* Bottom right corner */

	div.dark_rounded .pp_loaderIcon { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/loader.gif) center center no-repeat; } /* Loader icon */
	
	
	/* ----------------------------------
		Dark Square Theme
	----------------------------------- */
	
	div.dark_square .pp_left ,
	div.dark_square .pp_middle,
	div.dark_square .pp_right,
	div.dark_square .pp_content { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_square/contentPattern.png) top left repeat; }
	div.dark_square .currentTextHolder { color: #c4c4c4; }
	div.dark_square .pp_description { color: #fff; }
	div.dark_square .pp_loaderIcon { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/loader.gif) center center no-repeat; } /* Loader icon */
	
	div.dark_square .pp_content_container .pp_left { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/contentPattern.png) top left repeat-y; } /* Left Content background */
	div.dark_square .pp_content_container .pp_right { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_rounded/contentPattern.png) top right repeat-y; } /* Right Content background */
	div.dark_square .pp_expand { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_square/sprite.png) -31px -26px no-repeat; cursor: pointer; } /* Expand button */
	div.dark_square .pp_expand:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_square/sprite.png) -31px -47px no-repeat; cursor: pointer; } /* Expand button hover */
	div.dark_square .pp_contract { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_square/sprite.png) 0 -26px no-repeat; cursor: pointer; } /* Contract button */
	div.dark_square .pp_contract:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_square/sprite.png) 0 -47px no-repeat; cursor: pointer; } /* Contract button hover */
	div.dark_square .pp_close { width: 75px; height: 22px; background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_square/sprite.png) -1px -1px no-repeat; cursor: pointer; } /* Close button */
	div.dark_square #pp_full_res .pp_inline { color: #fff; } 
	
	div.dark_square .pp_arrow_previous { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_square/sprite.png) 0 -71px no-repeat; } /* The previous arrow in the bottom nav */
		div.dark_square .pp_arrow_previous.disabled { background-position: 0 -87px; cursor: default; }
	div.dark_square .pp_arrow_next { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_square/sprite.png) -22px -71px no-repeat; } /* The next arrow in the bottom nav */
		div.dark_square .pp_arrow_next.disabled { background-position: -22px -87px; cursor: default; }
	
	div.dark_square .pp_next:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_square/btnNext.png) center right  no-repeat; cursor: pointer; } /* Next button */
	div.dark_square .pp_previous:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/dark_square/btnPrevious.png) center left no-repeat; cursor: pointer; } /* Previous button */


	/* ----------------------------------
		Light Square Theme
	----------------------------------- */
	
	div.light_square .pp_left ,
	div.light_square .pp_middle,
	div.light_square .pp_right,
	div.light_square .pp_content { background: #fff; }
	
	div.light_square .pp_content .ppt { color: #000; }
	div.light_square .pp_expand { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_square/sprite.png) -31px -26px no-repeat; cursor: pointer; } /* Expand button */
	div.light_square .pp_expand:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_square/sprite.png) -31px -47px no-repeat; cursor: pointer; } /* Expand button hover */
	div.light_square .pp_contract { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_square/sprite.png) 0 -26px no-repeat; cursor: pointer; } /* Contract button */
	div.light_square .pp_contract:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_square/sprite.png) 0 -47px no-repeat; cursor: pointer; } /* Contract button hover */
	div.light_square .pp_close { width: 75px; height: 22px; background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_square/sprite.png) -1px -1px no-repeat; cursor: pointer; } /* Close button */
	div.light_square #pp_full_res .pp_inline { color: #000; } 
	
	div.light_square .pp_arrow_previous { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_square/sprite.png) 0 -71px no-repeat; } /* The previous arrow in the bottom nav */
		div.light_square .pp_arrow_previous.disabled { background-position: 0 -87px; cursor: default; }
	div.light_square .pp_arrow_next { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_square/sprite.png) -22px -71px no-repeat; } /* The next arrow in the bottom nav */
		div.light_square .pp_arrow_next.disabled { background-position: -22px -87px; cursor: default; }
	
	div.light_square .pp_next:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_square/btnNext.png) center right  no-repeat; cursor: pointer; } /* Next button */
	div.light_square .pp_previous:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_square/btnPrevious.png) center left no-repeat; cursor: pointer; } /* Previous button */


	/* ----------------------------------
		Facebook style Theme
	----------------------------------- */
	
	div.facebook .pp_top .pp_left { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/sprite.png) -88px -53px no-repeat; } /* Top left corner */
	div.facebook .pp_top .pp_middle { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/contentPatternTop.png) top left repeat-x; } /* Top pattern/color */
	div.facebook .pp_top .pp_right { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/sprite.png) -110px -53px no-repeat; } /* Top right corner */
	
	div.facebook .pp_content .ppt { color: #000; }
	div.facebook .pp_content_container .pp_left { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/contentPatternLeft.png) top left repeat-y; } /* Content background */
	div.facebook .pp_content_container .pp_right { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/contentPatternRight.png) top right repeat-y; } /* Content background */
	div.facebook .pp_content { background: #fff; } /* Content background */
	div.facebook .pp_expand { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/sprite.png) -31px -26px no-repeat; cursor: pointer; } /* Expand button */
	div.facebook .pp_expand:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/sprite.png) -31px -47px no-repeat; cursor: pointer; } /* Expand button hover */
	div.facebook .pp_contract { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/sprite.png) 0 -26px no-repeat; cursor: pointer; } /* Contract button */
	div.facebook .pp_contract:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/sprite.png) 0 -47px no-repeat; cursor: pointer; } /* Contract button hover */
	div.facebook .pp_close { width: 22px; height: 22px; background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/sprite.png) -1px -1px no-repeat; cursor: pointer; } /* Close button */
	div.facebook #pp_full_res .pp_inline { color: #000; } 
	div.facebook .pp_loaderIcon { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/loader.gif) center center no-repeat; } /* Loader icon */
	
	div.facebook .pp_nav .pp_arrow_previous { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/sprite.png) 0 -71px no-repeat; height: 22px; margin-top: 0; width: 22px; } /* The previous arrow in the bottom nav */
		div.facebook .pp_arrow_previous.disabled { background-position: 0 -96px; cursor: default; }
	div.facebook .pp_nav .pp_arrow_next { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/sprite.png) -32px -71px no-repeat; height: 22px; margin-top: 0; width: 22px; } /* The next arrow in the bottom nav */
		div.facebook .pp_arrow_next.disabled { background-position: -32px -96px; cursor: default; }
	div.facebook .pp_nav { margin-top: 0; }
	div.facebook .pp_nav p { font-size: 15px; padding: 0 3px 0 4px; }
	
	div.facebook .pp_next:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/btnNext.png) center right no-repeat; cursor: pointer; } /* Next button */
	div.facebook .pp_previous:hover { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/btnPrevious.png) center left no-repeat; cursor: pointer; } /* Previous button */
	
	div.facebook .pp_bottom .pp_left { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/sprite.png) -88px -80px no-repeat; } /* Bottom left corner */
	div.facebook .pp_bottom .pp_middle { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/contentPatternBottom.png) top left repeat-x; } /* Bottom pattern/color */
	div.facebook .pp_bottom .pp_right { background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/facebook/sprite.png) -110px -80px no-repeat; } /* Bottom right corner */


/* ------------------------------------------------------------------------
	DO NOT CHANGE
------------------------------------------------------------------------- */

	div.pp_pic_holder a:focus { outline:none; }

	div.pp_overlay {
		background: #000;
		display: none;
		left: 0;
		position: absolute;
		top: 0;
		width: 100%;
		z-index: 9500;
	}
	
	div.pp_pic_holder {
		display: none;
		position: absolute;
		width: 100px;
		z-index: 10000;
	}
		
		.pp_top {
			height: 20px;
			position: relative;
		}
			* html .pp_top { padding: 0 20px; }
		
			.pp_top .pp_left {
				height: 20px;
				left: 0;
				position: absolute;
				width: 20px;
			}
			.pp_top .pp_middle {
				height: 20px;
				left: 20px;
				position: absolute;
				right: 20px;
			}
				* html .pp_top .pp_middle {
					left: 0;
					position: static;
				}
			
			.pp_top .pp_right {
				height: 20px;
				left: auto;
				position: absolute;
				right: 0;
				top: 0;
				width: 20px;
			}
		
		.pp_content { height: 40px; }
		
		.pp_content .ppt {
			left: auto;
			margin-bottom: 5px;
			position: relative;
			top: auto;
		}
		
		.pp_fade { display: none; }
		
		.pp_content_container {
			position: relative;
			text-align: left;
			width: 100%;
		}
		
			.pp_content_container .pp_left { padding-left: 20px; }
			.pp_content_container .pp_right { padding-right: 20px; }
		
			.pp_content_container .pp_details {
				margin: 10px 0 2px 0;
			}
				.pp_description {
					display: none;
					margin: 0 0 5px 0;
				}
				
				.pp_nav {
					clear: left;
					float: left;
					margin: 3px 0 0 0;
				}
				
					.pp_nav p {
						float: left;
						margin: 2px 4px;
					}
				
					.pp_nav a.pp_arrow_previous,
					.pp_nav a.pp_arrow_next {
						display: block;
						float: left;
						height: 15px;
						margin-top: 3px;
						overflow: hidden;
						text-indent: -10000px;
						width: 14px;
					}
		
		.pp_hoverContainer {
			position: absolute;
			top: 0;
			width: 100%;
			z-index: 2000;
		}
		
		a.pp_next {
			background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_rounded/btnNext.png) 10000px 10000px no-repeat;
			display: block;
			float: right;
			height: 100%;
			text-indent: -10000px;
			width: 49%;
		}
			
		a.pp_previous {
			background: url(<?php echo get_option('siteurl'); ?>/wp-content/themes/<?php echo get_current_theme() ?>/images/prettyPhoto/light_rounded/btnNext.png) 10000px 10000px no-repeat;
			display: block;
			float: left;
			height: 100%;
			text-indent: -10000px;
			width: 49%;
		}
		
		a.pp_expand,
		a.pp_contract {
			cursor: pointer;
			display: none;
			height: 20px;	
			position: absolute;
			right: 30px;
			text-indent: -10000px;
			top: 10px;
			width: 20px;
			z-index: 20000;
		}
			
		a.pp_close {
			display: block;
			float: right;
			text-indent: -10000px;
		}
		
		.pp_bottom {
			height: 20px;
			position: relative;
		}
			* html .pp_bottom { padding: 0 20px; }
			
			.pp_bottom .pp_left {
				height: 20px;
				left: 0;
				position: absolute;
				width: 20px;
			}
			.pp_bottom .pp_middle {
				height: 20px;
				left: 20px;
				position: absolute;
				right: 20px;
			}
				* html .pp_bottom .pp_middle {
					left: 0;
					position: static;
				}
				
			.pp_bottom .pp_right {
				height: 20px;
				left: auto;
				position: absolute;
				right: 0;
				top: 0;
				width: 20px;
			}
		
		.pp_loaderIcon {
			display: block;
			height: 24px;
			left: 50%;
			margin: -12px 0 0 -12px;
			position: absolute;
			top: 50%;
			width: 24px;
		}
		
		#pp_full_res {
			line-height: 1 !important;
		}
		
			#pp_full_res .pp_inline {
				text-align: left;
			}
			
				#pp_full_res .pp_inline p { margin: 0 0 15px 0; }
	
		div.ppt {
			color: #fff;
			display: none;
			font-size: 17px;
			left: 0;
			position: absolute;
			top: 0;
			z-index: 9999;
		}

/* ------------------------------------------------------------------------
	Miscellaneous
------------------------------------------------------------------------- */

	.clearfix:after {
	    content: "."; 
	    display: block; 
	    height: 0; 
	    clear: both; 
	    visibility: hidden;
	}

	.clearfix {display: inline-block;}

	/* Hides from IE-mac \*/
	* html .clearfix {height: 1%;}
	.clearfix {display: block;}
	/* End hide from IE-mac */