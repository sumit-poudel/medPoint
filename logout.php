<?php
session_start();
session_unset();
setcookie("username", "", time() - 86400 * 30, "/");
echo "<script>window.location.href = '/medpoint';</script>";
