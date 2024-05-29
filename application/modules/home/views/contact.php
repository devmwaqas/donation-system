<?php $this->load->view('common/header'); ?>
<!--================ Home Banner Area =================-->
<section class="about_banner_area">
  <div class="overlay"></div>
  <div class="banner_inner d-flex align-items-center">
   <div class="container">
    <div class="banner_content row">
     <div class="offset-lg-2 col-lg-8">
      <h1>
       CONTACT US
   </h1>
   <a class="main_btn2 mr-10" href="<?php echo base_url(); ?>donation_form">donate now</a>

</div>
</div>
</div>
</div>
</section>
<!--================ End Home Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="make_africa_img">
                       <img src="<?php echo base_url(); ?>assets/img/maga.png">
                   </div>
                   <div class="info_item">
                    <i class="lnr lnr-home"></i>
                    <h6>Ewa Beach, Hawaii</h6>
                    <p>Meet us</p>
                </div>
                <div class="info_item">
                    <i class="lnr lnr-phone-handset"></i>
                    <h6>
                        <a href="tel:00 (440) 9865 562">00 (440) 9865 562</a>
                    </h6>
                    <p>Mon to Fri 9am to 6 pm</p>
                </div>
                <div class="info_item">
                    <i class="lnr lnr-envelope"></i>
                    <h6>
                        <a href="mailto:info@explorelogics.com">info@explorelogics.com</a>
                    </h6>
                    <p>Send us your query anytime!</p>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div id="message_section" style="display: none;"></div>
            <form class="row contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                    </div>
                </div>   
                <div class="col-md-12">
                 <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                </div>
            </div> 
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                </div>    
            </div>    
            <div class="col-md-12 text-right">
                <button type="button" value="submit" class="main_btn" id="send_email">Send Message</button>
            </div>
        </form>
    </div>
</div>
</div>
</section>
<section class="map_address">
    <div id="mapBox" class="mapBox mb-0">
    </div>
</section>
<!--================Contact Area =================-->
<?php $this->load->view('common/footer'); ?>

<script type="text/javascript">

    $('#send_email').click(function() { 
        var values = $('#contactForm').serialize();
        $.ajax({
            url: '<?php echo base_url(); ?>home/send_contact_email',
            type: 'post',
            data: values,
            dataType: 'json',
            success: function (response) {
                if (response.msg == 'success') {
                    $("#message_section").html('<div class="alert alert-success"><strong>Success!</strong><br>Email successfully sent. We will get back to you soon. Thanks</div>').show();
                    setTimeout(function() { $("#message_section").hide(); },2000);
                } else if (response.msg == 'error') {
                    $('#contactForm')[0].reset();
                    $("#message_section").html('<div class="alert alert-danger" role="alert"><strong>Error!</strong><br>All fields are required.</div>').show();
                    setTimeout(function() { $("#message_section").hide(); },2000);
                } else if (response.msg == 'send_error') {
                    $("#message_section").html('<div class="alert alert-danger" role="alert"><strong>Error!</strong><br>Something went wrong. please try again.</div>').show();
                    setTimeout(function() { $("#message_section").hide(); },2000);
                }
            }
        });

    });

</script>