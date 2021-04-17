

<?php
$server=mysqli_connect('localhost','root','','validate');

    if(isset($_POST['submit']))
    {
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $Address=$_POST['Address'];
        $Contact=$_POST['Contact'];
        $Nog=$_POST['Nog'];
        $pay=$_POST['pay'];
        $Country=$_POST['Country'];
        $Image=$_POST['Image'];
        $var="Insert into form(Name,Email,Address,Contact,Nog,pay,Country,Image) value('$Name','$Email','$Address','$Contact','$Nog','$pay','$Country','$Image')";
        $Insert=mysqli_query($server,$var);
    }
    
?>
