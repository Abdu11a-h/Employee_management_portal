<?php include('dashboardHeader.php'); ?>


        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="row">
                    <div class="col-xl-10">
                    

                    </div>
                </div>
                    <div class="title_right">
                        <div class="col-md-2 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">

                            </div>
                        </div>
                    </div>


                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="row">
                                <div class="col-xl-2">
                                    <div class="input-group">
                                        <!-- <a href="<?php echo USER_REGISTRATION_BASIC.'add_portal_users';?>" class="btn btn-md btn-success" style="height: auto;">Add New User <i class="fa fa-user-plus"></i></a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="">
                                            <table id="datatable-buttons" class="table table-striped  "  style="width:100%;  padding-bottom: 20px;">
                                                <thead>
                                                <tr>
                                                    <th width="2%">#</th>
                                                    <th width="10%">User Name</th>
                                                  
                                                    <th width="10%">Reason</th>
                                                    <th width="10%">Leave From</th>
                                                    <th width="10%">Leave Till</th>
                                                    <th width="10%">Status</th>
                                                    <th width="10%">Actions</th>
                                                </tr>
                                                </thead>
                                                    <tbody>
                                                    <?php $count=1;?>
                                                        <?php
                                                        if (!empty($leave_requests)) { ?>
                                                        <?php foreach ($leave_requests as $data) { ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo isset($count) ? $count : '';?>
                                                                </td>
                                                                <td>
                                                                    <?php echo isset($data->firstname) && isset($data->lastname) ? $data->firstname ." ".  $data->lastname: '';?>
                                                                </td>
                                                               
                                                                <td>
                                                                    <?php echo isset($data->reason) ? $data->reason : '';?>
                                                                </td>
                                                                <td>
                                                                    <?php echo isset($data->leaveFrom) ? $data->leaveFrom : '';?>
                                                                </td>
                                                                <td>
                                                                    <?php echo isset($data->leaveTill) ? $data->leaveTill : '';?>
                                                                </td>
                                                              
                                                               
                                                                <td>
                                                                    <?php if($data->status == "0") {?>
                                                                        <p style="background-color: #9e1c1c;  color: white ; text-align: center; border-radius: 5px; width: 70px;">Pending</p>
                                                                    <?php } ?>
                                                                    <?php if($data->status == "1") {?>
                                                                        <p style="background-color: #1a542a;  color: white ; text-align: center; border-radius: 5px; width: 70px;">Approved</p>
                                                                    <?php } ?>
                                                                    <?php if($data->status == "2") {?>
                                                                        <p style="background-color: #9e1c1c;  color: white ; text-align: center; border-radius: 5px; width: 70px;">Rejected</p>
                                                                    <?php } ?>
                                                                    <?php if($data->status == "3") {?>
                                                                        <p style="background-color: #808080;  color: white ; text-align: center; border-radius: 5px; width: 70px;">Cancelled</p>
                                                                    <?php } ?>
                                                                </td>
                                                                <td>
                                                                    <?php if($data->status == "0"){ ?>
                                                                    <div class="btn-group">
                                                                        <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Edit
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item cancel-leave" href="#" data-id="<?php echo encode($data->id) ?>">Cancel</a>
                                                                        </div>
                                                                    </div>
                                                                    <?php } ?>
                                                                </td>

                                                            </tr>

                                                            <?php $count++; }?>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
    $(document).ready(function() {
        $('.cancel-leave').click(function(event) {
            console.log('hitting');
            event.preventDefault(); 
           
            var leaveId = $(this).data('id');

           
            $.ajax({
                url: "<?php echo USER_REGISTRATION_API.'cancel_leave_request/' ?>",
                type: "POST",
                data: {id: leaveId},
                success: function(response) {
                   
                    console.log("success");
                    window.location.href = "<?php echo base_url('UserRegistrationBasic/leave_requests'); ?>";

                },
                error: function(xhr, status, error) {
                 
                    console.error("Error cancelling leave request:", error);
                   
                }
            });
        });
    });
</script>



    
<?php include('footer.php'); ?>
