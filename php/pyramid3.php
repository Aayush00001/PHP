<?php
echo "<html><body><table border=yes>";
$n1=2;
for($i=1;$i<=5;$i++)
{    
    echo "<tr>";
    for($j=5;$j>=$i;$j--)
    {
        if($j%2!=0)
		{
            echo "<td>".($n1+3)."</td>";
		}
		else
		{
			echo "<td>".($n1-3)."</td>";
	    }   
        $n1++;
    }
    for($j=$i-1;$j>=1;$j--)
    {
        echo "<td>**</td>";
    }
//--------------------------------------------------------------------------------
    for($j=$i-1;$j>=1;$j--)
	{
		echo "<td>**</td>";
	}
	for($j=5;$j>=$i;$j--)
	{
        if($j%2!=0)
		{
			echo "<td>".($n1+3)."</td>";
		}
		else
		{
            echo "<td>".($n1-3)."</td>";
		}   
        $n1++;
	}
    echo "</tr>";
}
//--------------------------------------------------------------------------------
for($i=5;$i>=1;$i--)
{    
    echo "<tr>";
    for($j=5;$j>=$i;$j--)
    {
        if($j%2!=0)
		{
            echo "<td>".($n1+3)."</td>";
		}
		else
		{
			echo "<td>".($n1-3)."</td>";
	    }   
        $n1++;
    }
    for($j=$i-1;$j>=1;$j--)
    {
        echo "<td>**</td>";
    }
//--------------------------------------------------------------------------------
    for($j=$i-1;$j>=1;$j--)
	{
		echo "<td>**</td>";
	}
	for($j=5;$j>=$i;$j--)
	{
        if($j%2!=0)
		{
			echo "<td>".($n1+3)."</td>";
		}
		else
		{
            echo "<td>".($n1-3)."</td>";
		}   
        $n1++;
	}
    echo "</tr>";
}
echo "</table></body></html>";
?>