<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CF_Tony</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <script src="{{ asset('public/js/app.js') }}"></script>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2>CF_TONY 活動網站</h2>
                <button class="btn btn-outline-dark">TEST Bootstrap</button>
            </div>
        </div>

        <div class="row">
            <div class="col">

                <form class="py-4">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
