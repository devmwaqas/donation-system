<?php $this->load->view('common/header'); ?>
<!--================ Home Banner Area =================-->
<section class="about_banner_area">
	<div class="overlay"></div>
	<div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content row">
				<div class="offset-lg-2 col-lg-8">
					<h1>
						MAKE DONATION
					</h1>
					<a class="main_btn2 mr-10" href="<?php echo base_url(); ?>donation_form">donate now</a>

				</div>
			</div>
		</div>
	</div>
</section>
<!--================ End Home Banner Area =================-->

<!--================= start section donation_form ============-->
<section class="make_donation section_gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 main_content_form">
				<div class="heading_title mb-4">
					<h1 class="left_heading pb-3">Make A Donation Today</h1>
				</div>

				<p class="mb-4">
					Creative Commons helps you legally share your knowledge and creativity to build a more equitable, accessible, and innovative world. We unlock the full potential of the internet to drive a new era of development, growth and productivity.
				</p>
				<div class="donate_now_wrapper">
					<form id="donation_form" method="post" action="<?php echo base_url(); ?>submit_donation">
						<div>
							<h3></h3>
							<section>
								<input type="hidden" class="form-check-input" name="donation" checked id="one_time" value="one_time">
    					<!-- <div class="row">
    						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="donate_box mb-30">
									<div class="form-check pull-right" id="link1">
										<input type="radio" class="form-check-input" name="donation" checked id="one_time">
										<label class="form-check-label d-flex justify-content-center" for="one_time">
											One-Time
										</label>
									</div>
								</div>
							</div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="donate_box mb-30">
									<div class="form-check" id="link2">
										<input type="radio" class="form-check-input" name="donation" id="monthly">
										<label class="form-check-label d-flex justify-content-center" for="monthly">
											Monthly
										</label>
									</div>
								</div>
							</div>
						</div> -->	

						<div id="one_time_div" class="choice">
							<div class="row">
								<div class="col-lg-12 pb-4">
									<div class="heading_title mb-4">
										<h1 class="center_heading text-center pb-3">Donation Amount</h1>
									</div>
								</div>
								<?php if(!empty($this->session->flashdata('value_error'))) { ?>
									<div class="col-lg-12">
										<div class="alert alert-danger" role="alert">
											<strong>Error!</strong><br><?php echo $this->session->flashdata('value_error'); ?>
										</div>
									</div>
								<?php } ?>
								<div class="col-lg-4">
									<div class="donate_box mb-30">
										<div class="form-check">
											<input type="radio" class="form-check-input_price" name="don" value="5" id="five_doller">
											<label class="form-check-label-price d-flex justify-content-center" for="five_doller">
												$5
											</label>
										</div>
									</div>
								</div>

								<div class="col-lg-4">
									<div class="donate_box mb-30">
										<div class="form-check">
											<input type="radio" class="form-check-input_price" name="don" value="10" id="ten_doller">
											<label class="form-check-label-price d-flex justify-content-center" for="ten_doller">
												$10
											</label>
										</div>
									</div>
								</div>

								<div class="col-lg-4">
									<div class="donate_box mb-30">
										<div class="form-check">
											<input type="radio" class="form-check-input_price" name="don" value="50" id="fifty_doller">
											<label class="form-check-label-price d-flex justify-content-center" for="fifty_doller">
												$50
											</label>
										</div>
									</div>
								</div>

								<div class="col-lg-4">
									<div class="donate_box">
										<div class="form-check">
											<input type="radio" class="form-check-input_price" name="don" value="100" id="hundred__doller">
											<label class="form-check-label-price d-flex justify-content-center" for="hundred__doller">
												$100
											</label>
										</div>
									</div>
								</div>

								<div class="col-lg-4">
									<div class="donate_box">
										<div class="form-check">
											<input type="radio" class="form-check-input_price" name="don" value="1000" id="thousand__doller">
											<label class="form-check-label-price d-flex justify-content-center" for="thousand__doller">
												$1000
											</label>
										</div>
									</div>
								</div>

								<div class="col-lg-4">
									<div class="donate_box">
										<div class="form-group">
											<input type="text" placeholder="Others" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Other'" class="form-control" name="one_time_other_amount">
											<span class="fs-14">$</span>
										</div>
									</div>
								</div>
							</div>
						</div>

                       <!-- <div id="monthly_div" class="none choice">
                       	    <div class="row">
                       	    	<div class="col-lg-12 pb-4">
                       	    		<div class="heading_title mb-4">
								        <h1 class="center_heading text-center pb-3">Donation Amount</h1>
								    </div>
                       	    		
                       	    	</div>	
								<div class="col-lg-4">
									<div class="donate_box mb-30">
										<div class="form-check">
											<input type="radio" class="form-check-input_price" name="don" value="" id="five_doller-2">
											<label class="form-check-label-price d-flex justify-content-center" for="five_doller-2">
												$5
											</label>
										</div>
									</div>
								</div>

								<div class="col-lg-4">
									<div class="donate_box mb-30">
										<div class="form-check">
											<input type="radio" class="form-check-input_price" name="don" value="" id="ten_doller-2">
											<label class="form-check-label-price d-flex justify-content-center" for="ten_doller-2">
												$10
											</label>
										</div>
									</div>
								</div>

								<div class="col-lg-4">
									<div class="donate_box mb-30">
										<div class="form-check">
											<input type="radio" class="form-check-input_price" name="don" value="" id="fifty_doller-2">
											<label class="form-check-label-price d-flex justify-content-center" for="fifty_doller-2">
												$50
											</label>
										</div>
									</div>
								</div>

								<div class="col-lg-4">
									<div class="donate_box">
										<div class="form-check">
											<input type="radio" class="form-check-input_price" name="don" value="" id="seventy__doller">
											<label class="form-check-label-price d-flex justify-content-center" for="seventy__doller">
												$70
											</label>
										</div>
									</div>
								</div>

								<div class="col-lg-4">
									<div class="donate_box">
										<div class="form-check">
											<input type="radio" class="form-check-input_price" name="don" value="" id="hundred__doller-2">
											<label class="form-check-label-price d-flex justify-content-center" for="hundred__doller-2">
												$100
											</label>
										</div>
									</div>
								</div>

								<div class="col-lg-4">
									<div class="donate_box">
										<div class="form-check">
											<input type="radio" class="form-check-input_price" name="don" value="" id="five_hundred_doller">
											<label class="form-check-label-price d-flex justify-content-center" for="five_hundred_doller">
												$500
											</label>
										</div>
									</div>
								</div>

								<div class="col-lg-4 mt-3">
									<div class="donate_box">
										<div class="form-group">
											<input type="text" placeholder="Others" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Others'" class="form-control">
											<span class="fs-14">$</span>
										</div>
									</div>
								</div>
					       </div>
					   </div> -->
					   <div class="information_area contact_form">
					   	<div class="row">
					   		<div class="col-lg-12 pt-4 pb-4">
					   			<div class="heading_title mb-4">
					   				<h1 class="left_heading pb-3">Your Information</h1>
					   			</div>

					   		</div>	
					   		<div class="col-md-6">
					   			<div class="form-group">
					   				<input type="text" class="form-control" id="f_name" name="f_name" placeholder="First Name" value="<?php echo $this->session->flashdata('f_name'); ?>" required>
					   			</div>
					   		</div>	
					   		<div class="col-md-6">
					   			<div class="form-group">
					   				<input type="text" class="form-control" id="l_name" name="l_name" placeholder="Last Name" value="<?php echo $this->session->flashdata('l_name'); ?>" required>
					   			</div>
					   		</div>	
					   		<div class="col-md-6">
					   			<div class="form-group">
					   				<input type="email" class="form-control" id="e-mail" name="email" placeholder="Enter email address" value="<?php echo $this->session->flashdata('email'); ?>" required>
					   			</div>
					   		</div>
					   		<div class="col-md-6">
					   			<div class="form-group">
					   				<select class="form-control" id="purpose" name="purpose" required>
					   					<option value=""> Purpose </option>
					   					<option value="Economic Development" <?php if($this->session->flashdata('purpose') == "Economic Development"){ ?>selected <?php } ?>> Economic Development </option>
					   					<option value="Clean Water" <?php if($this->session->flashdata('purpose') == "Clean Water"){ ?> selected<?php } ?>> Clean Water </option>
					   					<option value="Hunger" <?php if($this->session->flashdata('purpose') == "Hunger"){ ?> selected<?php } ?>> Hunger </option>
					   					<option value="Education" <?php if($this->session->flashdata('purpose') == "Education"){ ?> selected<?php } ?>> Education </option>
					   					<option value="Health" <?php if($this->session->flashdata('purpose') == "Health"){ ?> selected<?php } ?>> Health </option>
					   					<option value="Medical" <?php if($this->session->flashdata('purpose') == "Medical"){ ?> selected<?php } ?>> Medical </option>
					   				</select>
					   			</div>
					   		</div>

					   		<div class="col-md-6 col-sm-12">
					   			<div class="single-element-widget mt-3 pull-left">
					   				<div class="switch-wrap d-flex align-items-center">
					   					<div class="primary-radio mr-2">
					   						<input type="radio" id="show_id" name="identity" value="1" <?php if($this->session->flashdata('identity') == 1){ ?> checked <?php } ?>>
					   						<label for="show_id"></label>
					   					</div>
					   					<p>Show my Identity</p>
					   				</div>
					   			</div>
					   			<div class="single-element-widget mt-3 pull-right">
					   				<div class="switch-wrap d-flex align-items-center">
					   					<div class="primary-radio mr-2">
					   						<input type="radio" id="hide_id" name="identity" value="0" <?php if($this->session->flashdata('identity') == 0 || empty($this->session->flashdata('identity'))){ ?> checked <?php } ?>>
					   						<label for="hide_id"></label>
					   					</div>
					   					<p>Hide my Identity</p>
					   				</div>
					   			</div>

					   		</div>

					   		
					   	</div>	
					   </div>
					</section>
					<button type="submit" class="main_btn"> Submit </button>
				</div>
			</form>	
		</div>	
	</div>
</div>	
</div>	
</section>
<!--=============== end section donation_form ================-->
<?php $this->load->view('common/footer'); ?>