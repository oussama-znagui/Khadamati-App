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
    <div class="bg-gray-100 dark:bg-gray-800 p-4">
   


    <div class=" ">
        <h1 class="text-3xl font-bold text-slate-700 text-center mb-5  ">Offres acceptees</h1>
        
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    @foreach($offres as $offre)
    <div class=" bg-white dark:bg-gray-900 rounded-lg overflow-hidden shadow-lg">
            <div class="border-b px-4 pb-6 ">
                <div class="  flex justify-between items-center">
                    <div class="py-2 flex items-center gap-x-2">
                          <img class="h-16 w-16 rounded-full border-4 border-white dark:border-gray-800 mx-auto my-1"
                        src="https://randomuser.me/api/portraits/women/21.jpg" alt="">
                        <div>
                            <h3 class="font-bold text-xl text-gray-800 dark:text-white mb-1">{{ $offre->freelancer->user->prenom . ' ' . $offre->freelancer->user->nom}}</h3>
                        <p class="inline-flex text-gray-700 dark:text-gray-300 items-center">
                            {{ $offre->freelancer->profession->profession }} 
                        </p>
                        </div>
                    </div>
                    <div class="font-bold text-3xl text-blue-700">
                        {{ $offre->prix }} DHS
                    </div>
                   
                   
                  
                </div>
                 <div class="my-2">
                         <h2 class="font-bold text-gray-900">Message:</h2>
                        <p>{{ $offre->message }}</p>
                        
                    </div>
                <div class="flex gap-2 px-2 justify-between">
                    <div></div>
                   

<button data-modal-target="popup-modal{{ $offre->id }}" data-modal-toggle="popup-modal{{ $offre->id }}" class="w-2/4 rounded-full bg-blue-600 dark:bg-blue-800 text-white dark:text-white  font-bold hover:bg-blue-800 dark:hover:bg-blue-900  px-4  py-2" type="button">
Accepter
</button>

<div id="popup-modal{{ $offre->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal{{ $offre->id }}">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Attention</h3>
                <p>Apres l'acceptation de cette offre vous pouvez pas l'anuller</p>
                <p>Le freelancer va recevoire un sms avec vos donnees et il va vous contacter sur votre telephone </p>
               <div class="flex justify-center items-center gap-x-2 my-4">
                <form action="/accepteOffre/{{ $offre->id }}" method="post" class="w-2/4">
                         @method('PUT')
                        @csrf
                       
                        <button type='submit'
                        class=" rounded-full bg-blue-600 dark:bg-blue-800 text-white dark:text-white  font-bold hover:bg-blue-800 dark:hover:bg-blue-900  px-4 w-full  py-2">
                        Accepter
                    </button>
                    </form>
                <button data-modal-hide="popup-modal{{ $offre->id }}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
               </div>
            </div>
        </div>
    </div>
</div>


             
                  
                </div>
            </div>
           
        </div>
     @endforeach    
</div>

    </div>
</div>

     
    

      
  
   </div>
</div>

</main>
</x-app>
