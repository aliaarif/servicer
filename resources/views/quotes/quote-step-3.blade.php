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
<form id="formJobDescription" method="POST" action="{{url('quote/'.$category_id.'/step-3/'.$job_id)}}"> 
    @csrf        

    <main>
        <div class="container margin_60_35"  style="padding-top: 30px;">
            <h6 class="mt-2 quote-title">Enter job title<sup style="color: red">*</sup></h6>
            <div class="row mb-4">
                <div class="col-12">
                    <input type="text" name="job_title" class="form-control">
                </div>
            </div>

            <h6 class="mt-2 quote-title">Describe your job need to be done<sup style="color: red">*</sup></h6>
            <div class="row mb-4">
                <div class="col-12">
                    <textarea class="form-control" name="job_description" rows="6"></textarea>
                </div>
            </div>

            <h6 class="mt-2 quote-title">Attach photo (It is helpful if available)</h6>
            <div class="row mb-4">
                <div class="col-12">
                    <div id="dZUpload" class="dropzone">
                      <div class="dz-default dz-message">
                        Drop files here or click to upload.
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="quote_1_images" id="dZUploadInput">    


        <h6 class="mt-2 quote-title">Type of Job<sup style="color: red">*</sup></h6>
        <div class="row mb-4">
            <div class="col-12">
                <div class="form-group checkbox-label-card">
                    <label class="container_radio checkbox-label"> Residential
                        <input type="radio" name="job_types" value="1">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="form-group checkbox-label-card">
                    <label class="container_radio checkbox-label"> Industrial
                        <input type="radio" name="job_types" value="2">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="form-group checkbox-label-card">
                    <label class="container_radio checkbox-label"> Commercial
                        <input type="radio" name="job_types" value="3">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>

        <h6 class="mt-2 quote-title">Frequency of Job<sup style="color: red">*</sup></h6>
        <div class="row mb-5">
            <div class="col-12">
                <div class="form-group checkbox-label-card">
                    <label class="container_radio checkbox-label"> One-off
                        <input type="radio" name="job_frequerncy" value="1">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="form-group checkbox-label-card">
                    <label class="container_radio checkbox-label"> Weekly
                        <input type="radio" name="job_frequerncy" value="2">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="form-group checkbox-label-card">
                    <label class="container_radio checkbox-label"> Fortnightly
                        <input type="radio" name="job_frequerncy" value="3">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="form-group checkbox-label-card">
                    <label class="container_radio checkbox-label"> Monthly
                        <input type="radio" name="job_frequerncy" value="4">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>

        
        
    </div>
    <!-- /container -->
</main>
<div class="snackbar"></div>
<nav class="navbar fixed-bottom bg-white">
    <div class="container text-center">
        <button onclick="validateForm();" type="button" class="btn btn-primary btn-block">Next <i class="icon-angle-right"></i></button>
    </div>
</nav>

</form>



@endsection


@section('footer-class')
d-none
@endsection


@section('modals')

@endsection



@section('scripts')

<script type="text/javascript">
    function jQ_append(id_of_input, text){
        var input_id = '#'+id_of_input;
        if($(input_id).val() != ""){
            $(input_id).val($(input_id).val() +';'+text);
        }else{
            $(input_id).val($(input_id).val() + text);
        }
    }

    var base_url = $('meta[name="_path"]').attr('content');
    Dropzone.autoDiscover = false;
    $("#dZUpload").dropzone({
        url: base_url+"/upload/quote-image",
        addRemoveLinks: true,
        acceptedFiles: 'image/*',
        maxFiles: 5,
        maxFilesize: 1,
        success: function (file, response) {
            var imgName = response;
            file.previewElement.classList.add("dz-success");
            console.log("Successfully uploaded :" + imgName);
            jQ_append('dZUploadInput',imgName);
        },
        error: function (file, response) {
            file.previewElement.classList.add("dz-error");
            toastr.e
        }
    });
</script>

<script type="text/javascript">
    function validateForm(){
        if($('input[name*="job_title"]').val() < 1){
            $('.snackbar').removeClass('show').addClass('show').text('Please enter Job title.');
            return false;
        }if($('textarea[name*="job_description"]').val() < 1){
            $('.snackbar').removeClass('show').addClass('show').text('Please enter Job description.');
            return false;
        }if($("input[name*='job_types']:checked").length < 1){
            $('.snackbar').removeClass('show').addClass('show').text('Please select at least 1 Job Type.');
            return false;
        }if($("input[name*='job_frequerncy']:checked").length < 1){
            $('.snackbar').removeClass('show').addClass('show').text('Please select at least 1 Job Frequency.');
            return false;
        }else{
            $(".snackbar").removeClass('show');
            $("#formJobDescription").submit();
        }

    }
</script>

@endsection

