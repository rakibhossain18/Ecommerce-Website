<?php
include'../config.php';
$pdt_id = $_REQUEST['id'];
$sql="DELETE FROM products where ID = '$pdt_id'";
$run=mysqli_query($con,$sql);
if($run){
    echo "
<script>
    alert('Successfully deleted');
    window.location.href='products-list.php';
</script>
";
}
else{
    echo "
    <script>
        alert('Couldn't Delete!');
        window.location.href='products-list.php';
    </script>
";
}
?>
