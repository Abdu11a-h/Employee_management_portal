<?php include('admin_dashboard_header.php'); ?>


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
                                                    <th width="10%">Request By</th>
                                                    <th width="10%">Action</th>
                                                    <th width="10%">Status</th>
                                                    <th width="10%">Date</th>
                                                    
                                                </tr>
                                                </thead>
                                                    <tbody>
                                                    <?php $count=1;?>
                                                        <?php
                                                        if (!empty($logs)) { ?>
                                                        <?php foreach ($logs as $data) { ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo isset($count) ? $count : '';?>
                                                                </td>
                                                              
                                                               
                                                                <td>
                                                                    <?php echo isset($data->reference_code) ? $data->reference_code : '';?>
                                                                </td>
                                                                <td>
                                                                    <?php echo isset($data->action) ? $data->action : '';?>
                                                                </td>
                                                                <td>
                                                                    <?php echo isset($data->status) ? $data->status : '';?>
                                                                </td>
                                                                <td>
                                                                    <?php echo isset($data->added_on) ? $data->added_on : '';?>
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

  



    
<?php include('footer.php'); ?>
