<?php
	header("Content-type:text/xml");
	mysql_connect("localhost","root","");
	$result = mysql("hr2","select Last_name, First_name from Employees order by Last_name, First_name");

	$i=0;
	echo "<data_mahasiswa>";
	while ($i< mysql_num_rows($result)) {
		$field = mysql_fetch_row($result);
		echo "<nama>$field[1] $field[0]</nama>\r\n";
		$i++;
	}
	echo "</data_mahasiswa>";
	mysql_close();
?>