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
                                        <a href="<?php echo USER_REGISTRATION_BASIC.'add_departments';?>" class="btn btn-md btn-success" style="height: auto;">Add New Department <i class="fa fa-user-plus"></i></a>
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
                                                    <th width="10%">#</th>
                                                    <th width="20%">Name</th>
                                                    <th width="30%">Description</th>
                                                    <th width="10%">Actions</th>
                                                </tr>
                                                </thead>
                                                    <tbody>
                                                    <?php $count=1;?>
                                                        <?php
                                                        if (!empty($departmentData)) { ?>
                                                        <?php foreach ($departmentData as $data) { ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo isset($count) ? $count : '';?>
                                                                </td>
                                                                <td>
                                                                    <?php echo isset($data->name) ? $data->name : '';?>
                                                                </td>
                                                                <td>
                                                                    <?php echo isset($data->description) ? $data->description : '';?>
                                                                </td>
                                                               
                                                              
                                                              
                                                               
                                                               
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Edit
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="<?php echo USER_REGISTRATION_BASIC.'editdepartments/'.encode($data->id)?>">View department</a>
                                                                           

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
