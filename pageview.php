<?php
//bcopperw
session_start();
require "header.php";

if (!isset($_GET['q'])) {
    echo "<p class='error'>Error accessing page.</p>";
    require "footer.php";
    exit;
}

$pageID = trim($_GET['q']);

// Query
$sql = "SELECT *
        FROM pages_bcopperw p
        JOIN users_bcopperw u ON p.userID = u.ID
        WHERE p.ID = :pageID";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':pageID', $pageID);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<h3>Page View</h3>
<table>
    <tr><th>Title:</th><td><?php echo $row['title']; ?></td></tr>
    <tr><th>Details:</th><td><?php echo $row['details']; ?></td></tr>
    <tr><th>Created:</th><td><?php echo $row['created']; ?></td></tr>
    <tr><th>Updated:</th><td><?php echo $row['updated']; ?></td></tr>
    <tr><th>Owner:</th><td><?php echo ($row['fname'].' '.$row['lname']); ?></td></tr>
	<br>
</table>

<?php require "footer.php"; ?>

