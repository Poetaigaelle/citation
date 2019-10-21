<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Horizon.site</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta charset="UTF-8">

        <link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>

        <link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css"> <!-- Import du code Font Awesome -->
        

        <link rel="stylesheet" href="animate.min.css"> <!-- Import du code Animate.css -->
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> <!-- Import du code jQuery -->
        <script src="script.js"></script> <!-- Fichier JavaScript -->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Citations site</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <meta charset="UTF-8">

    <link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>

    <link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css"> <!-- Import du code Font Awesome -->
    

    <link rel="stylesheet" href="animate.min.css"> <!-- Import du code Animate.css -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> <!-- Import du code jQuery -->
        <style>

            body{
            height: 100%;
            font-family: 'Bad Script';font-size: 22px;
            
            }

            * {
                box-sizing: border-box;
            }

            .bg{
                background-image: url("https://media0.giphy.com/media/3ohhwg3O1TGRXHQYh2/giphy.gif?cid=790b7611bbf4e2b08e85d964a3cb44ab43f2e5d016c35775&rid=giphy.gif");
                background-size: cover;
                background-repeat:no-repeat;
                height:100%;


                
            }


            .bg-text {
                margin-top: 3.5em;
                background-color: rgb(8, 7, 7); /* Fallback color */
                background-color:rgba(10, 13, 13, 0.68);  /* Black w/opacity/see-through */
                color: rgb(255, 255, 255);
                font-weight: bold;
                border-radius: 21px;
                top: 50%;
                left: 50%;
                width: 80%;
                padding: 150px;
                text-align: center;
                font-size: 50px;
                font-weight:90;
                font-family: "Bad Script", sans-serif;
                border:3px #434343 solid;
                
            }

            
            .button2:hover {
                background-color: white;
                color: Black;
            }

            .button {
                background-color: transparent; /* Green */
                border-radius:15px;
                color: white;
                padding: 16px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 36px;
                margin: 4px 2px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
                font-family: "Bad Script", sans-serif;
                
                
            }
        
            .top{

                position: fixed;
                height: 5em; 
                width: 104%;
                margin-top: -1em;
                margin-left: -1em;
                background-color: black;
                color: white;
                text-align: center;

            }

            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                height: 4em;
                width: 100%;
                background-color: black;
                color: white;
                text-align: center;
            }

            .logo{
                margin-left: -2em;
                width: 40em;
                height: 11em;
            }
            
            

            


        


        </style>
    </head>
  
    <body class="bg" class="img-fluid">

    <div class="top">
    <img class="logo" src="https://cdn.discordapp.com/attachments/611000939461214277/633844651723325464/Capture_du_2019-10-14_14-19-26-1.png">
    </div>
        
        <br>
        <br>

        <center>
            <div class="bg-text">
            
                {{$citation_p->random()->citation}}
                <form method="post" action="{{route('citations')}}">
                    {{ csrf_field() }}
                    <br>   
                    <button class="button button2">Générer Kaamelot</button>                
                </form>
            </div>
        </center>
        
        <div class="footer">
            <p>© Copyright Tout droits réservés. </p>
        </div>



    </body>
   
</html>
