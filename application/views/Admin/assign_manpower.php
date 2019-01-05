<?php $pagetitle = "Assign";
include'header.php'; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->  

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
                <h3 class="box-title">Client Details</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <form action="Client/Assign_client">
                        <div class="col-lg-6">
                                <?php foreach ($guard as $guards): ?>
                                <select class="form-control" id="guard" name="guard">
                                    <option ></option>
                                    <option value="<?php echo $guards->guard_name; ?>"><?php echo $guards->guard_name ?></option>
                                </select>
                                <?php endforeach; ?>   
                        </div>
                        <div class="col-lg-6">
                                <?php foreach ($client as $client): ?>
                                <select class="form-control" id="client" name="client">
                                    <option ></option>
                                    <option value="<?php echo $client->client_name ?>"><?php echo $client->client_name ?></option>
                                </select>
                                <?php endforeach; ?>   
                        </div>
                        <br/>
                        
                        <div class="col-lg-12">
                            <center>
                               <input class="btn btn-info" type="submit" value="Submit" name="submit" /> 
                            </center>
                        </div>  
                    </form>
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