<label>Cities<sup style="color: red">*</sup></label>
<select class="select2 form-control" name="job_city" id="job_city"  style="width: 100%;">
	<option value="">--Select city--</option>
	@foreach($cities as $city)
	<option value="{{$city->id}}" @if(old('job_city') == $city->id) selected="" @endif>{{$city->name}}</option>
	@endforeach
</select>