<?php
$maxterms1=mysqli_fetch_array(mysqli_query($conn,"SELECT MAX(id) FROM terms"))['MAX(id)'];
$minterms1=mysqli_fetch_array(mysqli_query($conn,"SELECT MIN(id) FROM terms"))['MIN(id)'];

function randomterms()
{
	global $query_permalink;
	global $conn;
	global $maxterms1;
	global $minterms1;
	$id=mt_rand($minterms1,$maxterms1);
	$term=mysqli_fetch_array(mysqli_query($conn,"SELECT term FROM terms where ID = ".$id))['term'];
	if ($maxterms1 != 0)
		if ($term!=''&&cleanPermalink($term)!='') 
			echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/'.$query_permalink.'/'.cleanPermalink($term).'">'.ucwords($term).'</a> ';
		else
			randomterms();
}

function firstwordlink($str){
	return explode("-",$str)[0];
}


//function isMobile() {
//    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
//}

function mysql_fetch_all($result)
{
  $all = array();
  while($thing = mysql_fetch_assoc($result)) {
    $all[] = $thing;
  }
  return $all;
}


function clean_space($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

   return str_replace('-',' ',preg_replace('/-+/', '-', $string)); 
}



function cleanPermalink($str, $delimiter = '-', $options = array()) {
  
         $defaults = array(
         'delimiter' => $delimiter,
         'limit' => null,
         'lowercase' => true,
         'replacements' => array(),
         'transliterate' => false,
         );
  
         $options = array_merge($defaults, $options);
  
    $char_map = array(
    // Latin
    'Ã' => 'A', 'Ã' => 'A', 'Ã' => 'A', 'Ã' => 'A', 'Ã' => 'A', 'Ã' => 'A', 'Ã' => 'AE', 'Ã' => 'C', 
    'Ã' => 'E', 'Ã' => 'E', 'Ã' => 'E', 'Ã' => 'E', 'Ã' => 'I', 'Ã' => 'I', 'Ã' => 'I', 'Ã' => 'I', 
    'Ã' => 'D', 'Ã' => 'N', 'Ã' => 'O', 'Ã' => 'O', 'Ã' => 'O', 'Ã' => 'O', 'Ã' => 'O', 'Å' => 'O', 
    'Ã' => 'O', 'Ã' => 'U', 'Ã' => 'U', 'Ã' => 'U', 'Ã' => 'U', 'Å°' => 'U', 'Ã' => 'Y', 'Ã' => 'TH', 
    'Ã' => 'ss', 
    'Ã ' => 'a', 'Ã¡' => 'a', 'Ã¢' => 'a', 'Ã£' => 'a', 'Ã¤' => 'a', 'Ã¥' => 'a', 'Ã¦' => 'ae', 'Ã§' => 'c', 
    'Ã¨' => 'e', 'Ã©' => 'e', 'Ãª' => 'e', 'Ã«' => 'e', 'Ã¬' => 'i', 'Ã­' => 'i', 'Ã®' => 'i', 'Ã¯' => 'i', 
    'Ã°' => 'd', 'Ã±' => 'n', 'Ã²' => 'o', 'Ã³' => 'o', 'Ã´' => 'o', 'Ãµ' => 'o', 'Ã¶' => 'o', 'Å' => 'o', 
    'Ã¸' => 'o', 'Ã¹' => 'u', 'Ãº' => 'u', 'Ã»' => 'u', 'Ã¼' => 'u', 'Å±' => 'u', 'Ã½' => 'y', 'Ã¾' => 'th', 
    'Ã¿' => 'y',
 
    // Latin symbols
    'Â©' => '(c)',
 
    // Greek
    'Î' => 'A', 'Î' => 'B', 'Î' => 'G', 'Î' => 'D', 'Î' => 'E', 'Î' => 'Z', 'Î' => 'H', 'Î' => '8',
    'Î' => 'I', 'Î' => 'K', 'Î' => 'L', 'Î' => 'M', 'Î' => 'N', 'Î' => '3', 'Î' => 'O', 'Î ' => 'P',
    'Î¡' => 'R', 'Î£' => 'S', 'Î¤' => 'T', 'Î¥' => 'Y', 'Î¦' => 'F', 'Î§' => 'X', 'Î¨' => 'PS', 'Î©' => 'W',
    'Î' => 'A', 'Î' => 'E', 'Î' => 'I', 'Î' => 'O', 'Î' => 'Y', 'Î' => 'H', 'Î' => 'W', 'Îª' => 'I',
    'Î«' => 'Y',
    'Î±' => 'a', 'Î²' => 'b', 'Î³' => 'g', 'Î´' => 'd', 'Îµ' => 'e', 'Î¶' => 'z', 'Î·' => 'h', 'Î¸' => '8',
    'Î¹' => 'i', 'Îº' => 'k', 'Î»' => 'l', 'Î¼' => 'm', 'Î½' => 'n', 'Î¾' => '3', 'Î¿' => 'o', 'Ï' => 'p',
    'Ï' => 'r', 'Ï' => 's', 'Ï' => 't', 'Ï' => 'y', 'Ï' => 'f', 'Ï' => 'x', 'Ï' => 'ps', 'Ï' => 'w',
    'Î¬' => 'a', 'Î­' => 'e', 'Î¯' => 'i', 'Ï' => 'o', 'Ï' => 'y', 'Î®' => 'h', 'Ï' => 'w', 'Ï' => 's',
    'Ï' => 'i', 'Î°' => 'y', 'Ï' => 'y', 'Î' => 'i',
 
    // Turkish
    'Å' => 'S', 'Ä°' => 'I', 'Ã' => 'C', 'Ã' => 'U', 'Ã' => 'O', 'Ä' => 'G',
    'Å' => 's', 'Ä±' => 'i', 'Ã§' => 'c', 'Ã¼' => 'u', 'Ã¶' => 'o', 'Ä' => 'g', 
 
    // Russian
    'Ð' => 'A', 'Ð' => 'B', 'Ð' => 'V', 'Ð' => 'G', 'Ð' => 'D', 'Ð' => 'E', 'Ð' => 'Yo', 'Ð' => 'Zh',
    'Ð' => 'Z', 'Ð' => 'I', 'Ð' => 'J', 'Ð' => 'K', 'Ð' => 'L', 'Ð' => 'M', 'Ð' => 'N', 'Ð' => 'O',
    'Ð' => 'P', 'Ð ' => 'R', 'Ð¡' => 'S', 'Ð¢' => 'T', 'Ð£' => 'U', 'Ð¤' => 'F', 'Ð¥' => 'H', 'Ð¦' => 'C',
    'Ð§' => 'Ch', 'Ð¨' => 'Sh', 'Ð©' => 'Sh', 'Ðª' => '', 'Ð«' => 'Y', 'Ð¬' => '', 'Ð­' => 'E', 'Ð®' => 'Yu',
    'Ð¯' => 'Ya',
    'Ð°' => 'a', 'Ð±' => 'b', 'Ð²' => 'v', 'Ð³' => 'g', 'Ð´' => 'd', 'Ðµ' => 'e', 'Ñ' => 'yo', 'Ð¶' => 'zh',
    'Ð·' => 'z', 'Ð¸' => 'i', 'Ð¹' => 'j', 'Ðº' => 'k', 'Ð»' => 'l', 'Ð¼' => 'm', 'Ð½' => 'n', 'Ð¾' => 'o',
    'Ð¿' => 'p', 'Ñ' => 'r', 'Ñ' => 's', 'Ñ' => 't', 'Ñ' => 'u', 'Ñ' => 'f', 'Ñ' => 'h', 'Ñ' => 'c',
    'Ñ' => 'ch', 'Ñ' => 'sh', 'Ñ' => 'sh', 'Ñ' => '', 'Ñ' => 'y', 'Ñ' => '', 'Ñ' => 'e', 'Ñ' => 'yu',
    'Ñ' => 'ya',
 
    // Ukrainian
    'Ð' => 'Ye', 'Ð' => 'I', 'Ð' => 'Yi', 'Ò' => 'G',
    'Ñ' => 'ye', 'Ñ' => 'i', 'Ñ' => 'yi', 'Ò' => 'g',
 
    // Czech
    'Ä' => 'C', 'Ä' => 'D', 'Ä' => 'E', 'Å' => 'N', 'Å' => 'R', 'Å ' => 'S', 'Å¤' => 'T', 'Å®' => 'U', 
    'Å½' => 'Z', 
    'Ä' => 'c', 'Ä' => 'd', 'Ä' => 'e', 'Å' => 'n', 'Å' => 'r', 'Å¡' => 's', 'Å¥' => 't', 'Å¯' => 'u',
    'Å¾' => 'z', 
 
    // Polish
    'Ä' => 'A', 'Ä' => 'C', 'Ä' => 'e', 'Å' => 'L', 'Å' => 'N', 'Ã' => 'o', 'Å' => 'S', 'Å¹' => 'Z', 
    'Å»' => 'Z', 
    'Ä' => 'a', 'Ä' => 'c', 'Ä' => 'e', 'Å' => 'l', 'Å' => 'n', 'Ã³' => 'o', 'Å' => 's', 'Åº' => 'z',
    'Å¼' => 'z',
 
    // Latvian
    'Ä' => 'A', 'Ä' => 'C', 'Ä' => 'E', 'Ä¢' => 'G', 'Äª' => 'i', 'Ä¶' => 'k', 'Ä»' => 'L', 'Å' => 'N', 
    'Å ' => 'S', 'Åª' => 'u', 'Å½' => 'Z',
    'Ä' => 'a', 'Ä' => 'c', 'Ä' => 'e', 'Ä£' => 'g', 'Ä«' => 'i', 'Ä·' => 'k', 'Ä¼' => 'l', 'Å' => 'n',
    'Å¡' => 's', 'Å«' => 'u', 'Å¾' => 'z'
  );
  
  $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
  
  if ($options['transliterate']) {
    $str = str_replace(array_keys($char_map), $char_map, $str);
  }
  
  $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
  
  $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
  
  $str = substr($str, 0, ($options['limit'] ? $options['limit'] : strlen($str)));
  
  $str = trim($str, $options['delimiter']);
  
  return $options['lowercase'] ? strtolower($str) : $str;
  
} 



