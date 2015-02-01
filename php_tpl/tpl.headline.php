<div>
		<!-- Header -->
	<div id='head'>
		<div>
			<a href='/'><h1> RPG</h1></a>
			<span> <?php if (!empty($_SESSION["ID"])){echo $htmlHeadTpl->replace["name"];;} ?></span>
		</div>
		
		
		 <div id='shortcut'>
		<form method='post' action=''>
			<input type='text' name='email' placeholder='E-Mail'>
			<input type='password' name='pwd' placeholder='Passwort'>
			<input type='submit' name='loginsubmit' value='Go'>
		</form>
		 
	</div>
</div>