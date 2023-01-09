<?
header('Content-type: text/html; charset=utf-8');
$wgExtensionCredits['variable'][] = array(
	'path'           => __FILE__,
	'name'           => 'Aion character details',
	'author'         => 'Kelekelio',
	'url'            => 'http://aionpowerbook.com',
	'descriptionmsg' => 'Aion character details',
	'version'		 => '1.0',
	'license-name' 	 => 'LICENSE',
);
 
$wgHooks['ParserFirstCallInit'][] = 'characterdetailsFunction';
$wgExtensionMessagesFiles['characterdetails'] = __DIR__ . '/characterdetails.i18n.php';
function characterdetailsFunction( &$parser ) {
   $parser->setFunctionHook( 'characterdetails', 'characterdetailsParserFunction' );
   return true;
}
function characterdetailsParserFunction( &$parser, $arg1 ) {
 global $wgLang, $wgOut;
 $code = $wgLang->getCode();
 
$characterID = $_GET['c'];
$serverID = $_GET['s']; 
 
 
 
$div = '<div id="characterdetails"><img src="http://aionpowerbook.com/powerbook/extensions/a_item_tables/2.gif"></div>';
$div .= '<script>
  $(document).ready(function() {
	  
  $( "#characterdetails" ).load( "/powerbook/extensions/aion_characterdetails/details.php?lang=' . $code . '&s=' . $serverID . '&c=' . $characterID . '" );
  
  
  });  
</script>';
$div .= '<div class="cl"></div><div class="cl"></div>';


$wgOut->AddHTML( $div );


//$DisplayTitle = '{{DISPLAYTITLE:' . $localization . '}}'; change later to char name
//return array( $DisplayTitle, 'noparse' => false );
}
 
 
// enf of magic word, beginning of data retriving