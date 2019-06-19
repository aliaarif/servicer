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
    <h1>Job Quotes</h1>
    <div class="row">
      <div class="col-md-12 navigational">
          <div class="breadcrumbs">
            <ul class="list-inline">
               <li class="list-inline-item"><a href="{{url('servicer/home')}}"><strong>Dashboard</strong></a></li>/
               <li class="list-inline-item"><a href="{{url('home/job/history')}}"><strong>Jobs</strong></a></li>/
               <li class="list-inline-item"><strong>Quote</strong></li>
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

     <div class="row">  
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered" style="background-color: #ffffff">
            
            <tbody>
              <tr>
                <td><strong>Budget</strong></td>
                <td>{{$quote->budget}}</td>
              </tr>
              <tr>
                <td style="width:20%"><strong>Quote Created Date</strong></td>
                <td>{{date('d M Y', strtotime($quote->created_at))}}</td>
              </tr>
              <tr>
                <td><strong>Quote Message</strong></td>
                <td>
                  @if(strlen(strip_tags($quote->quote_message)) > 250 )
                  <span>{{ str_limit($quote->quote_message, $limit = 250, $end = '...') }}</span> <a href="#" class="quote-modal" data-quote_message="{{$quote->quote_message}}" rel="tooltip" data-placement="top" data-original-title="View Quotes">Read More</a>
                  @else
                  {{ str_limit($quote->quote_message, $limit = 250, $end = '...') }}
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
    <div id="quote_msg" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Job Quote</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                 <div class="modal-body" style="height:300px; overflow-y: scroll;">
                    <div class="form-group">
                        <label for="" style="color:#808080"><b>Quote Message :</b></label>
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
  // Show Quote Message
 $(document).on('click', '.quote-modal', function() {
  $('#quote_msg').modal('show');
  $('#quote_message').text($(this).data('quote_message'));  
  $('.modal-title').text('Job Quotes');
  });

</script>
@endsection

