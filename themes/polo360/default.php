<?php
	$this->inc('elements/header.php'); 

	$a = new Area('Contenu');
	$a->display($c);

	$this->inc('elements/footer.php'); 
?>