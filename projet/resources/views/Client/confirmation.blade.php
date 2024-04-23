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
           @if(session('payment'))
                <div class="success bg-green-800 py-2 my-4 px-4 text-center  w-1/4 rounded-2xl">
                 
    <h6 class="font-bold text-gray-700">
        {{ session('payment') }}
    </h6>

                </div>
                @endif

         @if(session('success'))
                <div class="success bg-green-800 py-2 px-4 text-center w-2/4 mx-auto rounded-2xl">
                 
    <h6 class="font-bold text-gray-700">
        {{ session('success') }}
    </h6>

                </div>
                @endif
        
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
                <div>
                    <h1 class="text-gray-700 font-bold text-lg">Bricole</h1>
                    <p>{{ $offre->bricole->titre }}</p>
                </div>
                 <div class="my-2">
                         <h2 class="font-bold text-gray-900">Message:</h2>
                        <p>{{ $offre->message }}</p>
                        
                </div>
                <div class="flex gap-2 px-2 justify-between">
                    <div></div>
                    @if (!$offre->payment)
                    <form action="/session" method="post" class="w-2/4">
                        <input class="hidden" type="text" name="_token" value="{{ csrf_token() }}" id="">
                        <input class="hidden" type="text" name="offre_id" value="{{$offre->id}}" id="">
                         <input class="hidden" type="text" name="prix" value="{{ $offre->prix }}" id="">
                          <input class="hidden" type="text" name="titre" value="{{ $offre->bricole->titre }}" id="">
                          <button class="w-full rounded-full bg-blue-600 dark:bg-blue-800 text-white dark:text-white  font-bold hover:bg-blue-800 dark:hover:bg-blue-900  px-4  py-2" type="submit">
                            Payer
                        </button>
                    </form>
                    @else
                    <button  data-modal-target="crud-modal-{{ $offre->id }}" data-modal-toggle="crud-modal-{{ $offre->id }}" class="w-full rounded-full bg-yellow-600 dark:bg-blue-800 text-white dark:text-white  font-bold hover:bg-blue-800 dark:hover:bg-blue-900  px-4  py-2" type="button">
                            Reclamation
                        </button>
                        



<!-- Main modal -->
<div id="crud-modal-{{ $offre->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Envoyer Une reclamation -> Offre {{ $offre->id }}
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal-{{ $offre->id }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" action="/reclamation" method="POST">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                        <input type="text" name="titre"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" >
                    </div>
                    
                    
                    <div class="col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                        <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>                    
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Envoyer
                </button>
            </form>
        </div>
    </div>
</div> 

                        
                    @endif
                       <form action="/gneratePdf/{{ $offre->id }}" method="post" class="w-2/4">
                        @csrf
                        
                          <button class="w-full rounded-full bg-blue-600 dark:bg-blue-800 text-white dark:text-white  font-bold hover:bg-blue-800 dark:hover:bg-blue-900  px-4  py-2" type="submit">
                            Facture
                        </button>
                    </form>
                   







             
                  
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

