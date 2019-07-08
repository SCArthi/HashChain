
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">HC</h1>

            </div>
            <h3>Welcome to User Login Page</h3>
            
            <!-- <form class="m-t" role="form" id="form" action="<?php echo base_url('Dashboard/userdashboard');?>"> -->

            <?php echo form_open('Userlogin/userlogin'); ?>
                <div id="pwd-container3">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        <span class="text-danger"><?php echo form_error("username"); ?></span>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pwd" class="form-control example3" id="password3" placeholder="Password">
                        <span class="text-danger"><?php echo form_error("pwd"); ?></span>
                    </div>
                    <div class="form-group">
                        <div class="pwstrength_viewport_progress2"></div>
                    </div>
                    <button type="submit" class="btn btn-primary block full-width m-b" name="login">Login</button>

                    <a href="<?php echo base_url('Password/forgotPassword');?>"><small>Forgot password?</small></a>
                </div>
            </form>
           
        </div>
    </div>
