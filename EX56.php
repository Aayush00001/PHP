//w.a.p.s for date function
<?php
	echo"<body bgcolor='black'><font color='lightblue'><h1>demo for date function</h1></font><font color='white'>";
	function line()
	{
		echo"<font color='pink'><br>**************************<br></font>";
	}
	echo "(1)Date()=".date('d m y l');
	line();

	echo "(2)getdate()=<br>";
	$date=getdate();
	print_r($date);
	line();
	line();

	echo "(4)checkdate(int month,int day,int year)=".checkdate(1, 20, 2015);
	echo "<br>(4)checkdate(int month,int day,int year)=";
	if(checkdate(14,45,2010==true))
	{
		echo "date is valid";
		line();
	}
	else
	{
		echo"date is nolt valid";
		line();
	}
	echo "(5)time()=".time();
	line();

	echo "(6)mktime(int hour,int minute,int second,int month,int date of month,int year)=";
	$val=mktime(6,48,0,3,31,2010);
	echo"<br>";
	echo date('d-m-y-h-i-s',$val);
	line();

	echo "(7)date_add(object,internal)=";
	$date=date_create("2015-03-1");
	date_add($date,date_interval_create_from_date_string("10 days"));
	echo date_format($date,"y-m-d");
	line();

	echo "(8)date_create(time,timedzone)=";
	$date=date_create("2015-03-15");
	echo date_format($date,'d/F/y H:i:s');
	line();

	echo "(9)date_create(time,timedzone)and<br>(10)date_format(object,format)=";
	$date=date_create("2015-03-1");
	echo date_format($date,'d/F/y');
	line();
?>