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
                                        <a href="<?php echo USER_REGISTRATION_BASIC.'add_portal_users';?>" class="btn btn-md btn-success" style="height: auto;">Add New User <i class="fa fa-user-plus"></i></a>
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
                                                    <th width="10%">Gender</th>
                                                    <th width="10%">Email</th>
                                                    <th width="10%">Mobile Number</th>
                                                    <th width="10%">Status</th>
                                                    <th width="10%">Actions</th>
                                                </tr>
                                                </thead>
                                                    <tbody>
                                                    <?php $count=1;?>
                                                        <?php
                                                        if (!empty($userData)) { ?>
                                                        <?php foreach ($userData as $data) { ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo isset($count) ? $count : '';?>
                                                                </td>
                                                                <td>
                                                                    <?php echo isset($data->firstname) && isset($data->lastname) ? $data->firstname ." ".  $data->lastname: '';?>
                                                                </td>
                                                                <td>
                                                                    <?php if($data->gender == "0") {?>
                                                                        <p style="text-align: center; border-radius: 5px; width: 70px;">Male</p>
                                                                    <?php } ?>
                                                                    <?php if($data->gender == "1") {?>
                                                                        <p style="text-align: center; border-radius: 5px; width: 70px;">Female</p>
                                                                    <?php } ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo isset($data->email) ? $data->email : '';?>
                                                                </td>
                                                                <td>
                                                                    <?php echo isset($data->mobile_number) ? $data->mobile_number : '';?>
                                                                </td>
                                                              
                                                               
                                                                <td>
                                                                    <?php if($data->profile_status != "0") {?>
                                                                        <p style="background-color: #9e1c1c;  color: white ; text-align: center; border-radius: 5px; width: 70px;">Blocked</p>
                                                                    <?php } ?>
                                                                    <?php if($data->profile_status == "0") {?>
                                                                        <p style="background-color: #1a542a;  color: white ; text-align: center; border-radius: 5px; width: 70px;">Active</p>
                                                                    <?php } ?>
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Edit
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="<?php echo USER_REGISTRATION_BASIC.'editportalusers/'.encode($data->id)?>">View Profile</a>
                                                                           

                                                                        </div>
                                                                    </div>
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
