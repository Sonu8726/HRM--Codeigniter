<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$pagetitle = "List Client";
include'header.php';
?>
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->    
    <section class="content-header">
        <h1>
            Employee
            <small>Vibgyor Security Guards Pvt. Ltd.</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('Admin/index'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('Admin/listClient'); ?>">List Client</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Client Details</h3>
                <div class="box-tools pull-right">
                    <a href="<?php echo base_url('Admin/addClient'); ?>" >
                        <button type="button" class="btn btn-info">
                            <i class="fa fa-plus"></i> Add Client</button>
                    </a>
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
                        <?php if($client > 0) : ?>
                            <?php foreach ($client as $client): ?>
                            <tr>
                                <td><?php echo $client->client_name ?></td>
                                <td><?php echo $client->client_mobile ?></td>
                                <td><?php echo $client->site_name ?></td>
                                <td><?php echo $client->Address_line_1."</br>".$client->Address_line_2."</br>".$client->Address_line_3 ?></td>
                                <td><?php echo $client->client_email ?></td>
                                <td><?php echo $client->no_guards ?></td>
                                <td>
                                   
                                    <form method="DELETE" action="<?php echo base_url('Employee/deleteEmployee/' . $client->id); ?>">
                                        <button onclick="return confirm('Are you sure?');" type="submit" class="btn btn-danger btn-xs"><i class="ion ion-trash-a"></i></button>
                                    </form>
                            </tr>
                           <?php endforeach; ?> 
                        <?php endif; ?>
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

<script>
    $(function () {
        $('#mydata2').DataTable({
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
        })
    })
</script>
<?php
include 'footer.php';
?>





