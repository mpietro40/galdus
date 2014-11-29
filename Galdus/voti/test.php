<?php

unset($_COOKIE['verify']);
// timeout in seconds
$timeout = (TIMEOUT_MINUTES == 0 ? 0 : time()-10 + TIMEOUT_MINUTES * 60);
setcookie("verify", '', $timeout, '/');
?>
DONE