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
 * Hook into tceforms

 */
class Tx_Rgsmoothgallery_Hooks_Tceforms {

	public function getSingleField_preProcess ($table, $field, &$row, $altName, $palette, $extra, $pal, $parentObject) {
		if ($table == 'tt_content') {
			$values = get_object_vars (json_decode ($row['tx_rgsmoothgallery_configuration']));
			if (is_array ($values)) {
				foreach ($values as $key => $value) {
					if (t3lib_div::isFirstPartOfStr ($key, 'tx_rgsmoothgallery_option')) {
						$row[$key] = $value;
					}
				}
			}
		}
	}

	public function getSingleField_postProcess ($table, $field, $row, &$out, $PA, $parentObject) {
		if ($table == 'tt_content' && $row['tx_rgsmoothgallery_rgsg'] != 1) {
			if (t3lib_div::isFirstPartOfStr ($field, 'tx_rgsmoothgallery_option')) {
				$out = 'aaaa';
			}
		}
	}

}

?>