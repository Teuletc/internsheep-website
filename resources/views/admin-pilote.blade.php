<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internsheep</title>

    <link rel="stylesheet" href="{{ asset('css/admin-pilote-style.css')}}">
    <script src="../js/heart-valid.js" defer></script>
    <script src="../js/ajouter-button.js" defer></script>


    <link rel="icon" type="icon-internsheep" href="../imgs/icon-internsheep.png" sizes="32x32">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a class="logo" href="admin-companie"><img src="{{ asset('imgs/logopng.png')}}" alt=""></a></li>
            <div class="menu-nav">
                <li class="admin-menu"><a href="admin-companie">ENTREPRISES</a></li>
                <li class="admin-menu"><a href="admin-offer">STAGES</a></li>
                <li class="admin-menu"><a href="admin-pilote">PILOTES</a></li>
                <li class="admin-menu"><a href="admin-student">ETUDIANTS</a></li>
                <li id="new-button"><a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1-11H7v2h4v4h2v-4h4v-2h-4V7h-2v4z"/></svg>AJOUTER</a></li>
                
                <li id="logout-button"><a href="auth-page"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M5 11h8v2H5v3l-5-4 5-4v3zm-1 7h2.708a8 8 0 1 0 0-12H4A9.985 9.985 0 0 1 12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.985 9.985 0 0 1-8-4z"/></svg>
                    
                    LOGOUT</a></li>            
            </div>
        </ul>
    </nav>

    <div class="popup-container">
      <div class="popup">
        <h2>Ajouter un nouveau pilote</h2>
        <form>
          <label for="nom">Nom :</label>
          <input type="text" id="nom-input" name="nom" required maxlength=64>

          <label for="secteur">Secteur :</label>
          <input type="text" id="secteur-input" name="email" required maxlength=45>

          <label for="codepostal">Code postal :</label>
          <input type="text" id="codepostal-input" name="codepostal" required maxlength=16 pattern="[0-9]*">

          <label for="nom">Ville :</label>
          <input type="text" id="nom-input" name="nom" required maxlength=128>

          <label for="logo">Logo :</label>
          <input type="file" id="logo-input" name="logo" accept=".jpg, .jpeg, .png, .svg">

          <button type="submit">Ajouter</button>
        </form>
        <button class="close-btn">X</button>
      </div>
    </div>

    <div class="wrapper">
            <h1 class="main-title">Gestion des pilotes</h1>
            <div class="admin-box">
                <div class="tableau">
                <table>
                      <thead>
                        <tr class="first-line">
                          <th>ID</th>
                          <th>campus</th>
                          <th>username</th>
                          <th>password</th>
                          <th>nom</th>
                          <th>prenom</th>
                          <th>mail</th>
                          <th>Modifier</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($users as $pilote)
                            <tr>
                                <td>{{$pilote -> id}}</td>
                                <td>{{$pilote -> center_school}}</td>
                                <td>{{$pilote -> usersname}}</td>
                                <td>{{$pilote -> password}}</td>
                                <td>{{$pilote -> last_name}}</td>
                                <td>{{$pilote -> first_name}}</td>
                                <td>{{$pilote -> email}}</td>
                                <td><div class="modif-box">
                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm4 10v4h2v-4H7zm4-6v10h2V7h-2zm4 3v7h2v-7h-2z"/></svg></a>
                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M16.757 3l-7.466 7.466.008 4.247 4.238-.007L21 7.243V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12.757zm3.728-.9L21.9 3.516l-9.192 9.192-1.412.003-.002-1.417L20.485 2.1z"/></svg></a>
                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm-8 5v6h2v-6H9zm4 0v6h2v-6h-2zM9 4v2h6V4H9z"/></svg></a>   
                                </div></td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>

                    
                </div>
            </div>
    </div>

</body>
</html>