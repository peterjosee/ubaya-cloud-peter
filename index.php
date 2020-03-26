<!DOCTYPE html>
<html>
<head>
	<title>Tugas ISA Cloud Computing</title>

</head>

<?php
require_once("database.php");

?>

<body>
	<h2> Driver </h2>

	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>License</th>
		</tr>

		<?php
			$sql="SELECT * FROM driver order by name ASC";
			$result = $c-> query($sql);
			if($result->num_rows>0)
			{
				$drivers = array();
				$i = 0;
				while($obj = $result->fetch_assoc())
				{
					echo '<tr>';
					echo '<td>' . $obj['id'] . '</td>';
					echo '<td>' . $obj['name'] . '</td>';
					echo '<td>' . $obj['license'] . '</td>';
					echo '</tr>';

				}
			}
			else
			{
				echo '<tr>';
				echo '<th colspan="2"> no data </th>';
				echo '</tr>';

			}
		?>

	</table>


</body>
</html>
