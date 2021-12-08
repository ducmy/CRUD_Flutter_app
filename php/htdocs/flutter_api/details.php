<?php
header('Content-Type: application/json');
include "../flutter_api/db.php";

$id = (int) $_POST['id']; // Web can change this to $_GET method if you want

$stmt = $db->prepare("SELECT name, age FROM student WHERE ID = ?");
$stmt->execute([$id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode([
'result' => $result
]);