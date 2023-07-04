
<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')
</head>

<body class="g-sidenav-show  bg-gray-100">
  @include('admin.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('admin.header')
    <!-- End Navbar -->
    @include('admin.content')
  </main>
  <!--   Core JS Files   -->
  @include('admin.js')
</body>

</html>