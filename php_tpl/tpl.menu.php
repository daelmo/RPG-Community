<?php

echo "	
<nav>
	<ul>
		<li class='drop'>
			<a href='#'>Start</a>	
			<div class='dropdownContain'>
				<div class='dropOut'>
					<div class='triangle'></div>
					<ul>
						<a href='./'><li>Home</li></a>
						<a href='./Umfrage/'><li>Umfrage</li></a>
						<li>Statistik</li>
					</ul>
				</div>
			</div>
		</li>
			
		<li class='drop'>
			<a href='#'>RPG</a>		
			<div class='dropdownContain'>
				<div class='dropOut'>
					<div class='triangle'></div>
					<ul>
						<a href='/RPG/RPG_suchen.php'>
						<li>RPG suchen</li></a>
						<li>RPG erstellen</li>
					</ul>
				</div>
			</div>	
		</li>
			
		<li class='drop'>
			<a href='#'>Einstellungen</a>		
			<div class='dropdownContain'>
				<div class='dropOut'>
					<div class='triangle'></div>
					<ul>
						<li>Privatsphäre</li>
						<li>RPG</li>
					</ul>
				</div>
			</div>
		</li>";


	echo "<li class='drop'>
				<a href='#'>Administration</a>
				<div class='dropdownContain'>
					<div class='dropOut'>
						<div class='triangle'></div>
						<ul>
							<li>Umfrage erstellen</li>
							<li>Ernennungen</li>
							<li>Meldungen</li>
							<li>News verwalten</li>
						</ul>
					</div>
				</div>
			</li>"; 
	echo " 				
	</ul>
</nav>";
?>