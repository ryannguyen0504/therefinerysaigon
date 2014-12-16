<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <head>

        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

        <script type="text/javascript" src="<?php get_js("jquery.min"); ?>"></script>

        <script type="text/javascript" src="<?php get_js("cufon-yui"); ?>"></script>

        <script type="text/javascript" src="<?php get_js("jquery.mousewheel"); ?>"></script>

        <script type="text/javascript" src="<?php get_js("jquery.jscrollpane.min"); ?>"></script>

        <script type="text/javascript" src="<?php get_js("js"); ?>"></script>

        <link rel="stylesheet" type="text/css" media="all" href="<?php get_css("reset"); ?>" />

		<link rel="stylesheet" type="text/css" media="all" href="<?php get_css("jscrollpane"); ?>" />

        <link rel="stylesheet" type="text/css" media="all" href="<?php get_css("style"); ?>" />



        <!--[if IE 7]>

			<link rel="stylesheet" type="text/css" media="all" href="<?php get_css("ie7"); ?>" />

		<![endif]-->





        <link rel="shortcut icon" href="<?php get_fav() ?>" />

        <title><?php bloginfo( 'name' ); wp_title( '|', true, 'left' );?></title>



    </head>



    <body>

        <div id="wrapper">

            <div id="preload" style="display:none">

                <img src="<?php bloginfo('template_url');?>/images/refinery_logo.png" alt="">



            </div>

        <div id="first_page">

            <div class="bg_wrapper">

                <!-- EDIT PAGE BACKGROUNDS HERE-->

                <div class="bg">

                    <div class="index_bg current">

                        <img src="<?php bloginfo('template_url');?>/images/ref_bg/home.jpg" alt="">

                    </div>

                    <div class="about_bg">

                         <img src="<?php bloginfo('template_url');?>/images/ref_bg/home.jpg" alt="">

                    </div>

                    <div class="homemade_bg">

                        <img src="<?php bloginfo('template_url');?>/images/ref_bg/homemade.jpg" alt="">

                    </div>

                    <div class="map_bg">

                         <img src="<?php bloginfo('template_url');?>/images/ref_bg/map.jpg" alt="">

                    </div>

                    <div class="menu_bg">

                         <img src="<?php bloginfo('template_url');?>/images/ref_bg/menu.jpg" alt="">

                    </div>

                    <div class="press_bg">

                         <img src="<?php bloginfo('template_url');?>/images/ref_bg/press.jpg" alt="">

                    </div>

                    <div class="history_bg">

                        <img src="<?php bloginfo('template_url');?>/images/ref_bg/history.jpg" alt="History 14">

                        <img src="<?php bloginfo('template_url');?>/images/ref_bg/gallery1.jpg" alt="History 1">

                        <img src="<?php bloginfo('template_url');?>/images/ref_bg/gallery2.jpg" alt="History 2">

                        <img src="<?php bloginfo('template_url');?>/images/ref_bg/gallery3.jpg" alt="History 3">

                        <img src="<?php bloginfo('template_url');?>/images/ref_bg/gallery4.jpg" alt="History 4">

                        <img src="<?php bloginfo('template_url');?>/images/ref_bg/gallery5.jpg" alt="History 5">

                        <img src="<?php bloginfo('template_url');?>/images/ref_bg/gallery6.jpg" alt="History 6">

                        <img src="<?php bloginfo('template_url');?>/images/ref_bg/gallery7.jpg" alt="History 7">

                        <img src="<?php bloginfo('template_url');?>/images/ref_bg/gallery8.jpg" alt="History 8">

                        <img src="<?php bloginfo('template_url');?>/images/ref_bg/home.jpg" alt="History 9">                        

                        <img src="<?php bloginfo('template_url');?>/images/ref_bg/homemade.jpg" alt="History 10">

                        <img src="<?php bloginfo('template_url');?>/images/ref_bg/map.jpg" alt="History 11">

                        <img src="<?php bloginfo('template_url');?>/images/ref_bg/menu.jpg" alt="History 12">

                        <img src="<?php bloginfo('template_url');?>/images/ref_bg/press.jpg" alt="History 13">

                    </div>

                    <div class="brunch_bg">

                         <img src="<?php bloginfo('template_url');?>/images/ref_bg/brunch.jpg" alt="">

                    </div>

                </div>

            </div>

            <div id="top_menu">

                 <div class="main_menu">

                    <ul>

                        <li><a href="#" data-box="brown" data-bg="about_bg" data-url="<?php bloginfo('url'); ?>/about-us">About</a></li>

                        <li class="seperated">/</li>

                        <li><a href="#" data-box="green" data-bg="menu_bg" id="menu_a">Menu</a></li>

                        <li class="seperated">/</li>

                        <li><a href="#" data-box="brown" data-bg="homemade_bg" data-url="<?php bloginfo('url'); ?>/homemade">Homemade</a></li>

                        <li class="seperated">/</li>

                        <li><a href="#" data-box="green" data-bg="brunch_bg" id="brunch_a">Brunch</a></li>

                        <li class="seperated">/</li>

                        <li><a href="#" data-box="brown" data-bg="history_bg" data-url="<?php bloginfo('url'); ?>/history" id="history_link">History</a></li>

                        <li class="seperated">/</li>

                        <li><a href="#" data-box="yellow" data-bg="press_bg" data-url="<?php bloginfo('url'); ?>/press">Press</a></li>

                        <li class="seperated">/</li>

                        <li><a href="#" data-box="map" data-bg="map_bg" id="map_link">Map</a></li>

                    </ul>

                </div>

                <div id="image_info"></div>

            </div>

            <div class="main_bar">

                <div class="logo" id="lo1"><a href="<?php bloginfo('url'); ?>"></a></div>

                <div id="bar_content">
                    <hr>
                    <p class="cap gillsans">Beautiful bistro & wine bar located in the old Opium Manufacture of Saigon,  

                                        serving <br>Continental food 

                                        with<br> an extensive wine list.</p>



                    

                    <div class="menu" id="map_menu">

                       <hr>

                        <ul>

                            <li><a href="#" id="map_button">Map</a></li>

                            <li><a href="#" id="direction_button">Directions</a></li>                        

                         

                        </ul>    

                    </div>

                    <div class="menu" id="history_menu">

                        <hr>

                        <ul>

                            <li><a href="#" id="history_button" data-box="brown" data-bg="history_bg" data-url="<?php bloginfo('url'); ?>/history">History</a></li>

                            <li><a href="#" id="slide_button">View Slideshow</a></li>                        

                         

                        </ul>    

                    </div>

                    <div id="contact_p">

                    <h3>LOCATION</h3>

                    <p>74 Hai Ba Trung  <br>Q.1, Saigon, Vietnam</p>

                    <hr>



                    <h3>RESTAURANT HOURS</h3>

                    <p>11a.m. till late</p>
                    <hr>
                    <h3>CONTACT</h3>
                    <p>(08) 3823 0509 <br>                                        <a href="mailto:yves@therefinerysaigon.com">yves@therefinerysaigon.com</a><br>
