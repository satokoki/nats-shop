<?php
 
$word1 = $_POST['word1'];
$word2 = $_POST['word2'];
 
echo "<p>{$word1}と{$word2}を入力しました。</p>";
 
//echo json_encode(array("word1"=>$word1,"word2"=>$word2));//JSON形式で返す場合