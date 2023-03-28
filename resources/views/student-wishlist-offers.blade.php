<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internsheep</title>

    <link rel="stylesheet" href="{{ asset('css/wishlist-offers-style.css')}}">

    <script src="../js/delete-student-fav-cross.js" defer></script>

    <link rel="icon" type="icon-internsheep" href="../imgs/icon-internsheep.png" sizes="32x32">

        <!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('icon-internsheep.png') }}">
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
    </nav>

    <div class="qui-te-correspondent-section">
        
        <h1>Mes stages favoris</h1>
            <div class="matching-internship-box">
                <div class="matching-internship">
    
                    <div class="left-side-matching-internship">
                        <div class="companie-title">Thalès</div>
                        <h2 class="intership-title">Stage d'été 2022 développeur Web Junior H/F</h2>
                        <div class="details-section">
                            <div class="internship-location">
                                <div class="location-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M18.364 17.364L12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                                </div>
                                <p class="location-name">Toulouse</p>
                            </div>
                            <div class="intership-timestamp">
                                <div class="timestamp-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm1-10V7h-2v7h6v-2h-4z"/></svg>
                                </div>
                                <p class="internship-timestamp-name">14/03/2023 </p>
                            </div>
                        </div>
                    </div>
    
                    <div class="right-side-matching-internship">
                        <div class="postuler-button">
                            <li><a href="https://www.thalesgroup.com/fr">Postuler</a></li>
                        </div>

                        <div class="delete-fav">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M17 4h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5V2h10v2zM9 9v8h2V9H9zm4 0v8h2V9h-2z" fill="rgba(18,18,18,1)"/></svg>
                        </div>
                    </div>
                </div>
            </div>  

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