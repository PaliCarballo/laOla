<?php
session_start();
session_destroy();

header('location:registro.php');
