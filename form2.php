<html>
<body>
<head>
	<style>
			body {
      		display: flex;
      		flex-flow: column;
    		}	
	
			.container {
		      margin: auto;
		      width: 40vw;
		      height: 40vh;
		      /*outline: 1px solid red;*/
		      border: 20px solid transparent;
		      box-sizing: border-box;
		      text-transform: uppercase;
		      font-weight: 900;
		      font-family: "Open Sans","Source Sans Pro",Helvetica,sans-serif;
		      font-size: 1em;
		      display:flex;
		      padding: 15px;
		      justify-content:left;
		      align-items:left;
		    }
			.animated {
		      background-image:
		        linear-gradient(white, white),
		        linear-gradient(180deg, cornflowerblue, purple 50%, cornflowerblue);

		      background-repeat: no-repeat;
		      background-size: 100% 100%, 100% 200%;
		      background-position: 0 0, 0 100%;
		      background-origin: padding-box, border-box;
		      animation: highlight 1s infinite alternate;
		    }

		    @keyframes highlight {
		      100% {
		        background-position: 0 0, 0 0;
		      }
		    }

	</style>
</head>
<body>
<form action="form22.php" method="post">
<div class="container demo animated"style="width:1000px;height:550px">
<h3>
 
			<span style = "color:blue;"><b><u>Enrollment number:</u></b></span><input type="text" name="Enrollment"><br><br>


			<span style = "color:blue;"><b><u>Roll number:</u></b></span><input type="text" name="rollnumber"><br><br>


			<span style = "color:blue;"><b><u>class:</u></b></span><input type="text" name="class"><br><br>

			<span style = "color:blue;"><b><u>birthdate is:</u></b><br><br><select name="day">
							<option>Day</option>
							<?php
								for($i=1;$i<=31;$i++)
								{
									echo "<option value=".$i.">".$i."</option>";
								}
							?>
							</select>
							
							<select name="month">
							<option>Month</option>
							<?php
								for($i=1;$i<=12;$i++)
								{
									echo "<option value=".$i.">".$i."</option>";
								}
							?>
							</select>
							
							<select name="year">
							<option>Year</option>
							<?php
								for($i=1990;$i<=2023;$i++)
								{
									echo "<option value=".$i.">".$i."</option>";
								}
							?>
							</select><br><br>

			<span style = "color:blue;"><b><u>xender is:</u></b></span><br><span style = "color:black;"><input type="radio" id="male" name="xender" value="male">
			<label for="html">male</label>
			<input type="radio" id="female" name="xender" value="female">
			<label for="html">female</label></span><br><br>

			<span style = "color:blue;"><b><u>Hobbies is:</u></b></span><br><span style = "color:black;"><input type="radio" name="hobby" value="Reading">
			<label for="html">Reading</label>
			<input type="radio" name="hobby" value="Video Gaming">
			<label for="html">Video Gaming</label>
			<input type="radio" name="hobby" value="ESsport">
			<label for="html">ESsport</label>
			<input type="radio" name="hobby" value="devloping">
			<label for="html">devloping</label>
			<input type="radio" name="hobby" value="degining">
			<label for="html">degining</label></span><br><br>

			<span style = "color:blue;"><b><u>print button:</u></b></span><br><span style = "color:black;"><input type="submit"></span><br><br>

	
			<span style = "color:blue;"><b><u>value reset button:</u></b></span><br><span style = "color:black;"><input type="reset"></span> 
</h3>
</div>
</form>
</body>
</html>