<?php
// 以下配列の中身をfor文を使用して表示してください。
// 表が縦横に伸びてもある程度対応できるように柔軟な作りを目指してください。
// 表示はHTMLの<table>タグを使用すること

/**
 * 表示イメージ
 *  _________________________
 *  |_____|_c1|_c2|_c3|横合計|
 *  |___r1|_10|__5|_20|___35|
 *  |___r2|__7|__8|_12|___27|
 *  |___r3|_25|__9|130|__164|
 *  |縦合計|_42|_22|162|__226|
 *  ‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾
 */

$arr = [
    'r1' => ['c1' => 10, 'c2' => 5, 'c3' => 20],
    'r2' => ['c1' => 7, 'c2' => 8, 'c3' => 12],
    'r3' => ['c1' => 25, 'c2' => 9, 'c3' => 130]
];


?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>テーブル表示</title>
<style>
table {
    border:1px solid #000;
    border-collapse: collapse;
    text-align: right;
}
th, td {
    border:1px solid #000;
    text-align: right;
}
</style>
</head>
<body>
    <!-- ここにテーブル表示 -->
    <table>
        <?php
        //ヘッダー
            echo "<tr> <th>&nbsp;</th>";
            foreach ($arr['r1'] as $key =>$value) {
                echo "<th> $key </th>";
            }
            echo "<th>横合計</th></tr>";
        //データ行
        $rows = count($arr);
        $cols = count($arr['r1']);
        $totals = 0; // 初期化
        
            for($i=1; $i <=$rows; $i++){
                $sum = 0; // 行の合計値
                echo "<tr><td>r$i</td>"; 
                foreach ($arr["r{$i}"] as $value) {
                    echo "<td>$value</td>";
                    $sum += $value;
                    } 
                    $totals +=$sum;
                echo"<td>$sum</td></tr>";
            }
            
        //縦合計の列
            echo "<tr><td>縦合計</td>";

            $colsSum = array('c1'=> '0','c2'=>'0','c3'=>'0'); //列の合計

            for($j=1; $j <=$cols; $j++){ //ex) 1周目(c1の列の時)
                
                for($k=1; $k <=$rows; $k++){
                    $colsSum["c{$j}"] += $arr["r{$k}"]["c{$j}"];
                }
                echo "<td>{$colsSum["c{$j}"]}</td>";
            }
                echo"<td>$totals</td>";
            
                echo"</tr>";
        ?>
</body>
</html>