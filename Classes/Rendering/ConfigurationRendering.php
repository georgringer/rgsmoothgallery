<?php

class Tx_Rgsmoothgallery_Rendering_ConfigurationRendering {

	/**
	 * @param $content
	 * @param $conf
	 * @return string
	 */
	public function user_renderConfiguration($content, $conf) {
		$contentElementData = $this->cObj->data;

		if ($contentElementData['tx_rgsmoothgallery_rgsg'] === '') {
			return '';
		}

		$js = '<script type="text/javascript">
				$(window).load(function() {
					$("#rgsmoothgallery-' . $contentElementData['uid'] . '").parent().css("height", "");
					$("#rgsmoothgallery-' . $contentElementData['uid'] . ' .caption").remove();
					$("#rgsmoothgallery-' . $contentElementData['uid'] . '").nivoSlider(
						{
							' . $this->getRenderedOptions ($contentElementData['tx_rgsmoothgallery_configuration']) . '
						}
					);
				});
		</script>';

		return $js;
	}

	/**
	 * Get the configuration
	 *
	 * @param string $configuration
	 * @return string
	 */
	protected function getRenderedOptions($configuration) {
		/** @var $renderer Tx_Rgsmoothgallery_Model_Dto_Configuration */
		$renderer = t3lib_div::makeInstance ('Tx_Rgsmoothgallery_Model_Dto_Configuration', $configuration);
		return $renderer->render ();
	}

}

?>