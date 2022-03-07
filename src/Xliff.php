<?php
namespace Kiki\ComposerQrcode;
require('../vendor/autoload.php');

use Matecat\XliffParser\XliffParser;

$xmlContent = file_get_contents('translation/jp.xliff');
$parser = new XliffParser();

$parsed = $parser->xliffToArray($xmlContent);


var_dump($parsed);
//['files'][1]['translation']
//key_exist
// ob wer deutsch oder englisch will mit get parameter
//print
