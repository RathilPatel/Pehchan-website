<?php
header("Content-Type: application/json");
$folder ="../playingsports";
$jsonData = "{";
$dir = $folder."/";
$dirHandle =opendir($dir);
$i = 0;
while ($file = readdir($dirHandle)) {
  if(!is_dir($file) && strpos($file, '.jpg')){
    $i++;
    $src = "$dir$file";
    $jsonData .= '"img'.$i.'":{ "num":"'.$i.'","src":"'.$src.'", "name":"'.$file.'"},';
  }
}
closedir($dirHandle);
$jsonData = chop($jsonData, ",");

$jsonData .= '}';
// echo $jsonData;
$var1 = json_decode($jsonData);
// '<div class="materialboxed"><img src="'. $var1->img[$var1]->src .'"></div>';

foreach ($var1 as $obj ) {
?>
  <div class="materialboxed">
    <img src="<?php echo $var1->img1->src; ?>"/>
  </div>
<?php
}
?>
