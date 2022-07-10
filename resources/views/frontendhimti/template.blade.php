<!DOCTYPE html>
<html lang="en">

<head>
  <title>HIMTI - UMT</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
  @include('layoutfrontend.css')
  <!-- Tutup AVILON -->
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  

  @yield('content')
@include('layoutfrontend.js')
</body>

</html>