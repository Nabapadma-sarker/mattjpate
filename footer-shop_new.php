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
			if((!isset($pmc_data['woocommerce_footer']) || $pmc_data['woocommerce_footer'] == 'none') ){
				echo do_shortcode( '[template id="'.$pmc_data['footer_content'].'"]');
			}
			else if(isset($pmc_data['woocommerce_footer']) && $pmc_data['woocommerce_footer'] != 'none'){
				echo do_shortcode( stripslashes('[template id="'.$pmc_data['woocommerce_footer'].'"]') );
			}			
			else{ 
			}			
		} ?>
		
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
