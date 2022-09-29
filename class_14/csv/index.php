<?php

// Create connection
// Localhost is the server name,
// root is the username,
// password is empty
// database name is gfg
$db = new mysqli('localhost', 'root', '', 'gfg');

// Checking connection
if ($db->connect_errno) {
echo "Failed " . $db->connect_error;
exit();
}
?>

<h1>
	html table code for displaying
	details like name, rollno, city
	in tabular format and store in
	database
</h1>

<table align="center" width="800"
	border="1" style=
	"border-collapse: collapse;
	border:1px solid #ddd;"
	cellpadding="5"
	cellspacing="0">

	<thead>
		<tr bgcolor="#FFCC00">
			<th>
				<center>NAME</center>
			</th>
			<th>
				<center>ROLL NO</center>
			</th>
			<th>
				<center>CITY</center>
			</th>

		</tr>
	</thead>
	<tbody>
		<?php

		// Get csv file
		if(($handle = fopen("detail.csv",
						"r")) !== FALSE) {
			$n = 1;
			while(($row = fgetcsv($handle))
								!== FALSE) {

				// SQL query to store data in
				// database our table name is
				// table2
                $db->query('INSERT INTO table2 VALUES ("'.$row[0].'","'.$row[1].'","'.$row[2].'")');
				// row[0] = name
				// row[1] = rollno
				// row[2] = city
				if($n>0) {
				?>
				<tr>
					<td>
						<center>
							<?php echo $row[0];?>
						</center>
					</td>
					<td>
						<center>
							<?php echo $row[1];?>
						</center>
					</td>
					<td>
						<center>
							<?php echo $row[2];?>
						</center>
					</td>
				</tr>
					<?php
				}
			
				// Increment records
				$n++;
			}
			
		// Closing the file
		fclose($handle);
	}
	?>
	</tbody>
</table>
