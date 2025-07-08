<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&display=swap" rel="stylesheet">

  @yield('css')
</head>

<body>
  <header>
    <div class="header-inner">
      <h1 class="font-cormorant">FashionablyLate</h1>
      <div class="header__nav">
        @if (Route::currentRouteName() === 'register')
        <a class="nav__link" href="{{ route('login') }}">login</a>
        @else
        <a class="nav__link" href="{{ route('register') }}">register</a>
        @endif
      </div>
    </div>
  </header>


  <main>
    <h2 style="text-align: center; margin-top: 40px;">@yield('subtitle')</h2>

    <div class="container">
      @yield('content')
    </div>
  </main>
</body>

</html>