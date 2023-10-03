<?php
require "../config/connect.php";

if (isset($_POST['sbmSua'])) {
    $ma_tloai = $_POST['ma_tloai'];
    $ten_tloai = $_POST['ten_tloai'];

    // Check if the updated category name already exists
    $sql_check = "SELECT * FROM theloai WHERE ten_tloai = :ten_tloai AND ma_tloai != :ma_tloai";
    $stmt = $conn->prepare($sql_check);
    $stmt->bindParam(':ten_tloai', $ten_tloai);
    $stmt->bindParam(':ma_tloai', $ma_tloai);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        header("Location: edit_category.php?error=existed");
        exit(); // Terminate the script after redirecting
    } else {
        // Update the category name
        $sql_update = "UPDATE theloai SET ten_tloai = :ten_tloai WHERE ma_tloai = :ma_tloai";
        $stmt = $conn->prepare($sql_update);
        $stmt->bindParam(':ten_tloai', $ten_tloai);
        $stmt->bindParam(':ma_tloai', $ma_tloai);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            header("Location: category.php?success=updated");
            exit(); // Terminate the script after redirecting
        }
    }
}

// Additional code or error handling can be added below this comment if necessary
?>