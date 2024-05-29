<?php $this->load->view('common/header'); ?>

<!--================ Home Banner Area =================-->
<section class="about_banner_area">
	<div class="overlay"></div>
	<div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="banner_content row">
				<div class="offset-lg-2 col-lg-8">
					<h1>
						DONATE A GIFT
					</h1>
					<a class="main_btn2 mr-10" href="<?php echo base_url(); ?>donation_form">donate now</a>

				</div>
			</div>
		</div>
	</div>
</section>
<!--================ End Home Banner Area =================-->

<!--============= start gift section ================-->

<section class="make_donation section_gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 main_content_form">
				<div class="heading_title mb-4">
					<h1 class="left_heading pb-3">Donate A Gift Today</h1>
				</div>

				<p class="mb-4">
					Make Africa Great Again Inc. has cost a lot of money to establish and maintain through personal expenses. Therefore, in order to provide the resources and greatest content needed to continue it’s platform, and function at it’s best, gift donations is very much appreciated. The time and energy focused on making MAGA possible, and maintaining this non-profit, is basically like a full-time job however gift donations can help me continue to focus more time and energy with providing to the world the greatest content possible.
				</p>
				<div class="donate_now_wrapper">
					<form id="gift_form" method="post" action="<?php echo base_url(); ?>submit_donation">
						<div>
							<h3></h3>
							<section>
								<input type="hidden" class="form-check-input" name="donation" checked id="one_time" value="one_time">

						<div id="one_time_div" class="choice">
							<div class="row">
								<div class="col-lg-12 pb-4">
									<div class="heading_title mb-4">
										<h1 class="center_heading text-center pb-3">Gift Amount</h1>
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

                     
					   <div class="information_area contact_form">
					   	<div class="row">
					   		<div class="col-lg-12 pt-4 pb-4">
					   			<div class="heading_title mb-4">
					   				<h1 class="left_heading pb-3">Your Information</h1>
					   			</div>
					   			<input type="hidden" name="location" value="<?php echo base_url(); ?>gift_voucher">
					   		</div>	
					   		<div class="col-md-6">
					   			<div class="form-group">
					   				<input type="text" class="form-control" id="f_name_1" name="f_name" placeholder="First Name" value="<?php echo $this->session->flashdata('f_name'); ?>" required>
					   			</div>
					   		</div>	
					   		<div class="col-md-6">
					   			<div class="form-group">
					   				<input type="text" class="form-control" id="l_name_1" name="l_name" placeholder="Last Name" value="<?php echo $this->session->flashdata('l_name'); ?>" required>
					   			</div>
					   		</div>	
					   		<div class="col-md-6">
					   			<div class="form-group">
					   				<input type="email" class="form-control" id="e-mail_1" name="email" placeholder="Enter email address" value="<?php echo $this->session->flashdata('email'); ?>" required>
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
					   					<option value="Clothing" <?php if($this->session->flashdata('purpose') == "Clothing"){ ?> selected<?php } ?>> Clothing </option>

					   					<option value="Donation Gift" <?php if($this->session->flashdata('purpose') == "Donation Gift"){ ?> selected <?php } elseif(empty($this->session->flashdata('purpose'))) { ?> selected <?php } ?>> Donation Gift </option>

					   				</select>
					   			</div>
					   		</div>

					   			
                            <div class="col-md-6">
					   			<div class="form-group">
					   				<input type="text" class="form-control" id="city"  name="city" placeholder="City" value="<?php echo $this->session->flashdata('city'); ?>" required>
					   			</div>	
					   		</div>

					   		<div class="col-md-6">
					   			<div class="form-group">
					   				<input type="text" class="form-control" id="state"  name="state" placeholder="State" value="<?php echo $this->session->flashdata('state'); ?>" required>
					   			</div>	
					   		</div>

					   		<div class="col-md-6 col-sm-12">
					   			<div class="single-element-widget mt-3 pull-left">
					   				<div class="switch-wrap d-flex align-items-center">
					   					<div class="primary-radio mr-2">
					   						<input type="radio" id="show_id" name="identity" value="1" <?php if($this->session->flashdata('identity') == 1){ ?> checked <?php } ?>>
					   						<label for="show_id"><span>Show my Identity</span></label>
					   						<!-- <p></p> -->
					   					</div>
					   					
					   				</div>
					   			</div>
					   			<div class="single-element-widget mt-3 pull-right">
					   				<div class="switch-wrap d-flex align-items-center">
					   					<div class="primary-radio mr-2">
					   						<input type="radio" id="hide_id" name="identity" value="0" <?php if($this->session->flashdata('identity') == 0 || empty($this->session->flashdata('identity'))){ ?> checked <?php } ?>>
					   						<label for="hide_id"><span>Hide my Identity</span></label>
					   						<!-- <p></p> -->
					   					</div>
					   					
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
<!-- services -->
<section class=" bg-gray section_gap">
    <div class="container">
        <div class="heading_title mb-5">
            <h1 class="center_heading text-center pb-3">Gift Cards</h1>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-6">
                <div class="single_donation_box interest">
                	<a href="<?php echo base_url(); ?>economic_development">
	                    <img src="<?php echo base_url(); ?>assets/img/rising.png" alt="" class="mb-4">
	                    <h5>Economic <br /> Development</h5>
                	</a>
                    <div class="counting_text">
                        <button class="main_btn w-100">$<?php echo number_format(total_donations('Economic Development')); ?></button>
                    </div> 
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="single_donation_box interest">
                	<a href="<?php echo base_url(); ?>clean_water">
	                    <img src="<?php echo base_url(); ?>assets/img/hand-washing.png" alt="" class="mb-4">
	                    <h5>Clean <br /> Water</h5>
                	</a>
                     <div class="counting_text">
                        <button class="main_btn w-100">$<?php echo number_format(total_donations('Clean Water')); ?></button>
                    </div> 
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="single_donation_box interest">
                    <a href="<?php echo base_url(); ?>hunger">
                    	<img src="<?php echo base_url(); ?>assets/img/e_hunger.png" alt="" class="mb-4">
                    	<h5>Eradicating <br /> Hunger</h5>
                	</a>
                    <div class="counting_text">
                        <button class="main_btn w-100">$<?php echo number_format(total_donations('Hunger')); ?></button>
                    </div>  
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="single_donation_box interest">
                    <a href="<?php echo base_url(); ?>education">
                    	<img src="<?php echo base_url(); ?>assets/img/classroom.png" alt="" class="mb-4">
                    	<h5>Education <br /> Services</h5>
                	</a>
                    <div class="counting_text">
                        <button class="main_btn w-100">$<?php echo number_format(total_donations('Education')); ?></button>
                    </div> 
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="single_donation_box interest">
                    <a href="<?php echo base_url(); ?>health_medical">
                    	<img src="<?php echo base_url(); ?>assets/img/care.png" alt="" class="mb-4">
                    	<h5>Health & <br /> Medical</h5>
                	</a>
                    <div class="counting_text">
                        <button class="main_btn w-100">$<?php echo number_format(total_donations('Health')); ?></button>
                    </div> 
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="single_donation_box interest">
                    <a href="<?php echo base_url(); ?>clothing_line">
                    	<img src="<?php echo base_url(); ?>assets/img/shirt.png" alt="" class="mb-4">
                    	<h5>Clothing <br /> Line</h5>
                	</a>
                    <div class="counting_text">
                        <button class="main_btn w-100">$<?php echo number_format(total_donations('Clothing')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services -->
</section>

<!--=============== end gift section =================-->


<?php $this->load->view('common/footer'); ?>