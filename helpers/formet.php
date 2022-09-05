<?php
class format{

public function validation($data){
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

}

?>