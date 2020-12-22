<head>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title> @yield('title') </title>
</head>

<body>
<div class="container mt-2">
    <ul class="nav nav-pills">
        <li class="nav-item pr-2">
            <a class="nav-link active " href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{route('produtos.index')}}">Produtos</a>
        </li>
    </ul>
</div>
<div class="container">
@yield('content')
</div>

<script href="{{asset('js/app.js')}}" type="javascript"></script>
</body>