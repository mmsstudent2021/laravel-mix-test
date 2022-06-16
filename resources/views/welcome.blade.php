<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Mix Test</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="display-1 bg-white border p-5 my-5">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-facebook h1"></i>
                <i class="bi bi-facebook display-1"></i>
                <i class="bi bi-tv"></i>
                <i class="bi bi-trash"></i>
                <i class="bi bi-pencil"></i>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

            <div class="border my-5 p-5 animate__animated animate__fadeInDown bg-white">
                <h1>Min Ga Lar Par</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dicta facere odio officia sed. Accusantium alias assumenda deleniti eos, eum incidunt numquam odio perferendis? Beatae doloribus laudantium odio repellendus saepe!
                </p>
                <p>မြန်မာစာ ပါတယ်မပါဘူး သိရအောင် စမ်းကြည့်ပါမယ် ခင်ဗျာ။</p>
                <button id="modalControl" class="btn btn-primary">Show Modal</button>
            </div>

        </div>
        <div class="col-12">
            <div class=" bg-white border p-5 my-5">
                <h1>Sweet Alert Test</h1>
                <button id="check" class="btn btn-primary">Check</button>
            </div>
        </div>

        <div class="col-12">

            <div class=" bg-white border p-5 my-5">
                <ul class="list-group" id="ul">
                    <li class="list-group-item">Apple</li>
                    <li class="list-group-item">Orange</li>
                    <li class="list-group-item">Mango</li>
                    <li class="list-group-item">Banana</li>
                    <li class="list-group-item">Grape</li>
                </ul>

            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
