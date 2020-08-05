<?php require '../header.php';?>
<?php
var_dump(isset($_REQUEST['tel']));
var_dump(!empty($_REQUEST['tel']));
// emptyは値があればfalseと返す関数
// 入力した場合、true false
//未入力の場合、 true true
//テキストBOXなら!emptyで評価する

//string(0) ""bool(true)  未入力
//string(4) "1234"bool(true) 1234と入力

if (isset($_REQUEST['mail'])){
    echo 'お買い得情報のメールをお送りさせて頂きます。';
} else {
    echo 'お買い得情報のメールはお送りさせて頂きません。';
}
?>
<?php require '../footer.php';?>