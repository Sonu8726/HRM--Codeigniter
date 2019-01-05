<link href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/styles.css" rel="stylesheet" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<link href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<body style="background: linear-gradient(to bottom left, #00ffcc 2%, #3366ff); height: 100%; width: 95%">
    <div id="login">
        <br/>
        <br/>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-1"></div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-10" style="background-color: whitesmoke">
                <center><h3><i class="fa fa-3x fa-user-circle-o"></i></h3> </center>
                <div class="login-box col-md-12 col-lg-12">
                    <?php echo form_open('Login/login_check', 'class="form" id="login-form" method="POST"'); ?>
                    <?php echo form_error('username'); ?>
                    <?php if ($error = $this->session->flashdata('LoginFailed')): ?>
                        <div class="alert alert-danger">
                            <div role="alert">
                                <strong>Error!</strong><?php echo $error; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($error = $this->session->flashdata('Logout')): ?>
                        <div class="alert alert-Success">
                            <div role="alert">
                                <strong>Success !</strong><?php echo $error; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <?php
                        $data = array(
                            'type' => 'text',
                            'name' => 'username',
                            'id' => 'username',
                            'class' => 'form-control',
                            'placeholder' => 'User Name'
                        );

                        echo form_input($data);
                        ?>

                    </div>
                    <?php echo form_error('password'); ?>
                    <div class="form-group">
                        <?php
                        $data2 = array(
                            'type' => 'password',
                            'name' => 'password',
                            'id' => 'password',
                            'class' => 'form-control',
                            'placeholder' => 'Password'
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
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-1"></div>     
        </div>
    </div>
    <script>
        window.setTimeout(function () {
            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 2000);
    </script>
</body>