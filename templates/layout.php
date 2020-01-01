<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog-home.css" rel="stylesheet">
    <!--   <link href="css/authentication_form.css " rel="stylesheet"> -->
    <link href="/css/application_form.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/img-slider/distr/imgslider.min.css">

</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/registration">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/authentication">Authentication</a>
                </li>
                <li class="nav-item">

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/test">Тест</a>
                            <a class="dropdown-item" href="/test1">Слайдер before/after</a>
                            <a class="dropdown-item" href="/test/searchByLetters">Тестовый обработчик поиска в массиве организаций</a>
                            <a class="dropdown-item" href="/test/tocladrform">Кладр через форму</a>
                            <a class="dropdown-item" href="/test/testsendfile">Загрузка файлов на сервер с помощью AJAX</a>
                            <a class="dropdown-item" href="/test/searchAdress">Поиск адресов кладр по ID(отключено)</a>
                        </div>
                    </div>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/personal-account">Личный кабинет пользователя</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Выйти</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php echo $content ?>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
</footer>


<!-- Bootstrap core JavaScript -->


<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="/vendor/img-slider/distr/imgslider.min.js"></script>


<script src='/js/validator.js'></script>
<script src="/js/FormNew.js"></script>
<!-- <script src="/js/Form.js"></script> -->
<script src="/js/Form_to_CLADR_api.js"></script>
<script src='/js/sendFiles.js'></script>
<!-- <script src="/js/my_js.js"></script> -->



</body>

</html>
