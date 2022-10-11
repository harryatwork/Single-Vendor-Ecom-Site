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

function products($condition,$limit,$return_values) {
    global $conn;
    $return_values = explode(',', $return_values);
    $return_values_count = count($return_values);

    $query_return_values = [];
    $sql_products = "SELECT * FROM products WHERE $condition";
    $result_products = $conn->query($sql_products);
    if($result_products->num_rows > 0) {
    while($row_products = $result_products->fetch_assoc()){
        $query_return_values_indi = [];
        for($i=0;$i<$return_values_count;$i++) {
            $value = $row_products[$return_values[$i]];
            $query_return_values_indi[] = $value;
        }
        $query_return_values[] = $query_return_values_indi;
    } } else { }    
    echo json_encode($query_return_values);
}

function users($condition,$limit,$return_values) {
    global $conn;
    $return_values = explode(',', $return_values);
    $return_values_count = count($return_values);

    $query_return_values = [];
    $sql_users = "SELECT * FROM users WHERE $condition";
    $result_users = $conn->query($sql_users);
    if($result_users->num_rows > 0) {
    while($row_users = $result_users->fetch_assoc()){
        $query_return_values_indi = [];
        for($i=0;$i<$return_values_count;$i++) {
            $value = $row_users[$return_values[$i]];
            $query_return_values_indi[] = $value;
        }
        $query_return_values[] = $query_return_values_indi;
    } } else { }    
    echo json_encode($query_return_values);
}

function categories($condition,$limit,$return_values) {
    global $conn;
    $return_values = explode(',', $return_values);
    $return_values_count = count($return_values);

    $query_return_values = [];
    $sql_categories = "SELECT * FROM categories WHERE $condition";
    $result_categories = $conn->query($sql_categories);
    if($result_categories->num_rows > 0) {
    while($row_categories = $result_categories->fetch_assoc()){
        $query_return_values_indi = [];
        for($i=0;$i<$return_values_count;$i++) {
            $value = $row_categories[$return_values[$i]];
            $query_return_values_indi[] = $value;
        }
        $query_return_values[] = $query_return_values_indi;
    } } else { }    
    echo json_encode($query_return_values);
}

function subcategories($condition,$limit,$return_values) {
    global $conn;
    $return_values = explode(',', $return_values);
    $return_values_count = count($return_values);

    $query_return_values = [];
    $sql_subcategories = "SELECT * FROM subcategories WHERE $condition";
    $result_subcategories = $conn->query($sql_subcategories);
    if($result_subcategories->num_rows > 0) {
    while($row_subcategories = $result_subcategories->fetch_assoc()){
        $query_return_values_indi = [];
        for($i=0;$i<$return_values_count;$i++) {
            $value = $row_subcategories[$return_values[$i]];
            $query_return_values_indi[] = $value;
        }
        $query_return_values[] = $query_return_values_indi;
    } } else { }    
    echo json_encode($query_return_values);
}

function reviews($condition,$limit,$return_values) {
    global $conn;
    $return_values = explode(',', $return_values);
    $return_values_count = count($return_values);

    $query_return_values = [];
    $sql_reviews = "SELECT * FROM reviews WHERE $condition";
    $result_reviews = $conn->query($sql_reviews);
    if($result_reviews->num_rows > 0) {
    while($row_reviews = $result_reviews->fetch_assoc()){
        $query_return_values_indi = [];
        for($i=0;$i<$return_values_count;$i++) {
            $value = $row_reviews[$return_values[$i]];
            $query_return_values_indi[] = $value;
        }
        $query_return_values[] = $query_return_values_indi;
    } } else { }    
    echo json_encode($query_return_values);
}
