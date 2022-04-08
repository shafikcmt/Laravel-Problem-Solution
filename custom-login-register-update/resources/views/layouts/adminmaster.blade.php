<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
   <header>
       @include('includes.adminheader')
   </header>
   
   <div id="main">
           @yield('content')
   </div>
   <footer>
       @include('includes.adminfooter')
   </footer>
</body>
</html>