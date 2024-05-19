<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <a href="{{route('createAnn')}}">Announce</a>
    <div>
        <form action="{{route('createEmail')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Email</label>
                <input type="text" class="form-control" name='email'>
            </div>
            <button type="submit" class="button btn-primary">Notify Me</button>
        </form>
    </div>

</body>
</html>
