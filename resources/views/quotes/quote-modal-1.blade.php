<!-- Quote Form Type Modal 1 -->
<div id="quoteModalBox">
	<div class="modal quote-modal" id="getQuoteModal" data-keyboard="false" data-backdrop="static">
		<form method="POST" action="{{url('submit-quote-form-1')}}" id="quoteModal_1">
			@csrf
			<div class="modal-dialog modal-lg modal-custom-lg">
				<div class="modal-content quote-modal-block">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body 1-->
					<div class="modal-body cutsom-scroll pt-0 quote-modal-step" id="subCategoryStep">
						<h6 class="mt-2 quote-title">What service do you need?<sup style="color: red">*</sup></h6>
						<div class="row mt-3">
							<div class="col-12 sub_category">
							</div>
						</div>
					</div>


					<!-- Modal body 2-->
					<div class="modal-body cutsom-scroll pt-0 quote-modal-step" id="jobDescription1Step">
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
						<div class="row">
							<div class="col-12">
								<div id="dZUpload" class="dropzone">
									<div class="dz-default dz-message">
										Drop files here or click to upload.
									</div>
								</div>
							</div>
						</div>
						<input type="hidden" name="quote_1_images" id="dZUploadInput">
					</div>

					<!-- Modal body 3-->
					<div class="modal-body cutsom-scroll pt-0 quote-modal-step" id="jobDescription2Step">
						<h6 class="mt-2 quote-title">Type of Job<sup style="color: red">*</sup></h6>
						<div class="row mb-4">
							<div class="col-12">
								<div class="card">
									<div class="card-body radio-card">
										<div class="radio-round">
											<input type="radio" id="jobTypeRadio" name="job_types" value="1">
											<label for="radio">Residential</label>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-body radio-card">
										<div class="radio-round">
											<input type="radio" id="jobTypeRadio2" name="job_types" value="2">
											<label for="radio2">Industrial</label>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-body radio-card">
										<div class="radio-round">
											<input type="radio" id="jobTypeRadio3" name="job_types" value="3">
											<label for="radio3">Commercial</label>
										</div>
									</div>
								</div>
							</div>
						</div>

						<h6 class="mt-2 quote-title">Frequency of job<sup style="color: red">*</sup></h6>
						<div class="row mb-4">
							<div class="col-12">
								<div class="card">
									<div class="card-body radio-card">
										<div class="radio-round">
											<input type="radio" id="frequerncyRadio1" name="job_frequerncy" value="1" >
											<label for="radio4">One-off</label>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-body radio-card">
										<div class="radio-round">
											<input type="radio" id="frequerncyRadio2" name="job_frequerncy" value="2">
											<label for="radio5">Weekly</label>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-body radio-card">
										<div class="radio-round">
											<input type="radio" id="frequerncyRadio3" name="job_frequerncy" value="3">
											<label for="radio6">Fortnightly</label>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-body radio-card">
										<div class="radio-round">
											<input type="radio" id="frequerncyRadio4" name="job_frequerncy" value="4">
											<label for="radio7">Monthly</label>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<!-- Modal body 4-->
					<div class="modal-body cutsom-scroll pt-0 quote-modal-step" id="jobLocationStep">
						<h6 class="mt-2 quote-title mb-4">Where do you need Quicker?</h6>
						<div class="row mb-4">
							<div class="col-12 mb-2">
								<label>Address<sup style="color: red">*</sup></label>
								<input type="text" name="job_address" class="form-control">
							</div>

							<div class="col-12 col-lg-6 mb-2">
								<label>City<sup style="color: red">*</sup></label>
								<select class="select2 form-control" name="job_city" style="width: 100%;">
									<option value="">--select city--</option>
									@foreach($cities as $city)
									<option value="{{$city->id}}">{{$city->city}}</option>
									@endforeach
								</select>
							</div>

							<div class="col-12 col-lg-6 mb-2">
								<label>Pincode</label>
								<input type="number" min="0" name="job_pincode" class="form-control">
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
										<input type="radio" name="login_register" id="userRegisterRadio" value="register">
										<span class="checkmark"></span>
									</label>
								</div>
							</div>
						</div>

						<div class="row mb-4" id="userLoginRadioBlock">
							<div class="form-group col-6">
								<input type="email" class="form-control" name="login_email" placeholder="Email*">
							</div>
							<div class="form-group col-6">
								<input type="password" class="form-control" name="login_password" placeholder="Password*">
							</div>
						</div>

						<div class="row mb-4" id="userRegisterBlock" style="display: none;">
							<div class="form-group col-6">
								<input type="text" class="form-control" name="register_first_name" placeholder="First Name*">
							</div>
							<div class="form-group col-6">
								<input type="text" class="form-control" name="register_last_name" placeholder="Last Name*">
							</div>
							<div class="form-group col-6">
								<input type="email" class="form-control" name="register_email" placeholder="Email*">
							</div>
							<div class="form-group col-6">
								<input type="password" class="form-control" name="register_password" placeholder="Password*">
							</div>
						</div>
						@endif
					</div>

					<div class="snackbar d-none"></div>

					<div class="modal-footer" style="display: block !important;">
						<div class="row">
							<div class="col-6">
								<button id="prevQuoteBtn1" type="button" class="btn btn-default btn-block"><i class="icon-angle-left"></i> Previous</button>
							</div>
							<div class="col-6">
								<button id="nextQuoteBtn1" type="button" class="btn btn-primary btn-block">Next <i class="icon-angle-right"></i></button>
								<button id="submitQuoteBtn1" type="button" class="btn btn-success btn-block mt-0 d-none">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}
