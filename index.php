<?php
	require_once('lib/smtemplate.php');
	$data = array
	(
		'receiver' => 'xuechenwei',
		'date' => time()
	);

	$tpl = new SMTemplate();
	$tpl->render('home',$data);
 ?>