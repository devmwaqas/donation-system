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
					<div>
						<h3></h3>
						<section>
							<div id="one_time_div" class="choice">
								<div class="row">
									<div class="col-lg-12 pb-4">
										<div class="heading_title mb-4">
											<h1 class="center_heading text-center pb-3">Donation Amount: $<?php echo $donation_amount; ?></h1>
											<input type="hidden" name="f_name" id="f_name" value="<?php echo $f_name; ?>">
											<input type="hidden" name="l_name" id="l_name" value="<?php echo $l_name; ?>">
											<input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
											<input type="hidden" name="purpose" id="purpose" value="<?php echo $purpose; ?>">
											<input type="hidden" name="identity" id="identity" value="<?php echo $identity; ?>">

											<input type="hidden" name="city" id="city" value="<?php echo $city; ?>">
											<input type="hidden" name="state" id="state" value="<?php echo $state; ?>">

										</div>
									</div>	
									<div class="col-lg-12 text-center">
										<div class="donate_box mb-30">
											<div id="paypal-button-container"></div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>	
				</div>	
			</div>
		</div>	
	</div>	
</section>

<!--=============== end section donation_form ================-->

<?php $this->load->view('common/footer'); ?>

<!-- client_id sandbox: ASsV1UyizPLb71a9g25eD9QBrGEZnYqORT4BKniA2tvF5aaNABFwP3Y9-1mAt39yLlRLnk1UMN-xH3nr -->

<!-- client_id live: AfaEt1ZJvyhQby12uIqVMGQBBPpNV9oWbpnlq-ZrVZZgLi26svKJJWwwlsdXj3XBh9fzXoIJQyeR93_5 

	<script src="https://www.paypal.com/sdk/js?client-id=ASsV1UyizPLb71a9g25eD9QBrGEZnYqORT4BKniA2tvF5aaNABFwP3Y9-1mAt39yLlRLnk1UMN-xH3nr"></script> -->

	<script src="https://www.paypal.com/sdk/js?client-id=AfaEt1ZJvyhQby12uIqVMGQBBPpNV9oWbpnlq-ZrVZZgLi26svKJJWwwlsdXj3XBh9fzXoIJQyeR93_5"></script>

	<script>

		paypal.Buttons({
			style: {
				layout: 'vertical',
				fundingicons: 'false',
			},
			createOrder: function (data, actions) {
				return actions.order.create({
					purchase_units: [{
						amount: {
							value: <?php echo $donation_amount; ?>
						}
					}]
				});
			},
			onApprove: function (data, actions) {
				return actions.order.capture().then(function (details) {
					
					$(".donate_box").html('<div class="alert alert-success"><strong>Success!</strong> Your donation successfully submitted. Thanks</div>');
					
					var first_name = $("#f_name").val();
					var last_name = $("#l_name").val();
					var user_email = $("#email").val();
					var purpose = $("#purpose").val();
					var identity = $("#identity").val();
					var city = $("#city").val();
					var state = $("#state").val();
					var email = details.payer.email_address;
					var amount = details.purchase_units[0].amount.value;
					var tid = details.purchase_units[0].payments.captures[0].id;
					var status = details.purchase_units[0].payments.captures[0].status;
					var cc = details.purchase_units[0].amount.currency_code;

					$.ajax({
						url: '<?php echo base_url(); ?>home/save_donation',
						type: 'post',
						data: { first_name : first_name, last_name : last_name, user_email: user_email, city: city,state: state, purpose: purpose, identity: identity, email: email, amount: amount, tid: tid, status: status, cc: cc },
						dataType: 'json',
						success: function (response) {
							console.log(response);
						}
					});
				});
			}
		}).render('#paypal-button-container');

	</script>