<?php include("../../db.php");

$trigger = $_POST["trigger"];
$trigger($_POST["condition"],$_POST["limit"],$_POST["return_values"]);

function orders($condition,$limit,$return_values) {
    global $conn;
    $return_values = explode(',', $return_values);
    $return_values_count = count($return_values);

    $query_return_values = [];
    $sql_orders = "SELECT * FROM orders WHERE $condition";
    $result_orders = $conn->query($sql_orders);
    if($result_orders->num_rows > 0) {
    while($row_orders = $result_orders->fetch_assoc()){
        $query_return_values_indi = [];
        for($i=0;$i<$return_values_count;$i++) {
            $value = $row_orders[$return_values[$i]];
            $query_return_values_indi[] = $value;
        }
        $query_return_values[] = $query_return_values_indi;
    } } else { }    
    echo json_encode($query_return_values);
}
