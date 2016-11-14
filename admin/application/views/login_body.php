<div class="message warning">
<div class="inset">
	<div class="login-head">
		<h1>Login Form</h1>
		 <div class="alert-close"> </div>
	</div>
		<?php echo form_open('Admin_controller/login_process/');?>
			<li>
				<input name="email" type="text" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}"><a href="#" class=" icon user"></a>
			</li>
				<div class="clear"> </div>
			<li>
				<input name="password" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"> <a href="#" class="icon lock"></a>
			</li>
			<div class="clear"> </div>
			<div class="submit">
				<input type="submit" onclick="myFunction()" value="Sign in" >
				<h4><a href="#">Lost your Password ?</a></h4>
						  <div class="clear">  </div>
			</div>

		</form>
		</div>
	</div>
	</div>
	<div class="clear"> </div>
<!--- footer --->
<div class="footer">
	<p>Template by <a href="http://w3layouts.com">w3layouts</a></p>
</div>
</body>
</html>
