<html>
    <head>
        <link rel="stylesheet" href="css/login.css">
         <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <?php
       
        $dsn = 'mysql:host=localhost; dbname=galerija; charset=utf8';
        $username = 'root';
        $password = '';
        
            try
            {
                $conn = new PDO($dsn, $username, $password);
            }
             catch (PDOException $e)
             {
                 echo 'Connection failed: '.$e->getMessage();
                 exit;
             }
        
        $tmpDummy = "slike/temp1.jpg";
        $tmpSlika = $tmpDummy;
        
        
        
            if(isset($_FILES["slika"]))
            {
                $file_name = $_FILES['slika']['name'];
                $file_temp = $_FILES['slika']['tmp_name'];
                $tmpSlika = "slike/temp1.jpg";

                if(empty($errors)==true)
                {
                   move_uploaded_file($file_temp, $tmpSlika);
                }
                else
                {
                   print_r($errors);   
                }           
            }
        
            if(isset($_POST["confUpload"]))
            {
                $naslov = $_POST["naslov"];
                $type = $_POST["type"];
                $tmpDummy = "slike/temp1.jpg";
                $path = "slike/".$naslov.".jpg";
                
                move_uploaded_file($tmpDummy,$path);
                
                        

                $sql = "INSERT INTO slike (naslov, type, path) VALUES ('".$naslov."','".$type."','".$path."')";
                $stmt = $conn->query($sql);
         
                
                
            }
        
        ?>
        <div align="right">
            <form method="post" action="{{url('/profile')}}">
             <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <button class="buttonForm" style="width: 10%; " name="home" >Profil</button>
            </form>
        </div>
        <div class='divForm'>  
        <table >
            <tr>
            <td>
               <?php 
                    echo '<image src="'.$tmpSlika.'" width="470px" height="375px">';
               ?>
            </td>
            <td width = "10%">
                
            </td>
            <td>
                <form method="post" action="{{ url('/formUpload') }}">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <p align="center">
            <table cellpadding="3px">
                <tr align="center">
                    <td><input type="radio" name="filter" value="none" checked="checked"></td>
                    <td><input type="radio" name="filter" value="antique"></td>
                    <td><input type="radio" name="filter" value="blur"></td>
                    <td><input type="radio" name="filter" value="chrome"></td>
                    <td><input type="radio" name="filter" value="monopin"></td>
                    <td><input type="radio" name="filter" value="retro"></td>
                    <td><input type="radio" name="filter" value="velvet"></td>        
                </tr>
                <tr>
                    <td>None</td>
                    <td>Antique</td>
                    <td>Blur</td>
                    <td>Chrome</td>
                    <td>Monopin</td>
                    <td>Retro</td>
                    <td>Velvet</td>
            </table>
             <table cellpadding="3px">
                <tr align="center">
                    <td><input type="radio" name="filter" value="bw"></td>
                    <td><input type="radio" name="filter" value="boost"></td>
                    <td><input type="radio" name="filter" value="dreamy"></td>
                    <td><input type="radio" name="filter" value="sepia"></td>
                    <td><input type="radio" name="filter" value="syncity"></td>
                </tr>      
                <tr>
                    <td>BlackWhite</td>
                    <td>Boost</td>
                    <td>Dreamy</td>
                    <td>Sepia</td>
                    <td>SynCity</td>
                </tr>
             </table>
            <button class="buttonForm" type="submit" value="prew" name="sub">Preview</button>
                </form >
            </p>  <br>
            <form method="post" action="{{ url('/formUpload') }}">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                 Naslov: <input type="text" name="naslov" width="50px" required>
                <br>
                <input type="radio" name="type" value="public" checked="checked"> Public
                <input type="radio" name="type" value="private"> Private <br>
                <button class="buttonForm" value="upload" name="sub"> Objavi </button>
       </form>
            </td>
            </tr>
            
        </table> <br>
        
        
        </div>
    </body>
</html>