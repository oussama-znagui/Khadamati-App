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
    <div class="bg-gray-100 dark:bg-gray-800 py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                    <img class="w-full h-full object-cover" src="https://cdn.pixabay.com/photo/2020/05/22/17/53/mockup-5206355_960_720.jpg" alt="Product Image">
                </div>
               
            </div>
            <div class="md:flex-1 px-4">
                <p>Priorité : {{ $bricole->priorite }}</p>
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">{{ $bricole->titre }}</h2>
                 <span class="font-bold text-gray-700 dark:text-gray-300">Bricole description</span>
                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">

                 {{$bricole->description}}
                </p>
                <div class=" mb-4">
                    <div class="mr-4 mb-4 flex items-center gap-x-2" >
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
</svg>

                        <span class="font-bold text-gray-700 dark:text-gray-300">Jours estimés</span>
                        <span class="text-gray-600 dark:text-gray-300">{{ $bricole->nde }} Jrs</span>
                    </div>
                    <div class="flex items-center gap-x-2">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 10h9.231M6 14h9.231M18 5.086A5.95 5.95 0 0 0 14.615 4c-3.738 0-6.769 3.582-6.769 8s3.031 8 6.769 8A5.94 5.94 0 0 0 18 18.916"/>
</svg>

                        <span class="font-bold text-gray-700 dark:text-gray-300">Budget</span>
                        <span class="text-gray-600 dark:text-gray-300">{{ $bricole->budget }} DHS</span>

                    </div>
                </div>
              
                <div class="mb-4">
                    <span class="font-bold text-gray-700 dark:text-gray-300">Profession</span>
                    <div class="flex items-center mt-2">
                        <button class="bg-gray-300 dark:bg-gray-700 text-gray-700 dark:text-white py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 dark:hover:bg-gray-600">{{ $bricole->profession->profession }}</button>
                   
                    </div>
                </div>
                 <div class="flex -mx-2 mb-4 mt-10">
                    <div class="w-1/2 px-2">
                        <button class="w-full bg-gray-900 dark:bg-gray-600 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800 dark:hover:bg-gray-700">Add to Cart</button>
                    </div>
                    <div class="w-1/2 px-2">
                        <button class="w-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white py-2 px-4 rounded-full font-bold hover:bg-gray-300 dark:hover:bg-gray-600">Add to Wishlist</button>
                    </div>
                </div> 
             
            </div>
        </div>
    </div>


    <div class="my-10 p-5">
        
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    @for ($i = 0; $i < 7; $i++)
    <div class='flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden mx-auto'>
        <div class='w-2 bg-gray-800'></div>
        
            
       

<div class="overflow-hidden rounded-xl relative transform hover:-translate-y-2 transition ease-in-out duration-500 shadow-lg hover:shadow-2xl movie-item text-white movie-card" data-movie-id="438631">
    <div class="absolute inset-0 z-10 transition duration-300 ease-in-out bg-gradient-to-t from-black via-gray-900 to-transparent"></div>
    <div class="relative cursor-pointer group z-10 px-10 pt-10 space-y-6 movie_info" data-lity="" href="https://www.youtube.com/embed/aSHs224Dge0">
        <div class="poster__info align-self-end w-full">
            <div class="h-32"></div>
            <div class="space-y-6 detail_info">
                <div class="flex flex-col space-y-2 inner">
                    <a class="relative flex items-center w-min flex-shrink-0 p-1 text-center text-white bg-red-500 rounded-full group-hover:bg-red-700" data-unsp-sanitized="clean">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM9.555 7.168A1 1 0 0 0 8 8v4a1 1 0 0 0 1.555.832l3-2a1 1 0 0 0 0-1.664l-3-2z" clip-rule="evenodd"></path>
                        </svg>
                        <div class="absolute transition opacity-0 duration-500 ease-in-out transform group-hover:opacity-100 group-hover:translate-x-16 text-xl font-bold text-white group-hover:pr-2">Trailer</div>
                    </a>
                    <h3 class="text-2xl font-bold text-white" data-unsp-sanitized="clean">Dune</h3>
                    <div class="mb-0 text-lg text-gray-400">Beyond fear, destiny awaits.</div>
                </div>
                <div class="flex flex-row justify-between datos">
                    <div class="flex flex-col datos_col">
                        <div class="popularity">440.052</div>
                        <div class="text-sm text-gray-400">Popularity:</div>
                    </div>
                    <div class="flex flex-col datos_col">
                        <div class="release">2021-09-15</div>
                        <div class="text-sm text-gray-400">Release date:</div>
                    </div>
                    <div class="flex flex-col datos_col">
                        <div class="release">155 min</div>
                        <div class="text-sm text-gray-400">Runtime:</div>
                    </div>
                </div>
                <div class="flex flex-col overview">
                    <div class="flex flex-col"></div>
                    <div class="text-xs text-gray-400 mb-2">Overview:</div>
                    <p class="text-xs text-gray-100 mb-6">
                        Paul Atreides, a brilliant and gifted young man born into a great destiny beyond his understanding, must travel to the most dangerous planet in the universe to ensure the future of his family and his people. As
                        malevolent forces explode into conflict over the planet's exclusive supply of the most precious resource in existence-a commodity capable of unlocking humanity's greatest potential-only those who can conquer their
                        fear will survive.
                    </p>
                </div>
            </div>
            <div data-countdown="2021-09-15" class="absolute inset-x-0 top-0 pt-5 w-full mx-auto text-2xl uppercase text-center drop-shadow-sm font-bold text-white">00 Days 00:00:00</div>
        </div>
    </div>
    <img class="absolute inset-0 transform w-full -translate-y-4" src="/./assets/img/Plombier.jpg" style="filter: grayscale(0);" />
    <div class="poster__footer flex flex-row relative pb-10 space-x-4 z-10">
        <a
            class="flex items-center py-2 px-4 rounded-full mx-auto text-white bg-red-500 hover:bg-red-700"
            href="http://www.google.com/calendar/event?action=TEMPLATE&amp;dates=20210915T010000Z%2F20210915T010000Z&amp;text=Dune%20%2D%20Movie%20Premiere&amp;location=http%3A%2F%2Fmoviedates.info&amp;details=This%20reminder%20was%20created%20through%20http%3A%2F%2Fmoviedates.info"
            target="_blank"
            data-unsp-sanitized="clean"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <div class="text-sm text-white ml-2">Set reminder</div>
        </a>
    </div>
</div>

    </div>
     @endfor    
</div>

    </div>
</div>

     
    

      
  
   </div>
</div>

</main>
</x-app>

