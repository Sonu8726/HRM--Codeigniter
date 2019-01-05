<?php 
$pagetitle ="Salary";
include'header.php'; ?>
<div class="content-wrapper">   
    <section class="content-header">
        <h1>
            Dashboard
            <small>Vibgyor Security Guards Pvt. Ltd.</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active"><a href="<?php echo base_url('Admin/index');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
    </section>

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
                <table id="mydata2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Client Name</th>
                            <th>Mobile No.</th>
                            <th>Site </th>
                            <th>Site Address</th>
                            <th>Email Address</th>
                            <th>No of Active Guards</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                           
                            <th>Client Name</th>
                            <th>Mobile No.</th>
                            <th>Site </th>
                            <th>Site Address</th>
                            <th>Email Address</th>
                            <th>No of Active Guards</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                </table>

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
