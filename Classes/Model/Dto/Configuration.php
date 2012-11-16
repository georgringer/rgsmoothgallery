<?php
/***************************************************************
 *  Copyright notice
 *  (c) 2012 Georg Ringer <typo3@ringerge.org>
 *  All rights reserved
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Model for configuration
 */
class Tx_Rgsmoothgallery_Model_Dto_Configuration {

	/**
	 * @var string
	 */
	protected $effect = '';

	/**
	 * @var string
	 */
	protected $directionNav = '';

	/**
	 * @var string
	 */
	protected $controlNav = '';

	/**
	 * The final configuration
	 *
	 * @var array
	 */
	protected $configuration = array();

	/**
	 * @param string $configuration
	 */
	public function __construct($configurationAsJson) {
		$this->configuration = array();
		$configuration = json_decode ($configurationAsJson);
		if ($configuration) {
			$configuration = get_object_vars ($configuration);
		}
		if (is_array ($configuration)) {
			$availableProperties = get_class_vars (__CLASS__);

			foreach ($configuration as $singleConfiguration => $value) {
				$shortKey = str_replace ('tx_rgsmoothgallery_option_', '', $singleConfiguration);
				if (isset($availableProperties[$shortKey])) {
					$this->configuration[$shortKey] = $value;
				}
			}
		}
	}

	/**
	 * Render the configuration as option compatible output
	 *
	 * @return string
	 */
	public function render() {
		$out = array();
		foreach ($this->configuration as $key => $value) {
			$out[] = t3lib_div::quoteJSvalue ($key) . ':' . $this->quote ($value);
		}

		return implode (',' . LF, $out);
	}

	/**
	 * Quote the value
	 *
	 * @param $value
	 * @return int|string
	 */
	protected function quote($value) {
		$out = '';
		switch ($value) {
			case 'true':
			case 'TRUE':
				$out = 'true';
				break;
			case 'false':
			case 'FALSE':
				$out = 'false';
				break;
			case (ctype_digit ($value)):
				$out = (int)$value;
				break;
			default:
				$out = t3lib_div::quoteJSvalue ($value);
		}

		return $out;
	}
}

?>