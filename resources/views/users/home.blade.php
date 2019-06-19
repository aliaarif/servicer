@extends('layouts.master')

@section('title')
Dashboard | Quicker
@endsection

@section('body-class')

@endsection

@section('header-class')

@endsection

@section('content')

<main>
    <div id="results" style="padding: 10px 0;">
       <div class="container">
           <div class="row">
               <div class="col-lg-3 col-md-4 col-10 d-none d-lg-block">
                   <h4 style="font-size: 18px;">Dashboard</h4>
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
<!-- /results -->

    <div class="container mt-3">
        <div class="box_booking" style="min-height: 400px">
    </div>

</main>

@endsection

@section('footer-class')

@endsection


@section('modal')

@endsection


@section('scripts')

@endsection

