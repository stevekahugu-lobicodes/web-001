<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "stevekahugu@gamil.com";
 
    $email_subject = "jungle safaris";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['phone']) 
 
        !isset($_POST['address']) 

        !isset($_POST['city']) 

        !isset($_POST['state'])  

        !isset($_POST['zip']) 

        !isset($_POST['Destination'])  

        !isset($_POST['hosting'])   

        !isset($_POST['comment']) 


        ) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $phone = $_POST['phone']; // not required
 
    $address = $_POST['address']; // required

    $city = $_POST['city']; // not required
 
    $country = $_POST['state']; // required

    $zip_code = $_POST['zip']; // not required
 
    $destination = $_POST['Destination']; // required

    $hosting= $_POST['hosting']; // required

    $comment= $_POST['comment']; // required
 
     
 
    $error_message = "input error";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($phone)."\n";
 
    $email_message .= "Address: ".clean_string($address)."\n";

     $email_message .= "City: ".clean_string($city)."\n";
 
    $email_message .= "country: ".clean_string($country)."\n";
 
    $email_message .= "zip code: ".clean_string($zip_code)."\n";
 
    $email_message .= "Destination: ".clean_string($destination)."\n";
 
    $email_message .= "Travelled again?: ".clean_string($hosting)."\n";

     $email_message .= "Comments: ".clean_string($comment)."\n";
 
     
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting us. We will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="contact.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar">
      <div class="navbar-wrapper">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="log">
              <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo" class="logo"></a>
            </div>
              <a class="navbar-brand2" href="#"><h1>Jungle safaris<h1></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="navtext"><a href="#">Home</a></li>
                <li class="navtext"><a href="#contactus.php">Contact us!</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
                  <ul  class="dropdown-menu">
                    <li><a href="aboutus.html#whyus">WHY US?</a></li>
                    <li><a href="#">TESTIMONIALS</a></li>
                    <li><a href="aboutus.html#faqs">FAQ'S</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header"><h5>OUR TEAM</h5></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="https://docs.google.com/forms/d/1rOcw7a4_bVLlOC28msaW0wlRssDC6qU7fDOXSG5EgZQ/viewform?embedded=true" target="_blank">Enquire</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
</div>
</div>
<div>

