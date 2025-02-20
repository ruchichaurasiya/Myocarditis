<?php
echo"Welcome to the stage";

//connecting to the database
$servername="localhost";
$username="root";
$password="";
$database="user";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
die("Sorry we failed to connect :". mysqli_connect_error());
}
echo "connection is successful";

    $username = "";
	$age = "";
	$sex = "";
	$cp = "";
	$trestbps = "";
	$fbs = "";
        $maxhr = "";
	$minhr = "";
	$irrhr = "";
	$exercise = "";
	$swell = "";
	$pre = "";
	$hyper = "";
	$fatigue = "";
	$error = "";

	if (isset($_POST['save'])) 
	{
        $username = $_SESSION['username'];
        
		$age = $_POST['age'];
		$sex = $_POST['sex'];
		$cp = $_POST['cp'];
		$trestbps = $_POST['trestbps'];
		$fbs = $_POST['fbs'];
		$maxhr = $_POST['maxhr'];
		$minhr = $_POST['minhr'];
		$irrhr = $_POST['irrhr'];
		$exercise = $_POST['exercise'];
		$swell = $_POST['swell'];
		$pre = $_POST['pre'];
		$hyper = $_POST['hyper'];
		$fatigue = $_POST['fatigue'];

	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/footer_style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/mainstyle.css">
    <link rel="stylesheet" type="text/css" href="css/predict_style.css">
    
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <title>Predict</title>
  </head>
  <body>


<div class="container">
	<div class="row">
		<div class="col-lg-5">
			
			<div class="form-group">
		      <label for="input_username" class="title_of_inputs">Username:</label>
		      <input type="text" class="form-control" id="input_username" name="input_username" value="" required="required" placeholder="e.g. John123">
		    </div>
		</div>
		<div class="col-lg-6">
			<span style="padding: 0.5%;"></span>
			<div class="form-group">
		      <label for="age" class="title_of_inputs">Age:</label>
		      <input type="text" class="form-control" id="age" name="age" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 65.0">
		    </div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<label class="title_of_inputs">Sex:</label>
			  <div class="custom-radios">
			    <div>
			      <div class="form-check">
			        <input type="radio" class="form-check-input" id="radio_male" name="sex" value="1.0" required="required">Male
			        <label class="form-check-label" for="radio_male">
			          <span></span>
			        </label>
			      </div>
			    </div>
			  </div>
			  <div class="custom-radios">
			    <div>
			      <div class="form-check">
			        <input type="radio" class="form-check-input" id="radio_female" name="sex" value="0.0">Female
			        <label class="form-check-label" for="radio_female">
			          <span></span>
			        </label>
			      </div>
			    </div>
			  </div>
		</div>
		<div class="col-lg-6">
			<label class="title_of_inputs">Chest Pain Type:</label>
			  <div class="custom-radios">
			    <div>
			      <div class="form-check">
			        <input type="radio" class="form-check-input" id="radio_typical_angina" name="cp" value="1.0" required="required">Typical Angina
			        <label class="form-check-label" for="radio_typical_angina">
			          <span></span>
			        </label>
			      </div>
			    </div>
			  </div>
			  <div class="custom-radios">
			    <div>
			      <div class="form-check">
			        <input type="radio" class="form-check-input" id="radio_atypical_angina" name="cp" value="2.0">Atypical Angina
			        <label class="form-check-label" for="radio_atypical_angina">
			          <span></span>
			        </label>
			      </div>
			    </div>
			  </div>
			  <div class="custom-radios">
			    <div>
			      <div class="form-check">
			        <input type="radio" class="form-check-input" id="radio_non_anginal_pain" name="cp" value="3.0">Non-anginal pain
			        <label class="form-check-label" for="radio_non_anginal_pain">
			          <span></span>
			        </label>
			      </div>
			    </div>
			  </div>
			  <div class="custom-radios">
			    <div>
			      <div class="form-check">
			        <input type="radio" class="form-check-input" id="radio_asymptomatic" name="cp" value="4.0">Asymptomatic
			        <label class="form-check-label" for="radio_asymptomatic">
			          <span></span>
			        </label>
			      </div>
			    </div>
			  </div>
		</div>
	</div>


	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
		      <label for="trestbps" class="title_of_inputs">Resting Blood Pressure(in mm Hg):</label>
		      <input type="text" class="form-control" id="trestbps" name="trestbps" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 120.0">
		    </div>
		    <div class="form-group" style="float: left;">
 				<label for="min_rest" class="title_of_inputs">Min</label>
				<input type="text" class="form-control" id="min_rest" name="min_rest" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 80.0">
		    </div>
		    <div class="form-group" style="float: left;">
				<label for="max_rest" class="title_of_inputs">Max</label>
				<input type="text" class="form-control" id="max_rest" name="max_rest" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 150.0">
		    </div>
		    <div style="clear: both;"></div>
		</div>



		<div class="col-lg-6">
			<div class="form-group">
		      <label for="chol" class="title_of_inputs">Serum Cholestrol in mg/dl:</label>
		      <input type="text" class="form-control" id="chol" name="chol" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 229.0">
		    </div>
		    <div class="form-group" style="float: left;">
 				<label for="min_cholesterol" class="title_of_inputs">Min</label>
				<input type="text" class="form-control" id="min_cholesterol" name="min_cholesterol" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 80.0">
		    </div>
		    <div class="form-group" style="float: left;">
				<label for="max_cholesterol" class="title_of_inputs">Max</label>
				<input type="text" class="form-control" id="max_cholesterol" name="max_cholesterol" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 150.0">
		    </div>
		    <div style="clear: both;"></div>
		</div>
	</div>


	<div class="row">
		<div class="col-lg-6">
		<label class="title_of_inputs">Fasting Blood sugar >120 mg/dl:</label>
			<div class="custom-radios">
			    <div>
			      <div class="form-check">
			        <input type="radio" class="form-check-input" id="radio_true" name="fbs" value="1.0" required="required">True
			        <label class="form-check-label" for="radio_true">
			          <span></span>
			        </label>
			      </div>
			    </div>
			  </div><br>
			<div class="custom-radios">
			    <div>
			      <div class="form-check">
			        <input type="radio" class="form-check-input" id="radio_false" name="fbs" value="0.0">False
			        <label class="form-check-label" for="radio_false">
			          <span></span>
			        </label>
			      </div>
			    </div>
			  </div>
		</div>



	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
		      <label for="max_heart" class="title_of_inputs">Maximum Heart Rate Achieved:</label>
		      <input type="text" class="form-control" id="max_heart" name="thalach" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 129.0">
		    </div>
		    <div class="form-group" style="float: left;">
 				<label for="min_heartrate" class="title_of_inputs">Min</label>
				<input type="text" class="form-control" id="min_heartrate" name="min_heartrate" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 80.0">
		    </div>
		    <div class="form-group" style="float: left;">
				<label for="max_heartrate" class="title_of_inputs">Max</label>
				<input type="text" class="form-control" id="max_heartrate" name="max_heartrate" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 150.0">
		    </div>
		    <div style="clear: both;"></div>
		</div>



<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
		      <label for="max_heart" class="title_of_inputs">Minimum Heart Rate Achieved:</label>
		      <input type="text" class="form-control" id="max_heart" name="thalach" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 129.0">
		    </div>
		    <div class="form-group" style="float: left;">
 				<label for="min_heartrate" class="title_of_inputs">Min</label>
				<input type="text" class="form-control" id="min_heartrate" name="min_heartrate" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 80.0">
		    </div>
		    <div class="form-group" style="float: left;">
				<label for="max_heartrate" class="title_of_inputs">Max</label>
				<input type="text" class="form-control" id="max_heartrate" name="max_heartrate" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 150.0">
		    </div>
		    <div style="clear: both;"></div>
		</div>




		<div class="col-lg-6">
		  <label class="title_of_inputs">Exercise induced angina:</label>
			<div class="custom-radios">
			    <div>
			      <div class="form-check">
			        <input type="radio" class="form-check-input" id="radio_yes" name="exang" value="1.0" required="required">Yes
			        <label class="form-check-label" for="radio_yes">
			          <span></span>
			        </label>
			      </div>
			    </div>
			  </div>
			 <div class="custom-radios">
			    <div>
			      <div class="form-check">
			        <input type="radio" class="form-check-input" id="radio_no" name="exang" value="0.0">No
			        <label class="form-check-label" for="radio_no">
			          <span></span>
			        </label>
			      </div>
			    </div>
			  </div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
		      <label for="oldpeak" class="title_of_inputs">Oldpeak(ST depression induced by exercise):</label>
		      <input type="text" class="form-control" id="oldpeak" name="oldpeak" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 2.6">
		    </div>
		    <div class="form-group" style="float: left;">
 				<label for="min_oldpeak" class="title_of_inputs">Min</label>
				<input type="text" class="form-control" id="min_oldpeak" name="min_oldpeak" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 2.0">
		    </div>
		    <div class="form-group" style="float: left;">
				<label for="max_oldpeak" class="title_of_inputs">Max</label>
				<input type="text" class="form-control" id="max_oldpeak" name="max_oldpeak" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 3.0">
		    </div>
		    <div style="clear: both;"></div>
		</div>
		<div class="col-lg-6">
		  <label class="title_of_inputs">Slope(the slope of the peak exercise ST segment):</label>
			<div class="custom-radios">
			    <div>
			      <div class="form-check">
			        <input type="radio" class="form-check-input" id="radio_unsloping" name="slope" value="1.0" required="required">Unsloping
			        <label class="form-check-label" for="radio_unsloping">
			          <span></span>
			        </label>
			      </div>
			    </div>
			  </div>
			<div class="custom-radios">
			    <div>
			      <div class="form-check">
			        <input type="radio" class="form-check-input" id="radio_flat" name="slope" value="2.0">Flat
			        <label class="form-check-label" for="radio_flat">
			          <span></span>
			        </label>
			      </div>
			    </div>
			  </div>
			<div class="custom-radios">
			    <div>
			      <div class="form-check">
			        <input type="radio" class="form-check-input" id="radio_downsloping" name="slope" value="3.0">Downsloping
			        <label class="form-check-label" for="radio_downsloping">
			          <span></span>
			        </label>
			      </div>
			    </div>
			  </div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
		      <label for="ca" class="title_of_inputs">Number of major vessels (0-3) by flourosopy:</label>
		      <input type="text" class="form-control" id="ca" name="ca" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 2.0">
		    </div>
		    <div class="form-group" style="float: left;">
 				<label for="min_vessels" class="title_of_inputs">Min</label>
				<input type="text" class="form-control" id="min_vessels" name="min_vessels" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 2.0">
		    </div>
		    <div class="form-group" style="float: left;">
				<label for="max_vessels" class="title_of_inputs">Max</label>
				<input type="text" class="form-control" id="max_vessels" name="max_vessels" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 3.0">
		    </div>
		    <div style="clear: both;"></div>
		</div>
		<div class="col-lg-6">
			<div class="form-group">
		      <label for="thal" class="title_of_inputs">Thal:</label>
		      <input type="text" class="form-control" id="thal" name="thal" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 7.0">
		    </div>
		    <div class="form-group" style="float: left;">
 				<label for="min_thal" class="title_of_inputs">Min</label>
				<input type="text" class="form-control" id="min_thal" name="min_thal" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 3.0">
		    </div>
		    <div class="form-group" style="float: left;">
				<label for="max_thal" class="title_of_inputs">Max</label>
				<input type="text" class="form-control" id="max_thal" name="max_thal" value="" pattern="[0-9]+([\.][0-9]{1})" required="required" placeholder="e.g. 7.0">
		    </div>
		    <div style="clear: both;"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="col-lg-12 text-center"><button type="submit" class="btn btn-danger" name="save">Save</button></div><br><br>

			<div class="form-group" id="result_textarea">
			  <label for="result" class="title_of_inputs">Result:</label>
			  <textarea class="form-control" rows="5" id="result" readonly="readonly"><?php if(isset($output)){echo $output;}  ?></textarea>
			</div>
		</div>
	</div>
    
</div>
	</form>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		  </body>
		</html>