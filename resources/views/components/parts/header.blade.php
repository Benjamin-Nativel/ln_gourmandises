@auth
@role('Administrateur')
<div class="bg-[#EFA48F] flex justify-end"><a class="text-white mx-2" href="/admin/dashboard">Dashboard</a>
    <a class="text-white mx-2" href="/logout">Se déconnecter</a>  
</div>
@endrole
@role('Utilisateur')

<div class="bg-[#EFA48F] flex justify-end">
    <div class="flex items-center content-center justify-center px-10">
        <a href="/logout">Se déconnecter</a>  
    </div>
    
</div>
@endrole 
 

@endauth
@guest
<div class="bg-[#EFA48F] flex justify-end">
    <div class="flex items-center content-center justify-center px-10">
        <a href="/admin">Se connecter</a>  
    </div>
    
</div>
@endguest
<header class="text-gray-600 body-font">
    <div clas="flex justify-center">
<div class="flex items-center content-center justify-center">

    <img class="w-64 h-auto mr-5" src="/img/logo_header.png" />
</div>
    </div>
    <div class="container flex flex-col flex-wrap items-center p-5 mx-auto md:flex-row">
        <nav class="flex flex-wrap items-center justify-center text-base md:ml-auto md:mr-auto">
            <a class="mr-5 hover:text-gray-900" href="/">Acceuil</a>
            <a class="mr-5 hover:text-gray-900 " href="/#about" >A propos</a>
            <a class="mr-5 hover:text-gray-900" href="/contacts" >Contact</a>
            
          </nav>
        
    
      
    </div>
  </header>