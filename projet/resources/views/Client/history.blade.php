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
        <h1 class="font-bold text-gray-700 text-2xl my-4">Historique des jobs</h1>
        <a href="/confirmation" class="px-4 py-3 font-bold bg-slate-800 text-gray-50 rounded-2xl ">Consulter les confirmations</a>

    </div>
   
      <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-4 gap-4 mb-4">
        
        @foreach ($bricoles as $bricole)
       <div class="rounded border-2 border-slate-400 border-solid overflow-hidden shadow-lg flex flex-col">
      <a href=""></a>
      <div class="relative"><a href="/bricole/{{ $bricole->slug }}">
          <img class="w-full"
            src="./assets/img/fuite.jpg"
            alt="Sunset in the mountains">
          <div
            class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
          </div>
        </a>
        <a href="#!">
      
            @if ($bricole->offreConfirme)
            <div
            class="text-xs absolute top-0 right-0 bg-green-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                <p> résolu</p>
                </div>
            @else
                <div
            class="text-xs absolute top-0 right-0 bg-yellow-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                <p> En cours</p>
                </div>
            @endif
           
          
        </a>
      </div>
      <div class="px-6 py-4 mb-auto">
        <p class="text-bold text-gray-500">{{ $bricole->priorite }}</p>
        <a href="#"
          class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">{{ $bricole->titre }}</a>
        <div>
            <div class=" flex justify-center items-center gap-2">
<svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 10h9.231M6 14h9.231M18 5.086A5.95 5.95 0 0 0 14.615 4c-3.738 0-6.769 3.582-6.769 8s3.031 8 6.769 8A5.94 5.94 0 0 0 18 18.916"/>
</svg>
<p>{{ $bricole->budget }} DHS</p>

            </div>
             <div class="flex justify-center items-center gap-2">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
</svg>
<p>{{ $bricole->nde }} Jours estimé</p>
                
            </div>
             <div>
                
            </div>
        </div>
      </div>
      <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
        <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
          <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
            style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <g>
              <g>
                <path
                  d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                </path>
              </g>
            </g>
          </svg>
          <span class="ml-1">   {{ $bricole->timeAgo }} </span>
        </span>

        <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.292-.538 1.292H5.538C5 18 5 17.301 5 16.708c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365ZM8.733 18c.094.852.306 1.54.944 2.112a3.48 3.48 0 0 0 4.646 0c.638-.572 1.236-1.26 1.33-2.112h-6.92Z"/>
</svg>

        
         {{-- @dd($bricole) --}}
                 <span class="ml-1">{{ $bricole->offreNonConfirme }}  Offre recue(s)</span>
                
       
       
        </span>
      </div>
    </div>

            
        @endforeach
      </div>
       

      
  
   </div>
</div>

</main>
</x-app>

