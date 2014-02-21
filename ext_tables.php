<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

/***************
 * Default TypoScript
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Rendering/Nivo', 'rgsmoothgallery Rendering Nivo');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Rendering/Flexslider', 'rgsmoothgallery Rendering Flexslider');


/***************
 * Add fields to TCA
 */
$tempColumns = Array(
	'tx_rgsmoothgallery_rgsg' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_rgsg',
		'config' => array(
			'type' => 'check',
		)
	),
	'tx_rgsmoothgallery_configuration' => array(
		'label' => 'config',
		'config' => array(
			'type' => 'passthrough',
		)
	),
	'tx_rgsmoothgallery_option_directionNav' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_directionNav',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:general.true', 'true'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:general.false', 'false')
			),
		)
	),
	'tx_rgsmoothgallery_option_controlNav' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_controlNav',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:general.true', 'true'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:general.false', 'false')
			),
		)
	),
	'tx_rgsmoothgallery_option_effect' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_effect',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_effect.fold', 'fold'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_effect.fade', 'fade'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_effect.sliceDownRight', 'sliceDownRight'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_effect.sliceDownLeft', 'sliceDownLeft'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_effect.sliceUpRight', 'sliceUpRight'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_effect.sliceUpLeft', 'sliceUpLeft'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_effect.sliceUpDown', 'sliceUpDown'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_effect.sliceUpDownLeft', 'sliceUpDownLeft'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_effect.boxRandom', 'boxRandom'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_effect.boxRain', 'boxRain'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_effect.boxRainReverse', 'boxRainReverse'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_effect.boxRainGrow', 'boxRainGrow'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_effect.boxRainGrowReverse', 'boxRainGrowReverse'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_effect.random', 'random'),
			),
		)
	),
);

$GLOBALS['TCA']['tt_content']['palettes']['rgsg'] = array(
	'showitem' => $fields,
	'canNotCollapse' => FALSE
);

$settings = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
$fields = 'tx_rgsmoothgallery_rgsg,tx_rgsmoothgallery_configuration,';
if (is_array($settings) && $settings['showConfigurationFields'] == 1) {
	$fields .= '--linebreak--,tx_rgsmoothgallery_option_effect,' .
		'--linebreak--,tx_rgsmoothgallery_option_directionNav,tx_rgsmoothgallery_option_controlNav';
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', $fields, 'textpic,image', 'after:image_zoom');
