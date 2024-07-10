<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @stack('head')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body {
      background-color: #121212;
      color: #e0e0e0;
    }
    .bg-dark-custom {
      background-color: #1e1e1e;
    }
    .text-neon {
      color: #0bf4f3;
      /* text-shadow: 0 0 5px #0bf4f3, 0 0 10px #0bf4f3, 0 0 20px #0bf4f3, 0 0 40px #0bf4f3, 0 0 80px #0bf4f3; */
    }
    .text-list {
      color: #CBF1F5;
    }
    .btn-neon {
      color: #fff;
      background-color: #0bf4f3;
      border: none;
      box-shadow: 0 0 5px #0bf4f3, 0 0 10px #0bf4f3, 0 0 20px #0bf4f3, 0 0 40px #0bf4f3, 0 0 80px #0bf4f3;
    }
    .btn-neon:hover {
      background-color: #0bb5c1;
    }
    .card-custom {
      background-color: #1e1e1e;
      border: none;
      box-shadow: 0 0 10px #0bf4f3;
    }
    .form-control-custom {
      background-color: #333;
      color: #fff;
      border: 1px solid #0bf4f3;
    }
    .form-control-custom::placeholder {
      color: #ccc;
    }
    .btn-2 {
      color: #0bf4f3;
      border: 1px solid #0bf4f3;
      box-shadow:  0 0 5px #0bf4f3,  0 0 5px #0bf4f3 inset;
    }
    .btn-2:hover {
      color: #fff;
      box-shadow: inset 0 0 10px #0bf4f3, 0 0 20px #0bf4f3 inset, 0 0 20px #0bf4f3 inset;
    }
    .btn-de {
      color: #EE4E4E;
      border: 1px solid #EE4E4E;
      box-shadow:  0 0 5px #EE4E4E,  0 0 5px #EE4E4E inset;
    }
    .btn-de:hover {
      color: #fff;
      box-shadow: inset 0 0 10px #EE4E4E, 0 0 20px #EE4E4E inset, 0 0 20px #EE4E4E inset;
    }
    .btn-up {
      color: #FFF455;
      border: 1px solid #FFF455;
      box-shadow:  0 0 5px #FFF455,  0 0 5px #FFF455 inset;
    }
    .btn-up:hover {
      color: #fff;
      box-shadow: inset 0 0 10px #FFF455, 0 0 20px #FFF455 inset, 0 0 20px #FFF455 inset;
    }
  </style>
</head>
<body>
  <button id="logout-button">Logout</button>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<script>
    document.getElementById('logout-button').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('logout-form').submit();
    });
</script>
w

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark-custom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color: #FF0060;">Todo List App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      {{-- <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
              Logout
            </a>
          </li>
        </ul>
      </div> --}}
    </div>
  </nav>
  <div class="bg-dark-custom">
    <div class="container py-3">
      <div class="h1" style="color: #FF0060;">Todo List App</div>
    </div>
  </div>
  @yield('main-section')
  {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
    <button type="submit">Logout</button>

  </form> --}}
  {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form> --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMF1FBIvB6iZUU69+8zKz9KZd2riUI9tYcsdAuKlujL1AnmX2q8E7GOwO8" crossorigin="anonymous"></script>
</body>
</html>
