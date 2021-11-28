		<section id="title" class="page">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h1>Contact Us</h1>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
					</div>
					<div class="col-sm-6">
						<ul class="breadcrumb pull-right">
							<li><a href="index.html">Home</a></li>
							<li><a href="#">Pages</a></li>
							<li class="active">Blog Item</li>
						</ul>
					</div>
				</div>
			</div>
		</section><!--/#title-->
		
		<?php include("sidebar-page.php"); ?>
		
		
		<div class="col-sm-8 col-sm-pull-4">
					<div class="blog">
						<div class="blog-item">
							<img class="img-responsive img-blog" src="images/web-design-Contact-us.jpg" width="100%" alt="" />
							<div class="blog-content">														
							<div class="row">
								<div class="col-sm-12">
								<h1>Get in Touch</h1>
								<p><strong>We're looking forward to receiving your enquiry.</strong></p>
								<p>Please be sure to tell us as much about your project as possible. Once we have received your enquiry a member of our experienced team will get back to you to discuss your options and how Hasin IT can help.</p>
									<br><br>
									<h4>Please fillup the Form and hit on send button</h4>
										<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>
									<div class="status alert alert-success" style="display: none"></div>
									<form role="form" method="POST" action="sendemail.php" id="contact-form">
										<div class="row">
											<div class="col-sm-5">
												<div class="form-group">
													<input type="text" name="name" class="form-control" required="required" placeholder="Enter Name">
												</div>
												<div class="form-group">
													<input type="text" name="email" class="form-control" required="required" placeholder="Enter Email">
												</div>
												<div class="form-group">
													<input type="text" name="subject" class="form-control" required="required" placeholder="Enter Subject">
												</div>
												<div class="form-group">
												
													<textarea name="message" id="message" required="required" class="form-control" rows="5" placeholder="Message"></textarea>
												</div>
												
												<div class="form-group">
													<input type="hidden" name="save" value="contact">
													<button type="submit" class="btn btn-success">Send Message</button>
												</div>
												
											</div>
											<div class="col-sm-7">
											
											  <address>
												<strong>Hasin IT</strong><br>
												Sekander Center, 3<sup>rd</sup> floor<br>
												Oxyzen, Chittagong, Bangladesh.<br>
												<i class="icon-phone-sign icon-sm"></i> (+88) 01755766588<br>
												<i class="icon-envelope icon-sm"></i> info@hasin-it.com<br>
											   <i class="icon-skype icon-sm"></i> hasinitbd
											</address>
												<h4>Our Location</h4>
										<iframe width="100%" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=Oxyzen%20Chittagong%20Bangladesh+(Hasin%20IT)&ie=UTF8&t=&z=14&iwloc=B&output=embed"></iframe>
											</div>
											
										</div>
									</form>
								</div><!--/.col-sm-8-->
								
							</div>
							
							</div>
						</div><!--/.blog-item-->
					</div>
				</div><!--/.col-md-8-->
			</div><!--/.row-->
		</section><!--/#blog-->
		
