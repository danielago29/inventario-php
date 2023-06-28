<?php 
    require_once 'vendor/autoload.php';
    use App\Database;
    use Models\Pais;
    $db = new Database();
    $conn = $db->getConnection('mysql');
    Pais::setConn($conn);

?>