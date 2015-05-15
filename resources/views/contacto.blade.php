<!-- C O N T A C T O -->
		<section id="section-contacto" class="section appear clearfix">
			<div class="container">

				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<h2 class="section-heading animated" data-animation="bounceInUp"><?php echo trans('contact.title') ?></h2>
							<p><?php echo trans('contact.subtitle') ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="cform" id="contact-form">
							<div id="sendmessage">
								 Your message has been sent. Thank you!
							</div>
							<form action="{{url('contactos/enviar_consulta')}}" method="post" class="form-horizontal contactForm">
							  <div class="form-group">
								<label for="name"><?php echo trans('contact.name')?></label>
								<input type="text" name="nombre" class="form-control" id="name" placeholder="<?php //echo trans('contact.name')?>" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="email"><?php echo trans('contact.email')?></label>
								<input type="email" class="form-control" name="email" id="email" placeholder="<?php //echo trans('contact.email')?>" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="subject"><?php echo trans('contact.subject')?></label>
								<input type="text" class="form-control" name="asunto" id="subject" placeholder="<?php //echo trans('contact.subject')?>" data-rule="maxlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="message"><?php echo trans('contact.message')?></label>
								<textarea class="form-control" name="mensaje" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
								<div class="validation"></div>
							  </div>

							  <button type="submit" class="btn btn-theme pull-left">ENVIAR MENSAJE</button>
							</form>

						</div>
					</div>
					<!-- ./span12 -->
				</div>

			</div>
		</section>
