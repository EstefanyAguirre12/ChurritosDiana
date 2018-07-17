<?php
$link = new \PDO(   'mysql:host=localhost;dbname=barolo;charset=utf8mb4',
										'root',
										'',
										array(
												\PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
												\PDO::ATTR_PERSISTENT => false
										)
								);
?>
