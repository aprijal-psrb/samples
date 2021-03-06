<?php $this->output('header');?>

<div class="container">
    <div class="row">
        <div class="hero-unit span5">
            <h1>Hello, world!</h1>
            <p>This is a Twitter like service to run as a Panada sample application, it called Twlike. It provide micro bloging basic feature such as registration for new user, posting a short content, personal profile, follow and unfollow other user and home timeline.</p>
            <p><a href="https://github.com/panada/samples/tree/master/twlike" target="_blank" class="btn btn-primary btn-large">Download full source code</a></p>
            
        </div>
        <form class="span3 well" action="" method="post">
            
            <div class="control-group <?php echo $loginStyle;?>">
            <label>Username:</label>
            <input type="text" name="username" id="username" class="span3">
            <?php echo $this->formValidation->errorMessages('username', '<span class="help-inline">', '</span>');?>
            
            <label>Password:</label>
            <input type="password" name="password" class="span3">
            <?php echo $this->formValidation->errorMessages('password', '<span class="help-inline">', '</span>');?>
            <input type="hidden" name="signature" value="<?php echo $signature;?>">
            </div>
            <input type="submit" class="btn" value="Sign In" name="submit">
        </form>
        <script type="text/javascript">document.getElementById('username').focus();</script>
        
        <form class="span3 well" action="" method="post">
            <fieldset>
                <legend>Register</legend>
                <div class="control-group <?php echo $loginStyleRegister;?>">
                <label>Username:</label>
                <input type="text" name="rUsername" class="span3" value="<?php echo $this->formValidation->value('rUsername');?>">
                <?php echo $this->formValidation->errorMessages('rUsername', '<span class="help-inline">', '</span>');?>
                
                <label>Password:</label>
                <input type="password" name="rPassword" class="span3" value="<?php echo $this->formValidation->value('rPassword');?>">
                <?php echo $this->formValidation->errorMessages('rPassword', '<span class="help-inline">', '</span>');?>
                
                <input type="hidden" name="signature" value="<?php echo $signature;?>">
                </div>
                <input type="submit" class="btn btn-primary" value="Submit" name="register">
            </fieldset>
        </form>
    </div>

<?php $this->output('footer');?>