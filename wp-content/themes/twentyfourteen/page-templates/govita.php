<?php
/**
 * Template Name: GoVita Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<section id="intro">
	<div class="flexslider span12 tsliders">
		<ul class="slides">
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/ad-1.jpg"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/ad-2.jpg"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/images/ad-3.jpg"></li>
		</ul>
	</div>
		<div class="container">
			
			<div class="row">
				
				<div class="col-lg-4 col-lg-offset-8 col-md-5 col-sm-6 vform">
			
						<div class="title wow flipInX" data-wow-duration="0.6s">
							<img src="<?php echo get_template_directory_uri();?>/images/title.jpg">
						</div>
						<?php
							// Start the Loop.
							while ( have_posts() ) : the_post();

								// Include the page content template.
								the_content();
							endwhile;
						?>
			
				</div>
			</div>
		</div>
		
		
	</section>
	<!-- INTRO END --> 
	
	<!-- SERVICES BEGIN -->
	<section id="services">
		<div class="container">
			<div class="row">
				<img src="<?php echo get_template_directory_uri(); ?>/images/promo.jpg" alt="优惠信息" />
			</div>
		</div>
	</section>
	<!-- SERVICES END --> 
	
	<!-- FEATURES BEGIN -->
	<section id="features">
		<div id="feature_img">
			<div class="flexslider span12 msliders">
				<ul class="slides">
					
			<?php for($i=1;$i<=20;$i++):?>
				 <?php if( get_field('slide_image_'.$i) ):?>
					 <li><img src="<?php echo the_field('slide_image_'.$i);?>"></li>
				 <?php endif;?>
			<?php endfor;?>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 about">
					<h3>关于GOVITA <br/>HAYMARKET</h3>
					<div>
						作为澳大利亚最大的保健品经销商
						之一，我们以最优惠的价格为您提供，
						本土及新西兰几乎所有的保健品品牌，
						以及优质的服务。
					</div>
					<a href="" class="round_btn_dark">光临我们</a> </div>
				<div class="col-md-6"> </div>
			</div>
		</div>
	</section>
	<!-- FEATURES END --> 
	<!-- SERVICES BEGIN -->
	<section id="services">
		<div class="container">
			<div class="row">
				<img src="<?php echo get_template_directory_uri(); ?>/images/coporation.jpg" alt="合作商家" />
			</div>
		</div>
	</section>
	<!-- SERVICES END -->
	
	<!-- SERVICES BEGIN -->
	<section id="services">
		<div class="container">
			<div class="row">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ad.jpg" alt="最新优惠" />
			</div>
		</div>
	</section>
	<!-- SERVICES END -->
	
	<!-- CONTACT BEGIN-->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h4>联系我们</h4>
					<ul class="contact_data_list">
						<li><i class="icon-call-in"></i> <div>Tel:(02) 9281 8118  <br> Fax:02 9281 8887</div></li>
						<li><i class="icon-pointer"></i> <div>Go Vita Haymarket<br>
Level 1 (next to IGA supermarket)<br>
Market City Shopping Centre<br>
9-13 Hay Street<br>
Haymarket 200</div></li>
						<li><i class="icon-envelope"></i><div> marketcity@vitaminstore.com.au</div></li>
					</ul>
				</div>
				<div class="col-md-5">
					<div>
						<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://ditu.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Go+Vita+Haymarket+Level+1+(next+to+IGA+supermarket)+Market+City+Shopping+Centre+9-13+Hay+Street+Haymarket+200&amp;aq=&amp;sll=35.86166,104.195397&amp;sspn=53.748632,93.076172&amp;brcurrent=3,0x0:0x0,0%3B5,0,0&amp;ie=UTF8&amp;t=m&amp;ll=-33.8798,151.203442&amp;spn=0.006295,0.007583&amp;output=embed"></iframe>
					</div>
				</div>
				<div class="col-md-3">
					<h4>关注我们</h4>
					<ul class="soc_nav">
						<li><a href="#" class="icon-soc-sina"></a></li>
						<li><a href="#" class="icon-soc-weixin"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- CONTACT END--> 
	
	<!-- FOOTER BEGIN -->
	<footer id="footer">
		<div class="container"> <a href="http://www.vitaminstore.com.au/landingpage/" class="logo"> <img src="<?php echo get_template_directory_uri();?>/images/logo-2.png" alt="Best start for your business"  /> </a>
			<p>Your Health Shop</p>
			<p>&copy; 2014 GOVITA <br>
				Designed by Mywishdesign.com</p>
		</div>
	</footer>
	<!-- FOOTER END --> 
	
</div>


<!-- MODALS BEGIN--> 
<!-- subscribe modal-->
<div class="modal fade" id="contact-detail" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<div>
				<div class="m-map">
											<iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://ditu.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Go+Vita+Haymarket+Level+1+(next+to+IGA+supermarket)+Market+City+Shopping+Centre+9-13+Hay+Street+Haymarket+200&amp;aq=&amp;sll=35.86166,104.195397&amp;sspn=53.748632,93.076172&amp;brcurrent=3,0x0:0x0,0%3B5,0,0&amp;ie=UTF8&amp;t=m&amp;ll=-33.8798,151.203442&amp;spn=0.006295,0.007583&amp;output=embed"></iframe>
				</div>
				<div class="m-dt">
					<h4>联系我们</h4>
					<ul class="contact_data_list">
						<li><i class="icon-call-in"></i> <div>Tel:(02) 9281 8118  <br> Fax:02 9281 8887</div></li>
						<li><i class="icon-pointer"></i> <div>Go Vita Haymarket<br>
Level 1 (next to IGA supermarket)<br>
Market City Shopping Centre<br>
9-13 Hay Street<br>
Haymarket 200</div></li>
						<li><i class="icon-envelope"></i><div> marketcity@vitaminstore.com.au</div></li>
					</ul>
					
					<h4>关注我们</h4>
					<ul class="soc_nav">
						<li><a href="#" class="icon-soc-sina"></a></li>
						<li><a href="#" class="icon-soc-weixin"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<?php

get_footer();
