<?php

    mt_srand((double)microtime() * 1000000);
    
    $rand_num = mt_rand(1, 18);

    $query="SELECT * FROM randmeal WHERE id = ".$rand_num;

    $result = mysqli_query($dbConn, $query);

    $row=mysqli_fetch_assoc($result);

    $menu=$row['menu'];

?>