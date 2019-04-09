<!DOCTYPE html>
<html>
<head>
  <title>@yield('title','Weibo App') - Laravel 新手入门加成</title>
  <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
</head>
<body>
  <!--nav start-->
  @include('layouts._header')
  <!--content start-->
  <div class="container">
    <div class="offset-md-1 col-md-10">
      @include('shared._messages')
      @yield('content')
      @include('layouts._footer')
    </div>
  </div>
</body>
</html>
