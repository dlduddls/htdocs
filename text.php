<html>
    <head></head>

<body>
<?php
print PHP_VERSION;
print PHP_05;
define("HELLO", "안녕하세요");
print HELLO. "<br>";
define("_18", "ㅁㄴㅇㄹ");
print _18;
print _DIR_;

?>
   <li>
4번</li>
<?php
    $data="안녕하세요!";
    $data1=1;
    print $data;
    print $data1; //자동으로 타입 변환됩니다.
$week[]="월";
$week[]="화";
//위의 코드와 같은 의미입니다.
$week[0]="월";
$week[1]="화";
print $week[0];
print $week[1];
    
 ?>
    </body>
</html>