@extends('layouts.master')

@section('title')
Dashboard | Quicker
@endsection

@section('body-class')

@endsection

@section('header-class')

@endsection

@section('content')

<div class="sub_header_in sticky_header" style="margin-top: 0px;">
  <div class="container">
    <h1>Job Details</h1>
    <div class="row">
      <div class="col-md-12 navigational">
          <div class="breadcrumbs">
            <ul class="list-inline">
               <li class="list-inline-item"><a href="{{url('servicer/home')}}"><strong>Dashboard</strong></a></li>/
               <li class="list-inline-item"><a href="{{url('home/job/history')}}"><strong>Jobs</strong></a></li>/
               <li class="list-inline-item"><strong>Details</strong></li>
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

     <div class="row" > 
      <div class="col-md-12 table-responsive">
        <table class="table table-bordered" style="background:#ffffff">
          
          <tbody>
            <tr>
              <td style="width: 20%"><strong>Job Title</strong></td>
              <td>{{$job->title}}</td>
            </tr>
            <tr>
              <td><strong>Job Created Date</strong></td>
              <td>{{date('d M Y', strtotime($job->created_at))}}</td>
            </tr>
            <tr>
              <td><strong>Job Date</strong></td>
              <td>{{date('d M Y', strtotime($job->date))}}</td>
            </tr>
            <tr>
              <td><strong>Job Description</strong></td>
              <td>{{$job->description}}</td>
            </tr>
            
            
          </tbody>
        </table>
      </div>          
        
     </div>
    </div>
</main>

@endsection

@section('footer-class')

@endsection


@section('modal')

@endsection


@section('scripts')
<script>
$(function(){
    $('.readmore a.more').on('click', function(){
        var $parent = $(this).parent();
        if($parent.data('visible')) {
            $parent.data('visible', false).find('.ellipsis').show()
            .end().find('.moreText').hide()
            .end().find('a.more').text('Read More').css("color", "blue");
        } else {
            $parent.data('visible', true).find('.ellipsis').hide()
            .end().find('.moreText').show()
            .end().find('a.more').text('Show Less').css("color", "blue");
        }
    });
});
</script>
@endsection

