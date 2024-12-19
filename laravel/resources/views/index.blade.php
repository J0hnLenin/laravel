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
<footer>
    <div class="footer-left">
        <button class="btn btn-light" id="author" data-bs-toggle="popover" data-bs-title="Hey! I'm author of this site" data-bs-content="And I am a 3rd year student at Tyumen State University" >Andrey Zimin</button>
    </div>
    <div class="footer-right">
        <div class="icons">
            <a href="https://letsgoplaygo.ru"><img class="icon-image" alt="Lets go play go" src="https://cdn1.iconfinder.com/data/icons/business-people-33/32/business_human_man_people_profile_user-512.png"></a>
            <a href="https://github.com"><img class="icon-image" alt="GitHub" src="https://cdn4.iconfinder.com/data/icons/social-media-and-logos-12/32/Logo_Github-512.png"></a>
            <a href="https://web.telegram.org"><img class="icon-image" alt="Telegram" src="https://cdn4.iconfinder.com/data/icons/social-media-and-logos-12/32/Logo_telegram_Airplane_Air_plane_paper_airplane-22-512.png"></a>
        </div>
    </div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>


</html>
