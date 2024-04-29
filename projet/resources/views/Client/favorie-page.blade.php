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
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 bg-gray-100">
     
    <div class="flex justify-between items-center mb-5">
        <h1 class="font-bold text-gray-700 text-2xl my-4">Favories</h1>
            @if(session('message'))
                <div class="success bg-green-800 py-2 px-4 text-center w-2/4 mx-auto rounded-2xl">
                 
    <h6 class="font-bold text-gray-700">
        {{ session('message') }}
    </h6>

                </div>
                @endif
        


    </div>
   
      <div  class="grid grid-cols-1 md:grid-cols-1 xl:grid-cols-2 gap-4 mb-4">
        @foreach ($favories as $favorie)
           <div class="px-4 bg-white border-solid border-2 border-gray-600  relative flex w-full  flex-col rounded-xl bg-transparent bg-clip-border text-gray-700 shadow-none">
  <div
    class=" relative flex items-center gap-4 pt-0 pb-8 mx-0 mt-4 overflow-hidden text-gray-700 bg-transparent shadow-none rounded-xl bg-clip-border">
    <img
      src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80"
      alt="Tania Andrew"
      class="relative inline-block h-[58px] w-[58px] !rounded-full  object-cover object-center" />
    <div class="flex w-full flex-col gap-0.5">
      <div class="flex items-center justify-between">
        <h5
          class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
          {{ $favorie->freelancer->user->prenom . ' ' . $favorie->freelancer->user->nom}}
        </h5>
        <div class="flex items-center gap-0 5">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            class="w-5 h-5 text-yellow-700">
            <path fill-rule="evenodd"
              d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
              clip-rule="evenodd"></path>
          </svg>
      
        </div>
      </div>
      <p class="block font-sans text-base antialiased font-light leading-relaxed text-blue-gray-900">
        {{ $favorie->freelancer->profession->profession }} @Khadamati
      </p>
    </div>
  </div>
  <div class="p-0 mb-6">
    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
      "I found solution to all my design needs from Creative Tim. I use
      them as a freelancer in my hobby projects for fun! And its really
      affordable, very humble guys !!!"
    </p>
  </div>
  <div class="flex justify-between items-center">
    <div>

    </div>
    <form action="/delete-favorie/{{ $favorie->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-800 px-4 py-2 rounded-full font-bold text-gray-50 mb-4">
            supprimer

        </button>
    </form>

  </div>
</div>
            
        @endforeach
        
    
      </div>
       

      
  
   </div>
</div>

</main>


</x-app>

