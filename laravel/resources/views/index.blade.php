<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <nav class='navbar navbar-expand-lg bg-body-tertiary header'>
        <div class="container-fluid">
            <div class="header-left">
                <div class="fav">
                    <img class="fav-image" alt="favicon" src="https://www.svgrepo.com/show/307004/throne.svg">
                </div>
                <h2 class="header-text">A Song of Ice and Fire</h2>
            </div>    
            <div class="header-right">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#ModalCreate  ">upload</button>
            </div>
        </div>
    </nav>
<div class="container text-center">
@yield('body')
</div>
<footer class="footer">
    <div class="footer-item">
        <div class="footer-left">
            <div>
                <p class="author">Жилин Андрей</p>
            </div>
        </div>
    </div>
    <div class="footer-item">
        <div class="footer-right">
            <div class="icons">
                <a href="https://web.telegram.org/SideArket"><img class="icon-image" alt="Andrey Zhilin"
                                                                  src="https://cdn1.iconfinder.com/data/icons/unicons-line-vol-6/24/telegram-1024.png"></a>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>


</html>
