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
		<h4 style="font-size: 18px;" class="mb-0 text-b text-white">Password</h4>
	</div>
	<!-- /container -->
</div>
<!-- /sub_header -->
<div class="container">
	<div class="row mt-3 mb-3">
		<aside class="col-lg-3" id="faq_cat">
				<div class="box_style_cat" id="faq_box">
					<ul id="cat_nav">
						
						<li><a href="{{url('/servicer/home/update-profile')}}">  Profile</a></li>
						<li><a href="{{url('servicer/home/update-password')}}"> Update Password</a></li>
						
					</ul>
				</div>
				<!--/sticky -->
		</aside>
		<!--/aside -->
		
		<div class="col-lg-9">
			<section style="background: white; padding: 20px">
				<div class="col-md-12 d-md-none d-lg-none d-xl-none">
					<select class="form-control form-group" name="filter" id="filter" required="" onChange="window.document.location.href=this.options[this.selectedIndex].value;" value="GO" placeholder="">
                    <option value="">Select Account</option>
                    <option value="{{url('/servicer/home/update-profile')}}">Profile</option>
                    <option value="{{url('servicer/home/update-password')}}">Update Password</option>
                   
                </select>
				</div>
				<h4 style="text-align:center;">Change Password</h4>
				<hr>
				<form action="{{url('servicer/home/save-update-password')}}" method="post">
					@csrf
				<div class="row">
					
					<div class="col-md-12">
							<div class="form-row">
						    <div class="form-group col-md-12">
						      <label for="inputFirstname">Enter current password:</label>
						      <input type="password" name="original_password" class="form-control" placeholder="" >
						    </div>
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-12">
						      <label for="inputEmail4">Enter new password:</label>
						      <input type="password" name="password" class="form-control" placeholder="">
						    </div>
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-12">
						      <label for="inputEmail4">Confirm new password:</label>
						      <input type="password" name="password_confirmation" class="form-control" placeholder="">
						    </div>
						  </div>
					  	
					  	<button type="submit" class="btn btn-outline-primary">Change Password</button>
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


@endsection