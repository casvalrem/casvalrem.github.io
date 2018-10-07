<?php 
session_start();
    if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
   
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>C2 Massage Services | Appointment</title>
	<script type="text/javascript" src="./js/productorder.js"></script>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<div class="topnav">
      <a  class="active" href="index.php">C2 Massage Services</a>
      <div class="topnav-right">
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a class="active">Welcome <strong><?php echo $_SESSION['username']; ?></strong></a>
        <a href="Cart.php?logout='1'">Logout</a>
        <a href="about.php">About</a>
      </div>
    </div>

    <br>

	<div class="contaner" style="width:70%; margin-left:230px;">

		<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-top:55px">
			<div class="image;">
				<img src="swedish.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;;" onclick="swedish()"/><br><br>
				<label id="swedish">Swedish Massage </label><br>
				<label id="price1">300<span> per hour</span></label>
			</div>
		</div>
		<br>
		<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;   text-align:center; margin-top:36px; margin-left:10px">
			<div class="image">
				<img src="sports.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="sports()"/><br><br>
				<label id="sports">Sports Massage </label><br>
				<label id="price2">300<span> per hour</span></label>
			</div>
		</div>
		<br>
		<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-top:18px; margin-left:10px">
			<div class="image">
				<img src="deeptissue.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="deep()"/><br><br>
				<label id="deep">Deep Tissue Massage </label><br>
				<label id="price3">300<span> per hour</span></label>
			</div>
		</div>
		<br>
		<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-bottom:5px; margin-left:10px">
			<div class="image">
				<img src="triggerpoint.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="trigger()"/><br><br>
				<label id="trigger">Trigger Point Therapy </label><br>
				<label id="price4">300<span> per hour</span></label>
			</div>
		</div>
		<br>
		<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; ">
			<div class="image">
				<img src="reflex.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="reflex()"/><br><br>
				<label id="reflex">Reflexology </label><br>
				<label id="price5">300<span> per hour</span></label>
			</div>
		</div>
		<br>
		<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-left:10px">
			<div class="image">
				<img src="prenatalm.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="prenatal()"/><br><br>
				<label id="prenatal">Prenatal Massage </label><br>
				<label id="price6">300<span> per hour</span></label>
			</div>
	   	</div>
	   	<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-left:10px">
			<div class="image">
				<img src="cranialm.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="cranial()"/><br><br>
				<label id="cranial">Cranial Sacral Therapy </label><br>
				<label id="price7">300<span> per hour</span></label>
			</div>
	   	</div>
	   	<br>
	   	<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-left:10px">
			<div class="image">
				<img src="geriatricm.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="geriatric()"/><br><br>
				<label id="geriatric">Geriatric Massage </label><br>
				<label id="price8">300<span> per hour</span></label>
			</div>
	   	</div>
	   	<br>
	   	<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-top:5px">
			<div class="image">
				<img src="thai.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="thai()"/><br><br>
				<label id="thai">Thai Massage </label><br>
				<label id="price9">300<span> per hour</span></label>
			</div>
	   	</div>
	   	<br>
	   	<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-top:5px; margin-left:10px">
			<div class="image">
				<img src="hilot.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="hilot()"/><br><br>
				<label id="hilot">Pinoy Hilot </label><br>
				<label id="price10">300<span> per hour</span></label>
			</div>
	   	</div>
	   	<br>
	   	<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-top:5px; margin-left:10px">
			<div class="image">
				<img src="hotstone.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="hotstone()"/><br><br>
				<label id="hotstone">Hot Stone Massage </label><br>
				<label id="price11">300<span> per hour</span></label>
			</div>
	   	</div>
	   	<br>
	   	<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-top:5px; margin-left:10px">
			<div class="image">
				<img src="lymphatic.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="lymphatic()"/><br><br>
				<label id="lymphatic">Lymphatic Drainage Massage </label><br>
				<label id="price12">300<span> per hour</span></label>
			</div>
	   	</div>
	   	<br>
	   	<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-top:5px;">
			<div class="image">
				<img src="hawaiian.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="hawaiian()"/><br><br>
				<label id="hawaiian">Hawaiian Lomi-Lomi Massage </label><br>
				<label id="price13">300<span> per hour</span></label>
			</div>
	   	</div>
	   	<br>
	   	<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-top:5px; margin-left:10px">
			<div class="image">
				<img src="ventosa.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="ventosa()"/><br><br>
				<label id="ventosa">Ventosa Massage </label><br>
				<label id="price14">300<span> per hour</span></label>
			</div>
	   	</div>
	   	<br>
	   	<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-top:5px; margin-left:10px">
			<div class="image">
				<img src="shiatsu.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="shiatsu()"/><br><br>
				<label id="shiatsu">Shiatsu Massage </label><br>
				<label id="price15">300<span> per hour</span></label>
			</div>
	   	</div>
	   	<br>
	   	<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-top:5px; margin-left:10px">
			<div class="image">
				<img src="aroma.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="aroma()"/><br><br>
				<label id="aroma">Aromatherapy Massage </label><br>
				<label id="price16">300<span> per hour</span></label>
			</div>
	   	</div>
	   	<br>
	   	<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-top:5px;">
			<div class="image">
				<img src="bodyscrub.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="bodyscrub()"/><br><br>
				<label id="bodyscrub">Body Scrub </label><br>
				<label id="price17">200<span> per hour</span></label>
			</div>
	   	</div>
	   	<br>
	   	<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-top:5px; margin-left:10px">
			<div class="image">
				<img src="footspa.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="footspa()"/><br><br>
				<label id="footspa">Foot Spa </label><br>
				<label id="price18">200<span> per hour</span></label>
			</div>
	   	</div>
	   	<br>
	   	<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-top:5px; margin-left:10px">
			<div class="image">
				<img src="acupuncture.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="acupuncture()"/><br><br>
				<label id="acupuncture">Acupuncture</label><br>
				<label id="price19">200<span> per hour</span></label>
			</div>
	   	</div>
	   	<br>
	   	<div class="row" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;  text-align:center; margin-top:5px; margin-left:10px">
			<div class="image">
				<img src="acupressure.jpg" style="width:200px; height:100px; border-style:solid;
              border-color:#f2f2f2;" onclick="acupressure()"/><br><br>
				<label id="acupressure">Acupressure</label><br>
				<label id="price20">200<span> per hour</span></label>
			</div>
	   	</div>
	   	<br>
	</div>

	<div style="background-color:#333333; color: #f2f2f2; float:right; text-align:center; margin-top:-550px; margin-right:30px; opacity:0.9">
		<div class="pay"><br>
			Modality:<br>
			<input type="text" id="product"><br>
			Price:<br>
			<input type="text" id="price"><br><br>

			<input type="submit" class="btn" onclick="insert()" value="Add Modality"><br><br>

			<table id="table" border="3" style="width:200px; height:180px; background-color:#333333; color: #f2f2f2; float:left;">
				<tr>
					<th>Service</th>
					<th>Price</th>
				</tr>
			</table>
			<br>
			<span id="val"></span>
		</div>
		<br>
	</div>

		<form action="<?php include('transaction.php'); ?>" method="POST" autocomplete="off" style="margin-top:50%">
			<div class="input-group">
				<input type="date" name="date" placeholder="Date"><br><br>
				<input type="hidden" id="order" name="orders">
				<input type="text" id="amount" name="amount" placeholder="Amount"><br><br>
				<input type="text" id="fullname" name="fullname" placeholder="Full Name"><br><br>
				<input type="text" name="address" placeholder="Complete Address"><br><br>
				<input type="number" name="contact" placeholder="Contact Number"><br><br>
				<input type="number" name="altcontact" placeholder="Alternate Contact Number">
				<input type="hidden" name="email" placeholder="Email Address"><br><br>
				<label style="color:#ffffff">Therapist</label>
				<select name="therapist">
					<option value="male">Male</option>
					<option value="female" selected>Female</option>
				</select><br><br>
				<input type="submit" name="save" style="width:auto;" class="btn" value="Send Order"><br><br>
				<input type="text" name="result" value="<?php echo @$result; ?>">
			</div>
		</form>
	
	
</body>
</html>