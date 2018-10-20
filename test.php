<?php


if ($db = new mysqli("localhost", "root", "", "alumsni") or die("Can't Connect to database"))
{
    echo "success";
}
else{
    echo "failed";
}

?>