<label>States<sup style="color: red">*</sup></label>
<select class="select2 form-control" name="job_state" id="job_state" style="width: 100%;" onChange="getRespectiveCities(this.value)">
	<option value="">--Select state--</option>
	@foreach($states as $state)
	<option value="{{$state->id}}" @if(old('job_state') == $state->id) selected="" @endif>{{$state->name}}</option>
	@endforeach
</select>