<?php 
$pagetitle ="Manage Employees";
include'header.php'; ?>

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
            <li class="active"><a href="<?php echo base_url('Admin/manageEmployee'); ?>">Manage Employee</a></li>

        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <?php foreach ($manage as $row): ?>  
            <div class="box-header with-border">
                <h3 class="box-title">Manage Employee</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                
                <?php echo form_open('Employee/updateEmployee/'.$row->id, 'class="form" name="addEmployee" id="login-form" method="POST" onsubmit="return validateForm()"') ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group col-lg-12">
                            <label>Name</label>
                            <input class="form-control" name="name" id="name" value="<?=$row->guard_name;?>" type="text">
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Mobile No 1</label>
                            <input class="form-control" name="mobileno" id="mobileno" value="<?=$row->guard_number;?>" type="text">
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Mobile No 2</label>
                            <input class="form-control" name="alternatemobileno" id="alternatemobileno" value="<?=$row->alternate_number;?>" type="text">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group col-lg-6">
                            <label>Present Address</label>
                            <textarea name="present_address" class="form-control" cols="3" rows="3"><?=$row->present_address;?></textarea>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Permanent Address</label>
                            <textarea name="permanent_address" class="form-control" cols="3" rows="3"><?=$row->permanent_address;?></textarea>
                        </div>  
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group col-lg-12">
                            <label>Adhar Card</label>
                            <input class="form-control" name="adharcard" id="adharcard" value="<?=$row->adhar_card;?>">
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Guard_type</label>
                            <select class="form-control" id="guard_type" name="guard_type">
                                <option value="<?=$row->guard_type;?>" selected><?=$row->guard_type;?>(Currently)</option> 
                                <option value="Gun Man">Gun Man</option>   
                                <option value="Bouncer">Bouncer</option> 
                                <option value="Watchman">Watchman</option> 
                                <option value="Security Guard">Security Guard</option> 
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Skill Set</label>
                            <select class="form-control" id="skill_set" name="skill_set">
                                <option value="<?=$row->skill_set;?>" selected><?=$row->skill_set;?>(Currently)</option>
                                <option value="Unskilled">Unskilled</option>   
                                <option value="semi Skilled">Semi Skilled</option>  
                                <option value="Skilled">Skilled</option> 
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">   
                        <div class="form-group col-lg-6">
                            <label>Gender</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="<?=$row->gender;?>" selected><?=$row->gender;?></option>
                                <option value="Male">Male</option>   
                                <option value="Female">female</option>   
                            </select>
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
            <?php endforeach ?>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
    <script type="text/javascript">
        $('#submit').submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: 'Your path',
                type: "post",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function (data) {
                    alert(data);
                }
            });
        });
    </script>
    <script>
        function validateForm() {
            var x = document.forms["addEmployee"]["name"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
            var mob = /^[1-9]{1}[0-9]{9}$/;
            var Mobile = document.forms["addEmployee"]["mobileno"].value;
            if (mob.test(Mobile) == false) {
                alert("Please enter valid mobile number.");
                return false;
            }
            var altMobile = document.forms["addEmployee"]["alternatemobileno"].value;
            if (mob.test(altMobile) == false) {
                alert("Please enter valid Alternate mobile number.");
                return false;
            }
            var adhar = /^[0-9]{12}$/;
            var AAdhar = document.forms["addEmployee"]["adharcard"].value;
            if (adhar.test(AAdhar) == false) {
                alert("Please enter valid Adhar number.");
                return false;
            }
        }
    </script>
</div>
<?php include'footer.php'; ?>