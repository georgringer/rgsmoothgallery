<?php

########################################################################
# Extension Manager/Repository config file for ext "news".
#
# Auto generated 19-12-2011 10:25
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'rgsmoothgallery',
	'description' => 'bla fo',
	'category' => 'fe',
	'author' => 'Georg Ringer',
	'author_email' => 'typo3@ringerge.org',
	'shy' => '',
	'dependencies' => 'extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 1,
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.4.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.0.0',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:169:{s:20:"class.ext_update.php";s:4:"4a00";s:16:"ext_autoload.php";s:4:"f176";s:21:"ext_conf_template.txt";s:4:"6ae4";s:12:"ext_icon.gif";s:4:"777b";s:17:"ext_localconf.php";s:4:"70f4";s:14:"ext_tables.php";s:4:"d269";s:14:"ext_tables.sql";s:4:"94d5";s:39:"Classes/Controller/ImportController.php";s:4:"7d3d";s:41:"Classes/Controller/NewsBaseController.php";s:4:"1755";s:37:"Classes/Controller/NewsController.php";s:4:"b681";s:33:"Classes/Domain/Model/Category.php";s:4:"8725";s:40:"Classes/Domain/Model/DemandInterface.php";s:4:"5c9e";s:29:"Classes/Domain/Model/File.php";s:4:"ee2f";s:29:"Classes/Domain/Model/Link.php";s:4:"fe76";s:30:"Classes/Domain/Model/Media.php";s:4:"9d36";s:29:"Classes/Domain/Model/News.php";s:4:"006a";s:36:"Classes/Domain/Model/NewsDefault.php";s:4:"0a24";s:35:"Classes/Domain/Model/NewsDemand.php";s:4:"31a0";s:37:"Classes/Domain/Model/NewsExternal.php";s:4:"1c81";s:37:"Classes/Domain/Model/NewsInternal.php";s:4:"d309";s:28:"Classes/Domain/Model/Tag.php";s:4:"9763";s:44:"Classes/Domain/Model/Dto/EmConfiguration.php";s:4:"6189";s:35:"Classes/Domain/Model/Dto/Search.php";s:4:"2318";s:43:"Classes/Domain/Model/External/TtContent.php";s:4:"c40f";s:56:"Classes/Domain/Repository/AbstractDemandedRepository.php";s:4:"b400";s:48:"Classes/Domain/Repository/CategoryRepository.php";s:4:"7f08";s:57:"Classes/Domain/Repository/DemandedRepositoryInterface.php";s:4:"ed5c";s:44:"Classes/Domain/Repository/NewsRepository.php";s:4:"e442";s:48:"Classes/Domain/Service/CategoryImportService.php";s:4:"f4d3";s:44:"Classes/Domain/Service/NewsImportService.php";s:4:"52e0";s:27:"Classes/Hooks/CmsLayout.php";s:4:"cfb2";s:31:"Classes/Hooks/ItemsProcFunc.php";s:4:"c069";s:24:"Classes/Hooks/Labels.php";s:4:"5d07";s:33:"Classes/Hooks/SuggestReceiver.php";s:4:"b8a0";s:37:"Classes/Hooks/SuggestReceiverCall.php";s:4:"973f";s:29:"Classes/Hooks/T3libBefunc.php";s:4:"9d7d";s:25:"Classes/Hooks/Tcemain.php";s:4:"9684";s:37:"Classes/Interfaces/MediaInterface.php";s:4:"6e0a";s:32:"Classes/Interfaces/Audio/Mp3.php";s:4:"880f";s:32:"Classes/Interfaces/Video/Flv.php";s:4:"7aca";s:38:"Classes/Interfaces/Video/Quicktime.php";s:4:"02fd";s:39:"Classes/Interfaces/Video/Videosites.php";s:4:"e4de";s:34:"Classes/Jobs/AbstractImportJob.php";s:4:"15c6";s:35:"Classes/Jobs/ImportJobInterface.php";s:4:"2f61";s:40:"Classes/Jobs/TTNewsCategoryImportJob.php";s:4:"9e25";s:36:"Classes/Jobs/TTNewsNewsImportJob.php";s:4:"6c1d";s:32:"Classes/Service/CacheService.php";s:4:"cb26";s:35:"Classes/Service/CategoryService.php";s:4:"dc2d";s:31:"Classes/Service/FileService.php";s:4:"4256";s:35:"Classes/Service/SettingsService.php";s:4:"e220";s:55:"Classes/Service/Import/DataProviderServiceInterface.php";s:4:"044f";s:60:"Classes/Service/Import/TTNewsCategoryDataProviderService.php";s:4:"5b55";s:56:"Classes/Service/Import/TTNewsNewsDataProviderService.php";s:4:"a09a";s:33:"Classes/Utility/Compatibility.php";s:4:"8332";s:35:"Classes/Utility/EmConfiguration.php";s:4:"4774";s:29:"Classes/Utility/ImportJob.php";s:4:"64a7";s:24:"Classes/Utility/Page.php";s:4:"ed30";s:23:"Classes/Utility/Url.php";s:4:"db9c";s:44:"Classes/ViewHelpers/HeaderDataViewHelper.php";s:4:"6be5";s:45:"Classes/ViewHelpers/IncludeFileViewHelper.php";s:4:"420c";s:38:"Classes/ViewHelpers/LinkViewHelper.php";s:4:"6dd4";s:46:"Classes/ViewHelpers/MediaFactoryViewHelper.php";s:4:"f171";s:41:"Classes/ViewHelpers/MetaTagViewHelper.php";s:4:"2458";s:40:"Classes/ViewHelpers/ObjectViewHelper.php";s:4:"61bb";s:42:"Classes/ViewHelpers/TitleTagViewHelper.php";s:4:"bbf3";s:44:"Classes/ViewHelpers/Format/DamViewHelper.php";s:4:"976d";s:45:"Classes/ViewHelpers/Format/DateViewHelper.php";s:4:"4c32";s:53:"Classes/ViewHelpers/Format/FileDownloadViewHelper.php";s:4:"3ab9";s:49:"Classes/ViewHelpers/Format/FileSizeViewHelper.php";s:4:"675e";s:44:"Classes/ViewHelpers/Format/HscViewHelper.php";s:4:"717b";s:59:"Classes/ViewHelpers/Format/HtmlentitiesDecodeViewHelper.php";s:4:"a13b";s:48:"Classes/ViewHelpers/Format/NothingViewHelper.php";s:4:"fe75";s:50:"Classes/ViewHelpers/Format/StriptagsViewHelper.php";s:4:"cb82";s:47:"Classes/ViewHelpers/Social/DisqusViewHelper.php";s:4:"7528";s:51:"Classes/ViewHelpers/Social/GooglePlusViewHelper.php";s:4:"78bf";s:48:"Classes/ViewHelpers/Social/TwitterViewHelper.php";s:4:"d7af";s:57:"Classes/ViewHelpers/Social/Facebook/CommentViewHelper.php";s:4:"ddad";s:54:"Classes/ViewHelpers/Social/Facebook/LikeViewHelper.php";s:4:"5574";s:55:"Classes/ViewHelpers/Social/Facebook/ShareViewHelper.php";s:4:"931c";s:49:"Classes/ViewHelpers/Widget/PaginateViewHelper.php";s:4:"7721";s:60:"Classes/ViewHelpers/Widget/Controller/PaginateController.php";s:4:"5378";s:41:"Configuration/FlexForms/flexform_news.xml";s:4:"dceb";s:30:"Configuration/Tca/category.php";s:4:"1ad0";s:26:"Configuration/Tca/file.php";s:4:"d233";s:26:"Configuration/Tca/link.php";s:4:"3774";s:27:"Configuration/Tca/media.php";s:4:"8aa7";s:26:"Configuration/Tca/news.php";s:4:"7ca4";s:25:"Configuration/Tca/tag.php";s:4:"dbf2";s:38:"Configuration/TypoScript/constants.txt";s:4:"041b";s:34:"Configuration/TypoScript/setup.txt";s:4:"8e8d";s:14:"doc/manual.sxw";s:4:"0bcb";s:25:"Documentation/License.txt";s:4:"2886";s:21:"Documentation/uml.pdf";s:4:"8e15";s:40:"Resources/Private/Language/locallang.xml";s:4:"a889";s:43:"Resources/Private/Language/locallang_be.xml";s:4:"8d4e";s:53:"Resources/Private/Language/locallang_csh_category.xml";s:4:"63b9";s:49:"Resources/Private/Language/locallang_csh_file.xml";s:4:"0666";s:54:"Resources/Private/Language/locallang_csh_flexforms.xml";s:4:"431a";s:49:"Resources/Private/Language/locallang_csh_link.xml";s:4:"5c79";s:50:"Resources/Private/Language/locallang_csh_media.xml";s:4:"08e3";s:49:"Resources/Private/Language/locallang_csh_news.xml";s:4:"5c74";s:48:"Resources/Private/Language/locallang_csh_tag.xml";s:4:"f57a";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"2ad6";s:44:"Resources/Private/Language/locallang_mod.xml";s:4:"c3fe";s:37:"Resources/Private/Layouts/Detail.html";s:4:"b982";s:38:"Resources/Private/Layouts/General.html";s:4:"0cbd";s:46:"Resources/Private/Layouts/Backend/Default.html";s:4:"d262";s:46:"Resources/Private/Partials/Category/Items.html";s:4:"7304";s:53:"Resources/Private/Partials/Detail/MediaContainer.html";s:4:"8325";s:47:"Resources/Private/Partials/Detail/MediaDam.html";s:4:"31a2";s:48:"Resources/Private/Partials/Detail/MediaHtml.html";s:4:"9318";s:49:"Resources/Private/Partials/Detail/MediaImage.html";s:4:"d8ee";s:49:"Resources/Private/Partials/Detail/MediaVideo.html";s:4:"5dc3";s:48:"Resources/Private/Partials/Detail/Opengraph.html";s:4:"3410";s:41:"Resources/Private/Partials/List/Item.html";s:4:"4c7d";s:44:"Resources/Private/Php/class.news_wizicon.php";s:4:"e77d";s:45:"Resources/Private/Templates/Import/Index.html";s:4:"3591";s:46:"Resources/Private/Templates/News/DateMenu.html";s:4:"e516";s:44:"Resources/Private/Templates/News/Detail.html";s:4:"b761";s:42:"Resources/Private/Templates/News/List.html";s:4:"ae92";s:41:"Resources/Private/Templates/News/List.xml";s:4:"b243";s:48:"Resources/Private/Templates/News/SearchForm.html";s:4:"a451";s:50:"Resources/Private/Templates/News/SearchResult.html";s:4:"a15e";s:48:"Resources/Private/Templates/ViewHelpers/Flv.html";s:4:"3a42";s:66:"Resources/Private/Templates/ViewHelpers/Widget/Paginate/Index.html";s:4:"410f";s:38:"Resources/Public/Css/news-advanced.css";s:4:"8e4a";s:35:"Resources/Public/Css/news-basic.css";s:4:"bf01";s:33:"Resources/Public/Icons/ce_wiz.gif";s:4:"628a";s:33:"Resources/Public/Icons/folder.gif";s:4:"480f";s:40:"Resources/Public/Icons/import_module.gif";s:4:"91b6";s:41:"Resources/Public/Icons/media_type_dam.gif";s:4:"999b";s:42:"Resources/Public/Icons/media_type_html.png";s:4:"2e14";s:43:"Resources/Public/Icons/media_type_image.png";s:4:"bd2e";s:48:"Resources/Public/Icons/media_type_multimedia.png";s:4:"094d";s:53:"Resources/Public/Icons/news_domain_model_category.gif";s:4:"659a";s:49:"Resources/Public/Icons/news_domain_model_file.gif";s:4:"e646";s:49:"Resources/Public/Icons/news_domain_model_link.gif";s:4:"a172";s:50:"Resources/Public/Icons/news_domain_model_media.gif";s:4:"8621";s:49:"Resources/Public/Icons/news_domain_model_news.gif";s:4:"46a1";s:57:"Resources/Public/Icons/news_domain_model_news_article.gif";s:4:"7a98";s:58:"Resources/Public/Icons/news_domain_model_news_external.gif";s:4:"57f6";s:48:"Resources/Public/Icons/news_domain_model_tag.png";s:4:"5667";s:34:"Resources/Public/Icons/preview.gif";s:4:"4e9f";s:47:"Resources/Public/Images/dummy-preview-image.png";s:4:"8084";s:35:"Resources/Public/Images/topnews.png";s:4:"7e6b";s:62:"Resources/Public/JavaScript/Contrib/audioplayer-noswfobject.js";s:4:"cc36";s:58:"Resources/Public/JavaScript/Contrib/audioplayer-player.swf";s:4:"d6fa";s:59:"Resources/Public/JavaScript/Contrib/flowplayer-3.2.4.min.js";s:4:"ae57";s:56:"Resources/Public/JavaScript/Contrib/flowplayer-3.2.5.swf";s:4:"3670";s:65:"Resources/Public/JavaScript/Contrib/flowplayer.controls-3.2.3.swf";s:4:"37d1";s:52:"Resources/Public/JavaScript/Contrib/swfobject-2-2.js";s:4:"84e0";s:44:"Tests/Unit/Controller/NewsControllerTest.php";s:4:"4c2e";s:40:"Tests/Unit/Domain/Model/CategoryTest.php";s:4:"a8c3";s:36:"Tests/Unit/Domain/Model/FileTest.php";s:4:"c307";s:36:"Tests/Unit/Domain/Model/LinkTest.php";s:4:"a21c";s:37:"Tests/Unit/Domain/Model/MediaTest.php";s:4:"6ef9";s:42:"Tests/Unit/Domain/Model/NewsDemandTest.php";s:4:"3a9f";s:36:"Tests/Unit/Domain/Model/NewsTest.php";s:4:"50d4";s:35:"Tests/Unit/Domain/Model/TagTest.php";s:4:"ba75";s:51:"Tests/Unit/Domain/Model/Dto/EmConfigurationTest.php";s:4:"9d75";s:42:"Tests/Unit/Domain/Model/Dto/SearchTest.php";s:4:"e78e";s:57:"Tests/Unit/Domain/Repository/NewsRepositoryDemandTest.php";s:4:"452a";s:51:"Tests/Unit/Domain/Repository/NewsRepositoryTest.php";s:4:"fb77";s:43:"Tests/Unit/Jobs/TTNewsNewsImportJobTest.php";s:4:"4850";s:56:"Tests/Unit/ViewHelpers/Format/FileSizeViewHelperTest.php";s:4:"b890";s:55:"Tests/Unit/ViewHelpers/Format/NothingViewHelperTest.php";s:4:"81f3";s:57:"Tests/Unit/ViewHelpers/Format/StriptagsViewHelperTest.php";s:4:"2e16";s:39:"Tests/Unit/ViewHelpers/Format/dummy.txt";s:4:"f4a4";s:54:"Tests/Unit/ViewHelpers/Social/DisqusViewHelperTest.php";s:4:"cbd0";}',
	'suggests' => array(
	),
);

?>