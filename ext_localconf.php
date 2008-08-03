<?php
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");


require_once(t3lib_extMgm::extPath('fire_debug').'class.tx_fire_debug.php');

ob_start();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-output'][] = 'EXT:fire_debug/hooks/class.user_tslib_fe.php:user_contentPostProc_hook->contentPostProc'; 

?>
