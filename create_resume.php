<html>
<body>
	<?php
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$address=$_POST['address'];
		$phno=$_POST['phno'];
		$mark1=$_POST['mark1'];
		$mark2=$_POST['mark2'];

		$b1=$_POST['b1'];
		$b2=$_POST['b2'];
		$b3=$_POST['b3'];


		$dsub=$_POST['dsub'];
		$mark3=$_POST['mark3'];
		$spl=$_POST['spl'];
		$yop=$_POST['yop'];
		$co=$_POST['co'];

		$ach1=$_POST['ach1'];
		$ach2=$_POST['ach2'];
		$ach3=$_POST['ach3'];
		$sk1=$_POST['sk1'];
		$sk2=$_POST['sk2'];
		$sk3=$_POST['sk3'];
>>
<?php


		<H1><center>RESUME</center></H1>

		<br><br><br>
                echo "$address";
		echo "<br><center>CAREER OBJECTIVE</center><BR>";
		echo "$co";
		<br>
		echo "<center><b>ACADEMIC REVIEW</center></b>";
<center>
		echo "<table border=1 cellpadding=2 cellspacing=1  width=150>";
		echo "<tr>";
		echo "<th>QUALIFICATION</th>";
		echo "</th>";
		echo "<th>UNIVERSITY/BOARD</th><th>SPECIALIZATION</th><th>MARKS OBTAINED</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>SSLC</td><td>$b1</td><td>no specialization</td><td>$mark1</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>PLUS TWO</td><td>$b2</td><td>CSE</td><td>$mark2</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>BCA</td><td>$b3</td><td>Computer Science</td><td>$mark3</td>";
		echo "</tr>";
		echo "</table>";
</center>
		echo "<br><br>"."ACHIEVEMENTS"."<br><br>";
		echo "$ach1";
		echo "<br>"."$ach2";
		echo "<br>"."$ach3";
		echo "<br>SKILLS AND ABILITIES</br>";
		echo "<br>"."$sk1";
		echo "<br>"."$sk2";
		echo "<br>"."$sk3";
		echo "<br><br>";
	?>
</body>
</html>
</html>
