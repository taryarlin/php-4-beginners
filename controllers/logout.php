<?php

unset($_SESSION['auth_user']);

setSuccessMessage('Successfully logged out');
redirectTo('login');
