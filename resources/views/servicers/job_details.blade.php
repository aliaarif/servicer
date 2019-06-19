@extends('layouts.master')

@section('title')
Job Details | Quicker
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
               <li class="list-inline-item"><a href="{{url('servicer/home/jobs')}}"><strong>Jobs</strong></a></li>/
               <li class="list-inline-item"><strong>Details</strong></li>
           </ul>
          </div>
          <div class="back-btn">
            <a href="{{url('servicer/home/jobs')}}"><button class="btn btn-primary">Back</button></a>
          </div>
      </div>
    </div>
  </div>
  <!-- /container -->
</div>

<main>
  <div class="container margin_80_35">

     <div class="row">  
        <div class="col-md-12 table-responsive">
          <table class="table table-bordered" style="background:#ffffff">
            
            <tbody>
              <tr>
                <td style="width: 20%"><strong>Job Title</strong></td>
                <td>{{$quote->job->title}}</td>
              </tr>
              <tr>
              <tr>
                <td style="width: 20%"><strong>Job Created By</strong></td>
                <td>{{$quote->job->user->name}}</td>
              </tr>
              <tr>
                <td><strong>Job Created Date</strong></td>
                <td>{{date('d M Y', strtotime($quote->job->created_at))}}</td>
              </tr>
              <tr>
                <td><strong>Job Date</strong></td>
                <td>{{date('d M Y', strtotime($quote->job->date))}}</td>
              </tr>
              <tr>
                <td><strong>Job Description</strong></td>
                <td>
                  @if(strlen(strip_tags($quote->job->description)) > 250 )
                  <span>{{ str_limit($quote->job->description, $limit = 250, $end = '...') }}</span> <a href="#" class="job-modal" data-description="{{$quote->job->description}}" rel="tooltip" data-placement="top" data-original-title="View Quotes">Read More</a>
                  @else
                  {{ str_limit($quote->job->description, $limit = 250, $end = '...') }}
                  @endif
                </td>
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


@section('modals')
<!--  Modal  -->
    <div id="job_desc" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Job Discription</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                 <div class="modal-body" style="height:300px; overflow-y: scroll;">
                    <div class="form-group">
                        <label for="" style="color:#808080"><b>Discription :</b></label>
                        <p class="text-justify" id="description"/></p>
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
  // Show Job escription
 $(document).on('click', '.job-modal', function() {
  $('#job_desc').modal('show');
  $('#description').text($(this).data('description'));
  
  $('.modal-title').text('Job Description');
  });
</script>

@endsection

