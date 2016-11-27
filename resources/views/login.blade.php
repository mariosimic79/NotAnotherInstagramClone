
<html>
<body>
<link rel="stylesheet" href="css/login.css">
  
    <div style='width: 25%; ' class='divForm'>
    <form method="post"action="{{ url('/login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <input name="user" type="text" placeholder="Username">
        <input name="pass" type="password" placeholder="Lozinka">
        <button class='buttonForm' name="login" >Login</button>  
    </form>
    </div>
</body>
</html>