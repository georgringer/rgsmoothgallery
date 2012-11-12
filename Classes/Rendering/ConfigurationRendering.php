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
					$(".rgsmoothgallery-' . $contentElementData['uid'] . ' .caption").remove();
					$(".rgsmoothgallery-' . $contentElementData['uid'] . '").nivoSlider(
						{
							' . $this->getRenderedOptions ($contentElementData['tx_rgsmoothgallery_configuration']) . '
						}
					);
				});
		</script>';

		return $js;
	}

	protected function getRenderedOptions($configuration) {
		$renderedOptions = array();

//		$renderedOptions[] = 'effect:"boxRain"';


		return implode (',' . LF, $renderedOptions);
	}

}

?>