<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FrontEnd</title>
  <base href="/">
  <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Srisakdi" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Aladin" rel="stylesheet"> 

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>

   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<style>
#titre-principal
{
    font-family: 'Berkshire Swash', cursive;
    font-size: 100px;
    color: black;

}
#titre-principal-link:hover
{
    text-decoration: none; !important

}


#titre-principal-sec
{
    font-family: 'Srisakdi', cursive;
    
}
#menu
{
    font-size: 20px;
}

#paragraphe
{
    font-family: 'Aladin', cursive;
    font-size: 22px;

}
#img-articles {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
#img-article {
    width: 100%;
    height: 20vw;
    object-fit: cover;
}

</style>
<body>

        <div class="container">
                <div class="row">
                     <div class="col-md-12">
                        <a href="/" id="titre-principal-link"><h1 class="text-center mt-4" id="titre-principal">Jamal Eddine Naji</h1></a>
                     </div>
                     <div class="col-md-12">
                         <h4 class="text-center" id="titre-principal-sec">Auteur | Journaliste | Professeur | Chercheur</h4>
                     </div>
                 
                </div>
            </div>
            
             <div class="container" id="menu">
                 <div class="col-md-12">
                     <ul class="list-inline text-center">
                         <li class="list-inline-item p-4">Livres</li>
                         <a href="/posts"><li class="list-inline-item p-4">Articles</li></a>
                         <li class="list-inline-item p-4">Interview</li>
                         <li class="list-inline-item p-4">Poemes</li>
                         <li class="list-inline-item p-4">Galerie</li>
                     </ul>
                 </div>
             </div>
    @yield('content')
</body>
</html>