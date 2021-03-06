---------------------------------------
            SAFE CONNECTION            
---------------------------------------

<?php #Config

    const HOST = 'localhost';
    const DB = 'pdo_study';
    const USER = 'root';
    const PASSWORD = '';

?>

<?php #SLQ CONNECTION

    try {
        $pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DB, USER, PASSWORD, array(
            PDO :: MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        )); 
        
        // Error mode
        $pdo -> setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo 'Data Base connect error';
    }

?>