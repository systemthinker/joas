<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog Page</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>




    <link href="{{ URL::to('/css') }}/custom.css" rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


</head>

<body>


<div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="nav navbar-brand" id="left-bar">
            <a href="#" class="navbar-brand">
                <img src="{{ URL::to('/images') }}/logo.jpg" width=150; height=150;>
            </a>
        </div>
        <!-- hamburger -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse" aria-controls="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only"> Toggle Navigation </span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapse">
            <div class="navbar-nav float-right text-right pr-3">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="#">Blog</a>
                <a class="nav-item nav-link active" href="#">About us</a>
                <a class="nav-item nav-link active" href="#">Services</a>
                <a class="nav-item nav-link active" href="#">Contact us</a>
                <a class="nav-item nav-link active" href="#">Admin</a>


            </div>
        </div>

    </nav>
</div>



<div class="container-voorpagina container-fluid ">


    <div class="row">
        <div  id="VoorpaginaText" class="mx-auto text-center">
            <h1>Zet je zaak op zeker</h1>
            <br>
            <h2>  interactief advies</h2>
            <br>
            <a href="{{route('hypotheekBerekenen')}}"><button type="button" class="btn btn-primary" id="buttonTop">Hypotheek berekenen</button></a>
        </div>
    </div>


</div>



<div class="container containerTop">
    <div class="row">
        <div class="col-sm-4">
            <div>
                <h2>Wie zijn wij?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ducimus ullam distinctio fugiat voluptates! Vero quis adipisci asperiores aliquam ullam doloremque dolor, reprehenderit, accusamus nisi ut eveniet quas reiciendis dolore.</p>
                <p><a href="#">meer informatie ></a></p>
            </div>
        </div>
        <div class="col-sm-4">
            <div>
                <h2>Uw voordeel</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ducimus ullam distinctio fugiat voluptates! Vero quis adipisci asperiores aliquam ullam doloremque dolor, reprehenderit, accusamus nisi ut eveniet quas reiciendis dolore.</p>
                <p><a href="#">meer informatie ></a></p>
            </div>
        </div>
        <div class="col-sm-4">
            <div>
                <h2>Uw waarde</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ducimus ullam distinctio fugiat voluptates! Vero quis adipisci asperiores aliquam ullam doloremque dolor, reprehenderit, accusamus nisi ut eveniet quas reiciendis dolore.</p>
                <p><a href="#">meer informatie ></a></p>
            </div>
        </div>
    </div>
    <br>
    <div class="row ">
        <div class="col-md-4">
            <div>
                <img class="middleRowImage" src="{{ URL::to('/images') }}/officeMidLeft.jpg" alt="#">
                <h3 class="middleTitel">Een middenweg</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum veritatis molestias non dolor...</p>
                <button class="btn btn-primary btn-lg btn-block buttonMiddle">Lees Verder</button>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img class="middleRowImage" src="{{ URL::to('/images') }}/officeMidMiddle.jpg" alt="#">
                <h3 class="middleTitel">Werkt zelf regelen?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa architecto iste ab, debitis in sdafaadf...</p>
                <button class="btn btn-primary btn-lg btn-block buttonMiddle">Lees Verder</button>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <img class="middleRowImage" src="{{ URL::to('/images') }}/officeMidRight.jpg" alt="#">
                <h3 class="middleTitel">U wordt geholpen</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum voluptate temporibus nihil ad...</p>
                <button class="btn btn-primary btn-lg btn-block buttonMiddle">Lees Verder</button>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid bottomDiv" >

    <!-- <div class="bottomDiv w-100"> -->




    <div class="row ">
        <div class="col-md-3 columsBottom">
            <i class="fas fa-address-book fa-5x"></i>
            <h4>Adressen</h4>
            <button class="btn btn-primary btn-block buttonBottom">Informatie</button>
        </div>

        <div class="col-md-3 columsBottom">
            <i class="fab fa-android fa-5x"></i>
            <h4>Alles Online</h4>
            <button class="btn btn-primary btn-block buttonBottom">Informatie</button>
        </div>

        <div class="col-md-3 columsBottom">
            <i class="fas fa-credit-card fa-5x"></i>
            <h4>Betalingen</h4>
            <button class="btn btn-primary btn-block buttonBottom">Informatie</button>
        </div>

        <div class="col-md-3 columsBottom">
            <i class="fas fa-info-circle fa-5x"></i>
            <h4>Informatie</h4>
            <button class="btn btn-primary btn-block buttonBottom">Informatie</button>
        </div>

    </div>
    <!-- </div> -->
</div>






<div id="footer">
    <p>Theme By | Robbert van den Outenaar | &copy;2018 --- All rights reserved. </p>
    <a style="color: white; text-decoration: none; cursor: pointer; font-weight: bold;" href="http://www.robbertvandenoutenaar.nl"> <p>This site is only used for study purposes robbertvandenoutenaar.nl have all the rights. No one is allowed copies other then <br> &trade; robbertvandenoutenaar.nl &trade; </a> </p>

</div>





</body>
</html>
