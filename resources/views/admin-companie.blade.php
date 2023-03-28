<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internsheep</title>

    <link rel="stylesheet" href="{{ asset('css/admin-companie-style.css')}}">
    <script src="../js/heart-valid.js" defer></script>
    <script src="../js/ajouter-button.js" defer></script>

    <link rel="icon" type="icon-internsheep" href="../imgs/icon-internsheep.png" sizes="32x32">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- PWA  -->
<meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('icon-internsheep.png') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a class="logo" href="admin-companie"><img src="{{ asset('imgs/logopng.png')}}" alt=""></a></li>
            <div class="menu-nav">
                <li class="admin-menu"><a id="entreprisesButton" href="admin-companie">ENTREPRISES</a></li>
                <li class="admin-menu"><a id="stagesButton" href="admin-offer">STAGES</a></li>
                <li class="admin-menu"><a id="pilotesButton" href="admin-pilote">PILOTES</a></li>
                <li class="admin-menu"><a id="etudiantsButton" href="admin-student">ETUDIANTS</a></li>
                <li id="new-button"><a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1-11H7v2h4v4h2v-4h4v-2h-4V7h-2v4z"/></svg>AJOUTER</a></li>
                
                <li id="logout-button"><a href="auth-page"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M5 11h8v2H5v3l-5-4 5-4v3zm-1 7h2.708a8 8 0 1 0 0-12H4A9.985 9.985 0 0 1 12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.985 9.985 0 0 1-8-4z"/></svg>
                    
                    LOGOUT</a></li>            
            </div>
        </ul>
    </nav>

    <div class="popup-container">
      <div class="popup">
        <h2>Ajouter une nouvelle entreprise</h2>
    
        <form action="{{ route('ajouter-entreprise') }}" method="POST">
          @csrf
           
          <div class="side-form">
            <label for="nom-entreprise">Nom :</label>
            <input type="text" id="nom-entreprise" name="nom" required maxlength=64>
  
            <label for="secteur">Secteur :</label>
            <select name="secteur" id="secteur">
              @foreach($activities as $activity)
                <option value="{{$activity->id}}">{{$activity->activity}}</option>
              @endforeach
            </select>
    
            <label for="additional_info">Infos Additionnelles :</label>
            <input type="text" id="additional_info" name="additional_info" maxlength=100>
  
            <label for="logo">Logo :</label>
            <input type="file" id="logo-input" name="logo" accept=".jpg, .jpeg, .png, .svg">
          </div>
          
          <div class="side-form">
          <label for="numrue">Num. Rue :</label>
            <input type="text" id="numrue" name="numrue" required maxlength=10></textarea>

            <label for="rue">Rue :</label>
            <input type="text" id="rue" name="rue" required maxlength=1200></textarea>

            <label for="addresse2">Complément d'adresse :</label>
            <input type="text" id="addresse2" name="addresse2" maxlength=200></textarea>

            <label for="codepostal">Code Postale :</label>
            <input type="text" id="codepostal" name="codepostal" required maxlength=10></textarea>

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required maxlength=100></textarea>

            <label for="pays">Pays :</label>
            <input type="text" id="pays" name="pays" required maxlength=100></textarea>

          </div>


          <button type="submit">Ajouter</button>
        </form>
        <button class="close-btn">X</button>
      </div>
    </div>

    <div class="wrapper">
            <h1 class="main-title">Gestion des entreprises</h1>
            <div class="admin-box">
                <div class="tableau">
                    <table>
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Logo</th>
                          <th>Nom</th>
                          <th>Secteur</th>
                          <th>Code postal</th>
                          <th>Ville</th>
                          <th>Note</th>
                          <th>Modif</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        @foreach ($companies as $companie)
                          <tr>
                            <td>{{$companie -> id}}</td>
                            <td>{{$companie -> logo}}</td>
                            <td>{{$companie -> name_companies}}</td>

                            <td>
                              @foreach($companie->activities as $activity)
                                {{$activity->activity . ','}}
                              @endforeach
                            </td>
                            
                            <td>{{$companie -> addresses-> first() -> zip_code}}</td>
                            <td>{{$companie -> addresses-> first() -> city}}</td>
                            <td>{{$companie -> rate}}</td>

                            <td>
                              <div class="modif-box">
                                <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176z" fill="rgba(18,18,18,1)"/></svg></a>
                                <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.757 3l-7.466 7.466.008 4.247 4.238-.007L21 7.243V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12.757zm3.728-.9L21.9 3.516l-9.192 9.192-1.412.003-.002-1.417L20.485 2.1z"/></svg></a>
                                <form action="/supprimer-entreprise" method="post">
                                  @csrf
                                  <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm-8 5v6h2v-6H9zm4 0v6h2v-6h-2zM9 4v2h6V4H9z"/></svg></button>
                                </form>                            
                              </div>
                            </td>

                          </tr>
                        @endforeach
                      </tbody>

                    </table>
                  </div>
            </div>
    </div>

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