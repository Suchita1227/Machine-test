<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Contact Us Form In Php</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Contact Us </h2>
                        <hr>
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <label for="fname">First Name</label>
							<input type="text" id="fname" name="fname" placeholder="Your first name..">

							<label for="mname">Middle Name</label>
							<input type="text" id="mname" name="mname" placeholder="Your middle name..">
							
							<label for="lname">Last Name</label>
							<input type="text" id="lname" name="lname" placeholder="Your last name.."></br></br>
							
							<label for="address">Street Address</label>
                            <input type="text" name="address" placeholder="Street Address" class="form-control mb-2">
							
							<label for="unit">Unit</label>
							<input type="text" id="unit" name="unit" placeholder="Your unit.."></br></br>
							
							<label for="City">City</label>
							<input type="text" id="city" name="city" placeholder="Your city name..">
							
							<label for="state">State</label>
							<input type="text" id="state" name="state" placeholder="Your state name..">
							
							<label for="zcode">Zip Code</label>
							<input type="text" id="zcode" name="zcode" placeholder="Please enter zipcode."></br></br>
							
							
							<label for="date">Date of birth:</label>

							<input type="date" id="date" name="date" value="2018-07-22" min="2018-01-01" max="2018-12-31"></br></br>
							
							<label for="lname">Email</label>
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2"></br></br>

							
							<label for="Phone">Phone</label>
							<input type="text" class="form-control" name="your_phone" placeholder="Phone" required></br></br>
							
							 <label for="house">Is this a house,condo or HO5</label><br>
							 
							 <input type="radio" id="house" name="house" value="house">
							 <label for="house">House</label><br>
							
							 
							 
							 <input type="radio" id="condo" name="house" value="condo">
							 <label for="condo">Condo</label><br>
							 
							 <input type="radio" id="ho5" name="house" value="ho5">
							 <label for="ho5">HO5</label><br><br>
							 

							  
							  
							
						 
                            <button class="btn btn-success" name="btn-send"> Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>