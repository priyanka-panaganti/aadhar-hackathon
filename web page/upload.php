<?php

if(isset($_REQUEST['submit'])){
    $name =$_FILES["filetoupload"]["name"];
    $password=$_REQUEST['password'];
$target ='zipfile/'.$_FILES["filetoupload"]["name"];
move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target);
#echo $name;
$rand= rand(1000,9999);
$zip = new ZipArchive;

if ($zip->open('zipfile/'.$name) == TRUE) {

    $zip -> setPassword($password);

    $zip -> extractTo('zipfile/xml/'.$rand);
    $zip -> close();
    $dir= 'zipfile/xml/'.$rand;
    $files = scandir($dir,1);
    $xml_file_name = $files['0'];
    $read_xml=simplexml_load_file($dir."/".$xml_file_name);
    $json_encode = json_encode($read_xml);
    $array = json_decode($json_encode , true);
    echo $array['UidData'] ['Poi'] ['@attributes']['name'] ."<br>";
    echo $array['UidData'] ['Poi'] ['@attributes']['dob'] ."<br>";
    echo $array['UidData'] ['Poi'] ['@attributes']['gender']."<br>" ;
     $image= $array['UidData'] ['Pht'] ;
    $base64_decode = base64_decode($image);
    file_put_contents($rand.".png",$base64_decode);
?>
<img src="<?php echo $rand.".png" ?>" alt="">
<?php

}  else {
  
    echo "failed";
}
}

?>  

