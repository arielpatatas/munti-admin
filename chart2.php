<?php 
    header('access-control-allow-origin: *');
    header('content-type: application/json');
?>

<?php 

    $conn = mysqli_connect('localhost','root','','tms');

    $sql = "select count(*) as c FROM `tblbooking` where PackageId = 1";
    $sql2 = "select count(*) as c FROM `tblbooking` where PackageId = 2";
    $sql3 = "select count(*) as c FROM `tblbooking` where PackageId = 3";
    $sql4 = "select count(*) as c FROM `tblbooking` where PackageId = 4";
    $sql5 = "select count(*) as c FROM `tblbooking` where PackageId = 5";
    $sql6 = "select count(*) as c FROM `tblbooking` where PackageId = 6";
    
    $result = $conn->query($sql);
    $result2 = $conn->query($sql2);
    $result3 = $conn->query($sql3);
    $result4 = $conn->query($sql4);
    $result5 = $conn->query($sql5);
    $result6 = $conn->query($sql6);

    $a =1 ;
    $b =1;
    $c =1;
    $d =1 ;
    $e =1;
    $f =1;

    while ($row = $result->fetch_assoc()) {
        $a = $row['c'];
    }
    while ($row = $result2->fetch_assoc()) {
        $b = $row['c'];
    }
    while ($row = $result3->fetch_assoc()) {
        $c = $row['c'];
    }
    while ($row = $result4->fetch_assoc()) {
        $d = $row['c'];
    }
    while ($row = $result5->fetch_assoc()) {
        $e = $row['c'];
    }
    while ($row = $result6->fetch_assoc()) {
        $f = $row['c'];
    }

    $last = array($a,$b,$c,$d,$e,$f);

    echo json_encode($last,JSON_NUMERIC_CHECK);

?>