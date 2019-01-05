<?php $pagetitle = "Add Client"; include'header.php'; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <h3></h3>  
    <section class="content-header">
        <h1>
            Employee
            <small>Vibgyor Security Guards Pvt. Ltd.</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('Admin/index'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('Admin/addEmployee'); ?>">Add Employee</a></li>

        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Add Employee</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <?php echo form_open('Employee/addEmployee', 'class="form" id="login-form" method="POST"') ?>
                <div class="row">
                    <?php echo form_error(); ?>
                    <div class="col-lg-12">
                        <h3 class="box-title">Employee Details</h3>
                        <hr/>
                        <div class="form-group col-lg-12">
                            <label>Name</label>
                            <input class="form-control" name="name" id="name" type="text">
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Mobile No 1</label>
                            <input class="form-control" name="mobileno" id="mobileno" type="text">
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Email Address</label>
                            <input class="form-control" name="email" id="email" type="text">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h3 class="box-title">Site Details</h3>
                        <hr/>
                        <div class="form-group col-lg-12">
                            <label>Name</label>
                            <input class="form-control" name="name" id="name" type="text">
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Address line 1</label>
                            <input class="form-control" name="adharcard" id="adharcard">
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Address line 2</label>
                            <input class="form-control" name="adharcard" id="adharcard">
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Address line 3</label>
                            <input class="form-control" name="adharcard" id="adharcard">
                        </div>
                        <div class="form-group col-lg-12">
                            <label>GSTN No</label>
                            <input class="form-control" name="gstnnumber" id="adharcard">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h3 class="box-title">Guard Details</h3>
                        <hr/>
                        <div class="form-group col-lg-6">
                            <label>Guard_type</label>
                            <select class="form-control" id="guard_type" name="guard_type">
                                <option value="Gun Man">Gun Man</option>   
                                <option value="Bouncer">Bouncer</option> 
                                <option value="Watchman">Watchman</option> 
                                <option value="Security Guard">Security Guard</option> 
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Skill Set</label>
                            <select class="form-control" id="skill_set" name="skill_set">
                                <option value="Unskilled">Unskilled</option>   
                                <option value="semi Skilled">Semi Skilled</option>  
                                <option value="Skilled">Skilled</option> 
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group col-lg-4">
                            <label>No of Unskilled</label>
                            <input type="number" class="form-control" name="adharcard" id="adharcard">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>No of Semi-Skilled</label>
                            <input type="number" class="form-control" name="adharcard" id="adharcard">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>No of Skilled</label>
                            <input type="number" class="form-control" name="adharcard" id="adharcard">
                        </div>
                    </div>
                    <div class="form-group">
                        <center>
                            <?php
                            $data3 = array(
                                'type' => 'submit',
                                'class' => 'btn btn-success btn-md',
                                'name' => 'submit',
                                'value' => 'Submit'
                            );
                            echo form_submit($data3);
                            ?>
                            <?php
                            $data4 = array(
                                'type' => 'reset',
                                'class' => 'btn btn-danger btn-md',
                                'name' => 'reset',
                                'value' => 'Reset'
                            );
                            echo form_reset($data4);
                            ?>
                        </center>    
                    </div>
                </div>
                <?php echo form_close(); ?>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<?php include'footer.php'; ?>