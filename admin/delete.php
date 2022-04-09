<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
            include('../config/constants.php');

        $id=$_GET['id'];
                $delete="DELETE FROM tbl_order WHERE id=$id";
                $query = mysqli_query($conn, $delete);
                if($query==true){
                    $_SESSION['delete'] = "<div class='success'>order deleted successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-order.php');
                }else{
                    $_SESSION['delete']="<div class='error'>Fail to delete order</div>";
                    header('location:'.SITEURL.'admin/manage-order.php') ;    
                }
        ?>
    </body>
</html>
