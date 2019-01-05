<?php $pagetitle = "Change Password"; include'header.php'; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Vibgyor Security Guards Pvt. Ltd.</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('Admin/index'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Change Password</li>
        </ol>
    </section>
<h3><?php if($error = $this->session->flashdata('password')):?>
                       <div class="alert alert-success">
                       <div role="alert">
                       <strong>Success !</strong><?php echo $error;?>
                       </div>
                       </div>
                       <?php endif;?></h3>
    <h3><?php if($error = $this->session->flashdata('passwordfail')):?>
                       <div class="alert alert-danger">
                       <div role="alert">
                       <strong>Error!</strong><?php echo $error;?>
                       </div>
                       </div>
                       <?php endif;?></h3>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Client Details</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <?php echo form_open('Admin/changePassword', 'class="form" id="updatePassword" method="POST"'); ?>
                <div class="form-group">
                    <?php
                    $data = array(
                        'type' => 'password',
                        'name' => 'password1',
                        'id' => 'password1',
                        'class' => 'form-control',
                        'placeholder' => 'Password'
                    );
                    echo form_input($data);
                    ?>

                </div>
                <div class="form-group">
                    <?php
                    $data2 = array(
                        'type' => 'password',
                        'name' => 'password2',
                        'id' => 'password2',
                        'class' => 'form-control',
                        'placeholder' => 'Confirm Password'
                    );
                    echo form_input($data2);
                    ?>
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
                    </center>    
                </div>
                <?php echo form_close(); ?>
            </div>      
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


