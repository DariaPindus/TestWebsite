<?php
    $db = mysql_connect ('localhost','root','')or die ("Невозможно соединится с MySQL!");
    mysql_select_db ('Pindus',$db) or die ("Невозможно выбрать базу данных!");
?>