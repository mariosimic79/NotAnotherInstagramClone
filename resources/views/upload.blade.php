<html>
    <head>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
               
        <div class="uploadDiv">
            <form method="post" enctype="multipart/form-data" action="{{ url('/upload') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <input type="file" name="slika" > <br> <br>
            <button class="buttonForm" name="upload" >Upload</button>  
        </form>
            
            
            
        </div>
    </body>
    
    
</html>