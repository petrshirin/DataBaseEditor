<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        {{ $name }}
    </title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <style>
        .content {
            padding: 30px;
        }
    </style>
    <style>
        .form {
            padding: 15px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            vertical-align: middle;
            border: 1px solid #676792;
            width: 90vw;

        }
        .form .row {
            padding: 25px;
        }
        .form .row a {
            margin-left: 10px;
        }
    </style>
</head>

<body>
<header class="d-flex justify-content-center py-3">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/cars" class="nav-link" aria-current="page">Машины</a></li>
        <li class="nav-item"><a href="/details" class="nav-link">Детали</a></li>
        <li class="nav-item"><a href="/detailHistories" class="nav-link">История деталей</a></li>
        <li class="nav-item"><a href="/employees" class="nav-link">Работники</a></li>
        <li class="nav-item"><a href="/workTypes" class="nav-link">Типы работ</a></li>
        <li class="nav-item"><a href="/works" class="nav-link">Работы</a></li>
    </ul>
</header>
    <div class="row content">
        @yield("content")
    </div>
</body>
    <script>
        document.querySelectorAll('.nav-link').forEach((item) => {
            if (document.location.href.includes(item.getAttribute('href'))){
                item.classList.add('active')
            }
        })
    </script>
    <script>
        document.querySelectorAll('.list-item').forEach((item) => {

            item.addEventListener('dblclick', (e) => {
                goToForm(item.dataset.id)
            })
        })
    </script>
</html>
