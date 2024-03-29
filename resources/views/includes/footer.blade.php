<footer class="@yield('footer-class')">
	<div class="container margin_60_35">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a data-toggle="collapse" data-target="#collapse_ft_1" aria-expanded="false" aria-controls="collapse_ft_1" class="collapse_bt_mobile">
					<h3>Quick Links</h3>
					<div class="circle-plus closed">
						<div class="horizontal"></div>
						<div class="vertical"></div>
					</div>
				</a>
				<div class="collapse show" id="collapse_ft_1">
					<ul class="links">
						<li><a href="#0">Get Quote Now</a></li>
						<li><a href="#0">About us</a></li>
						<li><a href="#0">FAQs</a></li>
						<li><a href="#0">My account</a></li>
						<li><a href="#0">Create account</a></li>
						<li><a href="#0">Contacts</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a data-toggle="collapse" data-target="#collapse_ft_2" aria-expanded="false" aria-controls="collapse_ft_2" class="collapse_bt_mobile">
					<h3>Categories</h3>
					<div class="circle-plus closed">
						<div class="horizontal"></div>
						<div class="vertical"></div>
					</div>
				</a>
				<div class="collapse show" id="collapse_ft_2">
					<ul class="links">
						@foreach($categories as $category)
						<li><a href="{{ url('/categories/'.$category->id.'/jobs') }}">{{ $category->name }}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a data-toggle="collapse" data-target="#collapse_ft_3" aria-expanded="false" aria-controls="collapse_ft_3" class="collapse_bt_mobile">
					<h3>Contacts</h3>
					<div class="circle-plus closed">
						<div class="horizontal"></div>
						<div class="vertical"></div>
					</div>
				</a>
				<div class="collapse show" id="collapse_ft_3">
					<ul class="contacts">
						<li><i class="ti-home"></i>97845 Baker st. 567<br>New Zeland</li>
						<li><i class="ti-headphone-alt"></i>+39 06 97240120</li>
						<li><i class="ti-email"></i><a href="#0">info@quicker.com</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a data-toggle="collapse" data-target="#collapse_ft_4" aria-expanded="false" aria-controls="collapse_ft_4" class="collapse_bt_mobile">
					<div class="circle-plus closed">
						<div class="horizontal"></div>
						<div class="vertical"></div>
					</div>
					<h3>Keep in touch</h3>
				</a>
				<div class="collapse show" id="collapse_ft_4">
					<div id="newsletter">
						<div id="message-newsletter"></div>
						<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
							<div class="form-group">
								<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
								<input type="submit" value="Submit" id="submit-newsletter">
							</div>
						</form>
					</div>
					<div class="follow_us">
						<h5>Follow Us</h5>
						<ul>
							<li><a href="#0"><i class="ti-facebook"></i></a></li>
							<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="#0"><i class="ti-google"></i></a></li>
							<li><a href="#0"><i class="ti-pinterest"></i></a></li>
							<li><a href="#0"><i class="ti-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /row-->
		<hr>
		<div class="row">
			<div class="col-lg-12">
				<ul id="additional_links">
					<li><a href="#0">Terms and conditions</a></li>
					<li><a href="#0">Privacy</a></li>
					<li><span>© 2018 Quicker</span></li>
				</ul>
			</div>
		</div>
	</div>
</footer>