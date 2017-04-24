<?php


try {
        $db = new PDO('mysql:host=localhost;dbname=fixed_asset', 'root','plass');
        // var_dump($db);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // echo "Connected to Database";
} catch (Exception $e) {
    echo "Cannot connect to the DB! :". $e->getMessage() . " <br>";
    // TODO: use get 
    // echo $e->getMessage();
   
    // echo $e->getMessage();    
    // echo $e->getFile();
    exit;
}

// get full array

    try {
        $results = $db->query("SELECT * FROM masterfile ");
        // echo "<br> Retrieved results successfully"; 
    } catch (Exception $e) {
        echo "<br> Unable to retrieve results";
        exit;
    }

// var_dump($results->fetchAll(PDO::FETCH_ASSOC));
    $catalog = $results->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($catalog);
    // var_dump($catalog);
    // return $catalog;

    // echo json_encode($rows);