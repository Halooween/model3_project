{{-- @extends('layout.main') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
      .create{
      margin-left:100px;
  }
    form{
      height: auto;
      width: 50%;
      margin: 100px;
    }
    .table{
        height: auto;
        width: 100%;
        /* margin: 100px; */
      }
body{
  min-height: 100vh;
    display: flex;
    flex-direction: column;
}

body {
   min-height:100vh;
}


  </style>
</head>
<body class="d-flex flex-column">
    
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class=" nav navbar-brand text-uppercase ms-5" href="{{ route('home.index') }}">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class=" collapse navbar-collapse flex-row-reverse me-5" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class=" nav-item ">
                    <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('post.index') }}">Post</a>
                  </li>
                  <li class="navlinks nav-item">
                    <a class="nav-link" href="{{ route('category.index') }}">category</a>
                  </li>

                 
                </ul>
              </div>
            </div>
          </nav>
