<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <div>
        <form action="{{route('store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Subject</label>
                <input type="text" class="form-control" name='title'>
            </div>
            <div class="mb-3">
                <label  class="form-label">Message</label>
                <textarea class="form-control"  rows="3" name="content"></textarea>
            </div>
            <button type="submit" class="button btn-primary mx-auto">Submit</button>
        </form>
    </div>

</body>
</html>
