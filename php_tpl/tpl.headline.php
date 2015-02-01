<div>
		<!-- Header -->
	<div id='head'>
		<div>
			<a href='/'><h1> RPG</h1></a>
			<span><?php 
				if(isset($_SESSION["UID"])){echo "eingeloggt als " . $site->getUser()->getName();} 
				else{ echo "Du bist nicht eingeloggt.";}
				?></span>
		</div>
		
	<?php if($site->getUser() == NULL){	
	echo "
	 <div id='shortcut'>
		<form method='post' action='index.php'>
			<input type='text' name='email' placeholder='E-Mail'>
			<input type='password' name='pwd' placeholder='Passwort'>
			<input type='submit' name='loginsubmit' value='Go'>
		</form> 
	</div>";
	} else {
	// Anzahl neuer RPG-Nachrichten
				//bestimme anzahl aller rpgs in denen beiträge existieren die nach dem letzten rpg-übersicht besuch geschrieben worden sind
				$result = $site->getDB()->execute("Select COUNT(DISTINCT rpgID) from rpgbeitrag where time>='".$site->getUser()->last_rpg . "' ");
				$rpganz = mysqli_fetch_row($result);
				$rpganz = $rpganz[0];

				//Bestimm Anzahl an Freundschaftsanfragen
				$result = $site->getDB()->execute("Select user1ID from relation where user2ID='" . $site->getUser()->getID() . "' and relation=1");
				$freanz = mysqli_num_rows($result);

				//Bestimme Anzahl an Absender der Nachrichten nach letzten mal post anschauen
				$result = $site->getDB()->execute("Select COUNT(DISTINCT user1ID) from post where time>='". $site->getUser()->last_post ."' and user2ID='" . $site->getUser()->getID() . "' and gelesen=0 ");
				$postanz = mysqli_fetch_row($result);
				$postanz = $postanz[0];

				//Schreibe Shortcut
				echo "
		<div id='shortcut'>
			<form action='' method='post'>
				<a href='/RPG/index.php'>
					<img title='Meine RPG' src='/img/icon/rpg-white.png' alt='Meine RPG' />
					";
				if ($rpganz > 0) {
					echo "<div>$rpganz</div>";
				}
				echo " 
				</a> 
				<a href='/Post/index.php'>
					<img title='Postfach' src='/img/icon/post-white.png' alt='Postfach'/>";
				if ($postanz > 0)
					echo "<div>$postanz</div>";
				echo " 
				</a> 
				<a href='/Freunde/index.php'>
					<img title='Freunde' src='/img/icon/freund-white.png' alt='Freunde'/>";
				if ($freanz > 0) {
					echo "<div>$freanz</div>";
				}
				echo " 
				</a> 
				<button name='logout' title='Logout' type='submit' value='' style='cursor: pointer; background-color: transparent; border: none;'>
					<img title='Logout' src='/img/icon/logout-white.png'>
				</button>
			</form>
		</div>";

	}?>
	
	
</div>