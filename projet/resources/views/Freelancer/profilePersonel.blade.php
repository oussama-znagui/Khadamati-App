<x-app>
 
<main>
    
<x-freelancerBar>
</x-freelancerBar>

<div class="p-4 sm:ml-32">
    <div class="flex justify-between items-center mb-4">
      <div class="flex justify-between lg:justify-center items-center gap-4">
          <div class="w-16 h-16 bg-[url('/./assets/img/image.webp')] bg-cover	bg-no-repeat	bg-center	 rounded-full"></div>
        <h1 class="font-bold text-xl md:text-2xl ">{{ Auth()->User()->prenom . " " .  Auth()->User()->nom}}</h1>
      </div>
      <div>
         <h1 class="font-bold text-gray-600">Budget</h1>
         <p class="font-black text-gray-900 text-4xl">
            300 <span class="text-xl">DHS</span>
         </p>
      </div>
       <div class="flex justify-center items-center gap-4">
            <p class="hidden sm:block  text-gray-800 font-bold">depuis {{Auth()->User()->created_at }}</p>
            <form action="/logout" method="post">
            @csrf
             <button type="submit" class="opacity-80 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Logout</button>
            </form>
           

        </div>
      
      </div>
   <div class="p-4 border-2 border-gray-200 bg-gray-200 border-dashed rounded-lg dark:border-gray-700">
     
   
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
       
        <div class="flex items-center p-4 bg-white rounded">
			<div class="flex flex-shrink-0 items-center justify-center bg-yellow-200 h-16 w-16 rounded">
			<svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16 17-4-4-4 4m8-6-4-4-4 4"/>
</svg>

			</div>
			<div class="flex-grow flex flex-col ml-4">
				<span class="text-3xl font-bold">13</span>
				<div class="flex items-center justify-between">
					<span class="text-gray-500">Offres envoyees</span>
					
				</div>
			</div>
		</div>
		
		<!-- Tile 2 -->
		<div class="flex items-center p-4 bg-white rounded">
			<div class="flex flex-shrink-0 items-center justify-center bg-green-200 h-16 w-16 rounded">
				<svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 7 4 4 4-4m-8 6 4 4 4-4"/>
</svg>

				</svg>
			</div>
			<div class="flex-grow flex flex-col ml-4">
				<span class="text-xl font-bold">211</span>
				<div class="flex items-center justify-between">
					<span class="text-gray-500">Offres Confirmées</span>
				
				</div>
			</div>
		</div>
		
		<!-- Tile 3 -->
		<div class="flex items-center p-4 bg-white rounded">
			<div class="flex flex-shrink-0 items-center justify-center bg-red-200 h-16 w-16 rounded">
				<svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
  <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z" clip-rule="evenodd"/>
</svg>

				</svg>
			</div>
			<div class="flex-grow flex flex-col ml-4">
				<span class="text-xl font-bold">140</span>
				<div class="flex items-center justify-between">
					<span class="text-gray-500">Reclamations Recues </span>
				
				</div>
			</div>
		</div>
      </div>
     

      
      
      <div class="grid grid-cols-2 gap-4">
         {{-- flex items-center justify-center --}}
         <div class=" rounded bg-gray-50 h-28 p-2 dark:bg-gray-800">
           <h1 class="font-bold text-gray-800">Dernier bricole publié dans votre ville</h1>
         </div>
         <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
               <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
               </svg>
            </p>
         </div>
       
        
      </div>
   </div>
</div>

</main>
</x-app>

