<?php 
	$arkbiz_hs_call_actions			= get_theme_mod('hide_show_call_actions','on'); 
	$arkbiz_cta_button_label		= get_theme_mod('call_action_button_label');
	$arkbiz_cta_button_link			= get_theme_mod('call_action_button_link');
	$arkbiz_cta_button_target		= get_theme_mod('call_action_button_target');
	$arkbiz_cta_bg_setting			= get_theme_mod('call_action_background_setting',esc_url(get_template_directory_uri() .'/images/cta.jpg'));
	if($arkbiz_hs_call_actions == 'on') :
?>
<section id="cta-unique" class="call-to-action-thirteen wow fadeInDown">
    <div class="background-overlay" style="background-image: url('<?php echo esc_url($arkbiz_cta_bg_setting); ?>'); background-attachment: fixed;">
        <div class="container">
            <div class="row padding-top-35 padding-bottom-35">
                
                <div class="col-md-8">
					<?php 
						$arkbiz_aboutusquery1 = new wp_query('page_id='.get_theme_mod('call_action_page',true)); 
						if( $arkbiz_aboutusquery1->have_posts() ) 
						{   while( $arkbiz_aboutusquery1->have_posts() ) { $arkbiz_aboutusquery1->the_post(); 
					?>
                    <h2 class="demo1"> <?php the_title(); ?> <span class="rotate"> <?php the_content(); ?> </span> </h2>
					
					<?php } } wp_reset_postdata(); ?>
                </div>				
				
                <?php if($arkbiz_cta_button_label) :?>
					<div class="col-md-4 flexing flexing-btn">					
						<a href="<?php echo esc_url($arkbiz_cta_button_link); ?>" <?php if(($arkbiz_cta_button_target)== 1){ echo "target='_blank'"; } ?> class="bt-primary bt-effect-3 call-btn-1"><?php echo esc_html($arkbiz_cta_button_label); ?></a>
					</div>
				<?php endif; ?>
				
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<?php endif; ?>
