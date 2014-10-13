<?php
/**
 * Template Name: Thanks Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
	<!-- FEATURES BEGIN -->
	<section id="thanks">
		<div class="container">
			<div class="row">
				<div class="col-md-6 about">
					<div>
						感谢您注册成为<br>
						GoVita Haymarket店<br>
						的VIP会员，<br>
						您将收到更多店内优惠
					</div>
				<div class="col-md-6"> </div>
			</div>
		</div>
	</section>
	<!-- FEATURES END --> 
	
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
					<img src="<?php echo get_template_directory_uri();?>/images/map.jpg">
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

<?php

get_footer();
