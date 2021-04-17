<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="jeevan.css">
	<title>form validate</title>
</head>
<body>
	<center><h1 style="color:Aqua">Hotel Reservation Form</h1></center>
	<p id="error-msg"></p>
	  <div class="row justify-content-center">
	<form method="POST" onsubmit="return validate()" action="display.php"  class="form-container" style="color: #FFF7C0;">
	    <div class="form-group">
			<label style="color:aqua">Name:</label>
			<input type="text" name="Name" id="nm" class="form-control" placeholder="Enter your name">
		</div>
			<div class="form-group">
				<label style="color:aqua">Email:</label>
				<input type="email" name="Email" id="em" class="form-control">
			</div>
			<div class="form-group">
				<label style="color:aqua">Address:</label>
				<input type="text" name="Address" id="ad" class="form-control">
		    </div>
			<div class="form-group">
				<label style="color:aqua">Contact No:</label>
				<input type="number" name="Contact" id="con" class="form-control">
			</div>
			<div class="form-group">
				<label style="color:aqua">no of guest:</label>
				<input type="number" name="Nog" id="gu" class="form-control">
			</div>
			<div class="form-group">
			<label style="color: aqua">Payment methods:</label>
			<select name="pay" id="pm" class="form-control">
			<option>Credit card</option>
			<option>esewa</option>
			<option>PayPal</option>
			<option>Khalti</option>
			<option>IMEpay</option>
			<option>Cellpay</option>
		    </select>
			</div>
			<div class="form-group">
			<label style="color: aqua">Country:</td></label>
				<select name="Country" id="cou" class="form-control">
					<option>Nepal</option>
					<option>Korea</option>
					<option>India</option>
					<option>USA</option>
					<option >Australia</option>
				</select>
			</div>
		
		<br>
		<div class="form-group">
			<label style="color:aqua">File:</label>
			<input type="file" name="Image" id="picture" width="150" height="200"><br><br>
		</div>
		<tr>
			<td><button onclick="submit" name="submit" value="Submit" class="btn btn-info">Submit</button></td>
			<td><button type="reset" name="reset" value="Reset"   class="btn btn-warning" onclick="clearAll()">Reset</button></td>
		</tr>
</table>
<script type="text/javascript">

function validate(){



	var msg="";
	var error=0;

	var a =document.getElementById('nm').value;
	var b=document.getElementById('em').value;
	var c=document.getElementById('ad').value;
	var d=document.getElementById('con').value;
	var e =document.getElementById('gu').value;
	var f =document.getElementById('cou').value;
	
	if (a=="") {
				msg+="Name is required.<br>";
				error=1;
			}

    if(b==""){
    	     msg+="Email is required.<br>";
    	     error=1;
    }
    if(c==""){
    	     msg+="Address is Required.<br>";
    	     error=1;
    }
    if(d==""){
    	    msg+="contact Required.<br>";
    	    error=1;

    }
    if(e=="")
    {
    	msg+="guest no is Required.<br>";
    	error=1;

    }
    if(f=="")
    {
    	msg+="Country name is Required.<br>";
    	error=1;
    }
    if (error==1) {
    	     document.getElementById('error-msg').innerHTML=msg;
				return false;
    }
} 
    function clearAll()
		{
			document.getElementById("error-msg").innerHTML="";
		} 
	








</script>

</body>
</html>
<?php include("add.php");?>
