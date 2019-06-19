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

<form id="formSubcategories" method="POST" action="{{url('quote/'.$category_id.'/step-1')}}"> 
    @csrf
    <main>
        <div class="container margin_60_35"  style="padding-top: 30px;">
            <h6 class="mt-2 quote-title">What service do you need?<sup style="color: red">*</sup></h6>
            <div class="row mt-3 mb-5">
                <div class="col-12">
                    @foreach($subcategories as $key=>$category)
                    <div class="form-group checkbox-label-card">
                        <label class="container_check checkbox-label"> {{$category->name}}
                            <input type="checkbox" name="sub_categories[{{$key}}]" value="{{$category->id}}">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>    
        </div>
        <!-- /container -->
    </main>
    <div class="snackbar"></div>
    <nav class="navbar fixed-bottom bg-white">
        <div class="container text-center">
            <button onclick="validateForm();" type="button" class="btn btn-primary btn-block">Get Started <i class="icon-angle-right"></i></button>
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
    function validateForm(){
       checked = $("input[type=checkbox]:checked").length;
       if(!checked){
        $(".snackbar").addClass('show');
        $(".snackbar").text("You must check at least one checkbox.");
        return false;
    }else{
        $(".snackbar").removeClass('show');
        $("#formSubcategories").submit();
    }
}
</script>
@endsection

