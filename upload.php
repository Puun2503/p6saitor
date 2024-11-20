<?php
// โฟลเดอร์สำหรับเก็บไฟล์ที่อัพโหลด
$targetDir = "pic/";

// ตรวจสอบว่ามีการส่งไฟล์เข้ามาหรือไม่
if (isset($_FILES["file"])) {
    $file = $_FILES["file"];
    $fileName = basename($file["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    // ตรวจสอบประเภทไฟล์
    $allowedTypes = array("jpg", "jpeg", "png", "gif", "mp4", "mov", "avi");
    if (in_array($fileType, $allowedTypes)) {
        // ย้ายไฟล์ไปยังโฟลเดอร์เป้าหมาย
        if (move_uploaded_file($file["tmp_name"], $targetFilePath)) {
            echo "File uploaded successfully!";
        } else {
            echo "Error uploading the file.";
        }
    } else {
        echo "Unsupported file type.";
    }
} else {
    echo "No file uploaded.";
}
?>
