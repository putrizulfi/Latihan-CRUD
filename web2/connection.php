<?php

$hostDB = 'ec2-3-212-45-192.compute-1.amazonaws.com';
$portDB = '5432';
$nameDB = 'db49sr5cfk6vhd';
$userDB = 'zauufzasgsglmy';

$connection = pg_connect("host=$hostDB port=$portDB dbname=$nameDB user=$userDB password=$pwDB");

if($connection){

}else{
 
}
?>
