<x-app>
 
<main>
          
<x-clientBar>
</x-clientBar>

<div class="p-4 sm:ml-32">
    <div class="flex justify-between items-center mb-4">
      <div class="flex justify-between lg:justify-center items-center gap-4">
          <div class="w-16 h-16 bg-[url('/./assets/img/image.webp')] bg-cover	bg-no-repeat	bg-center	 rounded-full"></div>
        <h1 class="font-bold text-xl md:text-2xl ">{{ Auth()->User()->prenom . " " .  Auth()->User()->nom}}</h1>
      </div>
       <div class="flex justify-center items-center gap-4">
            <p class="hidden sm:block  text-gray-800 font-bold">depuis {{Auth()->User()->created_at }}</p>
            <form action="/logout" method="post">
            @csrf
             <button type="submit" class="opacity-80 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Logout</button>
            </form>
           

        </div>
      
      </div>
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
     
    <div class="flex justify-between items-center">
        <h1 class="font-bold text-gray-700 text-2xl my-4">Bricole publiee</h1>
        <a href="/confirmation" class="px-4 py-3 font-bold bg-slate-800 text-gray-50 rounded-2xl ">Consulter les confirmations</a>

    </div>
   
      <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-4 gap-4 mb-4">
        
        @foreach ($bricoles as $bricole)
        {{ $bricole->titre }}

       @endforeach
      </div>
       

      
  
   </div>
</div>

</main>
</x-app>

