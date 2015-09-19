<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>
<!--end main -->
</div>


<div id="footer-full-width">

 <div class="row">
  <div class="large-12 columns" id="footer">
	<footer>
    <div class="large-12 columns">
     <div class="large-3 small-4 columns" id="footer_menu_1">
     
     	<span>The CURRY CLUB</span>
     
      <ul>
           <?php wp_list_pages('title_li=&exclude=5,19,38,28,49'); ?>
    	</ul>

     </div> 	 
   
<div class="large-3 small-4 columns" id="footer_menu_1">
     
     	<span> OUR FOOD</span>
     
      <ul>
           <?php wp_list_pages('title_li=&include=28,19,38'); ?>
    	</ul>

     </div> 

<div class="large-3 small-4 columns" id="footer_menu_1">
     
     	<span> PROMOTION</span>
     
      <ul>
           <?php wp_list_pages('title_li=&include=49'); ?>
    	</ul>

     </div>

    	
<!--second --url -->
   
   
    
<div class="large-3 small-4 columns" id="footer_menu_1">
    <p><span>CONTACT US</span> <br />	
	10 Woods Corner Road<br />
East Setauket, NY 11733<br />
P: (631) 751-4845<br />
</p>

</div>

	 </div>	
		

	</footer>

</div>


	</div>

	</div><!-- end footer full width -->

<div id="bottom-footer">
		<span>COPYRIGHT © 2013 THE CURRY CLUB | ALL RIGHTS RESERVED.
</span>
  <div class="row">
  	<div class="large-12 columns text-center">
  	
  	</div>
  </div>



</div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
	
  <!--<script>
  document.write('<script src=' +
  ('__proto__' in {} ? '../javascripts/vendor/zepto' : '../javascripts/vendor/jquery') +
  '.js><\/script>')
  </script>-->
  <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
  
  <script src="<?php bloginfo('template_directory');?>/js/vendor/zepto.js"></script>
  
  <script src="<?php bloginfo('template_directory');?>/javascripts/foundation/foundation.js"></script>
	
	<script src="<?php bloginfo('template_directory');?>/javascripts/foundation/foundation.topbar.js"></script>
	
	<script src="<?php bloginfo('template_directory');?>/javascripts/foundation/foundation.joyride.js"></script>
	
	<script src="<?php bloginfo('template_directory');?>/javascripts/foundation/foundation.magellan.js"></script>
	
	<script src="<?php bloginfo('template_directory');?>/javascripts/foundation/foundation.alerts.js"></script>
	
	<script src="<?php bloginfo('template_directory');?>/javascripts/foundation/foundation.abide.js"></script>
	
	<script src="<?php bloginfo('template_directory');?>/javascripts/foundation/foundation.interchange.js"></script>
	
	<script src="<?php bloginfo('template_directory');?>/javascripts/foundation/foundation.dropdown.js"></script>
	
	<script src="<?php bloginfo('template_directory');?>/javascripts/foundation/foundation.placeholder.js"></script>
	
	<script src="<?php bloginfo('template_directory');?>/javascripts/foundation/foundation.clearing.js"></script>
	
	<script src="<?php bloginfo('template_directory');?>/javascripts/foundation/foundation.forms.js"></script>
	
	<script src="<?php bloginfo('template_directory');?>/javascripts/foundation/foundation.orbit.js"></script>
	
	<script src="<?php bloginfo('template_directory');?>/javascripts/foundation/foundation.tooltips.js"></script>
	
	<script src="<?php bloginfo('template_directory');?>/javascripts/foundation/foundation.reveal.js"></script>
	
	<script src="<?php bloginfo('template_directory');?>/javascripts/foundation/foundation.cookie.js"></script>
	
	<script src="<?php bloginfo('template_directory');?>/javascripts/foundation/foundation.section.js"></script>
	


  
  <script>
    $(document).foundation();
  </script>


</body>
</html>