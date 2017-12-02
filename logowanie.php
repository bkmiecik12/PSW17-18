<?php

    session_start();

    $users[0] = array("test","test");
    $users[1] = array("aaa","bbbb");
    $users[2] = array("janusz23","Trololo");

    for($i=0;$i<3;$i++){
        if($users[$i][0]==$_POST['login'] && $users[$i][1]==$_POST['pass']){
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['pass'] = $_POST['pass'];

            header('Location: index.php');
        }
    }

?>