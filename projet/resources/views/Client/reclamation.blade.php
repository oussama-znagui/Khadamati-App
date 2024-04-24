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
        <h1 class="text-3xl font-bold text-slate-700 text-center mb-5  ">Reclamation</h1>
           @if(session('reclamation'))
                <div class="success bg-green-800 py-2 my-4 px-4 text-center  w-1/4 rounded-2xl">
                 
    <h6 class="font-bold text-gray-700">
        {{ session('reclamation') }}
    </h6>

                </div>
            @endif
               
        
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    @foreach($reclamations as $reclamation)
    <div class="bg-white rounded-2xl px-4 py-2 flex justify-between items-center">
        <h1 class="text-gray-800 font-bold text-2xl">{{ $reclamation->titre }}</h1>
         <button  data-modal-target="crud-modal-{{ $reclamation->id }}" data-modal-toggle="crud-modal-{{ $reclamation->id }}" class=" rounded-full bg-yellow-600 dark:bg-blue-800 text-white dark:text-white  font-bold hover:bg-blue-800 dark:hover:bg-blue-900  px-4  py-2" type="button">
                           Voire
                        </button>
                        



<!-- Main modal -->
<div id="crud-modal-{{ $reclamation->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Reclamation {{ $reclamation->id }}
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal-{{ $reclamation->id }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-5 text-center">
                <div class="bg-yellow-500 text-gray-50 rounded-2xl px-4 py-2 text-center">En cours de traitement</div>
                <h1 class="text-gray-900 font-bold my-2 text-xl">{{ $reclamation->titre }}</h1>
                <p class="text-gray-700 font-bold ">{{ $reclamation->description }}</p>
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

