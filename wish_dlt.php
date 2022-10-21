<?php
    include'config.php';
    $pdt_id = $_REQUEST['id'];
    $user_id = $_COOKIE['user_id'];

    $sql="DELETE FROM wish where product_id='$pdt_id' AND user_id='$user_id' ";
    $run=mysqli_query($con,$sql);
    if($run){
        echo "
            <script>
                alert('Successfully deleted');
                window.location.href='wishlist.php';
            </script>
        ";
    }
    // else{
    //     echo "
    //     <script>
    //         alert('Couldn't Delete!');
    //         window.location.href='products-list.php';
    //     </script>
    // ";
    // }
?>
