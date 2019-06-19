@extends('layouts.master')

@section('title')
Job History | Quicker
@endsection

@section('body-class')

@endsection

@section('header-class')

@endsection

@section('content')


<div class="sub_header_in sticky_header" style="margin-top: 0px;">
  <div class="container">
    <h1>Job History</h1>
    <div class="row">
      <div class="col-md-12 navigational">
          <div class="breadcrumbs">
            <ul class="list-inline">
               <li class="list-inline-item"><a href="{{url('home')}}"><strong>Dashboard</strong></a></li>/
               <li class="list-inline-item"><strong>Jobs</strong></li>
               
           </ul>
          </div>
          <div class="back-btn">
            <a href="{{url('home')}}"><button class="btn btn-primary">Back</button></a>
          </div>
      </div>
    </div>
  </div>
  <!-- /container -->
</div>


<main>
  @if(count($quotes)==0)
  <div class="container">
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
  </div>
  @else
  <div class="container margin_80_35">
    <div class="box_booking">

      @foreach ($quotes as $key=>$quote)
      <div class="strip_booking">
        <div class="row">
            <div class="col-lg-2 col-md-2">
              <div class="date">
                <span class="month">{{date('M', strtotime($quote->job->date))}}</span>
                <span class="day"><strong>{{date('d', strtotime($quote->job->date))}}</strong>{{date('D', strtotime($quote->job->date))}}</span>
              </div>
            </div>
            <div class="col-lg-6 col-md-5">
              
            <?php 
            if (strlen($quote->job->description) > 350) {

                // truncate string
                $stringCut = substr($quote->job->description, 0, 350);
                $endPoint = strrpos($stringCut, ' ');

                //if the string doesn't contain any space then it will cut without word basis.
                $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                $string .= '...';
            }else{
                $string = $quote->job->description;
            }
            ?>              
              <h3 class="hotel_booking">{{$quote->job->title}}<span>{{$string}}</span></h3>
            </div>

            <div class="col-lg-2 col-md-3">
              <ul class="info_booking">
                <li><strong>Job id</strong> {{$quote->job->id}}</li>
                <li><strong>Created on</strong> {{date('d M Y', strtotime($quote->job->created_at))}}</li>
              </ul>
            </div>
            
            <div class="col-lg-2 col-md-2">
              <div class="booking_buttons">
                <a href="{{url('/servicer/home/'.$quote->id.'/job-details')}}" class="btn_2">Details</a>
                <a href="{{url('/servicer/home/'.$quote->id.'/quotes-details')}}" class="btn_3">Quotes</a>
              </div>
            </div>
          </div>

      </div>
      @endforeach
    </div>
  </div>
  @endif
</main>

@endsection

@section('footer-class')

@endsection


@section('modals')

@endsection


@section('scripts')

@endsection

