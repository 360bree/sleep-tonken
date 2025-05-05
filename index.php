<?php
// bcopperw

$pageName = "Home";
require "header.php";

// Fetch ID and title from the database
$sql = "SELECT ID, title FROM pages_bcopperw ORDER BY title ASC";
$result = $pdo->query($sql);
?>

<p>Hello. My name is Bryanna Copperwheat, I'm an Information Systems major, with a minor Psychology.</p>

<h2>Pages</h2>

    <?php foreach($result as $row): ?>
	   <ul>
		<li>
		  <a href="pageview.php?q=<?= $row['ID'] ?>">
                <?= htmlspecialchars($row['title']) ?>
         </a>
		</li>
	   </ul>
	  <?php endforeach; ?>


<?php
require "footer.php";
?>
