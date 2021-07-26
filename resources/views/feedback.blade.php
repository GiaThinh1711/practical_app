<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header>
    <h1 style="text-align: center;margin-top: 20px">GET YOUR FEEDBACK</h1>
</header>

<form action="{{url('/save')}}" method="post">
    @csrf
    <div class="form-group" style="margin-top: 10px">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Your Name" placeholder="Name" required>
    </div>
    <div class="form-group" style="margin-top: 10px">
        <label for="exampleInputPassword1">Email address</label>
        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" required>
    </div>
    <div class="form-group" style="margin-top: 10px">
        <label for="exampleInputPassword1">Telephone</label>
        <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Your Telephone" required>
    </div>
    <div class="form-group" style="margin-top: 10px">
        <label for="exampleInputPassword1">Your Feedback</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Feedback" required>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-top: 10px">Send</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
