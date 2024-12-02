<?php

	setcookie('flag', true, time()-1, '/');
	header('location: ../../TOCS/index.html');

?>