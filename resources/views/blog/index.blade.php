<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>My Blog - Home</title>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="/js/app.js"></script>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">My Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="/create">Post</a></li>
                        <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-envelope-o"></i></a></li>
                    </ul>
                </div>  
            </div>
        </nav> --}}
        @include('include.navauth')
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        @for ($i=0; $i < 1; $i++) 
                            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted"> {{ $post[$i]->created_at }} </div>
                                <h2 class="card-title">{{ $post[$i]->title }}</h2>
                                <p class="card-text">{{ $post[$i]->descriptions }}</p>
                                <a class="btn btn-primary" href="/article/{{ $post[$i]->id }}">Read more →</a>
                            </div>
                        @endfor  
                    </div>

                    <!-- Nested row for non-featured blog posts-->                  
                    <div class="row">
                            @for ($i=1; $i < count($post); $i++) 
                                <div class="col-lg-6">
                                    <div class="card mb-4">
                                        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                        <div class="card-body"> 
                                            <div class="small text-muted">{{ $post[$i]->created_at }}</div>
                                            <h2 class="card-title h4">{{ $post[$i]->title }}</h2>
                                            <p class="card-text">{{ $post[$i]->descriptions }}</p>
                                            <a class="btn btn-primary" href="/article/{{ $post[$i]->id }}">Read more →</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor  

                    </div>

                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item"><a class="page-link" href="0" tabindex="-1" aria-disabled="true">Newer</a></li>
                            
                            <li class="page-item"><a class="page-link" href="{{$backpage}}">Back</a></li>

                            <li class="page-item"><a class="page-link" readonly>{{$pagenow}}</a></li>

                            <li class="page-item"><a class="page-link" href="{{$getpage}}">Next</a></li>
                            <li class="page-item"><a class="page-link" href="{{$totalpage}}">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                @include('include.wigets')
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js" ></script>
    </body>
</html>
