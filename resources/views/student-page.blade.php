<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internsheep</title>

    <link rel="stylesheet" href="{{ asset('css/student-page-style.css')}}">
    <script src="../js/heart-valid.js" defer></script>

    <link rel="icon" type="icon-internsheep" href="../imgs/icon-internsheep.png" sizes="32x32">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a class="logo" href="student-page"><img src="../imgs/logopng.png" alt=""></a></li>
            <div class="menu-nav">
                <li><a href="student-companie-page">Companies</a></li>
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

    <div class="hero-page">
        <h1 class="hero-title">Prenez le bon chemin vers le succès, choisissez un stage qui ne vous mène pas à l'abattoir !</h1>
    </div>
    
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

    <div class="top-entreprises-section">
        <h1>Top entreprises</h1>
        <div class="entreprises-grid">
            <div class="companie entreprise1">
                <div class="id-entreprises-side">
                    <div class="left-entreprise-side">   
                        <ul>  
                            @foreach($companies as $company)  
                            @if ($company->rate == $bestrate)
                            <p>  {{ $company->name_companies}}</p>
                            <p>  {{ $company->additional_info }}</p>
                            <p>  {{ $company->rate }}</p>
                        </ul>
                    </div>

                    <div class="go-entreprise-button">
                        <div class="arrow-icon">
                            <a href="/{{$company -> id}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="rgba(255,255,255,1)"/></svg></a> 
                        </div>
                    </div>
                </div>
            </div>
            @endif
   
@endforeach
            <div class="companie entreprise2">             
                <div class="id-entreprises-side">
                    <div class="left-entreprise-side">      
                        <ul>
                            @foreach($companies as $company)  
                            @if ($company->rate ==  $secondbestrate  )
                            <p>  {{ $company->name_companies}}</p>
                            <p>  {{ $company->additional_info }}</p>
                            <p>  {{ $company->rate }}</p>
                        </ul>
                    </div>

                    <div class="go-entreprise-button">
                        <div class="arrow-icon">
                        <a href="/{{$company -> name_companies}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="rgba(255,255,255,1)"/></svg></a> 
                        </div>
                    </div>      
                </div>
            </div>
            @endif
   
@endforeach
            <div class="companie entreprise3">
                <div class="id-entreprises-side">
                    <div class="left-entreprise-side">
                    <ul>
                    
                  
                   
                    @foreach($companies as $company)  
 @if ($company->rate == $thirdbestrate)
  <p>  {{ $company->name_companies}}</p>
  <p>  {{ $company->additional_info }}</p>
  <p>  {{ $company->rate }}</p>
  
 
  
  
</ul>
                    </div>
                    <div class="go-entreprise-button">
                        <div class="arrow-icon">
                        <a href="/{{$company -> id}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="rgba(255,255,255,1)"/></svg></a> 
                        </div>
                    </div>         
                </div>
            </div>
            @endif
   
@endforeach
            <div class="companie entreprise4">
                <div class="id-entreprises-side">
                    <div class="left-entreprise-side">
                    <ul>
                    
                  
                   
                    @foreach($companies as $company)  
 @if ($company->rate == $fourbestrate)
  <p>  {{ $company->name_companies}}</p>
  <p>  {{ $company->additional_info }}</p>
  <p>  {{ $company->rate }}</p>
  
 
   
  
</ul>
                    </div>
                    <div class="go-entreprise-button">
                        <div class="arrow-icon">
                        <a href="/{{$company -> id}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="rgba(255,255,255,1)"/></svg></a> 
                        </div>
                    </div>            
                </div>
            </div>
            @endif
   
@endforeach
            <div class="companie entreprise5">
                <div class="id-entreprises-side">
                    <div class="left-entreprise-side">
                    <ul>
                    
                  
                   
                    @foreach($companies as $company)  
 @if ($company->rate == $fivebestrate)
  <p>  {{ $company->name_companies}}</p>
  <p>  {{ $company->additional_info }}</p>
  <p>  {{ $company->rate }}</p>
  
 
  
  
</ul>
                    </div>
                    <div class="go-entreprise-button">
                        <div class="arrow-icon">
                        <a href="/{{$company -> id}}"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="rgba(255,255,255,1)"/></svg></a> 
                        </div>
                    </div>            
                </div>
            </div>
            @endif
   
   @endforeach
            <div class="companie entreprise6">
                <div class="id-entreprises-side">
                    <div class="left-entreprise-side">
                    <ul>
                    
                  
                   
                    @foreach($companies as $company)  
 @if ($company->rate == $sixbestrate)
  <p>  {{ $company->name_companies}}</p>
  <p>  {{ $company->additional_info }}</p>
  <p>  {{ $company->rate }}</p>
  
 
   
  
</ul>
                    </div>
                    <div class="go-entreprise-button">
                        <div class="arrow-icon">
                        <a href="/{{$company -> id}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="rgba(255,255,255,1)"/></svg></a> 
                        </div>
                    </div>            
                </div>
            </div>
        </div>
        @endif
   
