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
                <h2>Tony的活動網站 收到的表單</h2>
            </div>
        </div>
        <div class="row">
                <div class="col">
                    <label>收件人姓名:</label>
                    <input type="text" name="msg1" class="form-control" placeholder="收件人姓名" value="{{ $par['name'] }}">
                </div>
                <div class="col">
                    <label>收件人Email:</label>
                    <input type="text" name="msg2" class="form-control" placeholder="收件人Email" value="{{ $par['email'] }}">
                </div>
            </div>
            <div class="row py-4">
                <div class="col">
                        <label>Email內容:</label>
                    <input type="text" name="msg3" class="form-control" placeholder="Email內容" value="{{ $par['content'] }}">
                </div>
            </div>
    </div>
</body>

</html>
