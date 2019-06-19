@extends('layouts.master')

@section('title')
Job Categories | Quicker
@endsection

@section('body-class')

@endsection

@section('header-class')

@endsection

@section('content')


<div class="sub_header_in sticky_header" style="margin-top: 0px;">
	<div class="container">
		<h1>Browse Jobs by Categories</h1>
	</div>
	<!-- /container -->
</div>

<main>
	@if(count($categories)!=0)
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-md-12">
					<div class="input-group mb-3 input-group-lg">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1"><i class="icon-search-5"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Search for a Category" aria-label="Username" aria-describedby="basic-addon1" id="search-text" name="search-text">
					</div>
					
					<!-- <div id="search-result">
						<div class="box_booking">
							<div class="list_articles add_bottom_30 clearfix">
								<ul id="search-result-list">

								</ul>
							</div>
						</div>
					</div> -->



					<div id="search-result">
						<div class="box_booking">
							<div class="icon-section clearfix" id="search-result-list">

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main_title_2 mt-5">
				<span><em></em></span>
				<h2>Select a Category</h2>
				
			</div>
			<div class="row">
				@foreach($categories as $key=>$category)
				<div class="col-lg-4 col-md-6">
					<a class="box_topic" href="#0" data-target="{{'#'.str_replace(' ', '_', strtolower($category->name))}}">
						<span><i class="pe-7s-wallet"></i></span>
						<h3>{{$category->name}}</h3>
						
					</a>
				</div>
				@endforeach
				
			</div>
		</div>
		<div class="bg_color_1">	
			<div class="container margin_80_55">
			<!--/row-->
				<div class="main_title_2">
					<span><em></em></span>
					<h2>Browse all Categories</h2>
					
				</div>
				@foreach($categories as $category)
				<div class="icon-section clearfix" id="{{str_replace(' ', '_', strtolower($category->name))}}">
					
					<h3 class="category-header">{{$category->name}} </h3>
					<div>
						@foreach($category->children as $subcategory)
						
							<div class="icon-container" data-title="{{strtolower($subcategory->name)}}">
								<a href="{{url('categories/'.$subcategory->id.'/jobs')}}">
									<i class="icon-right-bold"></i><span class="icon-name"> {{$subcategory->name}}</span>
								</a>
							</div>
						
						@endforeach
					</div>
						

					
				</div>
				@endforeach
			</div>	
			<!-- /list_articles -->
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
		<!-- /container -->
</main>




@endsection

@section('footer-class')

@endsection

@section('modal')

@endsection

@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$("#search-result").hide();
	});

	$(".box_topic").click(function() {
		var selected_div = ($(this).attr('data-target'));
	    $('html, body').animate({
	        scrollTop: $(selected_div).offset().top-30
	    }, 300);
	});

	$("#search-text").keyup(function(){
		$("#search-result-list").html("");
		if($(this).val().length != 0){
			var searchText = $(this).val();
			var resultingElement = $("[data-title*='"+searchText+"']");
			if(resultingElement.length > 0){
				$("#search-result-list").append("<h5> Matching Results: </h5>");
				resultingElement.each(function(index){
					$("#search-result-list").append("<div class='icon-container'>"+$(resultingElement[index]).html()+"</div>");
				});
			}else{
				$("#search-result-list").append("<h5 class='text-center'> No Result Found! </h5>");
			}
			$("#search-result").slideDown(100);
		}else{
			$("#search-result").slideUp(100);
		}
	});	

	
</script>
@endsection