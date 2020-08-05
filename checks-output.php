<?php

foreach($_REQUEST['genre']as $item){
    echo'<p>',$item,'</p>';
}
echo 'に関するお買い得情報をお送りさせて頂きます。';
?>


var_dump( $_POST['genre']);
//これをループせずにカンマで区切って1行の文字列として表示する implode()

echo implode(",", $_POST['genre']);
//カンマ区切りにして「カメラ、時計」