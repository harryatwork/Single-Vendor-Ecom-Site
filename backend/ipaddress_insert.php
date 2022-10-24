<?php 
    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    $ip_address = get_client_ip();

    date_default_timezone_set("Canada/Central");
    $date = date('Y-m-d');    

    if(isset($_SESSION["login"])) { 
        $u_id = $_SESSION["u_id"];
        $sql_ip = "SELECT * from users WHERE id = ?";
        $stmt_ip = $conn->prepare($sql_ip);
        $stmt_ip->bind_param("s",$u_id);
        $stmt_ip->execute();
        $result_ip = $stmt_ip->get_result();
        if($result_ip->num_rows>0) {
        while($row_ip = $result_ip->fetch_assoc()) {
            $u_id = $row_ip["id"];
            $_SESSION["u_id"] = $u_id;
            $_SESSION["ip_address"] = 0;
        } } else { }
    } else {
        $sql_ip = "SELECT * from users WHERE ip_address = ?";
        $stmt_ip = $conn->prepare($sql_ip);
        $stmt_ip->bind_param("s",$ip_address);
        $stmt_ip->execute();
        $result_ip = $stmt_ip->get_result();
        if($result_ip->num_rows>0) {
        while($row_ip = $result_ip->fetch_assoc()) {
            $u_id = $row_ip["id"];
            $_SESSION["u_id"] = $u_id;
            $_SESSION["ip_address"] = 0;
        } } else {
            $sql = "INSERT INTO users (ip_address)
                        values('$ip_address')";
            if ($conn->query($sql) === TRUE) { 
                $last_id = $conn->insert_id;
                $u_id = $last_id;
                $_SESSION["u_id"] = $last_id;
                $_SESSION["ip_address"] = 0;
            } else {
                // echo $sql -> error;
            }
        }
    }

    