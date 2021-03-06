<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
@section ('navbar')
<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav">
            <li><a href="/">Home</a><li>
            <li><a href="/nav"> Nav</a><li>
            <li><a href="/list"> List</a><li>
            <li><a href="/about"> About</a><li>
            </ul>
            </div>
            </div>
@show

@section ('content')
    
    @show

@section ('footer')
<p> Copyright 2021 e-Book Sharing Application</p>
@show
</body>
</html>