@extends('layouts.master')

@section('title')
Profile | Quicker
@endsection

@section('body-class')

@endsection

@section('header-class')

@endsection

@section('content')
<div id="results" style="padding: 10px 0;">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-10 d-none d-lg-block">
				<h4 style="font-size: 18px;">Profile</h4>
			</div>
			<div class="col-lg-9 quicker_search_bar_header">
				<form>
					<div class="quicker_search_bar">
						<input type="text" class="flexdatalist form-control" data-min-length='0' placeholder="What are you looking for?" required="" list="languages">
						<datalist id="languages" onmouseleave="this.form.submit()">
							@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>
							@endforeach
						</datalist>
						<input type="submit" value="Get Quotes" id="getQuoteBtn" data-backdrop="static" data-keyboard="false">
					</div>
				</form>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /sub_header -->
<div class="container">
	<div class="row mt-3 mb-3">
		<aside class="col-lg-3" id="faq_cat">
			<div class="box_style_cat" id="faq_box">
				<ul id="cat_nav">
					<li><a href="{{url('/home/update-profile')}}"> Profile</a></li>
					<li><a href="{{url('/home/update-password')}}"> Update Password</a></li>
				</ul>
			</div>
			<!--/sticky -->
		</aside>
		<!--/aside -->
		
		<div class="col-lg-9">
			<section style="background: white; padding: 20px">
				<div class="row">  
					<div class="col-md-12 d-md-none d-lg-none d-xl-none">
						<select class="form-control form-group" name="filter" id="filter" required="" onChange="window.document.location.href=this.options[this.selectedIndex].value;" value="GO" placeholder="">
							<option value="">Select Account</option>

							<option value="{{url('home/update-profile')}}">Update Profile</option>
							<option value="{{url('home/update-password')}}">Update Password</option>

						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4 style="text-align: center;">Update Account</h4>
						<hr>
					</div>
				</div>	
				<form name="frmAvatar" id="frmAvatar" class="hidden" style="display: none" enctype="multipart/form-data" action="{{url('home/update-profile-photo')}}" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input id="photoId" style="display: none" type="file" name="avatar">
					<input type="submit" style="display: none" value="submit">
				</form>

				<form action="{{url('home/save-update-profile')}}" method="post"  enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-md-4 text-center">
							@if($user->avatar == '')

							<img class="img-responsive rounded-circle" style="height: 200px; margin-bottom:10px;" src="{{asset('/uploads/avatar.jpg')}}" alt="">


							@else

							<img class="img-responsive rounded-circle" style="height: 200px; margin-bottom:10px;" src="{{asset('/uploads/profiles/'.$user->avatar)}}" alt=""><br>

							@endif
							<button type="button" class="btn btn-primary btn-sm" id="changeProfileImage" onclick="selectImage()">Change</button>
						</div>
						<div class="col-md-8">
							<div class="row">
								<div class="form-group col-md-6">
									<label for="inputFirstname">First Name</label>
									<input type="text" name="first_name" class="form-control" id="name" placeholder="First First Name" value="{{$user->first_name}}">
								</div>
								<div class="form-group col-md-6">
									<label for="inputFirstname">Last Name</label>
									<input type="text" name="last_name" class="form-control" id="name" placeholder="First Last Name" value="{{$user->last_name}}">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label for="inputEmail4">Email</label>
									<input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{$user->email}}" readonly="readonly">
								</div>

								<div class="form-group col-md-6">
									<label for="inputMobile">Mobile</label>
									<input type="text" name="mobile" class="form-control" id="inputMobile" placeholder="Mobile" value="{{$user->mobile}}">
								</div>
							</div>
							<div class="form-group">
								<label for="inputAddress">Address</label>
								<input type="text" name="address" class="form-control" id="inputAddress" placeholder="" value="{{$user->address}}">
							</div>
							<div class="row">

								<div class="form-group col-md-4">
									<label for="inputApt">Apt / Unit</label>
									<input type="text" name="apt_no" class="form-control" id="inputApt" value="{{$user->apt_no}}">
								</div>
								
								<div class="form-group col-md-4">
									<label for="inputCity">Town / City</label>
									<select name="city" class="form-control select2" id="inputCity">
										<option  value="">--Select City --</option>
										@foreach($cities as $c)
										<option {{$c->id == $user->city_id ? 'selected' : '' }} value="{{$c->id}}">{{$c->name}}</option>
										@endforeach

									</select>
								</div>

								<div class="form-group col-md-4">
									<label for="inputPincode">Pincode</label>
									<input type="text" name="pincode" class="form-control" id="inputPincode" value="{{$user->pincode}}">
								</div>
							</div>
							<button type="submit" class="btn btn-outline-primary">Update Profile</button>
						</div>

					</div>
				</form>
			</section>
			<!-- /accordion payment -->
		</div>
		<!-- /col -->
	</div>
</div>


@endsection

@section('footer-class')

@endsection

@section('modal')

@endsection

@section('scripts')
<script>
	function selectImage() {
		;(function($){
			$('#photoId').trigger('click');
		})(jQuery);
	}
</script>

<script>
	;(function($){
		document.getElementById("photoId").onchange = function() {

			$("#frmAvatar").submit();
			$("#preloader").fadeIn();

		}
	})(jQuery);

</script>

@endsection