<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>

   <!--  <ul>
    @foreach($errors->all() as $row)
    <li>{{$row}}</li>
    @endforeach
    </ul> -->

    <form action="usercontroller" method="post">
    @csrf
       <input type="text" name="user" id="user" placeholder="user">
       <br/><br/>
       <input type="text" name="phone" id="phone" placeholder="phone" >
       <br/><br/>
       <input type="text" name="password" id="password" placeholder="password" >
       <br/>
       @error('password')
        <span>{{$message}}</span>
       @enderror
       <br/><br/>
       <button type="submit">submit</button>
    </form>
</body>
</html>