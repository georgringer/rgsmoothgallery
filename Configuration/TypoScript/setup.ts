page.includeJSFooterlibs.rgsmoothgallery = typo3conf/ext/rgsmoothgallery/Resources/Public/nivo/jquery.nivo.slider.js
#page.includeCSS.rgsmoothgallery = typo3conf/ext/rgsmoothgallery/Resources/Public/css/rgsmoothgallery.css
page.includeCSS.rgsmoothgalleryTheme1 = typo3conf/ext/rgsmoothgallery/Resources/Public/nivo/themes/default/default.css
page.includeCSS.rgsmoothgalleryTheme2 = typo3conf/ext/rgsmoothgallery/Resources/Public/nivo/themes/light/light.css
page.includeCSS.rgsmoothgalleryTheme2 = typo3conf/ext/rgsmoothgallery/Resources/Public/nivo/themes/dark/dark.css
page.includeCSS.rgsmoothgallery = typo3conf/ext/rgsmoothgallery/Resources/Public/nivo/nivo-slider.css

includeLibs.rgsmoothgallery = typo3conf/ext/rgsmoothgallery/Classes/Rendering/ConfigurationRendering.php


tt_content.image.20 {
  imageStdWrap.dataWrap.override {
    if.isTrue.field = tx_rgsmoothgallery_rgsg
    cObject = COA
    cObject {
      10 = TEXT
      10.value (
      <div class="csc-textpic-imagewrap theme-dark rgsmoothgallery" style="width:{register:totalwidth}px;">
      <div class="rgsmoothgallery-general rgsmoothgallery-{field:uid}" style="width:{register:totalwidth}px;height:{register:imageheight}px;"> |</div>
      )

      30 = TEXT
      30.value = </div>
    }

  }
  imageStdWrap.stdWrap.append= USER
  imageStdWrap.stdWrap.append.userFunc = Tx_Rgsmoothgallery_Rendering_ConfigurationRendering->user_fo

  rendering.rgsmoothgallery {
    allStdWrap {
      wrap = <div class="csc-textpic-imagewrap">|</div>
      innerWrap.cObject = CASE
      innerWrap.cObject {
        key.field = imageorient
        # above-center
        0 = TEXT
        0.value = <div class="csc-textpic-center-outer"><div class="csc-textpic-center-inner">|</div></div>
        # below-center
        8 < .0
      }
    }
    oneImageStdWrap {
      xwrap = <div class="slides">|</div>
    }

    imgTagStdWrap {
      wrap =|
    }
    caption {
      required = 1
      wrap = <div class="caption">|</div>
    }
  }

  renderMethod.stdWrap {
    override = rgsmoothgallery
    override.if.isTrue.field = tx_rgsmoothgallery_rgsg
  }
}
