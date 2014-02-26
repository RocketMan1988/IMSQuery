<?php
/** 
 * The IMSQuery extension allows for querying of the IMS database on MOD wikis.
 * 
 * Documentation: http://???
 * Support:       http://???
 * Source code:   http://???
 *
 * @file IMSQuery.php
 * @addtogroup Extensions
 * @author James Montalvo
 * @copyright © 2014 by James Montalvo
 * @licence GNU GPL v3+
 */

# Not a valid entry point, skip unless MEDIAWIKI is defined
if (!defined('MEDIAWIKI')) {
	die( "IMSQuery extension" );
}

$wgExtensionCredits['specialpage'][] = array(
	'path'           => __FILE__,
	'name'           => 'IMSQuery',
	'url'            => 'http://github.com/jamesmontalvo3/IMSQuery',
	'author'         => 'James Montalvo',
	'descriptionmsg' => 'imsquery-desc',
	'version'        => '0.1.0'
);

$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['IMSQuery'] = $dir . 'IMSQuery.i18n.php';
$wgAutoloadClasses['IMSQuery'] = $dir . 'IMSQuery.body.php';

// Specify the function that will initialize the parser function.
$wgHooks['ParserFirstCallInit'][] = 'IMSQuery::setup';