<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Contact Us Today!</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control" id="Fast Name" type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control" id="Last Name" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control" id="E-Mail" type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(845)555-1212" class="form-control" id="phone" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" id="Address" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" placeholder="city" class="form-control"  id="City" type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Country</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" ">Please select your country</option>
      
  <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
  <option value="Åland Islands" title="Åland Islands">Åland Islands</option>
  <option value="Albania" title="Albania">Albania</option>
  <option value="Algeria" title="Algeria">Algeria</option>
  <option value="American Samoa" title="American Samoa">American Samoa</option>
  <option value="Andorra" title="Andorra">Andorra</option>
  <option value="Angola" title="Angola">Angola</option>
  <option value="Anguilla" title="Anguilla">Anguilla</option>
  <option value="Antarctica" title="Antarctica">Antarctica</option>
  <option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</option>
  <option value="Argentina" title="Argentina">Argentina</option>
  <option value="Armenia" title="Armenia">Armenia</option>
  <option value="Aruba" title="Aruba">Aruba</option>
  <option value="Australia" title="Australia">Australia</option>
  <option value="Austria" title="Austria">Austria</option>
  <option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
  <option value="Bahamas" title="Bahamas">Bahamas</option>
  <option value="Bahrain" title="Bahrain">Bahrain</option>
  <option value="Bangladesh" title="Bangladesh">Bangladesh</option>
  <option value="Barbados" title="Barbados">Barbados</option>
  <option value="Belarus" title="Belarus">Belarus</option>
  <option value="Belgium" title="Belgium">Belgium</option>
  <option value="Belize" title="Belize">Belize</option>
  <option value="Benin" title="Benin">Benin</option>
  <option value="Bermuda" title="Bermuda">Bermuda</option>
  <option value="Bhutan" title="Bhutan">Bhutan</option>
  <option value="Bolivia, Plurinational State of" title="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
  <option value="Bonaire, Sint Eustatius and Saba" title="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
  <option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
  <option value="Botswana" title="Botswana">Botswana</option>
  <option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
  <option value="Brazil" title="Brazil">Brazil</option>
  <option value="British Indian Ocean Territory" title="British Indian Ocean Territory">British Indian Ocean Territory</option>
  <option value="Brunei Darussalam" title="Brunei Darussalam">Brunei Darussalam</option>
  <option value="Bulgaria" title="Bulgaria">Bulgaria</option>
  <option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
  <option value="Burundi" title="Burundi">Burundi</option>
  <option value="Cambodia" title="Cambodia">Cambodia</option>
  <option value="Cameroon" title="Cameroon">Cameroon</option>
  <option value="Canada" title="Canada">Canada</option>
  <option value="Cape Verde" title="Cape Verde">Cape Verde</option>
  <option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
  <option value="Central African Republic" title="Central African Republic">Central African Republic</option>
  <option value="Chad" title="Chad">Chad</option>
  <option value="Chile" title="Chile">Chile</option>
  <option value="China" title="China">China</option>
  <option value="Christmas Island" title="Christmas Island">Christmas Island</option>
  <option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
  <option value="Colombia" title="Colombia">Colombia</option>
  <option value="Comoros" title="Comoros">Comoros</option>
  <option value="Congo" title="Congo">Congo</option>
  <option value="Congo, the Democratic Republic of the" title="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
  <option value="Cook Islands" title="Cook Islands">Cook Islands</option>
  <option value="Costa Rica" title="Costa Rica">Costa Rica</option>
  <option value="Côte d'Ivoire" title="Côte d'Ivoire">Côte d'Ivoire</option>
  <option value="Croatia" title="Croatia">Croatia</option>
  <option value="Cuba" title="Cuba">Cuba</option>
  <option value="Curaçao" title="Curaçao">Curaçao</option>
  <option value="Cyprus" title="Cyprus">Cyprus</option>
  <option value="Czech Republic" title="Czech Republic">Czech Republic</option>
  <option value="Denmark" title="Denmark">Denmark</option>
  <option value="Djibouti" title="Djibouti">Djibouti</option>
  <option value="Dominica" title="Dominica">Dominica</option>
  <option value="Dominican Republic" title="Dominican Republic">Dominican Republic</option>
  <option value="Ecuador" title="Ecuador">Ecuador</option>
  <option value="Egypt" title="Egypt">Egypt</option>
  <option value="El Salvador" title="El Salvador">El Salvador</option>
  <option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea</option>
  <option value="Eritrea" title="Eritrea">Eritrea</option>
  <option value="Estonia" title="Estonia">Estonia</option>
  <option value="Ethiopia" title="Ethiopia">Ethiopia</option>
  <option value="Falkland Islands (Malvinas)" title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
  <option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
  <option value="Fiji" title="Fiji">Fiji</option>
  <option value="Finland" title="Finland">Finland</option>
  <option value="France" title="France">France</option>
  <option value="French Guiana" title="French Guiana">French Guiana</option>
  <option value="French Polynesia" title="French Polynesia">French Polynesia</option>
  <option value="French Southern Territories" title="French Southern Territories">French Southern Territories</option>
  <option value="Gabon" title="Gabon">Gabon</option>
  <option value="Gambia" title="Gambia">Gambia</option>
  <option value="Georgia" title="Georgia">Georgia</option>
  <option value="Germany" title="Germany">Germany</option>
  <option value="Ghana" title="Ghana">Ghana</option>
  <option value="Gibraltar" title="Gibraltar">Gibraltar</option>
  <option value="Greece" title="Greece">Greece</option>
  <option value="Greenland" title="Greenland">Greenland</option>
  <option value="Grenada" title="Grenada">Grenada</option>
  <option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
  <option value="Guam" title="Guam">Guam</option>
  <option value="Guatemala" title="Guatemala">Guatemala</option>
  <option value="Guernsey" title="Guernsey">Guernsey</option>
  <option value="Guinea" title="Guinea">Guinea</option>
  <option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
  <option value="Guyana" title="Guyana">Guyana</option>
  <option value="Haiti" title="Haiti">Haiti</option>
  <option value="Heard Island and McDonald Islands" title="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
  <option value="Holy See (Vatican City State)" title="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
  <option value="Honduras" title="Honduras">Honduras</option>
  <option value="Hong Kong" title="Hong Kong">Hong Kong</option>
  <option value="Hungary" title="Hungary">Hungary</option>
  <option value="Iceland" title="Iceland">Iceland</option>
  <option value="India" title="India">India</option>
  <option value="Indonesia" title="Indonesia">Indonesia</option>
  <option value="Iran, Islamic Republic of" title="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
  <option value="Iraq" title="Iraq">Iraq</option>
  <option value="Ireland" title="Ireland">Ireland</option>
  <option value="Isle of Man" title="Isle of Man">Isle of Man</option>
  <option value="Israel" title="Israel">Israel</option>
  <option value="Italy" title="Italy">Italy</option>
  <option value="Jamaica" title="Jamaica">Jamaica</option>
  <option value="Japan" title="Japan">Japan</option>
  <option value="Jersey" title="Jersey">Jersey</option>
  <option value="Jordan" title="Jordan">Jordan</option>
  <option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
  <option value="Kenya" title="Kenya">Kenya</option>
  <option value="Kiribati" title="Kiribati">Kiribati</option>
  <option value="Korea, Democratic People's Republic of" title="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
  <option value="Korea, Republic of" title="Korea, Republic of">Korea, Republic of</option>
  <option value="Kuwait" title="Kuwait">Kuwait</option>
  <option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
  <option value="Lao People's Democratic Republic" title="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
  <option value="Latvia" title="Latvia">Latvia</option>
  <option value="Lebanon" title="Lebanon">Lebanon</option>
  <option value="Lesotho" title="Lesotho">Lesotho</option>
  <option value="Liberia" title="Liberia">Liberia</option>
  <option value="Libya" title="Libya">Libya</option>
  <option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
  <option value="Lithuania" title="Lithuania">Lithuania</option>
  <option value="Luxembourg" title="Luxembourg">Luxembourg</option>
  <option value="Macao" title="Macao">Macao</option>
  <option value="Macedonia, the former Yugoslav Republic of" title="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
  <option value="Madagascar" title="Madagascar">Madagascar</option>
  <option value="Malawi" title="Malawi">Malawi</option>
  <option value="Malaysia" title="Malaysia">Malaysia</option>
  <option value="Maldives" title="Maldives">Maldives</option>
  <option value="Mali" title="Mali">Mali</option>
  <option value="Malta" title="Malta">Malta</option>
  <option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
  <option value="Martinique" title="Martinique">Martinique</option>
  <option value="Mauritania" title="Mauritania">Mauritania</option>
  <option value="Mauritius" title="Mauritius">Mauritius</option>
  <option value="Mayotte" title="Mayotte">Mayotte</option>
  <option value="Mexico" title="Mexico">Mexico</option>
  <option value="Micronesia, Federated States of" title="Micronesia, Federated States of">Micronesia, Federated States of</option>
  <option value="Moldova, Republic of" title="Moldova, Republic of">Moldova, Republic of</option>
  <option value="Monaco" title="Monaco">Monaco</option>
  <option value="Mongolia" title="Mongolia">Mongolia</option>
  <option value="Montenegro" title="Montenegro">Montenegro</option>
  <option value="Montserrat" title="Montserrat">Montserrat</option>
  <option value="Morocco" title="Morocco">Morocco</option>
  <option value="Mozambique" title="Mozambique">Mozambique</option>
  <option value="Myanmar" title="Myanmar">Myanmar</option>
  <option value="Namibia" title="Namibia">Namibia</option>
  <option value="Nauru" title="Nauru">Nauru</option>
  <option value="Nepal" title="Nepal">Nepal</option>
  <option value="Netherlands" title="Netherlands">Netherlands</option>
  <option value="New Caledonia" title="New Caledonia">New Caledonia</option>
  <option value="New Zealand" title="New Zealand">New Zealand</option>
  <option value="Nicaragua" title="Nicaragua">Nicaragua</option>
  <option value="Niger" title="Niger">Niger</option>
  <option value="Nigeria" title="Nigeria">Nigeria</option>
  <option value="Niue" title="Niue">Niue</option>
  <option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
  <option value="Northern Mariana Islands" title="Northern Mariana Islands">Northern Mariana Islands</option>
  <option value="Norway" title="Norway">Norway</option>
  <option value="Oman" title="Oman">Oman</option>
  <option value="Pakistan" title="Pakistan">Pakistan</option>
  <option value="Palau" title="Palau">Palau</option>
  <option value="Palestinian Territory, Occupied" title="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
  <option value="Panama" title="Panama">Panama</option>
  <option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
  <option value="Paraguay" title="Paraguay">Paraguay</option>
  <option value="Peru" title="Peru">Peru</option>
  <option value="Philippines" title="Philippines">Philippines</option>
  <option value="Pitcairn" title="Pitcairn">Pitcairn</option>
  <option value="Poland" title="Poland">Poland</option>
  <option value="Portugal" title="Portugal">Portugal</option>
  <option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
  <option value="Qatar" title="Qatar">Qatar</option>
  <option value="Réunion" title="Réunion">Réunion</option>
  <option value="Romania" title="Romania">Romania</option>
  <option value="Russian Federation" title="Russian Federation">Russian Federation</option>
  <option value="Rwanda" title="Rwanda">Rwanda</option>
  <option value="Saint Barthélemy" title="Saint Barthélemy">Saint Barthélemy</option>
  <option value="Saint Helena, Ascension and Tristan da Cunha" title="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
  <option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
  <option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
  <option value="Saint Martin (French part)" title="Saint Martin (French part)">Saint Martin (French part)</option>
  <option value="Saint Pierre and Miquelon" title="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
  <option value="Saint Vincent and the Grenadines" title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
  <option value="Samoa" title="Samoa">Samoa</option>
  <option value="San Marino" title="San Marino">San Marino</option>
  <option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe</option>
  <option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
  <option value="Senegal" title="Senegal">Senegal</option>
  <option value="Serbia" title="Serbia">Serbia</option>
  <option value="Seychelles" title="Seychelles">Seychelles</option>
  <option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
  <option value="Singapore" title="Singapore">Singapore</option>
  <option value="Sint Maarten (Dutch part)" title="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
  <option value="Slovakia" title="Slovakia">Slovakia</option>
  <option value="Slovenia" title="Slovenia">Slovenia</option>
  <option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
  <option value="Somalia" title="Somalia">Somalia</option>
  <option value="South Africa" title="South Africa">South Africa</option>
  <option value="South Georgia and the South Sandwich Islands" title="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
  <option value="South Sudan" title="South Sudan">South Sudan</option>
  <option value="Spain" title="Spain">Spain</option>
  <option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
  <option value="Sudan" title="Sudan">Sudan</option>
  <option value="Suriname" title="Suriname">Suriname</option>
  <option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
  <option value="Swaziland" title="Swaziland">Swaziland</option>
  <option value="Sweden" title="Sweden">Sweden</option>
  <option value="Switzerland" title="Switzerland">Switzerland</option>
  <option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab Republic</option>
  <option value="Taiwan, Province of China" title="Taiwan, Province of China">Taiwan, Province of China</option>
  <option value="Tajikistan" title="Tajikistan">Tajikistan</option>
  <option value="Tanzania, United Republic of" title="Tanzania, United Republic of">Tanzania, United Republic of</option>
  <option value="Thailand" title="Thailand">Thailand</option>
  <option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
  <option value="Togo" title="Togo">Togo</option>
  <option value="Tokelau" title="Tokelau">Tokelau</option>
  <option value="Tonga" title="Tonga">Tonga</option>
  <option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
  <option value="Tunisia" title="Tunisia">Tunisia</option>
  <option value="Turkey" title="Turkey">Turkey</option>
  <option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
  <option value="Turks and Caicos Islands" title="Turks and Caicos Islands">Turks and Caicos Islands</option>
  <option value="Tuvalu" title="Tuvalu">Tuvalu</option>
  <option value="Uganda" title="Uganda">Uganda</option>
  <option value="Ukraine" title="Ukraine">Ukraine</option>
  <option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates</option>
  <option value="United Kingdom" title="United Kingdom">United Kingdom</option>
  <option value="United States" title="United States">United States</option>
  <option value="United States Minor Outlying Islands" title="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
  <option value="Uruguay" title="Uruguay">Uruguay</option>
  <option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
  <option value="Vanuatu" title="Vanuatu">Vanuatu</option>
  <option value="Venezuela, Bolivarian Republic of" title="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
  <option value="Viet Nam" title="Viet Nam">Viet Nam</option>
  <option value="Virgin Islands, British" title="Virgin Islands, British">Virgin Islands, British</option>
  <option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
  <option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna</option>
  <option value="Western Sahara" title="Western Sahara">Western Sahara</option>
  <option value="Yemen" title="Yemen">Yemen</option>
  <option value="Zambia" title="Zambia">Zambia</option>
  <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
    </select>
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Zip Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="zip" placeholder="Zip Code" class="form-control" id="Zip Code" type="text">
    </div>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Destination</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="Destination" placeholder="location interested" class="form-control" id="Destination" type="text">
    </div>
  </div>
