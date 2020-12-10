<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height: 450px;
        padding-top: 100px;
    }
    .slider-img{
        height:400px !important
    }
    .custom-product{
        height:600px;
    }
    .trending-image{
        height:100px;
    }
    .trending-item{
        float:left; 
        width:20%;
    }
    .trending-wrapper{
        margin:30px;
    }
    .view img{
        width:550px;
        height:500px;
    }
    .text {
        color:red;
        font-size:20px;
    }
    .design{
        margin-top:60px;
    }
    .search-box{
        width:500px !important 
    }
    .card-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>
</html>