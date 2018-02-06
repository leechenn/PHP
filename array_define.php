<?php
$arr = array(10,20,30);
print_r($arr);
echo $arr[1];
$userInfo = array("shifu"=> "people1");
echo $userInfo["shifu"];
$user=array(array("wukong","bajie"),array("songjiang","wusong"));
echo "<br>",$user[0][0];
 ?>
 <?php

 // $arr = array(10,20,30);
 foreach($arr as $item){
   echo $item."</br>";
 }
 for($i = 0;$i < count($arr);$i++){
   echo $arr[$i]."</br>";
 }
 foreach($arr as $k => $v){
   echo $k.'---'.$v."</br>";
 }
 $arr=array("hh","cas","pear"=>"lizi","watermelon"=>"xiguya","apple"=>"pingguo","vsdvsd");
 print_r($arr);
// $curItem = each($arr);
// list($k,$v) = $curItem;
// echo $k . '---' . $v;
while(list($k,$v) = each($arr)){
  echo $k.'---'.$v."<br/>";
}
$userInfo = array(
  array("name"=>"wukong","age"=>500),
  array("name"=>"bajie","age"=>400),
  array("name"=>"shashidi","age"=>300)
);
// list require reset, but not foreach
for($i=0;$i<count($userInfo);$i++){
  foreach($userInfo[$i] as $k => $v){
    echo " ". $k.'--->'.$v;
  }
  echo "<br/>";
  foreach($userInfo as $k=>$v){
    foreach($v as $k2=>$v2){
      echo $k2 ."---".$v2;
    }
    echo "<br/>";
  }
}
 ?>
