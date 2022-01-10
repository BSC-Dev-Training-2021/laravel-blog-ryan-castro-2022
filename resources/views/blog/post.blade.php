
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Post - Start Bootstrap Template</title>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/app.js"></script>
        <script src="bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">My Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/post/0">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Contact</a></li>
                        <li class="nav-item"><a class="nav-link active" href="">Post</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a href="/category"><button type="button" class="btn float-right ml-1" data-toggle="modal" data-target="#categoriesModal">Categories</button></a></li>
                                <li><a class="dropdown-item" href="">Users</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-envelope-o"></i></a></li>
                        
                    </ul>
                </div>
            </div>
        </nav> --}}
        @include('include.postnavauth')
        
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 align-self-start">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Contact Us header-->
                            <header class="mb-8">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1">Create a new blog entry</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-3">Express your mind!</div>
                            </header>
                            <!-- Post content-->
                            <section class="mb-5">
                                <form method="post" action="/post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        @if (!empty($errors))
                                        @if (count($errors))
                                        <div class="alert alert-danger">
                                            <ul>                                              
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{$error}}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        @endif
                                        <label for="exampleFormControlTextarea1" class="mb-1">Title</label>
                                        <input type="text" name="blog_title_txt" class="form-control mb-1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Description</label>
                                        <textarea class="form-control mb-1" name="blog_description_txt" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="mb-1">Content</label>
                                        <textarea class="form-control mb-1" name="blog_content_txt" id="exampleFormControlTextarea1" rows="5"></textarea>
                                        
                                        <input type="text" name="my_info" class="form-control mb-1" value="{{ Auth::user()->id }}" hidden readonly>
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1 mt-3">Categories</label>
                                        <div class="row"> 
                                            @if (!empty($categories))
                                            @foreach ($categories as $category)
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="categories[]" type="checkbox" value="{{ $category->id }}" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                        {{ $category->name }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-primary mt-5">Post</button>
                                </form>
                            </section>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
                <!-- Side widgets-->
                @include('include.wigets')
                {{-- <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    
                    {{-- <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">JavaScript</a></li>
                                        <li><a href="#!">CSS</a></li>
                                        <li><a href="#!">Tutorials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Side widget-->
                    {{-- <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div> --}}
            </div>
        </div>

        
    
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
