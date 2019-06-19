@extends('layouts.master')

@section('title')
Job Category | Quicker
@endsection

@section('body-class')

@endsection

@section('header-class')

@endsection

@section('content')


<div class="sub_header_in sticky_header" style="margin-top: 0px;">
	<div class="container">
		<h1>{{$category->name}} Jobs</h1>
	</div>
	<!-- /container -->
</div>

<main>
		
	   		
		
		
		<div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<!-- /Map -->
		
		<div class="container margin_60_35">
			@if(count($jobs) != 0)
			<div class="row">
				<aside class="col-lg-3" id="sidebar">
					<div id="filters_col">
						<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
						<div class="collapse show" id="collapseFilters">
							<div class="filter_type">
								<h6>Category</h6>
								<ul>
									<li>
										<label class="container_check">Restaurants <small>245</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">Shops <small>43</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">Bars <small>13</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">Events <small>65</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
								</ul>
							</div>
							<div class="filter_type">
                                <h6>Distance</h6>
                                <div class="distance"> Radius around selected destination <span></span> km</div>
								<input type="range" min="10" max="100" step="10" value="30" data-orientation="horizontal">
                            </div>
							<div class="filter_type">
								<h6>Rating</h6>
								<ul>
									<li>
										<label class="container_check">Superb 9+ <small>102</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">Very Good 8+ <small>122</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">Good 7+ <small>54</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">Pleasant 6+ <small>23</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
								</ul>
							</div>
						</div>
						<!--/collapse -->
					</div>
					<!--/filters col-->
				</aside>
				<!-- /aside -->

				<div class="col-lg-9" id="job-listing">
					@foreach($jobs as $job)
					<div class="strip list_view">
						<div class="row no-gutters">
							
							<div class="col-lg-12">
								<div class="wrapper">
									
									<h3><a href="detail-restaurant.html">{{$job->title}}</a></h3>
					<?php 
					if (strlen($job->description) > 300) {

					    // truncate string
					    $stringCut = substr($job->description, 0, 300);
					    $endPoint = strrpos($stringCut, ' ');

					    //if the string doesn't contain any space then it will cut without word basis.
					    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
					    $string .= '...';
					}else{
						$string = $job->description;
					}
					?>
									<p class="text-justify">{{$string}}</p>
									<small>Categories : 
										@foreach($job->categories as $key=>$subcategory) 
											<a href="{{url('categories/'.$subcategory->id.'/jobs')}}"><span class="badge badge-pill badge-primary">{{$subcategory->name}}</span></a>
											@if($key+1 < count($job->categories))
											{{","}}
											@endif
										@endforeach
									</small>
								</div>
								<ul class="text-right">
									<button class="btn btn-info btn-sm">Job Details</button>
									<button class="btn btn-success btn-sm">Send Quote</button>
								</ul>
							</div>
						</div>
					</div>
					@endforeach
					<div class="row">
						<div class="col-md-12 text-center">
							{{ $jobs->links() }}
						</div>
					</div>
					
					<!-- <p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p> -->
				</div>
				<!-- /col -->
			</div>
			@else 

			<div class="row align-items-center" style="height: 400px;">
		        <div class="col-12 mx-auto text-center">
		            	<div class="row">
		            		<div class="col-md-12">
		            			<span style="font-size: 90px;" class="ti-alert"> </span> 
		            		</div>
		            	</div>
		            	<div class="col-md-12 text-center">
		            		<p style="font-weight: strong;font-size: 30px;">Data Not Found</p>
		            	</div>
		        </div>
		    </div>

			@endif	
		</div>
		<!-- /container -->
		
	</main>

@endsection

@section('footer-class')

@endsection

@section('modal')

@endsection

@section('scripts')

@endsection