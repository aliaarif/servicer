@extends('layouts.master')

@section('title')
Profile | Quicker
@endsection

@section('body-class')

@endsection

@section('header-class')

@endsection

@section('content')
<div class="sub_header_in sticky_header" style="margin-top: 0px;padding: 10px 0px;">
	<div class="container">
		<h4 style="font-size: 18px;" class="mb-0 text-b text-white">Profile</h4>
	</div>
	<!-- /container -->
</div>
<!-- /sub_header -->
<div class="container">
	<div class="row mt-3 mb-3">
		<aside class="col-lg-3" id="faq_cat">
				<div class="box_style_cat" id="faq_box">
					<ul id="cat_nav">
						<li><a href="{{url('/servicer/home/update-profile')}}"> Profile</a></li>
						<li><a href="{{url('servicer/home/update-password')}}"> Update Password</a></li>
					</ul>
				</div>
				<!--/sticky -->
		</aside>
		<!--/aside -->
		
		<div class="col-lg-9">
			<section style="background: white; padding: 20px">
				<div class="row">  
					<div class="col-md-12 d-md-none d-lg-none d-xl-none">
						<select class="form-control form-group " name="filter" id="filter" required="" onChange="window.document.location.href=this.options[this.selectedIndex].value;" value="GO" placeholder="">
	                    <option value="">Select Account</option>
	                   
	                    <option value="{{url('/servicer/home/update-profile')}}">Update Profile</option>
	                    <option value="{{url('servicer/home/update-password')}}">Update Password</option>
	                   
	                </select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4 style="text-align: center;">Update Account</h4>
						<hr>
					</div>
				</div>	
					<form name="frmAvatar" id="frmAvatar" class="hidden" style="display: none" enctype="multipart/form-data" action="{{url('servicer/home/update-profile-photo')}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input id="photoId" style="display: none" type="file" name="avatar">
                <input type="submit" style="display: none" value="submit">
              </form>

				
				<form action="{{url('servicer/home/save-update-profile')}}" method="post"  accept-charset="utf-8" enctype="multipart/form-data">
					@csrf
				<div class="row">
					<div class="col-md-4 text-center">
						@if($servicer->avatar == '')
						<img class="img-responsive rounded-circle" style="height: 200px; margin-bottom:10px;" src="{{asset('/uploads/avatar.jpg')}}" alt="">
						@else
						<img class="img-responsive rounded-circle" style="height: 200px; margin-bottom:10px;" src="{{asset('/uploads/profiles/'.$servicer->avatar)}}" alt=""><br>
						
						@endif
						<button type="button" class="btn btn-primary btn-sm" id="changeProfileImage" onclick="selectImage()">Change</button>
						
					</div>
					<div class="col-md-8">
							<div class="row">
							    <div class="form-group col-md-6">
							      <label for="inputFirstname">First Name</label>
							      <input type="text" name="first_name" class="form-control" id="name" placeholder="First First Name" value="{{$servicer->first_name}}">
							    </div>
							    <div class="form-group col-md-6">
							      <label for="inputFirstname">Last Name</label>
							      <input type="text" name="last_name" class="form-control" id="name" placeholder="First Last Name" value="{{$servicer->last_name}}">
							    </div>
						 	</div>
						  <div class="row">
						    <div class="form-group col-md-12">
						      <label for="inputEmail4">Email</label>
						      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{$servicer->email}}" readonly>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputAddress">Address</label>
						    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{$servicer->address}}">
						  </div>
						  <div class="row">
						    <div class="form-group col-md-4">
						      <label for="inputApt">Apt / Unit</label>
						      <input type="text" name="apt_no" class="form-control" id="inputApt" value="{{$servicer->apt_no}}">
						    </div>
								
								<div class="form-group col-md-4">
						      <label for="inputCity">Town / City</label>
						      <select name="city" class="form-control select2" id="inputCity">
						      	<option  value="">--Select City --</option>
						      	@foreach($city as $cities)
						      	<option {{$cities->id == $servicer->city_id ? 'selected' : '' }} value="{{$cities->id}}">{{$cities->city}}</option>
						      	@endforeach
						      
						      </select>
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputPincode">Pincode</label>
						      <input type="text" name="pincode" class="form-control" id="inputPincode" value="{{$servicer->pincode}}">
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