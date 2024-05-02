<x-app>
  
       
 
<main>
    
@if (Auth()->User()->role == 'Client')
<x-clientBar>
</x-clientBar>
    
@else
<x-freelancerBar>
</x-freelancerBar>
    
@endif

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
      
   
      <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
       
      
        
         <div class=" rounded-2xl bg-gray-200   ">
           <div class="rounded-2xl bg-gradient-to-br from-teal-400 to-sky-700 p-2 flex justify-between items-center ">
                <h1 class="font-bold  text-3xl text-white px-2 py-4 ">Editez votre profile</h1>
                 @if(session('message'))
                <div class="success bg-green-800 py-2 px-4 text-center  w-1/4 rounded-2xl">
                 
    <h6 class="font-bold text-gray-700">
        {{ session('message') }}
    </h6>

                </div>
                @endif
            </div>

            <div class="my-6">
                <form class="mx-4" method="post" action="editProfile/{{ Auth()->User()->slug}}">
                  @csrf
                  @method('PUT')

    <div class="border-b border-gray-900/10 pb-12">
   


      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        
        <div class="sm:col-span-2">
          <label class="block text-sm font-medium leading-6 text-gray-900">Prenom</label>
          <div class="mt-2">
            <input type="text" name="prenom" value="{{ Auth()->User()->prenom}}"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
           <div class="sm:col-span-2">
          <label class="block text-sm font-medium leading-6 text-gray-900">Nom</label>
          <div class="mt-2">
            <input type="text" name="nom" value="{{ Auth()->User()->nom}}"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

      

        <div class="sm:col-span-2">
          <label  class="block text-sm font-medium leading-6 text-gray-900">Email</label>
          <div class="mt-2">
            <input readonly  name="email" type="email" value="{{ Auth()->User()->email}}"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
          <div class="sm:col-span-2">
          <label class="block text-sm font-medium leading-6 text-gray-900">Telephone</label>
          <div class="mt-2">
            <input  type="text" name="tel" value="{{ Auth()->User()->tel}}"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
          <div class="sm:col-span-2">
          <label  class="block text-sm font-medium leading-6 text-gray-900">Role</label>
          <div class="mt-2">
            <select name="role" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300  focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="{{ Auth()->User()->role}}">{{ Auth()->User()->role}}</option>
               
            </select>
          </div>
        </div>

        

        
        <div class="sm:col-span-2">
          <label  class="block text-sm font-medium leading-6 text-gray-900">sexe</label>
          <div class="mt-2">
            <select name="sexe" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300  focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="{{ Auth()->User()->sexe}}">{{ Auth()->User()->sexe}}</option>
               
            </select>
          </div>
        </div>

        <div class="sm:col-span-2">
          <label class="block text-sm font-medium leading-6 text-gray-900">Ville</label>
          <div class="mt-2">
            <select  name="ville_id"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <option value="{{Auth()->user()->ville->id}}">{{Auth()->user()->ville->ville}}</option>
          </select>
          </div>
        </div>
        <div class="sm:col-span-2">
          <label class="block text-sm font-medium leading-6 text-gray-900">Adresse</label>
          <div class="mt-2">
            <input type="text" name="adresse" value="{{Auth()->user()->adresse}}"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        
      
        

      

       
      

       

       
        
      </div>
         
    </div>
  

  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6 p-4">
          <button type="submit" class="block w-full text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Enregistrer</button>
<button type="button" class="block w-full text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Annuler</button>
  </div>
</form>
            </div>

            
            
            
         </div>
      </div>
     
</div>
</div>

</main>
</x-app>



