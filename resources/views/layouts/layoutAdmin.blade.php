<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
            <header>
                <nav class="header">
                    <div>
                        <p></p>
                        <p class="topRight">
                           Pretraži: <input  type="text" name="search" placeholder="Pretraži" length="50px">
                        </p>    
                    </div>  
                </nav>
            </header>
            
    <main >
    @yield('content')
</main>
            
            
            
            <footer class="footer">
               
                    <button class="logButton" name="logout" >Logout</button>
               
               
            </footer>
        </body>
</html>