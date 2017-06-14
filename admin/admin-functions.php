<?php/*-----------------------------------------------------------------------------------*//* Head Hook/*-----------------------------------------------------------------------------------*/function of_head() { do_action( 'of_head' ); }/*-----------------------------------------------------------------------------------*//* Add default options after activation *//*-----------------------------------------------------------------------------------*//*-----------------------------------------------------------------------------------*//* Admin Backend *//*-----------------------------------------------------------------------------------*/function optionsframework_admin_message() { 		//Tweaked the message on theme activate	?>    <script type="text/javascript">    jQuery(function(){    	        var message = '<p>This theme comes with an <a href="<?php echo admin_url('admin.php?page=optionsframework'); ?>">options panel</a> to configure settings. This theme also supports widgets, please visit the <a href="<?php echo admin_url('widgets.php'); ?>">widgets settings page</a> to configure them.</p>';    	jQuery('.themes-php #message2').html(message);        });    </script>    <?php	}add_action('admin_head', 'optionsframework_admin_message'); function optionsframework_woo_hide() { 		//Tweaked the message on theme activate	if (!function_exists( 'is_woocommerce' ) ) : 		?>		<script type="text/javascript">		jQuery(function(){						jQuery(document).ready(function(){					jQuery('.woocommercesettings').hide();			});				});		</script>		<?php	endif;	}add_action('admin_head', 'optionsframework_woo_hide'); /*-----------------------------------------------------------------------------------*//* Small function to get all header classes *//*-----------------------------------------------------------------------------------*/	function of_get_header_classes_array() {		global $of_options_pmc;		$hooks = '';		foreach ($of_options_pmc as $value) {						if ($value['type'] == 'heading') {				$hooks[] = preg_replace("[^A-Za-z0-9]", "", strtolower($value['name']) );			}					}				return $hooks;			}	/*-----------------------------------------------------------------------------------*//* function to output css options *//*-----------------------------------------------------------------------------------*/function generate_options_css($newdata) {	/** Define some vars **/	$pmc_data = $newdata; 	$uploads = wp_upload_dir();	$css_dir = get_stylesheet_directory() . '/css/';		/** Save on different directory if on multisite **/	if(is_multisite()) {		$aq_uploads_dir = trailingslashit($uploads['basedir']);	} else {		$aq_uploads_dir = $css_dir;	}		/** Capture CSS output **/	ob_start();	require($css_dir . 'style_options.php');	$css = ob_get_clean();		/** Write to options.css file **/	WP_Filesystem();	global $wp_filesystem;	if ( ! $wp_filesystem->put_contents( $aq_uploads_dir . 'options.css', $css, 0644) ) {	    return true;	}	}
/* For use in themes */$pmc_data = get_option(OPTIONS);?>