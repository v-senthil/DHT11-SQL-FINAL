<?php
class dht11{
 public $link='';
 function __construct($temperature, $humidity){
  $this->connect();
  $this->storeInDB($temperature, $humidity);
 }
 
 function connect(){
  $this->link = mysqli_connect('localhost','root','') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'<dht11>') or die('Cannot select the DB');
 }
 
 function storeInDB($temperature, $humidity){
  $query = "insert into <Data> set humidity='".$humidity."', temperature='".$temperature."'";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
 
}
if($_GET['temperature'] != '' and  $_GET['humidity'] != ''){
 $dht11=new dht11($_GET['temperature'],$_GET['humidity']);
}
?>
