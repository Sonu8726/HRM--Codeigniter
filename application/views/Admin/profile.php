<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$pagetitle = "Profile";
include'header.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->    
    <section class="content-header">
        <h1>
            Profile
            <small>Vibgyor Security Guards Pvt. Ltd.</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('Admin/index'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url('Admin/profile'); ?>"></a> Profile</li>

        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">User Details</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="preview" style="display: none;">
                            <img src="">
                        </div>
                        <?php echo form_open_multipart('Admin/uploadImage'); ?> 
                        <input type="file" name="image" size="20" />
                        <input type="submit" class="upload-image" value="upload" /> 
                        </form> 
                    </div>
                    <div class="col-lg-9">
                        <?php echo form_open('Admin/profile_data', 'class="form" id="profile_data" method="POST"'); ?>
                        <div class="form-group">
                            <?php
                            $data = array(
                                'type' => 'text',
                                'name' => 'name',
                                'id' => 'name',
                                'class' => 'form-control',
                                'placeholder' => $datax->name
                            );
                            echo form_input($data);
                            ?>
                        </div>  
                        <div class="form-group">
                            <?php
                            $data = array(
                                'type' => 'text',
                                'name' => 'username',
                                'id' => 'username',
                                'class' => 'form-control',
                                'placeholder' => $datax->username
                            );
                            echo form_input($data);
                            ?>
                        </div> 
                        <div class="form-group">
                            <?php
                            $data = array(
                                'type' => 'email',
                                'name' => 'email',
                                'id' => 'email',
                                'class' => 'form-control',
                                'placeholder' => $datax->email
                            );
                            echo form_input($data);
                            ?>
                        </div> 
                        <div class="form-group">
                            <?php
                            $data = array(
                                'type' => 'text',
                                'name' => 'userid',
                                'id' => 'userid',
                                'class' => 'form-control',
                                'placeholder' => $datax->userid
                            );
                            echo form_input($data);
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
                        <?php echo form_close(); ?>
                    </div>
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
       <script type="text/javascript">

      $("body").on("click",".upload-image",function(e){

       $(this).parents("form").ajaxForm(options);

      });


     var options = { 

       complete: function(response) 

       {

         if($.isEmptyObject(response.responseJSON.error)){

            alert('Image Upload Successfully.');

            $(".preview").css("display","block");

            $(".preview").find("img").attr("src","/img/"+response.responseJSON.success);

         }else{

            alert('Image Upload Error.');

         }

       }

     };


   </script>
</div>
<?php
include 'footer.php';
?>

