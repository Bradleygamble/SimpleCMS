1		-	<div class="register_form">
2		-		<b>Register</b> a new account with SimpleCMS!
3		-	</div>
4		-
5		-	<?php echo validation_errors(); ?>
6		-
7		-	<?php echo form_open('/pages/register'); ?>
8		-
9		-		<label for="username">
10		-			<input type="input" name="username" value="Username" onFocus="this.value=''" onBlur="if(this.value == '') { this.value='Username'; }" /> 
11		-
12		-			<br />
13		-		<label for="email">
14		-			<input type="input" name="email" value="Email" onFocus="this.value=''" onBlur="if(this.value == '') { this.value='Email address'; }" />
15		-
16		-			<br />
17		-		<label for="password">
18		-			<input type="password" name="password" value="Password" onFocus="this.value=''" onBlur="if(this.value == '') { this.value='Password'; }" />
19		-
20		-			<br />
21		-
22		-		<input type="submit" value="Register account" />
23		-
24		-	</form>
25		-
26		-	<div class="register_info">
27		-		By creating a new account you agree to our <a href="#">Terms and Conditions</a>
28		-	</div>
