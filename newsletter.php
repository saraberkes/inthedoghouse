
	<div class="content">
		<h2><?php  the_field('newsletter_headline', 'option')?></h2>
		<p><?php the_field('newsletter_text', 'option') ?></p>
		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
		<form action="//ottawapetsitter.us11.list-manage.com/subscribe/post?u=3f2951fc709e0df4cc42a6270&amp;id=03946e3136" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		    <div id="mc_embed_signup_scroll">
			<input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="Name">
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3f2951fc709e0df4cc42a6270_03946e3136" tabindex="-1" value=""></div>
		    <div class="clear"><input type="submit" value="<?php the_field('newsletter_button_text', 'option') ?> " name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		    </div>
		</form>
		</div>
	</div>
