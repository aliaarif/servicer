@extends('layouts.master')

@section('title')
Quicker
@endsection

@section('body-class')
class="cutsom-scroll"
@endsection

@section('header-class')
d-none
@endsection

@section('content')
<form id="formLocation" method="POST" action="{{url('quote/'.$category_id.'/step-4/'.$job_id)}}"> 
    @csrf        

    <main>
        <div class="container margin_60">
         <div class="row justify-content-center">
            <div class="col-md-5">
                <div id="confirm">
                    <div class="icon icon--order-success svg add_bottom_15">
                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                            <g fill="none" stroke="#8EC343" stroke-width="2">
                                <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                            </g>
                        </svg>
                    </div>
                    <h2>Quote Request Sent!</h2>
                    <p>
                        We have sent your quote request to nearby Quickers.<br/>
                        You will start receiving quote for your request soon.
                    </p>
                    <button class="btn btn-warning" type="button" onclick="closeModal();">close</button>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>
<div class="snackbar @if(session('snackbar-message')) show @endif">@if(session('snackbar-message')) {{session('snackbar-message')}} @endif</div>
{{-- <nav class="navbar fixed-bottom bg-white">
    <div class="container text-center">
        <button type="button" onclick="validateForm();" class="btn btn-primary btn-block">Submit <i class="icon-angle-right"></i></button>
    </div>
</nav> --}}

</form>


@endsection


@section('footer-class')
d-none
@endsection


@section('modals')

@endsection



@section('scripts')
<script type="text/javascript">
    function closeModal(){
        $('#getQuoteModal button.close', parent.document).trigger('click');
    }
</script>
@endsection

