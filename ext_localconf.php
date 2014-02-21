<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][$_EXTKEY] =
	'EXT:' . $_EXTKEY . '/Classes/Hooks/DataHandler.php:GeorgRinger\\Rgsmoothgallery\\Hooks\\DataHandler';
// Tceforms: Rendering of fields
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms.php']['getSingleFieldClass'][$_EXTKEY] =
	'EXT:' . $_EXTKEY . '/Classes/Hooks/FormEngine.php:GeorgRinger\\Rgsmoothgallery\\Hooks\\FormEngine';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms.php']['getMainFieldsClass'][$_EXTKEY] =
	'EXT:' . $_EXTKEY . '/Classes/Hooks/FormEngine.php:GeorgRinger\\Rgsmoothgallery\\Hooks\\FormEngine';
