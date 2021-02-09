<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sentiment Regognization By Video</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter tab-content">
		<div class="container-login100  tab-content">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class=" tab-pane" id="register" method="POST" action="">
                <span class="login100-form-title">
				American Sign Language <br>Member Registration
					</span>
					<label>Name</label>
					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						
						<input class="input100" type="text" id="name" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
                    </div>
                    <label>Date Of Birth</label>
                    <div class="wrap-input100 validate-input" data-validate = "Date Of Birth is required">
					
						<input class="input100" type="date" id="dob" name="dob" placeholder="Date Of Birth">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
                    </div>
					<label>Email</label>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email" id="email" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>
					<label>Mobile</label>
                    <div class="wrap-input100 validate-input"  data-validate = "Mobile Number is required">
						<input class="input100" type="text" name="mobile" placeholder="10 Digit mobile" id="mobile" maxlength="10">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile-phone" style="font-size:24px" aria-hidden="true"></i>
						</span>
                    </div>
					<label>Password</label>
                    <div class="wrap-input100 validate-input"  data-validate = "Password is required">
						<input class="input100" type="password" name="passwoed" placeholder="Password"  id="passwoed">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="	fa fa-lock" style="font-size:20px" aria-hidden="true"></i>
						</span>
                    </div>
					<label>Confirm Password</label>
                    <div class="wrap-input100 validate-input"  data-validate = "Password is required">
						<input class="input100" type="password" name="cpassword" id="cpassword" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" style="font-size:20px" aria-hidden="true"></i>
						</span>
                    </div>
                    
					<div class="container-login100-form-btn">
						<!-- <button id="reg" class="login100-form-btn">
							Register
						</button> -->
						<a href="#" class="login100-form-btn" id="reg">Register</a>
					</div>

					<!--<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>-->

					<div class="text-center p-t-30">
						<a class="txt2" href="index.php">
							Already have an Account 
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
                </form>                                       
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script>     
	$("#reg").click(function(e){
    e.preventDefault();
	
	    var name=document.getElementById("name").value;
	    var dob=document.getElementById("dob").value;
	    var mobile=document.getElementById("mobile").value;
	    var email=document.getElementById("email").value;
	    var passwoed=document.getElementById("passwoed").value;
		var cpassword=document.getElementById("cpassword").value;
	
		if(name=="" || dob=="" || mobile=="" || email=="" || passwoed=="" || cpassword==""){
			alert("Please Enter All Fields!!");
		}else if(passwoed!=cpassword ){
			alert("Password Not Match!!");
		}
		else{
			$.ajax({  
					type: 'POST',  
					url: 'api/register.php', 
					data: { name:name,dob:dob,mobile:mobile,email:email,passwoed:passwoed,cpassword:cpassword },
					success: function(response) {
					//document.getElementById("res").innerHTML=response;
					alert(response);
	
					}
				}); 
		}
});

	</script>
</body>
</html>