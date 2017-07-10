<?php
$mysqli = new mysqli("localhost", "root", "081376611", "personal");
if ($mysqli->connect_errno) {
    <span id="IL_AD9" class="IL_AD">echo</span> "Failed to connect to MySQL: " . $mysqli->connect_error;
}
?>