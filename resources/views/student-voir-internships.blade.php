<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internsheep</title>

    <link rel="stylesheet" href="{{ asset('css/student-voir-internships.css')}}">

    <script src="../js/heart-valid.js" defer></script>

    <link rel="icon" type="icon-internsheep" href="../imgs/icon-internsheep.png" sizes="32x32">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


</head>
<body>

    <nav class="navbar">
        <ul>
            <li><a class="logo" href="student-page"><img src="../imgs/logopng.png" alt=""></a></li>
            <div class="menu-nav">
            <li><a href="student-companie-page">Entreprises</a></li>
                <li><a href="student-offers-page">Stages</a></li>
                <li><a href="student-wishlist-offers">Favoris </a></li>

                <div class="barmenu">
            
                    <input type="checkbox" />
                    
                    <i id="account-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zM6.023 15.416C7.491 17.606 9.695 19 12.16 19c2.464 0 4.669-1.393 6.136-3.584A8.968 8.968 0 0 0 12.16 13a8.968 8.968 0 0 0-6.137 2.416zM12 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg></i>
                    
                    <ul id="menu">
                        <div class="photo-account"></div>
                        <div class="infos-account">
                            <h2>Nom</h2>
                            <h2>Prénom</h2>
                            <h4>CESI TOULOUSE</h4>
                            <h4>niveau d'étude</h4>
                        </div>
                        <li id="logout-button"><a href="auth-page">logout</a></li>
                    </ul>
                    
                </div>
            </div>
        </ul>
    </nav>
    
    <div class='divtext'>
        <div class="left-side-offer">
            <h1>{{$internships -> offer_internships}}</h1>
            
            <p>Date de debut du stage :{{substr($internships -> date_internships,0,10)}}</p>
            <p>Durée du stage :{{$internships -> duration_internships}}</p>
            <p>Nombre de place restante pour ce stage :{{$internships -> nbr_students_places}}</p>
            <p>Remuneration /h :{{$internships -> remuneration}}</p>
            <p>Mis en ligne le :{{substr($internships -> created_at,0,10)}}</p>
            <p>{{$internships -> additional_info}}</p>
            <p>{{$companie -> name_companies}}</p>
        </div>
        
        <div class="right-side-offer">
            <h2>ADRESSES</h2>
    
            <p>{{$addresses -> countries}}</p>
            <p>{{$addresses -> num_way}},{{$addresses -> name_street}}</p>
            <p>{{$addresses -> city}}, {{$addresses -> zip_code}}</p>
        </div>
    </div>

</body>
</html>
        