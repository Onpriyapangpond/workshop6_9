<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8">
<script>
function confirmDelete(username) {
var ans = confirm("ต้องการลบสมาชิก" + username);
if (ans==true) 
document.location = "delete.php?username=" + username;
}
</script>
</head>
<body>
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
while ($row = $stmt->fetch()) {

echo "name : " . $row ["name"] . "<br>";
echo "address : " . $row ["address"] . "<br>";
echo "email : " . $row ["email"] . "<br>";

echo "<a href='#' onclick=confirmDelete('" . $row ["username"] . "')>ลบ</a>";
echo "<hr>\n";
}
?>
</body>
</html>