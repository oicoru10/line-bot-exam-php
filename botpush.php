<?php



require "vendor/autoload.php";

$access_token = '/DJOA67LCUK/1Wt/YlQBhgRvCQh/bTA2H+6Oc9c2yt3N2YObVEgFXxlAw7/CCx5bY2R/8a25i+Nuir5h1c1FT9gg7GLKRjmtplSoPvF7lAiL9aFvsbNQV7eSlUBsTxWGhClOjBwfeAWgYnHov9/7aQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'ef410ca44d0502656720084f014c53fa';

$pushID = 'U1433d8e7fabdefa79463b15e1924b4d0';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







