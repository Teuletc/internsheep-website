<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internsheep</title>

    <link rel="stylesheet" href="{{ asset('css/companie-page-style.css')}}">

    <link rel="icon" type="icon-internsheep" href="../imgs/icon-internsheep.png" sizes="32x32">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


        <!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">

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



        <div class="container-connected">
                <div class="connected">
                        
                    <input type="checkbox" />
                    
                    <span></span>
                    <span></span>
                    <span></span>
                    
                    <ul id="connected-menu">
                        <div class="insideMenu">
                            <div class="photo-account"></div>
                                <div class="infos-account">
                                    <h2>Nom</h2>
                                    <h2>Prénom</h2>
                                    <h4>CESI TOULOUSE</h4>
                                    <h4>niveau d'étude</h4>
                                </div>
    
                                <div class="connectedMenuInside">
                                    <li><a href="student-companie-page">Entreprises</a></li>
                                    <li><a href="student-offers-page">Stages</a></li>
                                    <li><a href="student-wishlist-offers">Favoris </a></li>
                                    
                                    <li id="logout-button"><a href="auth-page">logout</a></li>
    
                                </div>
                        </div>
                    </ul>
                    
                </div>
            </div>

    </nav>


    <div class="search">
        <div class="secsearch" id="div1"> 
            <div class="searchtitle">
                <h2>QUOI ?</h2>
            </div>
            <input type="text" placeholder="Essayer avec : Stage dev web">
        </div>

        <div class="secsearch" id="div2"> 
            <div class="searchtitle">
                <h2>OU ?</h2>                
            </div>
            <input type="text" placeholder="Essayer avec : Toulouse">    
        </div>

        <div id="div3">
            <div class="loupeicon">
                <img src="../imgs/loupe.png">
            </div>
        </div>
    </div>

    <div class="qui-te-correspondent-section">
            <h1>Les entreprises</h1>

            @foreach ($companies as $companie)

                <div class="matching-internship-box">
                    <div class="matching-internship">

                        <div class="left-side-matching-internship">
                            <div class="companie-title">{{$companie -> activity}}</div>
                            <h2 class="intership-title">{{$companie -> name_companies}}</h2>
                            <div class="details-section">
                                <div class="internship-location">
                                    <div class="location-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M18.364 17.364L12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                                    </div>
                                    <p class="location-name">{{$companie -> zip_code}}, {{$companie -> city}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="right-side-matching-internship">
                            <div class="see-offer-button">
                                <li><a href="/{{$companie -> id}}">Voir le détail</a></li>
                            </div>
                            <div class="intership-rate">
                                {{$companie -> rate}}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach  

    </div>

    <footer>
        <div class="footer-links">
            <div class="about-box">
                <h3>About.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque hic obcaecati non aliquid nesciunt, voluptatibus earum quibusdam at quas laboriosam. Fuga odit, tempore non dolor delectus consequuntur.</p>
            </div>
            <div class="chart-links">
                <li><a href="#">A propos</a></li>
                <li><a href="#">Cookies</a></li>
                <li><a href="#">Mentions légales</a></li>
            </div>
            <div class="quick-links">
                <li><a href="#">Acceuil</a></li>
                <li><a href="#">Les entreprises</a></li>
                <li><a href="#">Les stages</a></li>
            </div>
        </div>
        <p>&copy; 2023 internsheep.fr</p>
    </footer>
    <script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>

</body>
</html>