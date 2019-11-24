<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/social_style.css') }}" >

    <title>VLG</title>
</head>
<body>
    <section id="header">
        <div class="container">
            <div class="row header">
                    <div class="col-3 d-flex align-items-center justify-content-start">
                        <div>
                            <h1>VLG</h1>
                            <p>социальная сеть Волгограда</p>
                        </div>

                    </div>
                    <div class="col-9 d-flex align-items-center justify-content-end">
                        <ul class="nav-menu mb-0">
                            <li><a href="#">Ссылка 1</a></li>
                            <li><a href="#">Ссылка 2</a></li>
                            <li><a href="#">Ссылка 3</a></li>
                            <li><a href="#">Ссылка 4</a></li>
                        </ul>
                    </div>
            </div>
        </div>


    </section>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="content-left col-3">
                    <div class="d-flex justify-content-center">
                        <div class="avatar">
                            @isset($path)
                                <img src="{{ asset('/storage/'.$path) }}">
                            @endisset
                        </div>

                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('avatar_upload') }}">Изменить</a>
                    </div>
                </div>
                <div class="content-right col-9">

                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="footer d-flex align-items-center justify-content-center">
                    <p>footer...</p>
                </div>
            </div>
        </div>
    </section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