</div>

<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-4 control-label">Have you travelled to kenya again?</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" id="Yes" name="hosting" value="yes" /> Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" id="No"  name="hosting" value="no" /> No
                                </label>
                            </div>
                        </div>
                    </div>

<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Describe type of safari</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="comment" placeholder="What you want to experience"></textarea>
  </div>
  </div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->


     <!-- FOOTER -->
      <footer id="foot">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
          <h6>Copyright &copy; 2016 {Africa Wonders and Tours}</h6>
          </div><!-- end col-sm-2 -->
          
          <div class="col-sm-4">
            <h6>About Us</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div><!-- end col-sm-4 -->
          
          <div class="col-sm-2">
            <h6>Navigation</h6>
            <ul class="unstyled">
              <li><a href="#">Home</a></li>
              <li><a href="#">Destinations</a></li>
              <li><a href="#">Safaris</a></li>
              <li><a href="#">Contact us!</a></li>
            </ul>
          </div><!-- end col-sm-2 -->
          
          <div class="col-sm-2">
            <h6>Follow Us</h6>
            <ul class="unstyled">
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Google Plus</a></li>
            </ul>
          </div><!-- end col-sm-2 -->
          
          <div class="col-sm-2">
            <h6>Coded with <span class="glyphicon glyphicon-heart"></span> by steve</h6>
          </div><!-- end col-sm-2 -->
        </div><!-- end row -->
      </div><!-- end container -->
    </footer>
  


    



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/contact.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
