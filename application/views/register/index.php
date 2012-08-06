	<div class="register_form">
		<b>Register</b> a new account with SimpleCMS!
	</div>

	<?php echo validation_errors(); ?>

	<?php echo form_open('/pages/register'); ?>

		<label for="username">
			<input type="input" name="username" value="Username" onFocus="this.value=''" onBlur="if(this.value == '') { this.value='Username'; }" /> 

			<br />
		<label for="email">
			<input type="input" name="email" value="Email" onFocus="this.value=''" onBlur="if(this.value == '') { this.value='Email address'; }" />

			<br />
		<label for="password">
			<input type="password" name="password" value="Password" onFocus="this.value=''" onBlur="if(this.value == '') { this.value='Password'; }" />

			<br />

		<input type="submit" value="Register account" />

	</form>

	<div class="register_info">
		By creating a new account you agree to our <a href="#">Terms and Conditions</a>
	</div>