</script>

<script type="text/javascript">
	$("#nextQuoteBtn1").click(function(){
	//validation current form
	if($("#subCategoryStep:visible").length == true){
		if (($("input[name*='subcategory']:checked").length)<=0){
			$('#getQuoteModal .snackbar').text('Please select at least 1 subcategory').removeClass('d-none');
			return false;
		}else{
			$('#getQuoteModal .snackbar').addClass('d-none');
		}
	}

	if($("#jobDescription1Step:visible").length == true){
		if($('input[name*="job_title"]').val() < 1){
			$('#getQuoteModal .snackbar').text('Please enter Job title.').removeClass('d-none');
			return false;
		}else{
			$('#getQuoteModal .snackbar').addClass('d-none');
		}

		if($('textarea[name*="job_description"]').val() < 1){
			$('#getQuoteModal .snackbar').text('Please enter Job description.').removeClass('d-none');
			return false;
		}else{
			$('#getQuoteModal .snackbar').addClass('d-none');
		}
	}

	if($("#jobDescription2Step:visible").length == true){
		if (($("input[name*='job_types']:checked").length)<=0){
			$('#getQuoteModal .snackbar').text('Please select at least 1 Job Type.').removeClass('d-none');
			return false;
		}else{
			$('#getQuoteModal .snackbar').addClass('d-none');
		}

		if (($("input[name*='job_frequerncy']:checked").length)<=0){
			$('#getQuoteModal .snackbar').text('Please select at least 1 Job Frequency.').removeClass('d-none');
			return false;
		}else{
			$('#getQuoteModal .snackbar').addClass('d-none');
		}
	}



	
	//if true then send to next form
	if ($(".quote-modal-step:visible").next(".quote-modal-step").length != 0){
		$(".quote-modal-step:visible").next().show().prev().hide();
	}
	//if next form is last then activate submit button
	if ($(".quote-modal-step:visible").next(".quote-modal-step").length == 0){
		$("#nextQuoteBtn1").addClass('d-none');
		$("#submitQuoteBtn1").removeClass('d-none');
	}
});


	$("#prevQuoteBtn1").click(function(){
	//if current form is last then activate next button
	if ($(".quote-modal-step:visible").next(".quote-modal-step").length == 0){
		$("#submitQuoteBtn1").addClass('d-none');
		$("#nextQuoteBtn1").removeClass('d-none');
	}
	//move backword
	if ($(".quote-modal-step:visible").prev(".quote-modal-step").length != 0){
		$(".quote-modal-step:visible").prev().show().next().hide();
	}
	//stop if last form

});


	$("#submitQuoteBtn1").click(function(){
	//validate form
	if($("#jobLocationStep:visible").length == true){
		if($('input[name*="job_address"]').val() < 1){
			$('#getQuoteModal .snackbar').text('Please enter address.').removeClass('d-none');
			return false;
		}else{
			$('#getQuoteModal .snackbar').addClass('d-none');
		}

		if($('select[name*="job_city"]').val() < 1){
			$('#getQuoteModal .snackbar').text('Please select city.').removeClass('d-none');
			return false;
		}else{
			$('#getQuoteModal .snackbar').addClass('d-none');
		}

		if($('input[name*="job_pincode"]').val() < 1){
			$('#getQuoteModal .snackbar').text('Please enter Pincode.').removeClass('d-none');
			return false;
		}else{
			$('#getQuoteModal .snackbar').addClass('d-none');
		}
	}

	//check if login validation
	if($('#userLoginRadio:checked').length == 1){
		if($('input[name*="login_email"]').val() < 1){
			$('#getQuoteModal .snackbar').text('Please enter email address.').removeClass('d-none');
			return false;
		}else{
			$('#getQuoteModal .snackbar').addClass('d-none');
		}

		if(isEmail($('input[name*="login_email"]').val()) == false){
			$('#getQuoteModal .snackbar').text('Please enter valid email address.').removeClass('d-none');
			return false;
		}else{
			$('#getQuoteModal .snackbar').addClass('d-none');
		}

		if($('input[name*="login_password"]').val() < 1){
			$('#getQuoteModal .snackbar').text('Please enter password.').removeClass('d-none');
			return false;
		}else{
			$('#getQuoteModal .snackbar').addClass('d-none');
		}
	}

	//check if register validation
	if($('#userRegisterRadio:checked').length == 1){

		if($('input[name*="register_first_name"]').val() < 1){
			$('#getQuoteModal .snackbar').text('Please enter first name.').removeClass('d-none');
			return false;
		}else{
			$('#getQuoteModal .snackbar').addClass('d-none');
		}

		if($('input[name*="register_last_name"]').val() < 1){
			$('#getQuoteModal .snackbar').text('Please enter last name.').removeClass('d-none');
			return false;
		}else{
			$('#getQuoteModal .snackbar').addClass('d-none');
		}

		if($('input[name*="register_email"]').val() < 1){
			$('#getQuoteModal .snackbar').text('Please enter email address.').removeClass('d-none');
			return false;
		}else{
			$('#getQuoteModal .snackbar').addClass('d-none');
		}

		if(isEmail($('input[name*="register_email"]').val()) == false){
			$('#getQuoteModal .snackbar').text('Please enter valid email address.').removeClass('d-none');
			return false;
		}else{
			$('#getQuoteModal .snackbar').addClass('d-none');
		}

		if($('input[name*="register_password"]').val() < 1){
			$('#getQuoteModal .snackbar').text('Please enter password.').removeClass('d-none');
			return false;
		}else{
			$('#getQuoteModal .snackbar').addClass('d-none');
		}
	}

	//do if user want to login AJAX
	if($('#userLoginRadio:checked').length == 1){
		loginAjaxUser($('input[name*="login_email"]').val(),$('input[name*="login_password"]').val());
	}

	//do if user want to register AJAX
	if($('#userRegisterRadio:checked').length == 1){
		registerAjaxUser($('input[name*="register_first_name"]').val(),$('input[name*="register_last_name"]').val(),$('input[name*="register_email"]').val(),$('input[name*="register_password"]').val());
	}

	//then submit form if all true
	$("#submitQuoteBtn1").attr("disabled", "disabled");
	$('#quoteModal_1').submit();
	//location.reload();
});



