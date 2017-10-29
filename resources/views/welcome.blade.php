<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Emali</title>
    <meta name="author" content="Miguel Vasco Macamo">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <div class="flex-center position-ref full-height">

        <form action="{{route('sendmail')}}" method="post" accept-charset="utf-8">
            {!! csrf_field() !!}

            <input type="email" name="email">
            <input type="text" name="title">
            <button type="submit">Send me a Mail</button>

        </form>

    </div>

</body>
</html>