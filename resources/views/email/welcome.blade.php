<!DOCTYPE html>
<html>

<head>
  <title>Welcome Email</title>
</head>

<body>
  <h2>Welcome {{$userDetails['name']}}</h2>
  <br />
  Your have been successfully registerd with following details: <br />
  Name : <strong>{{$userDetails['name']}}</strong> <br />
  Email : <strong>{{$userDetails['email']}}</strong> <br />
  Pincode : <strong>{{$userDetails['pincode']}}</strong> <br />
</body>

</html>