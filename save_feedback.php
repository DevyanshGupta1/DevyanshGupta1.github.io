<?php
if($_POST){
    $file = "feedback.csv"; // file saved in same folder
    $data = [
        $_POST['name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['feedback'],
        date("Y-m-d H:i:s") // timestamp
    ];

    // Open file in append mode ("a") to keep all feedback
    $fp = fopen($file, "a");
    if(fputcsv($fp, $data)){
        fclose($fp);
        echo "success";
    } else {
        echo "error";
    }
}
?>
