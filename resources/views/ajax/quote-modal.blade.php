<div class="modal quote-modal" id="getQuoteModal" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog modal-lg modal-custom-lg">
		<div class="modal-content quote-modal-block">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body 1-->
			<div class="modal-body cutsom-scroll pt-0 quote-modal-step">
				<h6 class="mt-2 quote-title">What service do you need?<sup style="color: red">*</sup></h6>
				<div class="row mt-3">
					<div class="col-12">
						<div class="card">
							<div class="card-body checkbox-card">
								<div class="checkbox-round">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox"></label>
									<span>bedroom</span>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body checkbox-card">
								<div class="checkbox-round">
									<input type="checkbox" id="checkbox1" />
									<label for="checkbox1"></label>
									<span>Bathroom deep cleaning</span>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body checkbox-card">
								<div class="checkbox-round">
									<input type="checkbox" id="checkbox2" />
									<label for="checkbox2"></label>
									<span>living room</span>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body checkbox-card">
								<div class="checkbox-round">
									<input type="checkbox" id="checkbox3" />
									<label for="checkbox3"></label>
									<span>Water storage tank cleaning</span>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>


			<!-- Modal body 2-->
			<div class="modal-body cutsom-scroll pt-0 quote-modal-step">
				<h6 class="mt-2 quote-title">Enter job title</h6>
				<div class="row mb-4">
					<div class="col-12">
						<input type="text" name="job_title" class="form-control">
					</div>
				</div>

				<h6 class="mt-2 quote-title">Describe your job need to be done</h6>
				<div class="row mb-4">
					<div class="col-12">
						<textarea class="form-control" name="job_description" rows="6"></textarea>
					</div>
				</div>

				<h6 class="mt-2 quote-title">Attach photo (It is helpful if available)</h6>
				<div class="row">
					<div class="col-12">
						<form action="{{url('/')}}" class="dropzone"></form>
					</div>
				</div>
			</div>

			<!-- Modal body 3-->
			<div class="modal-body cutsom-scroll pt-0 quote-modal-step">
				<h6 class="mt-2 quote-title">Type of Job</h6>
				<div class="row mb-4">
					<div class="col-12">
						<div class="card">
							<div class="card-body radio-card">
								<div class="radio-round">
									<input type="radio" id="radio" name="radio-group">
									<label for="radio">Residential</label>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body radio-card">
								<div class="radio-round">
									<input type="radio" id="radio2" name="radio-group">
									<label for="radio2">Industrial</label>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body radio-card">
								<div class="radio-round">
									<input type="radio" id="radio3" name="radio-group">
									<label for="radio3">Commercial</label>
								</div>
							</div>
						</div>
					</div>
				</div>

				<h6 class="mt-2 quote-title">Frequency of job</h6>
				<div class="row mb-4">
					<div class="col-12">
						<div class="card">
							<div class="card-body radio-card">
								<div class="radio-round">
									<input type="radio" id="radio" name="radio-group">
									<label for="radio">One-off</label>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body radio-card">
								<div class="radio-round">
									<input type="radio" id="radio2" name="radio-group">
									<label for="radio2">Weekly</label>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body radio-card">
								<div class="radio-round">
									<input type="radio" id="radio3" name="radio-group">
									<label for="radio3">Fortnightly</label>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body radio-card">
								<div class="radio-round">
									<input type="radio" id="radio3" name="radio-group">
									<label for="radio3">Monthly</label>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- Modal body 4-->
			<div class="modal-body cutsom-scroll pt-0 quote-modal-step">
				<h6 class="mt-2 quote-title mb-4">Where do you need Quicker?</h6>
				<div class="row mb-4">
					<div class="col-12 mb-2">
						<label>Address</label>
						<input type="text" name="address" class="form-control">
					</div>

					<div class="col-12 col-lg-6 mb-2">
						<label>City</label>
						<input type="text" name="address" class="form-control">
					</div>

					<div class="col-12 col-lg-6 mb-2">
						<label>Pincode</label>
						<input type="text" name="address" class="form-control">
					</div>
				</div>

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
						<input type="email" class="form-control" name="email" placeholder="Email*">
					</div>
					<div class="form-group col-6">
						<input type="password" class="form-control" name="password" placeholder="Password*">
					</div>
				</div>

				<div class="row mb-4" id="userRegisterBlock" style="display: none;">
					<div class="form-group col-6">
						<input type="text" class="form-control" name="first_name" placeholder="First Name*">
					</div>
					<div class="form-group col-6">
						<input type="text" class="form-control" name="last_name" placeholder="Last Name*">
					</div>
					<div class="form-group col-6">
						<input type="email" class="form-control" name="email" placeholder="Email*">
					</div>
					<div class="form-group col-6">
						<input type="password" class="form-control" name="password" placeholder="Password*">
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button id="nextQuoteBtn" class="btn btn-primary btn-block">NEXT <i class="icon-angle-right"></i></button>
			</div>
		</div>
	</div>
</div>