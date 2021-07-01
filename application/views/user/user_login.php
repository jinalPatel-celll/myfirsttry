<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action='<?php echo base_url();?>user/userlogin' method='post'>
    <div >
        <input type="text"  placeholder="Enter Email" name="txt_user_email" id="txt_admin_name">
    </div>
    <div >
        <input type="password"  placeholder="Enter Password" name="txt_user_password" id="txt_admin_password">
    </div>
    <div >
        <input type='Submit' value='Login' />
    </div>     
                           
</form>   
<div>
	<a href='<?php echo base_url();?>user/user_register'>Do't have Account...</a>

</div>

</body>
</html>