<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('user_update',$crud->id) }}" method="get" enctype="multipart/form-data">
        @csrf
    <input type="text" placeholder="enter name" name="name" value="{{ $crud->name }}" required/><br/><br/>
    <input type="email" placeholder="enter email" name="email" value="{{ $crud->email }}" required/><br/><br/>
    <input type="file"  name="images" value="{{  $crud->images }}" required/><br/><br/>
        <button type="submit" class="btn btn-success">submit</button>
</form>

</body>

</html>