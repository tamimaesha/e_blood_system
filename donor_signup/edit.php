<?php include("../includes/session.php"); ?>
<?php
include("../database/connect.php");

      if(!$_GET['edit']){
	   header("Location:index.php");
	   exit();
	   }

if(isset($_GET['edit']))
	  {
		$user_id=$_GET['edit'];
		$q = "SELECT * FROM donor_reg WHERE user_id=$user_id";
		$query=mysqli_query($connection, $q);
		$row=mysqli_fetch_assoc($query);
		
		$user_id=$row['user_id'];
		$name=$row['name'];
		$email=$row['email'];
		$password=$row['password'];
		$age=$row['age'];
		$gender=$row['gender'];
		$blood_group=$row['blood_group'];
		$district=$row['district'];
		$last_date=$row['last_date'];
		$mob_num=$row['mob_num'];
		$address=$row['address'];
	  }

?>
<!DOCTYPE>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Head section including    -->
    
            <?php include("includes/head.php"); ?>
            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
			<script src="//code.jquery.com/jquery-1.10.2.js"></script>
            <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
            <script>
                   $(function() {
                   $( "#textfield12" ).datepicker();
                    });
            </script>
</head>

<body>
<div class="container" id="customcontainer"> <!--Start Full Container section -->


<div class="row" id="topbar">  <!--Start top section-->
     <?php include("includes/top.php"); ?>
</div><!--End top section-->


<div class="row" id="header"> <!--Start header section -->
    <?php include("includes/header.php"); ?> 
</div> <!--End header section -->

<div class="row" id="menu-wrap"><!--Start Menu section -->
			  <?php include("includes/menu.php"); ?>              
</div><!--End Menu section -->


<div class="row" id="wrapper"><!--Start wrapper section -->




<div id="d_q" style="margin-top:20px; width:100%; overflow:hidden; border-left:1px solid #ffcccc; 
border-right:1px solid #ffcccc; border-radius:40px;">

				<!--Form container start-->

 <div class="col-md-4"><center><img src="../images/bd.jpg" style="margin-top:240px; opacity:0.60;"></center></div>
 
 <div class="col-md-8">
    <div>
      <h2 class="form_title">Donor &nbsp;&nbsp;Profile &nbsp;&nbsp;Update &nbsp;&nbsp;Form </h2>
    </div>
	
    <!--Form  start-->
    <div class="col-md-12" id="apDiv1">
    
    <?php echo message(); ?>
         
