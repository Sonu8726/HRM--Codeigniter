<?php
foreach ($view as $row):  
$pagetitle = $row->guard_name;
include'header.php'; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <h3><?php if ($error = $this->session->flashdata('guard_detail')): ?>
            <div class="alert alert-Success">
                <div role="alert">
                    <strong>Success !</strong><?php echo $error; ?>
                </div>
            </div>
        <?php endif; ?></h3>  

    <section class="content-header">
        <h1>
            Dashboard
            <small>Vibgyor Security Guards Pvt. Ltd.</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active"><a href="<?php echo base_url('Admin/index'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
                                                                                         
            <div class="box-header with-border">
                <h3 class="box-title"><strong><?=$row->guard_name; echo ' ';?></strong>  Details</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">


            </div>
            <!-- /.box-body -->
            <?php endforeach ?>
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