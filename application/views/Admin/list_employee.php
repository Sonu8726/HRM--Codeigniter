<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$pagetitle = "List Employees";
include'header.php';
?>

<div class="content-wrapper">
    <?php if ($error = $this->session->flashdata('Success')): ?>
        <div class="alert alert-success">
            <strong>Success !</strong><?php echo $error; ?>
        </div>
    <?php endif; ?>
    <?php if ($error = $this->session->flashdata('Delete')): ?>
        <div class="alert alert-success">
            <strong>Success ! </strong><?php echo "" . $error; ?>
        </div>
    <?php endif; ?>

    <!-- Content Header (Page header) -->    
    <section class="content-header">
        <h1>
            Employee
            <small>Vibgyor Security Guards Pvt. Ltd.</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('Admin/index'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('Admin/listEmployee'); ?>">List Employee</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Employee Details</h3>
                <div class="box-tools pull-right">
                    <a href="<?php echo base_url('Admin/addEmployee'); ?>" >
                        <button type="button" class="btn btn-info">
                            <i class="fa fa-plus"></i> Add Employee</button>
                    </a>
                </div>
            </div>
            <div class="box-body">
                <table id="mydata" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Mobile No.</th>
                            <th>Alternate Mobile No</th>
                            <th>present Address</th>
                            <th>Adhar Card</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($guard > 0): ?>
                            <?php foreach ($guard as $guards): ?>
                                <tr>
                                    <td><?php echo $guards->guard_name ?></td>
                                    <td><?php echo $guards->guard_number ?></td>
                                    <td><?php echo $guards->alternate_number ?></td>
                                    <td><?php echo $guards->present_address ?></td>
                                    <td><?php echo $guards->adhar_card ?></td>
                                    <td>
                                        <a href="<?php echo base_url('Employee/viewEmployee/' . $guards->id); ?>" class="btn btn-primary"><i class="ion ion-eye" title="View"></i></a>
                                        <a href="<?php echo base_url('Admin/manageEmployee/' . $guards->id); ?>" class="btn btn-info"><i class="fa fa-edit" title="Edit"></i></a>
                                        <a href="<?php echo base_url('Employee/deleteEmployee/' . $guards->id); ?>" class="btn btn-danger delete" onclick ="return confirm('Are you sure?')"><i class="fa fa-trash-o" title="Delete"></i></a>
                                    </td>    
                                </tr>      
                            <?php endforeach; ?> 
                        <?php endif; ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Mobile No.</th>
                            <th>Alternate Mobile No</th>
                            <th>present Address</th>
                            <th>Adhar Card</th>
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

<script>
    $(function () {
        $('#mydata').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false,
            dom: 'Bfrtip',
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 rows', '25 rows', '50 rows', 'Show all']
            ],
            buttons: [
                'pageLength',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
                'print'
            ]
        });
    });
</script>
<?php
include 'footer.php';





