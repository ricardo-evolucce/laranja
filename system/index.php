<?php
session_start();
require 'security/init.php';
if (isLoggedIn()):
	header('Location: inicio.php');else: header('Location: login.html'); endif; ?>
 
    </body>
</html>