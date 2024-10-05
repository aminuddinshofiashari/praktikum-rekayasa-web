<?php
#array to json
    $age = array("peter"=>35,"Ben"=>37,"Joe"=>43);
    echo json_encode($age);

    $cars = array("Volvo", "BMW", "Toyota");
    echo json_encode($cars);
    #json to object
    $jsonobj = '{"Peter":"duhe","Ben":37,"Joe":43}';
    $obj = json_decode($jsonobj); 
    #mengakses nilai objek
    echo $obj->Peter;
    echo $obj->Ben;
    echo $obj->Joe;
    $arr = json_decode($jsonobj,true);
    #mengakses nilai objek
    echo $arr["Peter"];
    echo $arr["Ben"];
    echo $arr["Joe"];
    
?>