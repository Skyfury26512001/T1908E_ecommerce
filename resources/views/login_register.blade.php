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
											<select class="wide add_bottom_10" name="sex" id="sex">
													<option value="" disabled selected>Sex*</option>
												    <option value="Male">Male</option>
													<option value="Female">Female</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-6 pl-1">
									<div class="form-group">
										<input type="date" class="form-control" name="birthDate">
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

@endsection
