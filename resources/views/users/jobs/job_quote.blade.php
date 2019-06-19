@extends('layouts.master')

@section('title')
Job Quotes | Quicker
@endsection

@section('body-class')

@endsection

@section('header-class')

@endsection

@section('content')


<div class="sub_header_in sticky_header" style="margin-top: 0px;">
  <div class="container">
    <h1> Job Quotes</h1>
    <div class="row">
      <div class="col-md-12 navigational">
          <div class="breadcrumbs">
            <ul class="list-inline">
               <li class="list-inline-item"><a href="{{url('servicer/home')}}"><strong>Dashboard</strong></a></li>/
               <li class="list-inline-item"><a href="{{url('home/job/history')}}"><strong>Jobs</strong></a></li>/
               <li class="list-inline-item"><strong>Quotes</strong></li>
           </ul>
          </div>
          <div class="back-btn">
            <a href="{{url('home/job/history')}}"><button class="btn btn-primary">Back</button></a>
          </div>
      </div>
    </div>
    
    
  </div>
  <!-- /container -->
</div>

<main>
    
    
    
    <div class="container margin_80_35">
      <!-- <div class="row">
        <div class="col-lg-12">
          <ul class="text-right" style="margin-bottom: 10px;">
            <a href="{{url('/home/job/history')}}"><button class="btn btn-info btn-sm" href="" >Back</button></a>
          </ul>
        </div>
      </div> -->
      @if(count($job_quotes) == 0)
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
      @else

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

         
          @foreach ($job_quotes  as $key=>$job_quote)
          <div class="strip list_view">
            <div class="row no-gutters">
              <div class="col-lg-12">
                <div class="wrapper" style="padding:15px;">
                  <div class="row">
                    <div class="col-md-3">
                      <img class="img-thumbnail img-responsive" style="width: 100%" src="{{asset('/assets/uploads/profile_images/'.$job_quote->servicer->profile_img)}}" style="height:190px;">
                    </div>
                      <div class="col-lg-9">
                        <div class="row">
                          <div class="col-md-8" style="margin-top:8px;">
                            <h6 class="text-justify">{{$job_quote->servicer->name}}</h6>
                            @if(strlen($job_quote->quote_message)>150)
                            <p class="text-left"> {!! str_limit(($job_quote->quote_message), $limit = 150, $end = ' ...') !!}
                              <span><a href="#" class="quote-modal" data-quote_message="{{$job_quote->quote_message}}" rel="tooltip" data-placement="top" data-original-title="View Quotes">Read More</a></span>
                            </p>
                            @else 
                            <p class="text-left"> {{$job_quote->quote_message}} </p>
                            @endif
                          </div>
                          <div class="col-md-4 text-right">
                            <div class="row">
                              <div class="col-md-12 col-xs-6">
                                <span style="font-size:14px;"><strong>Price</strong></span>
                              </div>
                              <div class="col-md-12 col-xs-6">
                                <span style="font-size:14px;"><span>{{$job_quote->budget}}</span></span>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 col-xs-6">
                                <span style="font-size:14px;"><strong>Ratings</strong></span>
                              </div>
                              <div class="col-md-12 col-xs-6">
                                <span style="font-size:14px;"><span><span>*****</span></span></span>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 col-xs-6">
                                <span style="font-size:14px;"><strong>Reviews</strong></span>
                              </div>
                              <div class="col-md-12 col-xs-6">
                                <span style="font-size:14px;">0</span>  
                              </div>
                            </div>
                            
                          </div>
                        </div>
                        <ul class="text-right" style="padding-bottom: 0px;padding-right: 5px">
                          <button class="btn btn-success btn-sm">Message</button>
                        </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          
          <div class="row">
            <div class="col-md-12">
              <ul class="text-center">
                {{ $job_quotes->links() }}
              </ul>
            </div>
          </div>
        </div>

        <!-- /col -->
      </div>   
      @endif 
    </div>
    <!-- /container -->
    
  </main>

  

@endsection

@section('footer-class')

@endsection


@section('modals')
<!--  Modal  -->
        <div id="show" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Job Quotes</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                     <div class="modal-body" style="height:300px; overflow-y: scroll;">
                        <div class="form-group">
                            <label for="" style="color:#808080"><b>Quotes Message :</b></label>
                            <p class="text-justify" id="quote_message"/></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
@endsection


@section('scripts')
<script type="text/javascript">
  // Show function
 $(document).on('click', '.quote-modal', function() {
  $('#show').modal('show');
  $('#quote_message').text($(this).data('quote_message'));
  
  $('.modal-title').text('Job Quotes');
  });

</script>
@endsection
