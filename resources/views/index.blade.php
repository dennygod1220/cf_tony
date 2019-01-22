<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CF_Tony</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        .row{
            margin-left:0px;
            margin-right:0px;
        }
    </style>
</head>

<body>
    <div class="container-fluid" style="padding:0px">
        <div class="row">
            <div class="col">
                <h2>Tony的活動網站</h2>
            </div>
        </div>
        <div class="row">
            <div class="col" style="text-align:center">
                <img src="{{asset('img/one.jpeg')}}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col" style="text-align:center">
                <img src="{{asset('img/two.jpg')}}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col">

                <form action="{{ url('/sendgmail') }}" method="POST" class="py-4 form-group">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col">
                            <label>收件人姓名:</label>
                            <input type="text" name="msg1" class="form-control" placeholder="收件人姓名">
                        </div>
                        <div class="col">
                            <label>收件人Email:</label>
                            <input type="text" name="msg2" class="form-control" placeholder="收件人Email">
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col">
                                <label>Email內容:</label>
                            <input type="text" name="msg3" class="form-control" placeholder="Email內容">
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col" style="text-align: center">
                            <button type="submit" class="btn btn-outline-info w-50">寄信</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


    </div>
</body>

</html>
