<?php
	setcookie('language','en', time() +(86400 * 30), "/"); // 86400 = 1 day
	print_r($_COOKIE);