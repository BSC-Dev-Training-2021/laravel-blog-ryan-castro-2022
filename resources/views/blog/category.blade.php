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
                        <li class="nav-item"><a class="nav-link active" href="/post/0">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="/create">Post</a></li>
                        <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-envelope-o"></i></a></li>
                    </ul>
                </div>
            </div> 
        </nav> --}}
        @include('include.navauth')
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        @if ($nocat == 0)
                            <label class="alert alert-danger">Please Create Category First To Start The Project</label>
                            @endif
                        <br />
                        <form method="post" class="input-group input-group-lg mt-5" action="/categorycreate">
                            {{ csrf_field() }}
                            
                            <input type="text" name="category_txt" class="form-control" aria-label="Text input with segmented dropdown button">
                            <div class="input-group-append">
                                <button type="submit" name="create_category" class="btn btn-primary mt-1">Create Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <!-- Category section-->
                    <section>
                        <ul class="list-group list-group-flush">
                            <tbody>
                                @for ($i = 0; $i < count($categories); $i++)  
                            
                                <li class="list-group-item">
                                    
                                    <tr> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModalupdate{{$categories[$i]->id}}">Update</button></td>
                                    
                                    <td>{{ $categories[$i]->name }}</td>
                                    
                                    @if ($categorycount[$i]['total'] == 0)
                                    
                                    <td><button type="button" class="btn btn-light fa fa-trash-o float-right ml-1" data-toggle="modal" data-target="#myModaldelete{{$categories[$i]->id}}"></button></td>
                                    @endif 
                                    
                                </li>
                                @include('modal.delete')
                                @include('modal.update')
                                @endfor
                            </tbody>
                        </ul>
                    </section>
                    <br />
                </div>
            </div>
        </div>
        

        <div class="container">
            <section>
                <div class="modal" id="deleteConfirmModal" tabindex="-1" data-backdrop="static">
                    <form method="POST" action="">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Category?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this "<span id="delete_name_span"></span>" Category?</p>
                                </div>
                                <div class="modal-footer">
                                    <input type="text" name="todo_id_txt" id="todo_id_txt" hidden>
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                    <button type="submit" name="detele_btn_confirm" class="btn btn-primary">Delete</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
    
            <section>
                <div class="modal" id="updateConfirmModal" tabindex="-1" data-backdrop="static">
                    <form method="POST" action="">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Update Category?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to Update this "<span id="update_name_span"></span>" Category?</p>
                                    <input type="text" name="update_todo_name_txt" id="update_todo_name_txt" required>
                                </div>
                                <div class="modal-footer">
                                    <input type="text" name="update_todo_id_txt" id="update_todo_id_txt" hidden>
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                    <button type="submit" name="update_btn_confirm" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <!-- Footer-->
            <footer class="py-5 bg-dark">
                <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
            </footer>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="{{ asset('js/app.js') }}}"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Core theme JS-->
        </div>
    </body>
</html>
