<?php
// Auto-detect language and redirect
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'ar', 0, 2);
if ($lang === 'en') {
    header('Location: en/index.php');
} else {
    header('Location: ar/index.php');
}
exit;
?>
