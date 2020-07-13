@extends('layouts.app')
@section('content')

<html data-whatinput="initial" data-whatintent="mouse" class=" whatinput-types-initial">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Southland Hotel App</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>



<main>
    <div class="container">
        <h4>New Client</h4>

        <form action="/clients/new" method="post">

            <div class="row form-group">
                <label class="col-form-label col-2">Title</label>
                <select class="form-control col-2" name="form[title]">
                  @foreach($titles as $title)
                    <option value="{{$title}}">{{$title}}. </option>
                  @endforeach

                </select>

            </div>
            <div class="row form-group">
                <label class="col-2">Name</label>
                <input class="col-10 form-control" name="form[Name]" type="text">
            </div>
            <div class="row form-group">
                <label class="col-2">Last Name</label>
                <input class="col-10 form-control" name="form[lastName]" type="text">
            </div>
            <div class="row form-group">
                <label class="col-2">Address</label>
                <input class="col-10 form-control" name="form[address]" type="text">
            </div>
            <div class="row form-group">
                <label class="col-2">zip_code</label>
                <input class="col-10 form-control" name="form[zipCode]" type="text">
            </div>
            <div class="row form-group">
                <label class="col-2">City</label>
                <input class="col-10 form-control" name="form[city]" type="text">
            </div>
            <div class="row form-group">
                <label class="col-2">State</label>
                <input class="col-10 form-control" name="form[state]" type="text">
            </div>
            <div class="row form-group">
                <label class="col-2">Email</label>
                <input class="col-10 form-control" name="form[email]" type="text">
            </div>
            <div class="row form-group">
                <input value="SAVE" class="btn btn-success col-1 offset-11" type="submit">
            </div>
        </form>
    </div>

</main>

<footer class="footer bg-inverse">
    <div class="container">
        <span class="text-muted">Copyright 2017</span>
    </div>
</footer>


<script src="js/jquery.slim.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>

@endsection
