<?php

require_once "/external_includes/PrivateSettings.php";

# This file was automatically generated by the MediaWiki 1.39.3
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See docs/Configuration.md for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "SPCodex";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";
$wgArticlePath = "/$1";
$actions = array( 'view', 'edit', 'watch', 'unwatch', 'delete','revert', 'rollback', 'protect', 'unprotect', 'markpatrolled', 'render', 'submit', 'history', 'purge', 'info' );
foreach ( $actions as $action ) {
    $wgActionPaths[$action] = "/$action/$1";
}

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://208.68.39.85";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [
	'1x' => "$wgResourceBasePath/images/SPCodex.svg",
	'wordmark' => [
		"src" => "$wgResourceBasePath/images/SPCodex-inline.png",
		"width" => 120,
		"height" => 19,
	],
	#'icon' => "$wgResourceBasePath/images/Spcodex-apple-touch-icon.png",
];
$wgFavicon = "$wgResourceBasePath/images/SPCodex-Favicon.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO
$wgSMTP = [
	#'host' => 'ssl://smtp.gmail.com',
	'host' => 'ssl://mail.hover.com',
	'IDHost' => '208.68.39.85',
	'port' => 465,
	'username' => $wmgStmpUsername,
	'password' => $wmgStmpPassword,
	'auth' => true,
];

$wgEmergencyContact = "wiki@spcodex.wiki";
$wgPasswordSender = "wiki@spcodex.wiki";

$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";

## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

$wgFileExtensions[] = 'svg';

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

# Site language code, should be one of the list in ./includes/languages/data/Names.php
$wgLanguageCode = "en";

# Time zone
$wgLocaltimezone = "UTC";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "https://creativecommons.org/licenses/by-sa/4.0/";
$wgRightsText = "Creative Commons Attribution-ShareAlike 4.0 International (CC BY-SA 4.0)";
$wgRightsIcon = "$wgResourceBasePath/resources/assets/licenses/cc-by-sa.png";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, e.g. 'vector' or 'monobook':
$wgDefaultSkin = "vector-2022";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'MinervaNeue' );
wfLoadSkin( 'Vector' );

# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtension( 'ExtensionName' );
# to LocalSettings.php. Check specific extension documentation for more details.
# The following extensions were automatically enabled:
wfLoadExtension( 'AbuseFilter' );
wfLoadExtension( 'Cargo' );
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'CiteThisPage' );
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'CodeMirror' );
wfLoadExtension( 'ConfirmEdit' );
wfLoadExtension( 'ConfirmEdit/hCaptcha' );
wfLoadExtension( 'ContactPage' );
wfLoadExtension( 'DarkMode' );
wfLoadExtension( 'Disambiguator' );
wfLoadExtension( 'DiscussionTools' );
wfLoadExtension( 'Echo' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'GeoData' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'JsonConfig' );
wfLoadExtension( 'Kartographer' );
wfLoadExtension( 'LabeledSectionTransclusion' );
wfLoadExtension( 'Linter' );
wfLoadExtension( 'MobileFrontend' );
wfLoadExtension( 'MultimediaViewer' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'OATHAuth' );
wfLoadExtension( 'PageForms' );
wfLoadExtension( 'PageImages' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'Poem' );
wfLoadExtension( 'Popups' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'Scribunto' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'TemplateData' );
wfLoadExtension( 'TemplateSandbox' );
wfLoadExtension( 'TemplateStyles' );
wfLoadExtension( 'TemplateWizard' );
wfLoadExtension( 'TextExtracts' );
wfLoadExtension( 'Thanks' );
wfLoadExtension( 'Timeline' );
wfLoadExtension( 'UrlShortener' );
wfLoadExtension( 'Variables' );
wfLoadExtension( 'VEForAll' );
wfLoadExtension( 'VisualEditor' );
wfLoadExtension( 'WikiEditor' );
wfLoadExtension( 'WikiSEO' );
wfLoadExtension( 'YouTube' );


# End of automatically generated settings.
# Add more configuration options below.

$wgShowExceptionDetails = true;

# Custom namespaces
define("NS_TAB", 3000);
define("NS_TAB_TALK", 3001);
$wgExtraNamespaces[NS_TAB] = 'Tab';
$wgExtraNamespaces[NS_TAB_TALK] = 'Tab_talk';

# Kartographer
$wgKartographerMapServer = "https://tile.openstreetmap.org";

# ParserFunctions
$wgPFEnableStringFunctions = true;

# Job queue
$wgJobRunRate = 0;

# MobileFrontend / Minerva
$wgMinervaTalkAtTop['base'] = true;
$wgMinervaPersonalMenu['base'] = true;
$wgMinervaHistoryInPageActions['base'] = true;
$wgMinervaShowCategories['base'] = true;
$wgMinervaAlwaysShowLanguageButton = false;

# VisualEditor
$wgDefaultUserOptions['visualeditor-editor'] = "visualeditor";

# ContactPage
$wgContactConfig['default'] = [
	'RecipientUser' => 'MusikAnimal',  // Must be the name of a valid account which also has a verified e-mail-address added to it.
	'SenderName' => 'Contact Form on ' . $wgSitename,  // "Contact Form on" needs to be translated
	'SenderEmail' => null,  // Defaults to $wgPasswordSender, may be changed as required
	'RequireDetails' => true,  // Either "true" or "false" as required
	'IncludeIP' => true,  // Either "true" or "false" as required
	'MustBeLoggedIn' => false,  // Check if the user is logged in before rendering the form. Either "true" or "false" as required
	'AdditionalFields' => [
		'Text' => [
			'label-message' => 'emailmessage',
			'type' => 'textarea',
			'rows' => 20,
			'required' => true,  // Either "true" or "false" as required
		],
	],
	'DisplayFormat' => 'table',  // See HTMLForm documentation for available values.
	'RLModules' => [],  // Resource loader modules to add to the form display page.
	'RLStyleModules' => []  // Resource loader CSS modules to add to the form display page.
];
$wgCaptchaTriggers['contactpage'] = true;
$wgHooks['SkinAddFooterLinks'][] = function( Skin $skin, string $key, array &$footerlinks ) {
    global $wgServer;
    if ( $key === 'places' ) {
        $footerlinks['contact'] = Html::element( 'a',
            [
                'href' => "$wgServer/Special:Contact",  // URL to "Special:Contact"
                'rel' => 'noreferrer noopener'  // not required, but recommended for security reasons
            ],
        $skin->msg( 'contactpage-label' )->text()
        );
    };
};

# Permissions
$wgGroupPermissions['*']['runcargoqueries'] = false; // Security reasons
$wgGroupPermissions['sysop']['interwiki'] = true;
$wgGroupPermissions['sysop']['runcargoqueries'] = true;

$wgLocaltimezone = "UTC";
date_default_timezone_set( $wgLocaltimezone );
$wgFragmentMode = [ 'html5' ];
