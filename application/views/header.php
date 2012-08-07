<html>
	<header>
		<title>{website_name} {website_title}</title>
		<link rel="stylesheet" type="text/css" href="/assets/styles/style.css" />
	</header>

	<body>
		<div class="navigation">
			<div class="loginbar">Login</div>
			<div class="login">
				<form action="" method="post">
					<label for="username" />
						<input class="usernamebox" type="input" name="username" value="username" OnFocus="this.value='';" OnBlur="if(this.value=='') { this.value='username'; }" />
					<label for="password" />
						<input class="passbox" type="password" name="password" value="password" OnFocus="this.value='';" OnBlur="if(this.value=='') { this.value='password'; }" />

						<input class="loginbtn" type="submit" value="Log in" />
				</form>
			</div>
			<a href="/pages/home"><div class="link {active_link}">homepage</div></a>
			<a href="/pages/register"><div class="link {active_link}">register</div></a>
		</div>

		<div class="content">
