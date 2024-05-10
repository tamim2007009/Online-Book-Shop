<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Bookshop - Home')</title>
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('/')}}assets/img/favicon.png" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/all.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
       body { background-color: #F5F5F5; }
   .custom-primary { color: #007BFF; }
   .custom-secondary { color: #E0E7ED; }
   .custom-accent { color: #FFD700; }
   .custom-text { color: #333333; }
   .custom-heading { color: #0066CC; }
      header {
          background-color: #007BFF; /* Updated: Primary Color for Header Background */
          padding: 20px;
          text-align: center;
      }
      footer {
          background-color: #007BFF; /* Updated: Primary Color for Footer Background */
          padding: 20px;
          text-align: center;
      }
    </style>
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">
</head>
<body>
<!-- NAVBAR -->
    @include('layouts.includes.navbar')
<!-- NAVBAR END -->
<!-- HEADER -->
<section class="header py-2 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="headings">
                    <h3><a href="{{route('bookshop.home')}}" class="custom-primary"><b class="custom-heading">Book</b> Shop</a></h3>
                </div>
            </div>
            <div class="col-md-4">
                <form action="{{route('all-books')}}">
                    <div class="input-group input-group-sm m-1">
                        <input type="text" name="term" value="{{request('term')}}" class="form-control" placeholder="Search Book..">
                        <div class="input-group-append">
                            <button class="btn custom-accent" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="shopping-cart text-right">
                    <a href="{{route('cart')}}" class="custom-primary"><i class="fas fa-shopping-cart fa-2x m-1"></i>
                        @if(Cart::content()->count())
                            <span class="count-cart">{{Cart::content()->count()}}</span>
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HEADER END -->

@yield('content')

<footer class="py-3 text-center border-top bg-light">
    <div class="container">
        <div class="go-to-top mb-2">
            <a href="#nav-top" class="text-muted" title="Go to top"><i class="fas fa-angle-double-up"></i></a>
        </div>
        <div class="footer-text">
            Copyright &copy; tamim - <span id="year"></span>
        </div>
        <div class="social-icon mt-2">
       
            <span class="mr-2">
          <a href="https://github.com/tamim2007009" class="custom-primary"><i class="fab fa-github fa-2x"></i></a>
        </span>
           
        </div>
    </div>
</footer>
<!-- jQuery -->
<script type="text/javascript" src="{{asset('/')}}assets/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('/')}}assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript" src="{{asset('/')}}assets/js/script.js"></script>

</body>
</html>
