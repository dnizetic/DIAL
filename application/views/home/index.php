<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-home fa-fw "></i> 
            Homepage
            <span>> 
                Login / Register
            </span>
        </h1>
    </div>
</div>

<section id="widget-grid">
    <div class="row">
        <article class="col-sm-12 col-md-12 col-lg-6 sortable-grid ui-sortable">


            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" role="widget">
                <!-- widget options:
                usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
    
                data-widget-colorbutton="false"
                data-widget-editbutton="false"
                data-widget-togglebutton="false"
                data-widget-deletebutton="false"
                data-widget-fullscreenbutton="false"
                data-widget-custombutton="false"
                data-widget-collapsed="true"
                data-widget-sortable="false"
    
                -->
                <header role="heading"><div class="jarviswidget-ctrls" role="menu">   
                        <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Fullscreen"><i class="fa fa-expand "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-delete-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Delete"><i class="fa fa-times"></i></a></div>
                    <span class="widget-icon"> <i class="fa fa-eye"></i> </span>
                    <h2>User Login</h2>

                    <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                </header>

                <!-- widget div-->
                <div role="content">

                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->

                    </div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body">

                        <?php echo form_open('/auth/login'); ?>

                        <fieldset>
                            <input name="authenticity_token" type="hidden">
                            <div class="form-group">
                                <label>Login or email</label>
                                <input class="form-control" type="text" name="login" value="" id="login" maxlength="80" size="30">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" value="" id="password" size="30">
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" value="1" id="remember">
                                        Remember me </label>
                                </div>
                            </div>
                            <?php $login_message = $this->message->display(); ?>
                            <?php if ($login_message): ?>
                                <div class="form-group">
                                    <div class="alert alert-danger fade in">
                                        <button class="close" data-dismiss="alert">
                                            ×
                                        </button>
                                        <i class="fa-fw fa fa-times"></i>
                                        <strong>Error!</strong> <span class=""><?php echo $login_message; ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </fieldset>
                        <div class="form-actions">
                            <button class="btn btn-primary btn-lg" type="submit">
                                <i class="fa fa-save"></i>
                                Login
                            </button>
                        </div>
                        <?php //echo form_hidden('user_type', 1); ?>
                        <?php echo form_close(); ?>

                    </div>
                    <!-- end widget content -->

                </div>
                <!-- end widget div -->

            </div>
            <!-- end widget -->


        </article>


        <article class="col-sm-12 col-md-12 col-lg-6 sortable-grid ui-sortable">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget" id="wid-id-3" data-widget-colorbutton="false" data-widget-editbutton="false" role="widget">
                <!-- widget options:
                usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
    
                data-widget-colorbutton="false"
                data-widget-editbutton="false"
                data-widget-togglebutton="false"
                data-widget-deletebutton="false"
                data-widget-fullscreenbutton="false"
                data-widget-custombutton="false"
                data-widget-collapsed="true"
                data-widget-sortable="false"
    
                -->
                <header role="heading"><div class="jarviswidget-ctrls" role="menu">   <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Fullscreen"><i class="fa fa-expand "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-delete-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Delete"><i class="fa fa-times"></i></a></div>
                    <span class="widget-icon"> <i class="fa fa-eye"></i> </span>
                    <h2>Register</h2>

                    <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

                <!-- widget div-->
                <div role="content">

                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->

                    </div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body">

                        <form>

                            <fieldset>
                                <input name="authenticity_token" type="hidden">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input class="form-control" placeholder="Text field" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input class="form-control" placeholder="Text field" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" placeholder="Text field" type="text">
                                </div>
                                ...
                            </fieldset>
                            <div class="form-actions">
                                <div class="btn btn-primary btn-lg">
                                    <i class="fa fa-save"></i>
                                    Register
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- end widget content -->

                </div>
                <!-- end widget div -->

            </div>
            <!-- end widget -->


        </article>
    </div>

</section>


<div id="admin_dialog" title="Admin login" style="display: none">

    <div class="hr hr-12 hr-double"></div>

    <?php echo form_open('/auth/ajax_login'); ?>

    <fieldset>
        <div class="form-group">
            <label>Login or email</label>
            <input class="form-control" type="text" name="login" value="" maxlength="80" size="30">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" name="password" value="" size="30">
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" value="1">
                    Remember me </label>
            </div>
        </div>
        <div class="form-group admin_login_errors" style="display: none">
            <div class="alert alert-danger fade in">
                <button class="close" data-dismiss="alert">
                    ×
                </button>
                <i class="fa-fw fa fa-times"></i>
                <strong>Error!</strong> <span class="admin_error_message"></span>
            </div>
        </div>
    </fieldset>

    <?php echo form_hidden('user_type', 2); ?>
    <?php echo form_close(); ?>

</div>


<script>

    $(document).ready(function () {

        $("#admin_login").click(function () {
            $("#admin_dialog").dialog('open');
        });

        var dialog = $("#admin_dialog").dialog({
            autoOpen: false,
            width: 400,
            resizable: false,
            draggable: false,
            modal: true,
            buttons: [{
                    html: "<i class='fa fa-times'></i>&nbsp; Close",
                    "class": "btn btn-default",
                    click: function () {
                        $(this).dialog("close");

                    }
                }, {

                    html: "<i class='fa fa-save'></i>&nbsp; Login",
                    "class": "btn admin_login_btn btn-default",
                    click: function () {

                        $('.admin_login_errors').hide();
                        $.ajax({
                            type: "POST",
                            data: $('#admin_dialog form').serialize(),
                            url: "/auth/ajax_login",
                            dataType: 'json',
                            success: function (response) {
                                if (response.status == 0) {
                                    $('.admin_login_errors').show();
                                    $('.admin_error_message').text(response.errors_msg);
                                }
                                if (response.status == 1) {
                                    window.location.href = '/admin/index';
                                }
                            }
                        });
                    }
                }]
        });


    });


</script>


<!--<?php if ($this->is_logged_in): ?>
    <?php if ($username): ?>
                                                                                                                                                                                                                                                                                        Hi, <strong><?php echo $username; ?></strong>! <br/>
    <?php endif; ?>
<?php endif; ?>

Welcome to the index page.

<br/><br/>

<?php if ($this->is_admin): ?>
    <?php echo anchor('/admin', 'Admin dashboard'); ?> <br/>
<?php endif; ?>


<?php if ($this->is_user): ?>
    <?php echo anchor('/user', 'User dashboard'); ?> <br/>
<?php endif; ?>



<?php if ($this->is_logged_in): ?>
    <?php echo anchor('/auth/logout/', 'Logout'); ?> <br/>
<?php else: ?>
    <?php echo anchor('/auth/login/', 'Login'); ?> <br/>
    <?php echo anchor('/auth/login/', 'Admin login'); ?> <br/>
    <?php echo anchor('/auth/register/', 'Register'); ?> <br/>
<?php endif; ?> -->