@endforeach
        <li><a class="entreprise-button" href="student-companie-page">Voir toutes les entreprises</a></li>
    </div>
    
    <div class="qui-te-correspondent-section">
        <h1>Qui te correspondent...</h1>

        <div class="matching-internship-box">
            <div class="matching-internship">

                <div class="left-side-matching-internship">
                    <ul>
                        @foreach ($stages as $stage)
                        @if ($stage->id == $id1)
                        <p> {{$stage->name_companies}}</p>
                            <p> {{$stage->offer_internships}} </p>
                    
                        <div class="details-section">
                            <div class="internship-location">
                            <div class="location-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M18.364 17.364L12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                            </div>
                           <p> {{$stage->city}} </p>
                        </div>
                        <div class="intership-timestamp">
                            <div class="timestamp-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm1-10V7h-2v7h6v-2h-4z"/></svg>
                            </div>
                            <p> {{substr($stage->date_internships,0,10) }} </p>
                            
                            </div>
                            
                        </div>
                            
                    </ul>
                </div>

                <div class="right-side-matching-internship">
                    <div class="see-offer-button">
                        <li><a href="/{{$stage -> id}}">Voir l'offre</a></li>
                    </div>
                        @endif
                        @endforeach
                    <div id = "changement" class="heart-fav">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
            </div>
        </div>  
        <div class="matching-internship-box">
            <div class="matching-internship">

                <div class="left-side-matching-internship">
                <ul>
                @foreach ($stages as $stage)
                        @if ($stage->id == $id2)
                        <p> {{$stage->name_companies}}</p>
                            <p> {{$stage->offer_internships}} </p>
                    
                    <div class="details-section">
                        <div class="internship-location">
                            <div class="location-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M18.364 17.364L12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                            </div>
                            <p> {{$stage->city}} </p>
                        </div>
                        <div class="intership-timestamp">
                            <div class="timestamp-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm1-10V7h-2v7h6v-2h-4z"/></svg>
                            </div>
                            <p> {{substr($stage->date_internships,0,10)}} </p>
                        </div>
                    </div>
                    
                    </ul>
                </div>

                <div class="right-side-matching-internship">
                    <div class="see-offer-button">
                        <li><a href="/{{$stage -> id}}">Voir l'offre</a></li>
                    </div>
                    @endif
                    @endforeach
                    <div id = "changement" class="heart-fav">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
            </div>
        </div>  
        <div class="matching-internship-box">
            <div class="matching-internship">

                <div class="left-side-matching-internship">
                <ul>
                @foreach ($stages as $stage)
                        @if ($stage->id == $id3)
                        <p> {{$stage->name_companies}}</p>
                            <p> {{$stage->offer_internships}} </p>
                    <div class="details-section">
                        <div class="internship-location">
                            <div class="location-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M18.364 17.364L12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                            </div>
                            <p> {{$stage->city}} </p>
                        </div>
                        <div class="intership-timestamp">
                            <div class="timestamp-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm1-10V7h-2v7h6v-2h-4z"/></svg>
                            </div>
                            <p> {{substr($stage->date_internships,0,10)}} </p>
                        </div>
                    </div>
                    
                    </ul>
                </div>

                <div class="right-side-matching-internship">
                    <div class="see-offer-button">
                    <li><a href="/{{$stage -> id}}">Voir l'offre</a></li>
</div>
                    @endif
                    @endforeach
                    <div id = "changement" class="heart-fav">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
            </div>
        </div>  
        <div class="matching-internship-box">
            <div class="matching-internship">

                <div class="left-side-matching-internship">
                <ul>
                @foreach ($stages as $stage)
                        @if ($stage->id == $id4)
                        <p> {{$stage->name_companies}}</p>
                            <p> {{$stage->offer_internships}} </p>
                    <div class="details-section">
                        <div class="internship-location">
                            <div class="location-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M18.364 17.364L12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                            </div>
                            <p> {{$stage->city}} </p>
                        </div>
                        <div class="intership-timestamp">
                            <div class="timestamp-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm1-10V7h-2v7h6v-2h-4z"/></svg>
                            </div>
                            <p> {{substr($stage->date_internships,0,10)}} </p>
                        </div>
                    
                    </div>
                   
                    </ul>
                </div>

                <div class="right-side-matching-internship">
                    <div class="see-offer-button">
                        <li><a href="/{{$stage -> id}}">Voir l'offre</a></li>
                    </div>
                    @endif
                    @endforeach
                    <div id = "changement" class="heart-fav">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
            </div>
        </div>  
        <div class="matching-internship-box">
            <div class="matching-internship">

                <div class="left-side-matching-internship">
                <ul>
                @foreach ($stages as $stage)
                        @if ($stage->id == $id5)
                        <p> {{$stage->name_companies}}</p>
                            <p> {{$stage->offer_internships}} </p>
                    <div class="details-section">
                        <div class="internship-location">
                            <div class="location-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M18.364 17.364L12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                            </div>
                            <p> {{$stage->city}} </p>
                        </div>
                        <div class="intership-timestamp">
                            <div class="timestamp-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm1-10V7h-2v7h6v-2h-4z"/></svg>
                            </div>
                            <p> {{substr($stage->date_internships,0,10)}} </p>
                        </div>
                       
                    </ul>
                    </div>
                
                
                <div class="right-side-matching-internship">
                    <div class="see-offer-button">
                        <li><a href="/{{$stage -> id}}">Voir l'offre</a></li>
                    </div>
                    @endif
                    @endforeach
                    <div id = "changement" class="heart-fav">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
            </div>
        </div>  
            
        


        <li class="all-internship-button"><a href="student-offers-page">Voir toutes les offres de stage</a></li>
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

</body>
</html>