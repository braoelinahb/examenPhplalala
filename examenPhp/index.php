	<?php
		include 'model/mesFunctionsSQL.php';
		include 'model/mesFunctionsTable.php';

		$headers = getHeaderTable();
		$users = getAllUsers();
		afficherTableau($users, $headers);
	?>
	<a href=formulaireUtilisateur.php?id=0 >Creer un user</a> 



