<?php
/**
 * Created by PhpStorm.
 * User: Miles
 * Date: 10/28/2014
 * Time: 7:07 PM
 */

$ch=curl_init('https://hooks.slack.com/services/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');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,"payload={\"text\":\"Testing...O000\"}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$data = curl_exec($ch);
curl_close($ch);
