<html>
<?php
//シングルクオートとダブルの違い
$a=1234;
echo "値段は$a";
echo '値段は$a';
?>
   ""は変数を展開する。
   ''はしない
<?php
echo"<p id='$a'>段";   
echo'<p id="$a">段'; 
//コーテーションの中はただの文字意味を持った記号ではない
//文字として書き出されたあとはHTML側で意味のある記号として扱われる
?>

</body>
</html>
