<?php
   include('order.php');
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

    $database_name = "projectweb";
    $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="Cart.php"</script>';
            }else{
                echo '<script>alert("Modality is already added!")</script>';
                echo '<script>window.location="Cart.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Modality has been removed!")</script>';
                    echo '<script>window.location="Cart.php"</script>';
                }
            }
        }
    }
?>

<!doctype html>
<html>
<head>
    <title>C2 Massage Services | Schedule Appointment</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    <script>

        function confirm_appointment(){
            var cus_name = $('#cus_name').val();
            var cus_num = $('#cus_num').val();
            var cus_email = $('#cus_email').val();
            var cus_address = $('#cus_address').val();
            var gender_therapist = $('#gender_therapist').val();
            
            var dynamic_html = "";

            var p_gender_therapist = "<p> Therapist: " + gender_therapist +" </p>";
            var p_cus_name = "<p> Customer Name: " + cus_name +" </p>";
            var p_cus_num = "<p> Customer Phone Number: " + cus_num +" </p>";
            var p_cus_email = "<p> Customer E-mail Address: " + cus_email +" </p>";
            var p_cus_address = "<p> Customer Address: " + cus_address +" </p>";
            

            var rows = $('#tbl_services>tbody>tr');

            var total_price = 0;
            var str_services = "Modality: ";

            for (i = 1; i < rows.length; i++){
                var row = rows[i];

                var col_service_name = $(row).children().eq(0);
                var col_price = $(row).children().eq(1);

                var col_service_name_text = $(col_service_name).text();
                var col_price_text = $(col_price).text();

                total_price = total_price + parseInt(col_price); 

                str_services = str_services + col_service_name_text + " (" + col_price_text + "), " + "<p></p>";
            }
            str_services = str_services.replace(/,\s*$/, "");

            dynamic_html = str_services + "<p></p>";

            dynamic_html = dynamic_html + p_gender_therapist + p_cus_name + p_cus_num + p_cus_email + p_cus_address;

            var modal_content = $('#modal_content');
            modal_content.html(dynamic_html);

            $('#myModal').modal('show'); 
        };

        function clear_field(){
            var cus_name = $('#cus_name').val("");
            var cus_num = $('#cus_num').val("");
            var cus_email = $('#cus_email').val("");
            var cus_address = $('#cus_address').val("");
        }
    </script>

    <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background:url('../img/massage.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100%;
  box-sizing: border-box;
}

.topnav {
  overflow: hidden;
  background-color: #333333;
  
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}

.product {
display:inline-grid;
padding:30px;
  border: #333333 solid 1px;
  margin-bottom:10px;
  background:#333333;
  color: #f2f2f2;
}

.table-responsive {
  float: right;
  padding:30px;
  border: #333333 solid 1px;
  margin-bottom:10px;
  background:#333333;
  color: #f2f2f2;
}

.container {
  text-align:center;
  font-size:20px;
  color:#ffffff;
}

article#main-col{
  
  width:65%;
}

ul#services li{
  list-style: none;
  padding:30px;
  border: #333333 solid 1px;
  margin-bottom:10px;
  background:#333333;
  color: #f2f2f2;
}

* {box-sizing: border-box}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 700px;
  position: relative;
  margin: auto;
  border-style:solid;
  border-color:#ffffff;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #000000;
  font-size: 25px;
  font-weight:bold;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
    <div class="topnav">
      <a class="active" href="index.php">C2 Massage Services</a>
      <div class="topnav-right">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a class="active">Welcome <strong><?php echo $_SESSION['username']; ?></strong></a>
        <a href="Cart.php?logout='1'">Logout</a>
      </div>
    </div>
    <div class="container" style="width: 65%">
        <h2 style="text-decoration:none; font-weight:bold; color:#6551e3;">Schedule an appointment</h2>
        <?php
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div>

                        <form method="post" action="Cart.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["price"]; ?> PER HOUR</h5>
                                <input type="hidden" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>

        <div style="clear: both"></div>
        <h3 class="title2"style="text-decoration:none; font-weight:bold; color:#6551e3;" >Appointment Details</h3>
        <div class="table-responsive">
            <table id="tbl_services" class="table table-bordered">
            <tr>
                <th width="30%">Modality</th>
                <th width="13%">Price Details</th>
                <th width="10%">Action</th>
                
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td class="column_modality"><?php echo $value["item_name"]; ?></td>
                            <td class="column_total">
                                PHP <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?> PER HOUR</td>
                            <td><a href="Cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                       
                        <?php
                    }
                ?>
            </table>
            <div>
                <label style="font-size:25px;">
                <b>Total: PHP 
                <?php 
                if(isset($total)){
                    echo number_format($total, 2); 
                }

                ?>
                    
                </b>
                </label>

            </div>
        </div>

    </div>

    
    <label style="width:50%; margin-left:450px">Massage Therapist</label>
        <select id="gender_therapist" style="margin-left:450px">
            <option value="Male">Male</option>
            <option value="Female" selected>Female</option>
        </select><br><br>
        <input type="text" id="cus_name" name="name" placeholder="Customer Name" style="width:30%; margin-left:450px"><br><br>
        <input type="number" id="cus_num" name="phone" placeholder="Customer Phone Number" style="width:30%; margin-left:450px"><br><br>
        <input type="email" id="cus_email" name="email" placeholder="Customer E-mail Address" style="width:30%; margin-left:450px"><br><br>
        <input type="text" id="cus_address" name="address" placeholder="Customer Address" style="width:30%; margin-left:450px"><br><br>
        <input type="submit" name="appt" value="Confirm appointment" style="margin-top: 5px; margin-left:580px; " class="btn btn-success" 
        onclick="confirm_appointment();">
  

    <div class="modal fade" id="myModal" role="dialog">
       <div class="modal-dialog">
       
         <!-- Modal content-->
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Confirm Appointment</h4>
           </div>
           <div class="modal-body">
            <div id="modal_content">
            </div>
           </div>   

           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="button" class="btn btn-info" data-dismiss="modal" onclick="alert('Appointment Set!'); clear_field();">Confirm</button>
           </div>
         </div>
       
</body>
</html>
