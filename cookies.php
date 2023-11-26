<?php

if (empty($_SESSION['user_id'])){
    $cookie_name = "asdfasdff";
    $cookie_value = random_num(10);
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}
else{
    $cookie_name = $user_data['user_name'];
    $cookie_value = $user_data['user_id'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    
}

?>