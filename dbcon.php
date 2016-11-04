<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
try {
    $pdo=new PDO('mysql : host=localhost;dbname=practice; charset=utf8', 'root', '');
    $pdo->setAttribute(PDO:ATTR_ERRMODE, PDO:ERRMODE_EXEPTION);
    $pdo->setAttribute(PDO:ATTR_EMULATE_PREPARES, FALSE);
        print "접속성공<br>";
} catch (PDOException $Exception) {
    die("접속오류:".$Exception->getMessage()."<br>");
    
}