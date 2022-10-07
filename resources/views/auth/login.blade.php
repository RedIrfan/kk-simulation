@extends('layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row row-cols-6 row-cols-lg-3 ">
            <div></div>
            <div class="card shadow col-8">
                <div class="card-header">
                    <h4 class="text-center">Login</h4>
    
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="container">
                            <div class="row row-cols-2">    
                                <label for="email">Email</label>
                                <div class="col">
                                    <input type="text" id="email" name="email" class="form-control">
                                </div>
        
                                <label for="password">Password</label>
                                <div class="col">
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                        <a class="text-center d-block" href="{{ url('register') }}">Register</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>