<?php
global $pmc_data
?>
<div class="totop"><div class="gototop"><div class="arrowgototop"></div></div></div>
<!-- footer-->

<footer>
	<div id="footer">
		<?php if(!is_plugin_active( 'page-builder-pmc/page-builder-pmc.php')) { ?>
			<?php footer(); ?>
		<?php } else {
			$post_custom = get_post_custom(get_the_id()); 
			if(isset($post_custom['custom_post_footer'][0])){
				if($post_custom['custom_post_footer'][0] == 'none' && $post_custom['custom_post_footer'][0] != 'empty' && !get_query_var('portfoliocategory') && !is_category() && !is_search() && !is_author() && !is_archive() && !is_tag()){		
					echo do_shortcode( '[template id="'.$pmc_data['footer_content'].'"]');
					}	
					else if(isset($post_custom['custom_post_footer'][0]) && $post_custom['custom_post_footer'][0] != 'none' && $post_custom['custom_post_footer'][0] != 'empty' && !get_query_var('portfoliocategory') && !is_category() && !is_search() && !is_author() && !is_archive() && !is_tag()){ 
					echo do_shortcode( stripslashes('[template id="'.$post_custom['custom_post_footer'][0].'"]') );
				}
				else{ 
					echo do_shortcode( '[template id="'.$pmc_data['footer_content'].'"]');
				}			
			} else {
				echo do_shortcode( '[template id="'.$pmc_data['footer_content'].'"]');
			}			
		}?>
		
	</div>
	<!-- footer bar at the bootom-->
	<div id="footerbwrap">
		<div id="footerb">
			<div class="lowerfooter">
			<div class="copyright">	
				<?php echo stripslashes($pmc_data['copyright']); ?>
			</div>
			</div>
		</div>
	</div>	
</footer>	


<script type="text/javascript" > jQuery(document).ready(function(){jQuery("a[rel^='lightbox']").prettyPhoto({theme:'light_rounded',show_title: true, deeplinking:false,callback:function(){scroll_menu()}});  });</script>
<input type="hidden" id="root" value="<?php echo get_template_directory_uri() ?>" >
<?php wp_footer();  ?>




<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56055678-1', 'auto');
  ga('send', 'pageview');

</script>



</body>
</html>