<form id="form1" name="form1" method="post" action="update.php?update=<?php echo $user_id ?>" enctype="multipart/form-data" >
  <table class="tbl_form" width="461" height="431">
    
    
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td width="185" height="31" class="field">User Name</td>
      <td width="33" class="field">:</td>
      <td colspan="2">
        <input type="text" name="name" id="textfield"  placeholder="Your Name" style="width:300px; height:40px;" value="<?php echo $name ?>" required/>      </td>
    </tr>
	
	
	<tr>
      <td class="field">Password</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="password" name="password" id="password" placeholder="Min 6 Character" style="width:300px; height:40px;" value="<?php echo $password ?>" required/>      </td>
    </tr>
	<tr>
      <td class="field">Email</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="text" name="email" id="textfield4" placeholder="Email Will Be Your Login ID" style="width:300px; height:40px;" value="<?php echo $email ?>" required/>      </td>
    </tr>
    
   
   
    
    <tr>
      <td class="field">Age</td>
      <td class="field">:</td>
      <td colspan="2">
      <select name="age" id="select" style="width:300px; height:40px;" required>
        <option value="<?php echo $age ?>"><?php echo $age ?></option>
        <?php
			for ($x = 16; $x <= 65; $x++) {
			echo "<option value='$x'>$x</option>";
			}
		?>
        </select></td>
    </tr>
    <tr>
      <td class="field">Gender</td>
      <td class="field">:</td>
      <td colspan="2"><select name="gender" id="select" style="width:300px; height:40px;" required>
        <option value="<?php echo $gender ?>"><?php echo $gender ?></option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>        </td>
    </tr>
   
  
    <tr>
      <td class="field">Blood Group</td>
      <td class="field">:</td>
      <td colspan="2"><select name="blood_group" size="1" id="select" style="width:300px; height:40px;" required>
          <option value="<?php echo $blood_group ?>"><?php echo $blood_group ?></option>
            <option value="A-" >A negative(-)</option>
            <option value="A+" >A positive(+)</option>
            <option value="AB-" >AB negative(-)</option>
            <option value="AB+" >AB positive(+)</option>
            <option value="B-" >B negative(-)</option>
            <option value="B+" >B positive(+)</option>
            <option value="O-" >O negative(-)</option>
            <option value="O+" >O positive(+)</option>
        </select></td>
    </tr>
	
	
	
	 <tr>
      <td class="field">District</td>
	  <td class="field">:</td>
      <td colspan="2"><select name="district" size="1" id="select" style="width:300px; height:40px;" required>
          <option value="<?php echo $district ?>"><?php echo $district ?></option>
            <option value="Bagerhat" >Bagerhat</option>
            <option value="Bandarban" >Bandarban</option>
            <option value="Barguna" >Barguna</option>
            <option value="Barisal" >Barisal</option>
            <option value="Bhola" >Bhola</option>
            <option value="Bogra" >Bogra</option>
            <option value="Brahmanbaria" >Brahmanbaria</option>
            <option value="Chandpur" >Chandpur</option>
            <option value="Chittagong" >Chittagong</option>
            <option value="Chuadanga" >Chuadanga</option>
            <option value="Comilla" >Comilla</option>
            <option value="Cox`s Bazar" >Cox's Bazar</option>
            <option value="Dhaka" >Dhaka</option>
            <option value="Dinajpur" >Dinajpur</option>
            <option value="Faridpur" >Faridpur</option>
            <option value="Feni" >Feni</option>
            <option value="Gaibandha" >Gaibandha</option>
            <option value="Gazipur" >Gazipur</option>
            <option value="Gopalganj" >Gopalganj</option>
            <option value="Habiganj" >Habiganj</option>
            <option value="Jaipurhat" >Jaipurhat</option>
            <option value="Jamalpur" >Jamalpur</option>
            <option value="Jessore" >Jessore</option>
            <option value="Jhalokati" >Jhalokati</option>
            <option value="Jhenaidah" >Jhenaidah</option>
            <option value="Khagrachari" >Khagrachari</option>
            <option value="Khulna" >Khulna</option>
            <option value="Kishoreganj" >Kishoreganj</option>
            <option value="Kurigram" >Kurigram</option>
            <option value="Kushtia" >Kushtia</option>
            <option value="Lakshmipur" >Lakshmipur</option>
            <option value="Lalmonirhat" >Lalmonirhat</option>
            <option value="Madaripur" >Madaripur</option>
            <option value="Magura" >Magura</option>
            <option value="Manikgonj" >Manikgonj</option>
            <option value="Maulvi Bazar" >Maulvi Bazar</option>
            <option value="Meherpur" >Meherpur</option>
            <option value="Munshiganj" >Munshiganj</option>
            <option value="Mymensingh" >Mymensingh</option>
            <option value="Naogaon" >Naogaon</option>
            <option value="Narail" >Narail</option>
            <option value="Narayanganj" >Narayanganj</option>
            <option value="Narsingdi" >Narsingdi</option>
            <option value="Natore" >Natore</option>
            <option value="Nawabganj" >Nawabganj</option>
            <option value="Netrokona" >Netrokona</option>
            <option value="Nilphamari" >Nilphamari</option>
            <option value="Noakhali" >Noakhali</option>
            <option value="Pabna" >Pabna</option>
            <option value="Panchagarh" >Panchagarh</option>
            <option value="Patuakhali" >Patuakhali</option>
            <option value="Pirojpur" >Pirojpur</option>
            <option value="Rajbari" >Rajbari</option>
            <option value="Rajshahi" >Rajshahi</option>
            <option value="Rangamati" >Rangamati</option>
            <option value="Rangpur" >Rangpur</option>
            <option value="Shariatpur" >Shariatpur</option>
            <option value="Shatkhira" >Shatkhira</option>
            <option value="Sherpur" >Sherpur</option>
            <option value="Sirajganj" >Sirajganj</option>
            <option value="Sunamgonj" >Sunamgonj</option>
            <option value="Sylhet" >Sylhet</option>
            <option value="Tangail" >Tangail</option>
            <option value="Thakurgaon" >Thakurgaon</option>
        </select></td>
    </tr>
    <tr>
      <td class="field">Last Donated Date</td>
      <td class="field">:</td>
      <td><input type="text" name="last_date" id="textfield12" placeholder="YY-MM-DD" style="width:300px; height:40px;" value="<?php echo $last_date ?>"/></td>
     
    </tr>
    
      
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td colspan="2">
        <input name="mob_num" type="text" id="textfield5" value="<?php echo $mob_num ?>" style="width:300px; height:40px;" />      </td>
    </tr>
	
	<tr>
      <td height="97" class="field">Address</td>
      <td class="field">:</td>
      <td colspan="2">
        <textarea name="address" id="textarea" cols="30" rows="5" required><?php echo $address ?></textarea>      </td>
    </tr>
    
     
    
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>
        <input type="submit" name="update" class="sign_user" value="Update"/>     </td>
    </tr>
  </table>
  </form>
</div>

    <!--form ends--> 


</div>
</div><!--End d_q class-->

</div>	<!--End wrapper section -->





<div class="row"><!--Start last section -->
<?php include("includes/last.php"); ?>
</div><!--End last section -->



<div class="row"><!--Start copyright section -->
<?php include("includes/copyright.php"); ?>
</div><!--End copyright section -->


</div><!--End Full Container section -->
</body>
</html>