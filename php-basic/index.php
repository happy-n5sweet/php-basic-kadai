<?php
//1行コメント

echo 'こんにちは！';

/*
複数行
コメント
*/

//  Ctrl + / コメントショートカット


//  文字列型
echo 'こんにちは';
echo "今日はいい天気ですね";

// 整数型
echo 100;

// 浮動小数点型
echo 0.1;

// 論理型
echo TRUE;
echo FALSE;

// 文字列の連結（ドットを使う）
        echo '45' . '18';
        echo '<br>';
        echo '今日の天気は' . '晴れ';
        echo '<br>';
        echo '今日の天気は' . '曇り';

        echo '80';

        echo '<br>';
         
    $score1=80;
    $score2=60;
    $score3=55;
    $score4=40;
    $score5=100;
    $score6=25;
    $score7=80;
    $score8=95;
    $score9=30;
    $score10=60;

    
    $total=$score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10;

    $average=$total/10;
    
    echo $average;
?>