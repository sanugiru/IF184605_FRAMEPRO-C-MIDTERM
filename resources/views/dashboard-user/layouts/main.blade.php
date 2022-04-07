<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Welcome to Laundryin | Your no. 1 laundry</title>
  <link rel="stylesheet" href="/bootstrap/bootstrap.css"/>
  <link rel="stylesheet" href="/bootstrap/bootstrap.min.css"/>
  <link rel="stylesheet" href="/css/style.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <style>
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      right: 0;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1;}

    .dropdown:hover .dropdown-content {
      display: block;
      margin-top: 40px;
      margin-right: 35px;
    }
  </style>

</head>
<body>
  <header>
    @include('includes.navbar-auth')
  </header>
   
  <main>
    @yield('container')
  </main>

</body>
</html>