<a href="mailto:info@therefinerysaigon.com">info@therefinerysaigon.com</a>

</p>

                    </div>



                    

                </div>  

                <div id="menu_content" class="alt_menu">
                    <hr>
                    <p class="cap gillsans">All our bread, pasta, sauces, desserts and ice-cream are home-made on the premises.</p>
                    <hr>
                    <div class="menu">

                        <ul>

                            <li><a href="#" data-bg="menu_bg" data-url="<?php bloginfo('url'); ?>/main-menu">Menu</a></li>

                            <li><a href="#" data-bg="menu_bg" data-url="<?php bloginfo('url'); ?>/menu-set">SET LUNCH</a></li>

                            <li><a href="#" data-bg="brunch_bg" id="brunch_alt">BRUNCH</a></li>

                            <li><a href="#" data-bg="menu_bg" data-url="<?php bloginfo('url'); ?>/menu-drinks">DRINKS</a></li>

                            <li><a href="#" data-bg="menu_bg" data-url="<?php bloginfo('url'); ?>/menu-wine">WINE LIST</a></li>

                            <li><a href="#" data-bg="menu_bg" data-url="<?php bloginfo('url'); ?>/menu-kids">KIDS</a></li>

                        </ul>                       

                    </div>

                    <hr>

                    <a href="http://www.therefinerysaigon.com/wordpress/wp-content/uploads/2012/09/refinery_fullmenu-revised.pdf" target="_blank" class="cap download_link">Download a menu</a>



                   

                </div>

                <div id="brunch_content" class="alt_menu">
<hr>
                    <p class="cap gillsans"><strong class="cap yellow ">Brunch</strong> is served from 11 to 4 on Saturdays and Sundays. Brunch at The Refinery is very popular - the complimentary chocolate fountain and the kids' corner with its dedicated babysitter is a welcome plus for Saturday and Sunday morning parents - and reservations are highly recommended.</p>



                    <p class="cap gillsans">The courtyard is a good spot for playing ball and running around.</p>
                    <hr>
                      <div class="menu">

                        <ul>

                            <li><a href="#" data-bg="brunch_bg" data-url="<?php bloginfo('url'); ?>/brunch">Brunch menu</a></li>

                            <li><a href="#" data-bg="brunch_bg" data-url="<?php bloginfo('url'); ?>/kid-brunch">Kids brunch</a></li>                        

                         

                        </ul>                       

                    </div>





                </div>

                <div class="main_footer">

                    <p>
                       

                        <a href=" https://www.facebook.com/refinery.saigon" target="_blank"><img src="<?php bloginfo('template_url');?>/images/ref_facebook.png" alt=""></a>

                    </p>

                </div>

            </div>



            <div id="main_content">

                <div id="gray_box" class="wrapper_box">

                    

                    <div class="scroll_holder" id="gray_scroll">

                        <div class="content_placeholder"></div>

                    </div>

                    <span class="close_button"></span>

                </div>



                <div id="brown_box" class="wrapper_box">

                    <div class="scroll_holder">

                        <div class="content_placeholder"></div>

                    </div>

                    <span class="close_button"></span>

                </div>



                <div id="green_box" class="wrapper_box">

                    <div class="scroll_holder">

                        <div class="content_placeholder"></div>

                    </div>

                    <span class="close_button"></span>

                </div>



                <div id="yellow_box" class="wrapper_box">

                    <div class="scroll_holder">

                        <div class="content_placeholder"></div>

                    </div>

                    
                      <span class="close_button"></span>   
                </div>



                <div id="map_box" class="wrapper_box">

                    <span class="close_button"></span>

                    <iframe width="879" height="687" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=74+Hai+B%C3%A0+Tr%C6%B0ng,+Ho+Chi+Minh+City,+Vietnam&amp;aq=0&amp;oq=74+Hai+Ba+trun&amp;sll=37.0625,-95.677068&amp;sspn=58.294644,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=74+Hai+B%C3%A0+Tr%C6%B0ng,+B%E1%BA%BFn+Ngh%C3%A9,+Ho+Chi+Minh+City,+Vietnam&amp;t=m&amp;ll=10.777515,106.702813&amp;spn=0.007241,0.00942&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe>                   

                </div>





                <div id="nav_photo">

                    <div id="prev_photo">

                    </div>

                    <div id="next_photo">

                    </div>

                </div>



                <div id="photo_caption">

                    <p id="caption_holder"></p>

                </div>

                <div id="flower"></div>