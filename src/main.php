<?php 

    include("./../vendor/autoload.php");

    use App\model\animais;
    use App\persistence\ConnectionFactory;

    //var_dump(new animais("Tia janaina de guaianases"));

    // $user = new animais("tia janaina de guaianases");

    $conn = ConnectionFactory::getConnection(); 

    $sql = "select * from animais";

    $conn->prepare($sql);

    echo print_r($conn, true); 

//echo "tia bete de guaianases"; 