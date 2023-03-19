<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>


    <nav class="navbar" style="background-color: rgba(0, 0, 0, 0.2);">
        <div class="container-fluid">
          <a class="navbar-brand"> <strong> Ge'ez Blogger </strong> </a>
        </div>
      </nav>

    <div class="continer">

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>


        {{-- <footer class="bg-light text-center text-lg-start mt-3">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
         <strong>© 2020 Copyright:</strong>
          <a class="text-dark" href="https://youtube.com/@geez./"><strong>Dawit Terefe</strong> </a>
        </div>
        <!-- Copyright -->
      </footer> --}}



</body>
</html>
