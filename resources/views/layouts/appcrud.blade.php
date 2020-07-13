<style>
    /* side bar */
    
      body{
      margin: 0;
      padding: 0;
      font-family: 'Pangolin', cursive;
    }
    
    header{
      position: fixed;
      background: #22242A;
      padding: 20px;
      width: 100%;
      height: 70px;
        color: green;
        font-family: 'Pangolin', cursive;
    }
    
    .left_area h3{
      color: #1cfa79;
      margin: 0;
      text-transform: uppercase;
      font-size: 22px;
      font-weight: 900;
    }
    
    .left_area span{
      color: #19B3D3;
    }
    
    .logout_btn{
      padding: 5px;
      background: #19B3D3;
      text-decoration: none;
      float: right;
      margin-top: -30px;
      margin-right: 40px;
      border-radius: 2px;
      font-size: 15px;
      font-weight: 600;
      color: #fff;
      transition: 0.5s;
      transition-property: background;
    }
    
    .logout_btn:hover{
      background: #0B87A6;
    }
    
    .sidebar {
      background: #2f323a;
      margin-top: 70px;
      padding-top: 30px;
      position: fixed;
      left: 0;
      width: 250px;
      height: 100%;
      transition: 0.5s;
      transition-property: left;
    }
    
    .sidebar .profile_image{
      width: 100px;
      height: 100px;
      border-radius: 100px;
      margin-bottom: 10px;
    }
    
    .sidebar h4{
      color: #ccc;
      margin-top: 0;
      margin-bottom: 20px;
    }
    
    .sidebar a{
      color: #fff;
      display: block;
      width: 100%;
      line-height: 60px;
      text-decoration: none;
      padding-left: 40px;
      box-sizing: border-box;
      transition: 0.5s;
      transition-property: background;
    }
    
    .sidebar a:hover{
      background: #19B3D3;
    }
    
    .sidebar i{
      padding-right: 10px;
      padding-top: 10px;
    }
    
    label #sidebar_btn{
      z-index: 1;
      color: #fff;
      position: fixed;
      cursor: pointer;
      left: 300px;
      font-size: 20px;
      margin: 5px 0;
      transition: 0.5s;
      transition-property: color;
    }
    
    label #sidebar_btn:hover{
      color: #19B3D3;
    }
    
    #check:checked ~ .sidebar{
      left: -190px;
    }
    
    #check:checked ~ .sidebar a span{
      display: none;
    }
    
    #check:checked ~ .sidebar a{
      font-size: 20px;
      margin-left: 170px;
      width: 80px;
    }
    
    .content{
      margin-left: 250px;
      background: url({{('img/logo2.png')}}) no-repeat;
      background-position: center;
      background-size: cover;
      height: 115vh;
      transition: 0.5s;
    }
    
    
    #check:checked ~ .content{
      margin-left: 60px;
    }
    
    #check{
      display: none;
    }
    
    </style>
    
    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <!-- Scripts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
        <!-- my font -->
        <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    </head>
    <body>
    
            <input type="checkbox" id="check">
        <!--header area start-->
        <header>
          <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
          </label>
          <div class="left_area">
            <h3>Dustman <span>mobile</span></h3>
          </div>
          <div class="right_area">
            <a href="{{('logout') }}" class="logout_btn"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
          </div>
        </header>
        <!--header area end-->
        <!--sidebar start-->
        <div class="sidebar">
          <center>
            <img src="{{('img/POTO_GUE.png')}}" class="profile_image" alt="">
            <h4> {{ Auth::user()->name }}</h4>
          </center>
          <a href="{{('home')}}"><i class="fas fa-desktop"></i><span>Halaman Utama</span></a>
          <a href="{{('menabung')}}"><i class="fas fa-trash"></i><span>Mulai Buang Sampah</span></a>
          <a href="{{('data')}}"><i class="fas fa-book"></i><span>History</span></a>
          <a href="#"><i class="fas fa-info-circle"></i><span>Bantuan</span></a>
          <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
        </div>
        <!--sidebar end-->
        <div class="content">
            @yield('content')
        </div>
    
        
    
    </body>
    </html>
    