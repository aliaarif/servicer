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
                   <h4 style="font-size: 18px;">Change Password</h4>
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
					<!-- 	<li><a href="{{url('/home/view-profile')}}"> Profile</a></li> -->
						<li><a href="{{url('/home/update-profile')}}"> Profile</a></li>
						<li><a href="{{url('/home/update-password')}}"> Update Password</a></li>
						
					</ul>
				</div>
				<!--/sticky -->
		</aside>
		<!--/aside -->
		
		<div class="col-lg-9">
			<section style="background: white; padding: 20px">
				<div class="col-md-12 d-md-none d-lg-none d-xl-none">
					<select class="form-control form-group dropdown" name="filter" id="filter" required="" onChange="window.document.location.href=this.options[this.selectedIndex].value;" value="GO" placeholder="">
						 <option value="">Select Account</option>
                     <option value="{{url('home/update-profile')}}">Update Profile</option>
	                    <option value="{{url('home/update-password')}}">Update Password</option>
	                  
                </select>
				</div>
				<h4 style="text-align: center;">Change Password</h4>
				<hr>
				<form action="{{url('home/save-update-password')}}" method="post">
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