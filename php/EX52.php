//w.a.p.s fto create multidimensonal arrya and print is using for loop
<?php
	$cars=array(array("volvo",22,18),
				array("b.m.w",15,13),
				array("swift",5,2),
				array("landrover",17,15)
				);
	for($row=0;$row<4;$row++)
	{
		echo "<P><b>row number $row</b></p>";
		echo "<ul>";
		for($col=0;$col<3;$col++)
		{
			echo "<li>".$cars[$row][$col]."</li>";
		}
		echo "</ul>";
	}
?>