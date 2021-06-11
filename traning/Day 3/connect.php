<?php


if(isset($_POST['member'])){
    $member = $_POST['member'];
    $pr = $_POST['pr'];

    if(!empty($member) || !empty($pr)){
        require(config.php);

    }
    else{
        echo "All field are reqired"
        die()
    }

    
    $query = "INSERT INTO `MyTable`(`member`, `pers`) VALUES ('$member','$pr')";
    $result = mysqli_query($conn,$query);

    if ($result == true) {
        echo "<h3> inserted </h3>"
    }

}


?>