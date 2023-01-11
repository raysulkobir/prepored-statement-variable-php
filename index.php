<?php 
    include "inc/header.php";
     
?>
 

    <div class="para">
        <?php
 
             
            
        $db = new mysqli("localhost","root", "", "userdata");
            if(mysqli_connect_errno()){
                echo "Connecting fail...";
            }
            else{
                echo "Connection Sucessfull....";
            }
            
            $sql = "insert into tbl_user(name,skill) value(?,?)";
            $stmt = $db->prepare($sql);
            $stmt->bind_param("sss",$name,$skill);
            
            $name = "Md.faruk";
            $skill = "html";

            $stmt->execute();
            $stmt->close();
            $db->close();
            
                 
         ?>
       
     </div>
 
<?php include "inc/footer.php"; ?>