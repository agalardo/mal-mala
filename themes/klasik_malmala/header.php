<?php
/**
 * The Header for our theme.
 *
 *
 * @package WordPress
 * @subpackage Klasik
 * @since Klasik 1.0
 */
?>

<?php get_template_part( 'site-header'); ?>

<?php $disableSlider = klasik_get_option( 'klasik_disable_slider' ,'');?>
<div class="preview__header">
</div>
<div id="bodychild">
    
	<div id="outercontainer">
    
        <!-- HEADER -->
        <div id="outerheader" class="fixedmenu">
        	<div id="headercontainer">
                <div class="container">
                    <header id="top">
                        <div class="row">
                        
                            <div id="logo" class="four columns"><?php klasik_logo(); echo get_bloginfo( 'name', 'display' ).' | '.get_bloginfo( 'description', 'display' ); ?></div>
<!--                            <section id="navigation" class="eight columns">
                                <nav id="nav-wrap">
                                    <?php wp_nav_menu( array(
                                      'container'       => 'ul', 
                                      'menu_class'      => 'sf-menu',
                                      'menu_id'         => 'topnav', 
                                      'depth'           => 0,
                                      'sort_column'    => 'menu_order',
                                      'fallback_cb'     => 'nav_page_fallback',
                                      'theme_location' => 'mainmenu' 
                                      )); 
                                    ?>
                                </nav> nav 	
                                <div class="clear"></div>
                            </section>-->
                            <div class="clear"></div>
                            
                        </div>
                        <div class="clear"></div>
                        <section id="navigation" class="eight columns">
                                <nav id="nav-wrap">
                                    <?php wp_nav_menu( array(
                                      'container'       => 'ul', 
                                      'menu_class'      => 'sf-menu',
                                      'menu_id'         => 'topnav', 
                                      'depth'           => 0,
                                      'sort_column'    => 'menu_order',
                                      'fallback_cb'     => 'nav_page_fallback',
                                      'theme_location' => 'mainmenu' 
                                      )); 
                                    ?>
                                </nav><!-- nav -->	
                                <div class="clear"></div>
                            </section>
                    </header>
                </div>
                <div class="clear"></div>
            </div>
		</div>
        <!-- END HEADER -->

		<!-- AFTERHEADER -->
        

        
        <?php 


		
        if( is_front_page() && !$disableSlider  ){
		
			echo '
			<div id="outerslider">

						<div id="slidercontainer">
							<section id="slider">
								
			
			';
			
			get_template_part( 'slider');
				
			echo '
								
								<div class="clear"></div>
							</section>
							
						</div>
			</div>
			';
			
			$outermainclass = "";
        }else{
			$outermainclass = "noslider"; 
		}
	
		
		if($outermainclass=='noslider'){
		?>
            <div id="outerafterheader" class="<?php echo $outermainclass; ?>" <?php echo klasik_page_image() ?>>
                <div class="container">
                    <div class="row">
                        <div class="twelve columns">
                            <div id="afterheader">
                                <?php  
                                    klasik_page_title();
                                ?>
								<?php if ( function_exists('yoast_breadcrumb') && !is_front_page() ) {
                                yoast_breadcrumb('<div id="breadcrumbs">','</div>');
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
		}
		?>
        <!-- END AFTERHEADER -->

        <?php get_template_part('layout-header'); ?>
							