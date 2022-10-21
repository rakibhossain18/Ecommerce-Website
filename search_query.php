<?php include 'config.php'; ?>


<?php
    $sql = "SELECT * FROM 'products' WHERE 'Product_Name' LIKE '%$search%' ";
    $run=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run))
?> 


<?php
    function search($search) {
        global $conn;

        // $sql = "SELECT * FROM travels WHERE title LIKE '%$search%' OR description LIKE '%$search%'";
        $sql = "SELECT * FROM 'products' WHERE 'Product_Name' LIKE '%$search%' ";
        $result = $conn -> query($sql);
        $list = array();

        while($row = $result->fetch_assoc()) {
            $list[] = $row;
        }
        return $list;
    }

?>









<!-- SELECT * FROM 'products' WHERE 'Product_Name' LIKE '%$search%' -->

<?php
    // function search($search) {
    //     global $conn;

    //     // $sql = "SELECT * FROM travels WHERE title LIKE '%$search%' OR description LIKE '%$search%'";
    //     $sql = "SELECT * FROM 'products' WHERE 'Product_Name' LIKE '%$search%' ";
    //     $result = $conn -> query($sql);
    //     $list = array();

    //     while($row = $result->fetch_assoc()) {
    //         $list[] = $row;
    //     }
    //     return $list;
    // }

?>


