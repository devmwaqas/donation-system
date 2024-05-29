<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('common/admin_header'); ?>
    <link href="<?php echo base_url(); ?>admin_assets/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>admin_assets/css/datatable/responsive.bootstrap4.min.css" rel="stylesheet"> 

</head>

<body>
    <div id="wrapper">
        <?php $this->load->view('common/admin_sidebar'); ?>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <?php $this->load->view('common/admin_logoutbar'); ?>
            </div>

            <div class="wrapper wrapper-content animated fadeIn">
                <div class="row">

                    <div class="ibox col-lg-12">
                        <div class="ibox-title">
                            <h5>Donations List</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="donation_table">
                                        <thead class="thead-dark-custom">
                                            <tr>
                                                <th> Name</th>
                                                <th> Email</th>
                                                <th> City, State</th>
                                                <th> Purpose</th>
                                                <th> Visible Identity</th>
                                                <th> Trx ID </th>
                                                <th> Payer ID</th>
                                                <th> Amount</th>
                                                <th> Status</th>
                                                <th> Donation Date </th>
                                            </tr>
                                        </thead>
                                        <tbody class="tablebody">
                                            <?php foreach ($donations as $donation) { ?>
                                                <tr>
                                                    <td><?php echo $donation['first_name']." ".$donation['last_name']; ?></td>
                                                    <td class=""><?php echo $donation['email']; ?></td>
                                                    
                                                    <td><?php echo !empty($donation['city']) ? $donation['city'].", ".$donation['state'] : "-"; ?></td>
                                                    <td><?php echo $donation['purpose']; ?></td>
                                                    <td>
                                                        <?php if($donation['identity_visible']) { ?>
                                                            <span class="label label-success">Yes</span>
                                                        <?php } else { ?>
                                                            <span class="label label-danger">No</span>
                                                        <?php } ?>

                                                    </td>
                                                    <td><?php echo $donation['trx_id']; ?></td>

                                                    <td><?php echo $donation['payer_email']; ?></td>

                                                    <td><?php echo $donation['currency_code'].$donation['amount']; ?></td>

                                                    <td><?php echo $donation['trx_status']; ?></td>

                                                    <td><?php echo date('m/d/Y H:i:s A' , strtotime($donation['created_at'])); ?></td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div> 


                        </div>
                    </div>
                </div>

            </div>
            <?php $this->load->view('common/admin_footer'); ?>
        </div>

    </div>
    <?php $this->load->view('common/admin_scripts'); ?>
</body>
</html>
<script src="<?php echo base_url(); ?>admin_assets/js/datatable/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/datatable/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/datatable/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>admin_assets/js/datatable/responsive.bootstrap4.min.js"></script>

<script type="text/javascript">

    $('#donation_table').dataTable({
        "paging": true,
        "autoWidth": false,
        "searching": true,
        "bInfo":true,
        "lengthChange": true,
        "pageLength": 25,
        "responsive": true,
        "order": [[ 9, "desc" ]],
        "columnDefs": [
        { "responsivePriority": 1, "targets": 0 },
        { "responsivePriority": 2, "targets": -1 }
        ]
    });

</script>