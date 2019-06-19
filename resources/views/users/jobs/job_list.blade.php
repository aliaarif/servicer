@extends('layouts.master')

@section('title')
Dashboard | Quicker
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
                   <h4 style="font-size: 18px;">Jobs</h4>
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



<main>
  <div class="container mt-3 mb-3">
    @if(count($jobs)==0)
      <div class="box_booking" style="min-height: 400px">
          <div class="row align-items-center" style="height: 400px;">
            <div class="col-12 mx-auto text-center">
                  <div class="row">
                    <div class="col-md-12">
                      <span style="font-size: 90px;" class="pe-7s-news-paper"> </span> 
                      <p style="font-size: 24px;">No Quote request posted yet!</p>
                    </div>
                  </div>
            </div>
          </div>
      </div>   
      @else
    <div class="box_booking" style="min-height: 400px">
      
      @foreach ($jobs  as $key=>$job)
      <div class="strip_booking">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-6">
              <div class="date">
                <span class="month">{{date('M', strtotime($job->created_at))}}</span>
                <span class="day">
                  <strong>{{date('d', strtotime($job->created_at))}}</strong>
                  {{date('D', strtotime($job->created_at))}}
                </span>
              </div>
            </div>
            <div class="col-lg-6 col-md-5 col-6 strip_detail">
              {{$job->title}}
              <br>
              @foreach($job->categories as $category)
              <span class="badge badge-primary">{{$category->name}}</span>
              @endforeach
            </div>
            <div class="col-lg-2 col-md-3 col-6">
              <ul class="info_booking">
                <li><strong>Job id:</strong> {{$job->id}}</li>
                <li><strong>Created on:</strong> {{date('d M Y', strtotime($job->created_at))}}</li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-2 col-6">
              <div class="booking_buttons">
                {{-- <a href="{{url('/home/job/'.$job->id.'/details')}}" class="btn_2">View Quotes</a> --}}
                <a href="#" class="btn_2">View Quotes</a>
              </div>
            </div>
        </div>

      </div>
      @endforeach
    </div>
    @endif
  </div>
</main>

@endsection

@section('footer-class')

@endsection


@section('modal')

@endsection


@section('scripts')

@endsection

