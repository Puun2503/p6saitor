<?php
// โฟลเดอร์ที่เก็บรูปภาพ
$directory = "pic/";

// อ่านชื่อไฟล์ทั้งหมดในโฟลเดอร์
$files = array_diff(scandir($directory), array('.', '..'));

// กรองเฉพาะไฟล์รูปภาพและวิดีโอ (jpg, png, jpeg, gif, mp4, mov, avi)
$media = array_filter($files, function($file) use ($directory) {
    $filePath = $directory . $file;
    return is_file($filePath) && preg_match('/\.(jpg|jpeg|png|gif|mp4|mov|avi)$/i', $file);
});

// ส่งผลลัพธ์กลับในรูปแบบ JSON
header('Content-Type: application/json');
echo json_encode(array_values($media));
?>
	