<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

/***************
 * Default TypoScript
 */
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Rendering', 'rgsmoothgallery Rendering');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Inclusion', 'rgsmoothgallery Inclusion');


/***************
 * Add fields to TCA
 */
t3lib_div::loadTCA ('tt_content');
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
		'config' => array(
			'type' => 'check',
		)
	),
	'tx_rgsmoothgallery_option_controlNav' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_controlNav',
		'config' => array(
			'type' => 'check',
		)
	),
	'tx_rgsmoothgallery_option_theme' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_theme',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_theme.default' , 'default'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_theme.dark', 'dark'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_theme.light', 'light'),
				array('LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_theme.bar', 'bar'),
			),
		)
	),
	'tx_rgsmoothgallery_option_effect' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery_option_effect',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('fold', 'fold'),
				array('fade', 'fade'),
				array('sliceDownRight', 'sliceDownRight'),
				array('sliceDownLeft', 'sliceDownLeft'),
				array('sliceUpRight', 'sliceUpRight'),
				array('sliceUpLeft', 'sliceUpLeft'),
				array('sliceUpDown', 'sliceUpDown'),
				array('sliceUpDownLeft', 'sliceUpDownLeft'),
				array('boxRandom', 'boxRandom'),
				array('boxRain', 'boxRain'),
				array('boxRainReverse', 'boxRainReverse'),
				array('boxRainGrow', 'boxRainGrow'),
				array('boxRainGrowReverse', 'boxRainGrowReverse'),
				array('random', 'random'),
			),
		)
	),
);

t3lib_div::loadTCA ('tt_content');
t3lib_extMgm::addTCAcolumns ('tt_content', $tempColumns, 1);

$GLOBALS['TCA']['tt_content']['palettes']['rgsg'] = array(
	'showitem' => 'tx_rgsmoothgallery_rgsg,tx_rgsmoothgallery_configuration,' .
		'--linebreak--,tx_rgsmoothgallery_option_theme,tx_rgsmoothgallery_option_effect,' .
		'--linebreak--,tx_rgsmoothgallery_option_directionNav,tx_rgsmoothgallery_option_controlNav,',
	'canNotCollapse' => FALSE
);

$GLOBALS['TCA']['tt_content']['palettes']['5']['showitem'] .= ',tx_rgsmoothgallery_rgsg';
$search = '--palette--;LLL:EXT:cms/locallang_ttc.xml:palette.imageblock;imageblock,';
$replace = $search . ',--palette--;LLL:EXT:rgsmoothgallery/Resources/Private/Language/locallang_db.xml:tt_content.tx_rgsmoothgallery;rgsg,';

$GLOBALS['TCA']['tt_content']['types']['textpic']['showitem'] = str_replace ($search, $replace, $GLOBALS['TCA']['tt_content']['types']['textpic']['showitem']);
$GLOBALS['TCA']['tt_content']['types']['image']['showitem'] = str_replace ($search, $replace, $GLOBALS['TCA']['tt_content']['types']['textpic']['showitem']);

?>