</script>


<script type="text/javascript">
	function getQuoteFormType1(value) {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			}
		})

		var base_url = $('meta[name="_path"]').attr('content');
		var formData = {
			sub_category: value
		}

		$.ajax({
			type: "POST",
			url: base_url+"/get-subcategories",
			data: formData,
			dataType: 'json',
			beforeSend: function() {
				
			},
			complete: function() {
				
			},
			success: function (json) {
				if(json.length > 0){
					var html = '';
					for(var i=0;i<json.length;i++){  	
						html += '<div class="card">';
						html += '<div class="card-body checkbox-card" >';
						html += '<div class="checkbox-round">';
						html += '<input name="subcategory['+i+']" type="checkbox" id="checkbox_'+i+'" value="'+json[i].id+'" />';
						html += '<label for="checkbox_'+i+'"></label>';
						html += '<span>'+json[i].name+'</span>';
						html += '</div>';	
						html += '</div>';
						html += '</div>';
					}
					
				//show this step
				$("#subCategoryStep").css('display','block');
				$("#subCategoryStep .sub_category").html(html);
				$("#getQuoteModal").modal('show');

				//we are calling card binding beacuse of not working in AJAX this state
				$('.checkbox-card').bind('click', function() {
					var checkbox = $(this).find(':checkbox');
					checkbox.attr('checked', !checkbox.attr('checked'));
				});
			}else{
            	//call another form 
            	
            }
        },
        error: function (data) {
        	console.log('Error:', data);
        }
    });
	}
</script>

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
	function loginAjaxUser(email,password){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			}
		})

		var base_url = $('meta[name="_path"]').attr('content');
		var formData = {
			email: email,
			password: password
		}

		$.ajax({
			type: "POST",
			url: base_url+"/ajax/user/login",
			data: formData,
			dataType: 'json',
			beforeSend: function() {
				
			},
			complete: function() {
				
			},
			success: function (json) {
				if(json['success'] == false){
					$('#getQuoteModal .snackbar').text(json['message']).removeClass('d-none');
					return false;
				} 

				if(json['success'] == true){
					$('#getQuoteModal .snackbar').addClass('d-none');
					return true;
				}
			},
			error: function (data) {
				console.log(data);
				$('#getQuoteModal .snackbar').text("something went wrong!").removeClass('d-none');
				return false;
			}
		});
	}
</script>

<script type="text/javascript">
	function registerAjaxUser(first_name,last_name,email,password){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			}
		})

		var base_url = $('meta[name="_path"]').attr('content');
		var formData = {
			first_name: first_name,
			last_name: last_name,
			email: email,
			password: password
		}

		$.ajax({
			type: "POST",
			url: base_url+"/ajax/user/register-user",
			data: formData,
			dataType: 'json',
			beforeSend: function() {
				
			},
			complete: function() {
				
			},
			success: function (json) {
				if(json['success'] == false){
					$('#getQuoteModal .snackbar').text(json['message']).removeClass('d-none');
					return false;
				} 

				if(json['success'] == true){
					$('#getQuoteModal .snackbar').addClass('d-none');
					return true;
				}
			},
			error: function (data) {
            //console.log(data);
            $('#getQuoteModal .snackbar').text("something went wrong!").removeClass('d-none');
            return false;
        }
    });
	}
</script>