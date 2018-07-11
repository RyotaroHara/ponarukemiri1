<form method=post action="<?=$_SERVER["PHP_SELF"]?>">
　　<table>
<tr>
<td>
<select name= "yyyy"> ;
<?php
//年
for ($i =2005; $i <=2020; $i++) {
echo "<option>$i";
}
echo "</select>年"; 

//月
echo "<select name= \"mm\">" ;
for ($i =1; $i <=12; $i++) {
echo "<option>$i";
}
echo "</select>月";


//日
echo "<select name= \"dd\">" ;
for ($i =1; $i <=31; $i++) {
echo "<option>$i";
}
echo "</select>日";
?>
</td>
<td><input type="submit" value="送信" name="sub1"></td>
</tr>
</table>
< /form>
<?php
//日付データを受け取る 
$yyyy = @$_POST["yyyy"];
$mm = @$_POST["mm"];
$dd = @$_POST["dd"];

if (empty($yyyy)) { //年が空かどうかチェック
echo "日付を入力して「送信」をクリックしてください<br> ";
}
else {


//正しい日付かをチェック
If (checkdate($mm, $dd, $yyyy)) {
echo "$yyyy/$mm/$dd は正しい日付です";
}
else {
echo "$yyyy/$mm/$dd は正しい日付ではありません";
}
}
?>