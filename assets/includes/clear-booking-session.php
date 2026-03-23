<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* Clear all session data */
$_SESSION = [];

/* Remove session cookie */
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params['path'],
        $params['domain'],
        $params['secure'],
        $params['httponly']
    );
}

/* Destroy session */
session_destroy();

/* Start a brand new session */
session_start();
session_regenerate_id(true);

/* Redirect */
$redirect = $_GET['redirect'] ?? '/';

if (is_numeric($redirect)) {
    require_once dirname(__DIR__, 2) . '/config.core.php';
    require_once MODX_CORE_PATH . 'model/modx/modx.class.php';

    $modx = new modX();
    $modx->initialize('web');
    $redirect = $modx->makeUrl((int)$redirect, '', '', 'full');
}

header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Location: ' . $redirect);

exit;