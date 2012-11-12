<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][$_EXTKEY] =
	'EXT:' . $_EXTKEY . '/Classes/Hooks/Tcemain.php:Tx_Rgsmoothgallery_Hooks_Tcemain';
// Tceforms: Rendering of fields
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms.php']['getSingleFieldClass'][$_EXTKEY] =
	'EXT:' . $_EXTKEY . '/Classes/Hooks/Tceforms.php:Tx_Rgsmoothgallery_Hooks_Tceforms';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms.php']['getMainFieldsClass'][$_EXTKEY] =
	'EXT:' . $_EXTKEY . '/Classes/Hooks/Tceforms.php:Tx_Rgsmoothgallery_Hooks_Tceforms';

?>