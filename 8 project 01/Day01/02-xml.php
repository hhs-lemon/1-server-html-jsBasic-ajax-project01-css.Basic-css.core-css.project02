<?php
   #1.添加消息头
    header("Content-Type:application/xml");
   #2.拼xml格式的字符串
    $xml="<?xml version='1.0' encoding='utf-8'?>";
	$xml.="<studentlist>";
	   $xml.="<student>";
	      $xml.="<Name>张无忌</Name>";
		  $xml.="<Age>20</Age>";
	   $xml.="</student>";
	$xml.="</studentlist>";
	echo $xml;

?>