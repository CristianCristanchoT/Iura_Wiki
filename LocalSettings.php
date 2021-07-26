<?php
# This file was automatically generated by the MediaWiki 1.36.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
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

$wgSitename = "Iura Wiki";
$wgMetaNamespace = "Iura_Wiki";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "/Iura_wiki";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://localhost";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [ '1x' => "$wgResourceBasePath/resources/assets/IURA_WIKI.png" ];

$wgFavicon = "$wgResourceBasePath/resources/assets/IURA_WIKI.png";


## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "apache@🌻.invalid";
$wgPasswordSender = "apache@🌻.invalid";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "iurawiki_database";
$wgDBuser = "iurawiki_db_master";
$wgDBpassword = "iura_project_2021";

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
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale. This should ideally be set to an English
## language locale so that the behaviour of C library functions will
## be consistent with typical installations. Use $wgLanguageCode to
## localise the wiki.
$wgShellLocale = "C.UTF-8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "es";

$wgSecretKey = "5d47a56f3f26822a86937a2f98373161bbcdaa821b65220f944723ea2295f453";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "27875ddadce63d32";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "https://creativecommons.org/licenses/by-nc-sa/4.0/";
$wgRightsText = "Creative Commons Atribución-NoComercial-CompartirIgual";
$wgRightsIcon = "$wgResourceBasePath/resources/assets/licenses/cc-by-nc-sa.png";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );
wfLoadSkin( 'Citizen' );


# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtension( 'ExtensionName' );
# to LocalSettings.php. Check specific extension documentation for more details.
# The following extensions were automatically enabled:
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'CiteThisPage' );
#Desabilitar para carga masiva de documentos por API o Bot
wfLoadExtension( 'ConfirmEdit' );
#----------------------------------------------------------
wfLoadExtension( 'ImageMap' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'PdfHandler' );
wfLoadExtension( 'Poem' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'Scribunto' );
wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'TemplateData' );
wfLoadExtension( 'TitleBlacklist' );
wfLoadExtension( 'VisualEditor' );
wfLoadExtension( 'WikiEditor' );


# End of automatically generated settings.
# Add more configuration options below.

#Habilitar para carga masiva de documentos por API o Bot
/*
$wgRateLimits['edit']['user'] = [10000,10];
$wgRateLimits['edit']['user-global'] = [10000,10];
$wgRateLimits['edit']['newbie'] = [10000,10];
$wgRateLimits['edit']['anon'] = [10000,10];

$wgRateLimits['query']['user'] = [10000,10];
$wgRateLimits['query']['user-global'] = [10000,10];
$wgRateLimits['query']['newbie'] = [10000,10];
$wgRateLimits['query']['anon'] = [10000,10];

$wgRateLimits['purge']['user'] = [10000,10];
$wgRateLimits['purge']['user-global'] = [10000,10];
$wgRateLimits['purge']['newbie'] = [10000,10];
$wgRateLimits['purge']['anon'] = [10000,10];

$wgRateLimits['linkpurge']['user'] = [10000,10];
$wgRateLimits['linkpurge']['user-global'] = [10000,10];
$wgRateLimits['linkpurge']['newbie'] = [10000,10];
$wgRateLimits['linkpurge']['anon'] = [10000,10];
*/


#Deshabilitar para carga masiva de documentos por API o Bot
$wgRateLimits = [
	// Page edits
	'edit' => [
		'ip' => [ 8, 60 ],
		'newbie' => [ 8, 60 ],
		'user' => [ 90, 60 ],
	],
	// Page moves
	'move' => [
		'newbie' => [ 2, 120 ],
		'user' => [ 8, 60 ],
	],
	// File uploads
	'upload' => [
		'ip' => [ 8, 60 ],
		'newbie' => [ 8, 60 ],
	],
	// Page rollbacks
	'rollback' => [
		'user' => [ 10, 60 ],
		'newbie' => [ 5, 120 ]
	],
	// Triggering password resets emails
	'mailpassword' => [
		'ip' => [ 5, 3600 ],
	],
	// Emailing other users using MediaWiki
	'emailuser' => [
		'ip' => [ 5, 86400 ],
		'newbie' => [ 5, 86400 ],
		'user' => [ 20, 86400 ],
	],
	'changeemail' => [
		'ip-all' => [ 10, 3600 ],
		'user' => [ 4, 86400 ]
	],
	// since 1.33 - rate limit email confirmations
	'confirmemail' => [
		'ip-all' => [ 10, 3600 ],
		'user' => [ 4, 86400 ]
	],
	// Purging pages
	'purge' => [
		'ip' => [ 30, 60 ],
		'user' => [ 30, 60 ],
	],
	// Purges of link tables
	'linkpurge' => [
		'ip' => [ 30, 60 ],
		'user' => [ 30, 60 ],
	],
	// Files rendered via thumb.php or thumb_handler.php
	'renderfile' => [
		'ip' => [ 700, 30 ],
		'user' => [ 700, 30 ],
	],
	// Same as above but for non-standard thumbnails
	'renderfile-nonstandard' => [
		'ip' => [ 70, 30 ],
		'user' => [ 70, 30 ],
	],
	// Stashing edits into cache before save
	'stashedit' => [
		'ip' => [ 30, 60 ],
		'newbie' => [ 30, 60 ],
	],
	// Adding or removing change tags
	'changetag' => [
		'ip' => [ 8, 60 ],
		'newbie' => [ 8, 60 ],
	],
	// Changing the content model of a page
	'editcontentmodel' => [
		'newbie' => [ 2, 120 ],
		'user' => [ 8, 60 ],
	],
];

#Se prohibe la edicion por parte de usuarios no registrados
$wgGroupPermissions['*']['edit'] = false;



