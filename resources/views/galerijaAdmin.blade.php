<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thumbnail Gallery - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                
                <a class="navbar-brand" href="#">NAIC</a>
                <img style="padding-top: 10px;" width="32px" heigth="32px" src="slike/logo/logo.png">
                <input  type="text" placeholder="Pretraži" > <button>Search</button>
               
                <button>Logout</button>
            </div>
             <form method="get" action="{{url('/upload')}}">  
                     <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <button style="margin-top: 7px; margin-left: 3px;">Upload</button>
                </form>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                       <!-- <a href="#">About</a> -->
                    </li>
                    <li>
                       <!--   <a href="#">Services</a> -->
                    </li>
                    <li>
                     <!--     <a href="#">Contact</a> -->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Thumbnail Gallery</h1>
            </div>

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
             $sql = "SELECT path_thumb FROM slike ORDER BY id DESC";
             $stmt = $conn->query($sql);
             $counter = $stmt ->rowCount();
             $i=0;
        /*     
              $pages = 0;
               if($pages == null || $pages == 0 || $pages == 1)
        {
            $start = 0; 
            $end = 15;
            
            for($start; $start<=$end; $start++)
            {
                    echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">';
                    echo    '<a class="thumbnail" href="#">';
                    echo        '<img class="img-responsive" src="'.$stmt[$start].'" alt="">';
                    echo    '</a>';
                    echo '</div>'; 
            }
            
        }
        else
        {
            $start = (16*$pages)-16;
            $end = (16*$pages)-1;
            
            for($start; $start<=$end; $start++)
            {
                    echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">';
                    echo    '<a class="thumbnail" href="#">';
                    echo        '<img class="img-responsive" src="'.$stmt[$start].'" alt="">';
                    echo    '</a>';
                    echo '</div>'; 
            }
            
            
        }*/
             
             
             
             foreach($stmt as $slika)
              {
                    $i++;
                    echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">';
                    echo    '<a class="thumbnail" href="#">';
                    echo        '<img class="img-responsive" src="'.$slika['path_thumb'].'" alt="">';
                    echo    '</a>';
                    echo '</div>';
                    if($i==16)
                    {
                        break;
                    }
              }
           //  echo $counter;
             
             
             
            ?>
        </div>

        <hr>
        <div align="center">
            <?php
                for($e=0;$e<$counter;$e+=16)
                {
                    echo '<a style="margin:10px;" href="">'.($e/16+1).'</a>';
                    if(($e/2+1)/10 == '2' || ($e/2+1)/10 == '4' || ($e/2+1)/10 == '6' || ($e/2+1)/10 == '8' ||
                       ($e/2+1)/10 == '10' || ($e/2+1)/10 == '12' || ($e/2+1)/10 == '14' || ($e/2+1)/10 == '16' ||
                       ($e/2+1)/10 == '18' || ($e/2+1)/10 == '20' || ($e/2+1)/10 == '22' || ($e/2+1)/10 == '24')
                    {
                        echo '<br>';
                        
                    }
                }
            
            ?>
        </div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                   
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
