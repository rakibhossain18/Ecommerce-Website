<?php
include'../config.php';
$usr_id = $_REQUEST['id'];
$sql="DELETE FROM user where ID = '$usr_id'";
$run=mysqli_query($con,$sql);
if($run){
    echo "
<script>
    alert('Successfully deleted');
    window.location.href='user.php';
</script>
";
}
else{
    echo "
    <script>
        alert('Couldn't Delete!');
        window.location.href='user.php';
    </script>
";
}
?>
