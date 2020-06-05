<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 
</head>  
<body style="background-color: #C0C0C0;">
	<br><br>
<!--<img class="center" src="https://128.199.236.183/assets/logo/logo.PNG" alt="bXs" width="12%" height="12%">-->
<img src="{{ $message->embed(public_path('assets/logo.png')) }}" alt="logo" style="display: block;margin-left: auto;margin-right: auto;"  width="20%" height="20%" >
<br>
<div class="container" style="margin: 0 auto;text-align: center;border-radius: 10px;padding: 10px;background-color: #FFFFFF;box-shadow: 5px 5px 5px #888888;">
  <h2 style="font-size:24pt;font-weight:bold;color:#999966;font-family: Sans-serif;">Just one more step...</h2> 
  <img src="{{ $message->embed(public_path('assets/logo.png')) }}" style="display: block;margin-left: auto;margin-right: auto;" >
  <p>{{$member->name}}, <br><br>Click the big button below to activate your Book My Party Venue account.</p>      
  <a href="http://ec2-54-179-138-119.ap-southeast-1.compute.amazonaws.com/verify/email/{{$member->id}}-{{$member->hash_key}}" style="
  -moz-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
  -webkit-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
  box-shadow:inset 0px 1px 0px 0px #bbdaf7;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5));
  background:-moz-linear-gradient(top, #79bbff 5%, #378de5 100%);
  background:-webkit-linear-gradient(top, #79bbff 5%, #378de5 100%);
  background:-o-linear-gradient(top, #79bbff 5%, #378de5 100%);
  background:-ms-linear-gradient(top, #79bbff 5%, #378de5 100%);
  background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5',GradientType=0);
  background-color:#79bbff;
  -moz-border-radius:6px;
  -webkit-border-radius:6px;
  border-radius:6px;
  border:1px solid #84bbf3;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:15px;
  font-weight:bold;
  padding:6px 24px;
  text-decoration:none;
  text-shadow:0px 1px 0px #528ecc;" role="button">Activate Your Account</a></button>
  <br><br>
</div>

</body>
</html>
