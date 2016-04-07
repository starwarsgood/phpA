 <meta charset="Utf-8">
 <?php
    $host="localhost";
    $user="root";
    $pass=""; 
    $db_name="asdfgh";
    $link=mysql_connect($host,$user,$pass);
    mysql_select_db($db_name,$link);

    $sql = mysql_query("SELECT * FROM  `asfd` ORDER BY  `asfd`.`id`", $link);
    while ($result = mysql_fetch_array($sql)) {
        echo "Выводим список табельных номеров = ".$result['id']." <br>";
    }
?> 