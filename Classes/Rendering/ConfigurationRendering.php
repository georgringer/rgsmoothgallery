<?php

namespace GeorgRinger\Rgsmoothgallery\Rendering;

use TYPO3\CMS\Core\Utility\GeneralUtility;

class ConfigurationRendering {

	/**
	 * @param $content
	 * @param $conf
	 * @return void
	 */
	public function user_renderConfiguration($content, $conf) {
		$contentElementData = $this->cObj->data;

		if ($contentElementData['tx_rgsmoothgallery_rgsg'] === '') {
			return;
		}

		$js = '<script type="text/javascript">
				$(window).load(function() {
					$("#rgsmoothgallery-' . $contentElementData['uid'] . '").parent().css("height", "");
					$("#rgsmoothgallery-' . $contentElementData['uid'] . '").nivoSlider(
						{
							' . $this->getRenderedOptions($contentElementData['tx_rgsmoothgallery_configuration']) . '
						}
					);
				});
		</script>';
		$GLOBALS['TSFE']->additionalFooterData['rgmsoothgallery-' . $contentElementData['uid']] = $js;
	}

	public function user_rememberFile($content, $conf) {
		$contentElementData = $this->cObj->data;

		$GLOBALS['rgsmoothgallery'][$contentElementData['uid']][] = $this->cObj->data[$this->cObj->currentValKey];
	}

	public function user_renderThumbs($content, $conf) {
		$contentElementData = $this->cObj->data;
		$content = '';

		$images = $GLOBALS['rgsmoothgallery'][$contentElementData['uid']];
		foreach ($images as $image) {
			$conf = array(
				'file' => $image,
				'file.' => array(
					'maxW' => 40
				)
			);
			$content .= '<li>' . $this->cObj->IMAGE($conf) . '</li>';
		}

		$content = '<div id="carousel" class="flexslider">
					<ul class="slides">
						' . $content . '
					</ul>
				</div>';

		return $content;
	}

	/**
	 * Get the configuration
	 *
	 * @param string $configuration
	 * @return string
	 */
	protected function getRenderedOptions($configuration) {
		/** @var $renderer \GeorgRinger\Rgsmoothgallery\Model\Dto\Configuration */
		$renderer = GeneralUtility::makeInstance('GeorgRinger\\Rgsmoothgallery\\Model\\Dto\\Configuration', $configuration);
		return $renderer->render();
	}

}