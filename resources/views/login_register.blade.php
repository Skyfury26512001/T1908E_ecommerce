@extends('layouts.master')
@section('specific_css')
	<link href="{{asset('assets/css/account.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/custom-hung.css')}}" rel="stylesheet">
@endsection
@section('specific_js')
{{--	<script>--}}
{{--    	// Client type Panel--}}
{{--		$('input[name="client_type"]').on("click", function() {--}}
{{--		    var inputValue = $(this).attr("value");--}}
{{--		    var targetBox = $("." + inputValue);--}}
{{--		    $(".box").not(targetBox).hide();--}}
{{--		    $(targetBox).show();--}}
{{--		});--}}
{{--	</script>--}}
@endsection
@section('content')

{{--		@if($errors->any())--}}
{{--			<div class="popup_wrapper" style="z-index: 0;">--}}
{{--				<div class="popup_content">--}}
{{--					<span class="popup_close">X</span>--}}
{{--					<ul>--}}
{{--				@foreach($errors->all() as $error)--}}
{{--							<li>{{$error}}</li>--}}
{{--				@endforeach--}}
{{--					</ul>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		@endif--}}
@include('layouts.error_pop_up')
{{--	<ul>--}}
{{--		@if($errors->any())--}}
{{--			@foreach($errors->all() as $error)--}}
{{--				<li>{{$error}}</li>--}}
{{--			@endforeach--}}
{{--		@endif--}}
{{--	</ul>--}}

	<main class="bg_gray">
	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
		</div>
		<h1>Sign In or Create an Account</h1>
	</div>
	<!-- /page_header -->
			<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="client">Already Client</h3>
					<form action="{{route('loginP')}}" method="POST">
						@csrf
						<div class="form_container">
							<div class="row no-gutters">
								<div class="col-lg-6 pr-lg-1">
									<a href="#0" class="social_bt facebook">Login with Facebook</a>
								</div>
								<div class="col-lg-6 pl-lg-1">
									<a href="#0" class="social_bt google">Login with Google</a>
								</div>
							</div>
							<div class="divider"><span>Or</span></div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Email*">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" id="password_in" value="" placeholder="Password*">
							</div>
							<div class="clearfix add_bottom_15">
								<div class="checkboxes float-left">
									<label class="container_check">Remember me
										<input type="checkbox" name="term" value="checked">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="float-right"><a id="forgot" href="javascript:void(0);">Lost Password?</a></div>
							</div>
							<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
							<div id="forgot_pw">
								<div class="form-group">
									<input type="email" class="form-control" name="email_forgot" id="email_forgot" placeholder="Type your email">
								</div>
								<p>A new password will be sent shortly.</p>
								<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
							</div>
						</div>
					</form>
					<!-- /form_container -->
				</div>
				<!-- /box_account -->
				<div class="row">
					<div class="col-md-6 d-none d-lg-block">
						<ul class="list_ok">
							<li>Find Locations</li>
							<li>Quality Location check</li>
							<li>Data Protection</li>
						</ul>
					</div>
					<div class="col-md-6 d-none d-lg-block">
						<ul class="list_ok">
							<li>Secure Payments</li>
							<li>H24 Support</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="new_client">New Client</h3> <small class="float-right pt-2">* Required Fields</small>
					<form action="{{route('registerP')}}" method="POST">
						@csrf
						<div class="form_container">
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="email_2" placeholder="Email*">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" id="password_in_2" value="" placeholder="Password*">
						</div>
						<hr>
{{--						<div class="form-group">--}}
{{--							<label class="container_radio" style="display: inline-block; margin-right: 15px;">Private--}}
{{--								<input type="radio" name="client_type" checked value="private">--}}
{{--								<span class="checkmark"></span>--}}
{{--							</label>--}}
{{--							<label class="container_radio" style="display: inline-block;">Company--}}
{{--								<input type="radio" name="client_type" value="company">--}}
{{--								<span class="checkmark"></span>--}}
{{--							</label>--}}
{{--						</div>--}}
						<div class="private box">
							<div class="row no-gutters">
								<div class="col-6 pr-1">
									<div class="form-group">
										<input type="text" class="form-control" name="firstName" placeholder="First Name*">
									</div>
								</div>
								<div class="col-6 pl-1">
									<div class="form-group">
										<input type="text" class="form-control" name="lastName" placeholder="Last Name*">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<input type="text" class="form-control" name="address" placeholder="Full Address*">
									</div>
								</div>
							</div>

							<div class="row no-gutters">
								<div class="col-6 pr-1">
									<div class="form-group">
										<div class="custom-select-form">
											<select class="wide add_bottom_10" name="city" id="city">
													<option value="" disabled selected>City*</option>
													@foreach($cities as $city)
														<option value="{{$city->id}}">{{$city->name}}</option>
													@endforeach
											</select>
										</div>
									</div>
								</div>
								<div class="col-6 pl-1">
									<div class="form-group">
										<input type="text" class="form-control" name="phone" placeholder="Telephone *">
									</div>
								</div>
							</div>
							<!-- /row -->
						</div>
						<hr>
						<div class="form-group">
							<label class="container_check">Accept <a href="#0">Terms and conditions</a>
								<input type="checkbox" name="term" required oninvalid="this.setCustomValidity('Please check here')"
    oninput="this.setCustomValidity('')">
								<span class="checkmark"></span>
							</label>
						</div>
							<div class="text-center"><input type="submit" value="Register" class="btn_1 full-width"></div>
						</div>
					</form>
					<!-- /form_container -->
				</div>
				<!-- /box_account -->
			</div>
		</div>
		<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!--/main-->
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_1">Quick Links</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_1">
						<ul>
							<li><a href="about.html">About us</a></li>
							<li><a href="help.html">Faq</a></li>
							<li><a href="help.html">Help</a></li>
							<li><a href="account.html">My account</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contacts.html">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_2">Categories</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_2">
						<ul>
							<li><a href="listing-grid-1-full.html">Clothes</a></li>
							<li><a href="listing-grid-2-full.html">Electronics</a></li>
							<li><a href="listing-grid-1-full.html">Furniture</a></li>
							<li><a href="listing-grid-3.html">Glasses</a></li>
							<li><a href="listing-grid-1-full.html">Shoes</a></li>
							<li><a href="listing-grid-1-full.html">Watches</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-target="#collapse_3">Contacts</h3>
					<div class="collapse dont-collapse-sm contacts" id="collapse_3">
						<ul>
							<li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
							<li><i class="ti-headphone-alt"></i>+94 423-23-221</li>
							<li><i class="ti-email"></i><a href="#0">info@allaia.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-target="#collapse_4">Keep in touch</h3>
					<div class="collapse dont-collapse-sm" id="collapse_4">
						<div id="newsletter">
						    <div class="form-group">
						        <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
						        <button type="submit" id="submit-newsletter"><i class="ti-angle-double-right"></i></button>
						    </div>
						</div>
						<div class="follow_us">
							<h5>Follow Us</h5>
							<ul>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/twitter_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/facebook_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/instagram_icon.svg" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/youtube_icon.svg" alt="" class="lazy"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="row add_bottom_25">
				<div class="col-lg-6">
					<ul class="footer-selector clearfix">
						<li>
							<div class="styled-select lang-selector">
								<select>
									<option value="English" selected>English</option>
									<option value="French">French</option>
									<option value="Spanish">Spanish</option>
									<option value="Russian">Russian</option>
								</select>
							</div>
						</li>
						<li>
							<div class="styled-select currency-selector">
								<select>
									<option value="US Dollars" selected>US Dollars</option>
									<option value="Euro">Euro</option>
								</select>
							</div>
						</li>
						<li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/cards_all.svg" alt="" width="198" height="30" class="lazy"></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul class="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
						<li><span>© 2020 Allaia</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<div id="toTop"></div><!-- Back to top button -->
@endsection
