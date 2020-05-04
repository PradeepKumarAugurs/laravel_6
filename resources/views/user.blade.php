<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
   
   @if(!empty($errors->all()))
    <ul>
    @foreach($errors->all() as $row)
    <li style="color:red;">{{$row}}</li>
    @endforeach
    </ul>
    @endif

    <form action="usercontroller" method="post">
    @csrf
       <input type="text" name="user" id="user" placeholder="user">
       <br/><br/>
       <input type="text" name="phone" id="phone" placeholder="phone" >
       <br/><br/>
       <input type="text" name="password" id="password" placeholder="password" >
       <br/>
       @error('password')
        <span style="color:red;">{{$message}}</span>
       @enderror
       <br/><br/>
       <button type="submit">submit</button>
    </form>
</body>
</html>