function hyphenize($string) {
    $dict = array(
        "I'm"      => "I am",
        "thier"    => "their",
    );
    return strtolower(
        preg_replace(
          array( '#[\\s-]+#', '#[^A-Za-z0-9\. -]+#' ),
          array( '-', '' ),
          // the full cleanString() can be download from http://www.unexpectedit.com/php/php-clean-string-of-utf8-chars-convert-to-similar-ascii-char
          cleanString(
              str_replace( // preg_replace to support more complicated replacements
                  array_keys($dict),
                  array_values($dict),
                  urldecode($string)
              )
          )
        )
    );
}
function cleanString($text) {
    $utf8 = array(
        '/[áàâãªä]/u'   =>   'a',
        '/[ÁÀÂÃÄ]/u'    =>   'A',
        '/[ÍÌÎÏ]/u'     =>   'I',
        '/[íìîï]/u'     =>   'i',
        '/[éèêë]/u'     =>   'e',
        '/[ÉÈÊË]/u'     =>   'E',
        '/[óòôõºö]/u'   =>   'o',
        '/[ÓÒÔÕÖ]/u'    =>   'O',
        '/[úùûü]/u'     =>   'u',
        '/[ÚÙÛÜ]/u'     =>   'U',
        '/ç/'           =>   'c',
        '/Ç/'           =>   'C',
        '/ñ/'           =>   'n',
        '/Ñ/'           =>   'N',
        '/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
        '/[’‘‹›‚]/u'    =>   ' ', // Literally a single quote
        '/[“”«»„]/u'    =>   ' ', // Double quote
        '/ /'           =>   ' ', // nonbreaking space (equiv. to 0x160)
    );
    return preg_replace(array_keys($utf8), array_values($utf8), $text);
}


?>
