<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
           <div id="wrapper">
                 
            <div>     <nav class="header">
                    <div>
                        <p></p>
                        <p class="topRight">
                           Pretraži: <input  type="text" name="search" placeholder="Pretraži" length="50px">
                        </p>    
                    </div>  
                </nav>
            </div>

    <main >
    @yield('content')
</main>
          
            
            <div class="footer">
                <form method="post" action="{{url('/login')}}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <button class="logButton" name="login" >Login</button>
                </form>
            </div>
                </div>
        </body>
</html>