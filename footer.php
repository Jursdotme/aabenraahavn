
			<!-- footer -->
			<div class="newsletter">
				<div id="mc_embed_signup">
					<div class="newsletter-caption">
						<h2><?php _e('Newsletter','aabenraahavn'); ?></h2>
						<p>
							<?php _e('News from Port of Aabenraa right in your inbox.', 'aabenraahavn'); ?>
							<?php if(ICL_LANGUAGE_CODE=='en'){
								echo "<br/><i>The newsletter is currently only in Danish</i>";
							} else if(ICL_LANGUAGE_CODE=='de'){
								echo "<br/><i>Der Newsletter ist derzeit nur auf Dänisch. </i>";
							}?>
						</p>
					</div>
					<form action="//aabenraaport.us9.list-manage.com/subscribe/post?u=7b68bcc232dd4d3796484c83d&amp;id=7d15545fc5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">

							<div class="mc-field-group">
								<input type="email" value="" placeholder="Email" name="EMAIL" class="required email" id="mce-EMAIL">
							</div>



							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;">
								<input type="text" name="b_7b68bcc232dd4d3796484c83d_7d15545fc5" tabindex="-1" value="">
							</div>

					    <input type="submit" value="<?php _e('Subscribe', 'aabenraahavn'); ?>" name="subscribe" id="mc-embedded-subscribe" class="btn btn-brand">

				    </div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>
					</form>
				</div>

				<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				<!--End mc_embed_signup-->

			</div>

			<footer class="footer" role="contentinfo">
				<div class="footer-inner">

					<div class='logo'>
		        <a href='<?php echo home_url(); ?>'>
		          <img src='<?php echo get_template_directory_uri(); ?>/img/header-logo.svg' alt='Logo' class='logo-img'>
		        </a>
		      </div>

					<div class="flex-spacer"></div>

					<address class="address">
						<?php
							$firmanavn      = get_field('firmanavn', 'option');
							$adresse        = get_field('adresse', 'option');
							$postnummer     = get_field('postnummer', 'option');
							$by             = get_field('by', 'option');
							$telefonnummer  = get_field('telefonnummer', 'option');
							$email_addresse = get_field('email_addresse', 'option');
						?>

						<h2><?php echo $firmanavn; ?></h2>
						<p><?php echo $adresse; ?><br>
						<?php echo $postnummer; ?> <?php echo $by; ?></p>

						<p>
							Tel. +45 <?php echo $telefonnummer; ?><br>
							<a href="mailto:<?php echo $email_addresse; ?>"><?php echo $email_addresse; ?></a>
						</p>

						<div class="social">
							<a href="<?php the_field('facebook', 'option'); ?>"><i class="fa fa-facebook-square"></i></a>
							<a href="<?php the_field('instagram', 'option'); ?>"><i class="fa fa-instagram"></i></a>
						</div>
					</address>

				</div>
			</footer>

			<?php wp_footer(); ?>

	</body>
</html>
