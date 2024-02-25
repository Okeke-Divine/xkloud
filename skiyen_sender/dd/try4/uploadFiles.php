<?php

$file_name = $_FILES['multiple_files']['name'];
$temp_file_name = $_FILES['multiple_files']['tmp_name'];
$total_files = count($temp_file_name);
for ($i = 0; $i < $total_files; $i++) {
    if (move_uploaded_file($temp_file_name[$i], "Destination/" . $file_name[$i])) {
        echo "Succesfull uploaded";
    }
}
