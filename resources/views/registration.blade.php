<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="register" method="post">
    @csrf
       <input type="text" name="name" id="name" placeholder="Name"><br/><br/>
       <input type="email" name="email" id="email" placeholder="Email"><br/><br/>
       <input type="" name="phone" id="phone" placeholder="Phone"><br/><br/>
       <button type="submit">Submit Datatext</button>
    </form>
</body>
</html>