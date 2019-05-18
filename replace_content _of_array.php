<?php
/**
*@param $find is what you want to replace
*@param $replace is what you want to replace it wit i.e new value
*@param $array is the original array
*/
function replace_key($find, $replace, $array) {
 $arr = array();
 foreach ($array as $key => $value) {
  if ($key == $find) {
   $arr[$replace] = $value;
  } else {
   $arr[$key] = $value;
  }
 }
 return $arr;
 
 //if its a php file as array,. e.g laravel cinfig file
   //$data = var_export($array,1);
   // File::put(config_path('filename.php'),"<?php\n return ". $data .";");
}

//example
$array = array('test' => 0, 'replace this' => 1, 3 => 'hey');
echo '<pre>', print_r($array, true), '</pre>';
$array = replace_key('replace this', 'with this', $array);
echo '<pre>', print_r($array, true), '</pre>';
?>
