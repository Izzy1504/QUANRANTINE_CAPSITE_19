<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["login"])) {
    // Chuyển hướng đến trang "index.html" sau khi ấn nút "LET'S GO"
    header("Location:index.html");
    exit;
}
?>