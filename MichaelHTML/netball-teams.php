<?php
$conn = new mysqli("localhost", "myuser", "mypass", "mydb");
$mode = 'list';
if (isset($_REQUEST['mode']))
	$mode = $_REQUEST['mode'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Netball database</title>
	</head>
	<body>
		<ul>
			<li><a href="?mode=list">List teams</a>
			<li><a href="?mode=coaches">List teams with coaches</a>
			<li><a href="?mode=coaches_captains">List teams with coaches and captains</a>
			<li><a href="?mode=list_players">List players on a particular team</a>
			<li><a href="?mode=show_player">Show individual player bio details, including team and positions</a>			
			<li><a href="?mode=list_positions">List players on a particular team who play a particular position</a>
			<li><a href="?mode=edit_player">Edit a player</a>
			<li><a href="?mode=remove_player">Remove player</a>
			<li><a href="?mode=add_player">Add new player</a>
			<li><a href="?mode=results_table">Generate a table of results across the league</a>
		</ul>
<?php
	if ($mode == 'list') {
?>
		<h1>List of teams</h1>
		<table>
<?php
		$result = $conn->query("SELECT * FROM teams;");
		foreach ($result as $row) {
?>
			<tr><td><?php echo $row['name']?></td></tr>
<?php
		}
?>
		</table>
<?php
} elseif ($mode == 'list_players') {
	$team = 0;
	if (isset($_REQUEST['team']))
		$team = $_REQUEST['team'];
?>
		<h1>List of players on team</h1>
		<form method="get">
		<select name="team">
<?php
		$result = $conn->query("SELECT * FROM teams;");
		foreach ($result as $row) {
?>
			<option value="<?=$row['id']?>"<?php
				# This selects the current team we're looking at, if any
				if ($team == $row['id']) {echo " selected";}
			?>><?=$row['name']?></option>
<?php
		}
?>
		</select>
		<input type="hidden" value="list_players" name="mode" />
		<input type="submit" value="Submit" />
		</form>
<?php
		if ($team) {
			$query = $conn->prepare("SELECT * FROM players WHERE team = ? ;");
			$query->bind_param("i", $team);
			$query->execute();
			$result = $query->get_result();
?>
		<table>
<?php
			foreach ($result as $row) {
?>
			<tr><td><?php echo $row['name']?></td></tr>
<?php
			}
		}
?>
		</table>
<?php
} else {
	print "Mode '$mode' is not implemented yet.\n";
	print "Add another branch of the 'if' to complete it.";
}
?>
	</body>
</html>