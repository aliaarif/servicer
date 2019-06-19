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
        <div class="container margin_60_35"  style="padding-top: 30px;">
            <h6 class="mt-2 quote-title mb-4">Where do you need Quicker?</h6>
            <div class="row mb-4">
                <div class="col-12 mb-2">
                    <label>Street Address<sup style="color: red">*</sup></label>
                    <input type="text" name="job_address" class="form-control" value="{{old('job_address')}}">
                </div>

                <div class="col-12 col-lg-6 mb-2">
                    <label>Country<sup style="color: red">*</sup></label>
                    <select  class="select2 form-control" name="job_country" id="job_country" style="width: 100%;" onChange="getRespectiveStates(this.value)">
                        <option value="">--Select country--</option>
                        @foreach($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 col-lg-6 mb-2" id="statesBox">

                </div>

                <div class="col-12 col-lg-6 mb-2" id="citiesBox">

                </div>

                <div class="col-12 col-lg-6 mb-2">
                    <label>Pincode<sup style="color: red">*</sup></label>
                    <input type="number" min="0" name="job_pincode" class="form-control" value="{{old('job_pincode')}}">
                </div>
            </div> 

            @if(Auth::guest())
            <h6 class="mt-2 quote-title mb-3">How can we reach you?</h6>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="container_radio" style="display: inline-block; margin-right: 15px;">Login
                            <input type="radio" name="login_register" id="userLoginRadio" checked="true" value="login">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_radio" style="display: inline-block;">Register
                            <input type="radio" name="login_register" id="userRegisterRadio" value="register" @if(old('login_email')=='register') checked="true" @endif>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mb-5" id="userLoginRadioBlock">
                <div class="form-group col-6">
                    <input type="email" class="form-control" value="{{old('login_email')}}" name="login_email" placeholder="Email*">
                </div>
                <div class="form-group col-6">
                    <input type="password" class="form-control" value="" name="login_password" placeholder="Password*">
                </div>
            </div>

            <div class="row mb-5" id="userRegisterBlock" style="display: none;">
                <div class="form-group col-6">
                    <input type="text" class="form-control" value="{{old('register_first_name')}}" name="register_first_name" placeholder="First Name*">
                </div>
                <div class="form-group col-6">
                    <input type="text" class="form-control" value="{{old('register_last_name')}}" name="register_last_name" placeholder="Last Name*">
                </div>
                <div class="form-group col-6">
                    <input type="email" class="form-control" value="{{old('register_email')}}" name="register_email" placeholder="Email*">
                </div>
                <div class="form-group col-6">
                    <input type="password" class="form-control" name="register_password" placeholder="Password*">
                </div>
            </div>
            @endif  
        </div>
        <!-- /container -->
    </main>
    <div class="snackbar @if(session('snackbar-message')) show @endif">@if(session('snackbar-message')) {{session('snackbar-message')}} @endif</div>
    <nav class="navbar fixed-bottom bg-white">
        <div class="container text-center">
            <button type="button" onclick="validateForm();" class="btn btn-primary btn-block">Submit <i class="icon-angle-right"></i></button>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
<script type="text/javascript">


    function getRespectiveStates(c_id){
        let country_id = c_id;
        axios.post('/get-respective-states', {
            country_id: country_id
        })
        .then((res) => {
            $('#statesBox').html(res.data);
            $('#job_state').select2();
        })
        .catch((err) => {
            //console.log(err);
        });

    }

    function getRespectiveCities(s_id){
        let state_id = s_id;
        axios.post('/get-respective-cities', {
            state_id: state_id
        })
        .then((res) => {
            $('#citiesBox').html(res.data);
            $('#job_city').select2();
        })
        .catch((err) => {
            //console.log(err);
        });

    }


    function validateForm(){
        if($('input[name*="job_address"]').val() < 1){
            $('.snackbar').removeClass('show').addClass('show').text('Please enter Job address.');
            return false;
        }if($('select[name*="job_city"]').val() < 1){
            $('.snackbar').removeClass('show').addClass('show').text('Please select city.');
            return false;
        }if($("input[name*='job_pincode']").length < 1){
            $('.snackbar').removeClass('show').addClass('show').text('Please enter Pincode.');
            return false;
        }if($('#userLoginRadio:checked').length == 1){
            if($('input[name*="login_email"]').val() < 1){
                $('.snackbar').removeClass('show').addClass('show').text('Please enter email address.');
                return false;
            }
            if(isEmail($('input[name*="login_email"]').val()) == false){
                $('.snackbar').removeClass('show').addClass('show').text('Please enter valid email address.');
                return false;
            }
            if($('input[name*="login_password"]').val() < 1){
                $('.snackbar').removeClass('show').addClass('show').text('Please enter password.');
                return false;
            }else{
                $(".snackbar").removeClass('show');
                $("#formLocation").submit();
            }
        }if($('#userRegisterRadio:checked').length == 1){

            if($('input[name*="register_first_name"]').val() < 1){
                $('.snackbar').removeClass('show').addClass('show').text('Please enter first name.');
                return false;
            }
            if($('input[name*="register_last_name"]').val() < 1){
                $('.snackbar').removeClass('show').addClass('show').text('Please enter last name.');
                return false;
            }
            if($('input[name*="register_email"]').val() < 1){
                $('.snackbar').removeClass('show').addClass('show').text('Please enter email address.');
                return false;
            }
            if(isEmail($('input[name*="register_email"]').val()) == false){
                $('.snackbar').removeClass('show').addClass('show').text('Please enter valid email address.');
                return false;
            }
            if($('input[name*="register_password"]').val() < 1){
                $('.snackbar').removeClass('show').addClass('show').text('Please enter password.');
                return false;
            }else{
                $(".snackbar").removeClass('show');
                $("#formLocation").submit();
            }
        }
        else{
            $(".snackbar").removeClass('show');
            $("#formLocation").submit();
        }

    }
</script>

<script type="text/javascript">
    function isEmail(email) {
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      return regex.test(email);
  }


  $(() => {
    alert('Ok');
})


</script>
@endsection

