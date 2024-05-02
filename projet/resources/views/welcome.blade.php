<x-app>

     <header class="">
    <nav class="z-10 w-full absolute astro-UY3JLCBK">
      <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
        <div class="flex flex-wrap items-center justify-between py-2 gap-6 md:py-6 md:gap-0 relative astro-UY3JLCBK">
          <input aria-hidden="true" type="checkbox" name="toggle_nav" id="toggle_nav"
            class="hidden peer astro-UY3JLCBK">
          <div class="relative z-20 w-full flex justify-between lg:w-max md:px-0 astro-UY3JLCBK">
            <a href="#" aria-label="logo" class="flex space-x-2 items-center astro-UY3JLCBK">
              <div aria-hidden="true" class="flex space-x-1 astro-UY3JLCBK">
                 <img class="w-3/5" src="./assets/img/1.png" alt="ddzz">
              </div>
             
            </a>

            <div class="relative flex items-center lg:hidden max-h-10 astro-UY3JLCBK">
              <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger"
                class="relative  p-6 -mr-6 astro-UY3JLCBK">
                <div aria-hidden="true" id="line"
                  class="m-auto h-0.5 w-5 rounded bg-sky-900 dark:bg-gray-300 transition duration-300 astro-UY3JLCBK">
                </div>
                <div aria-hidden="true" id="line2"
                  class="m-auto mt-2 h-0.5 w-5 rounded bg-sky-900 dark:bg-gray-300 transition duration-300 astro-UY3JLCBK">
                </div>
              </label>
            </div>
          </div>
          <div aria-hidden="true"
            class="fixed z-10 inset-0 h-screen w-screen bg-white/70 backdrop-blur-2xl origin-bottom scale-y-0 transition duration-500 peer-checked:origin-top peer-checked:scale-y-100 lg:hidden dark:bg-gray-900/70 astro-UY3JLCBK">
          </div>
          <div class="flex-col z-20 flex-wrap gap-6 p-8 rounded-3xl border border-gray-100 bg-white shadow-2xl shadow-gray-600/10 justify-end w-full invisible opacity-0 translate-y-1  absolute top-full left-0 transition-all duration-300 scale-95 origin-top 
                            lg:relative lg:scale-100 lg:peer-checked:translate-y-0 lg:translate-y-0 lg:flex lg:flex-row lg:items-center lg:gap-0 lg:p-0 lg:bg-transparent lg:w-7/12 lg:visible lg:opacity-100 lg:border-none
                            peer-checked:scale-100 peer-checked:opacity-100 peer-checked:visible lg:shadow-none 
                            dark:shadow-none dark:bg-gray-800 dark:border-gray-700 astro-UY3JLCBK">

            <div class="text-gray-600 dark:text-gray-300 lg:pr-4 lg:w-auto w-full lg:pt-0 astro-UY3JLCBK">
              <ul class="tracking-wide font-medium lg:text-sm flex-col flex lg:flex-row gap-6 lg:gap-0 astro-UY3JLCBK">
                <li class="astro-UY3JLCBK">
                  <a href="#" class="block md:px-4 transition hover:text-primary astro-UY3JLCBK">
                    <span class="astro-UY3JLCBK">Accueil</span>
                  </a>
                </li>
                <li class="astro-UY3JLCBK">
                  <a href="#" class="block md:px-4 transition hover:text-primary astro-UY3JLCBK">
                    <span class="astro-UY3JLCBK">Services</span>
                  </a>
                </li>
                <li class="astro-UY3JLCBK">
                  <a href="#" class="block md:px-4 transition hover:text-primary astro-UY3JLCBK">
                    <span class="astro-UY3JLCBK">Freelancer</span>
                  </a>
                </li>
                <li class="astro-UY3JLCBK">
                  <a href="#" class="block md:px-4 transition hover:text-primary astro-UY3JLCBK">
                    <span class="astro-UY3JLCBK">Pricing</span>
                  </a>
                </li>
                <li class="astro-UY3JLCBK">
                  <a href="#" class="block md:px-4 transition hover:text-primary astro-UY3JLCBK">
                    <span class="astro-UY3JLCBK">Blog</span>
                  </a>
                </li>
              </ul>
            </div>

          @if (!Auth()->user())
            <div class="mt-12 lg:mt-0 flex justify-center items-center gap-2 ">
              <a href="login"
                class="relative flex h-9 w-full items-center justify-center px-4 before:absolute before:inset-0 before:rounded-full before:bg-blue-600 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max astro-UY3JLCBK">
                <span class="relative text-sm font-semibold text-white astro-UY3JLCBK">Login</span>
              </a>
               <a href="/register"
                class="relative flex h-9 w-full items-center justify-center px-4 before:absolute before:inset-0 before:rounded-full before:bg-blue-600 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max astro-UY3JLCBK">
                <span class="relative text-sm font-semibold text-white astro-UY3JLCBK">Get Started</span>
              </a>
            </div>
              
          @else
          <a href="/editProfile"
                class="relative flex h-9 w-full items-center justify-center px-4 before:absolute before:inset-0 before:rounded-full before:bg-blue-600 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max astro-UY3JLCBK">
                <span class="relative text-sm font-semibold text-white astro-UY3JLCBK">Profile</span>
              </a>
              
          @endif
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main class="space-y-40 mb-40">
    <div class="relative">
      <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
        <div class="blur-[106px] h-56 bg-gradient-to-br from-primary to-purple-400 dark:from-blue-700"></div>
        <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300 dark:to-indigo-600"></div>
      </div>
      <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
        <div class="relative pt-36 ml-auto">
          <div class="lg:w-2/3 text-center mx-auto">
            <h1 id='titre' class="text-gray-900 dark:text-white font-bold text-4xl md:text-5xl xl:text-6xl">La Clé pour des Solutions Rapides et Efficaces</h1>
            <p class="mt-8 text-gray-700 dark:text-gray-300">Explorez Khadamati pour accéder à une variété de services sur demande, et profitez de solutions rapides et fiables, assurées par notre réseau de professionnels qualifiés, pour simplifier votre quotidien.</p>
            <div class="mt-12 flex flex-wrap justify-center gap-y-4 gap-x-6">
                <div class="group w-72 md:w-80 lg:w-96">
 
      <div class="relative flex items-center">
            <div class="group w-72 md:w-80 lg:w-96">
    
  
    </div>
      
    </div>
              
            </div>
            <div class="hidden py-8 mt-16 border-y border-gray-100 dark:border-gray-800 sm:flex justify-between">
              <div class="text-left">
                <h6 class="text-lg font-semibold text-gray-700 dark:text-white">Des solutions à portée de clic pour simplifier votre vie.</h6>
               
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <div>
      <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
        <div class="md:w-2/3 lg:w-1/2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
            class="w-6 h-6 text-secondary">
            <path fill-rule="evenodd"
              d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
              clip-rule="evenodd"></path>
          </svg>

          <h2 class="my-8 text-2xl font-bold text-gray-700 dark:text-white md:text-4xl">
           Bienvenue sur Khadamati - Votre Plateforme de Services en Ligne au Maroc
          </h2>
          <p class="text-gray-600 dark:text-gray-300">Découvrez une nouvelle façon de trouver et de fournir des services au Maroc avec Khadamati. Que vous ayez besoin d'un plombier pour réparer une fuite, d'un électricien pour résoudre un problème de câblage ou d'un développeur web pour créer votre site Internet, Khadamati est là pour vous aider..</p>
        </div>
        <div
          class="mt-16 grid divide-x divide-y divide-gray-100 dark:divide-gray-700 overflow-hidden rounded-3xl border border-gray-100 text-gray-600 dark:border-gray-700 sm:grid-cols-2 lg:grid-cols-4 lg:divide-y-0 xl:grid-cols-4">
          <div
            class="group relative bg-white dark:bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
            <div class="relative space-y-8 py-12 p-8">
              

              <div class="space-y-2">
                <h5 class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary">
                  Plombier
                </h5>
               
              </div>
              <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                <span class="text-sm">demander</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                  <path fill-rule="evenodd"
                    d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                    clip-rule="evenodd"></path>
                </svg>
              </a>
            </div>
          </div>
          <div
            class="group relative bg-white dark:bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
            <div class="relative space-y-8 py-12 p-8">
             

              <div class="space-y-2">
                <h5 class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary">
                  Maçon
                </h5>
               
              </div>
              <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                <span class="text-sm">demander</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                  <path fill-rule="evenodd"
                    d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                    clip-rule="evenodd"></path>
                </svg>
              </a>
            </div>
          </div>
          <div
            class="group relative bg-white dark:bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
            <div class="relative space-y-8 py-12 p-8">
             

              <div class="space-y-2">
                <h5 class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary">
                 Electricien
                </h5>
             
              </div>
              
            </div>
          </div>
          <div
            class="group relative bg-gray-50 dark:bg-gray-900 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
            <div
              class="relative space-y-8 py-12 p-8 transition duration-300 group-hover:bg-white dark:group-hover:bg-gray-800">
             

              <div class="space-y-2">
                <h5 class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary">
                  Jardinier
                </h5>
            
              </div>
              <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                <span class="text-sm">demander</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                  class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                  <path fill-rule="evenodd"
                    d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                    clip-rule="evenodd"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      
    </div>
    
    
    <div>
    
    </div>
  </main>
  <footer class="py-20 md:py-40">
    <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
      <div class="m-auto md:w-10/12 lg:w-8/12 xl:w-6/12">
        <div class="flex flex-wrap items-center justify-between md:flex-nowrap">
          <div
            class="flex w-full justify-center space-x-12 text-gray-600 dark:text-gray-300 sm:w-7/12 md:justify-start">
            <ul class="list-inside list-disc space-y-8">
              <li><a href="#" class="transition hover:text-primary">Home</a></li>

              <li><a href="#" class="transition hover:text-primary">About</a></li>
              <li><a href="#" class="transition hover:text-primary">Guide</a></li>
              <li><a href="#" class="transition hover:text-primary">Blocks</a></li>
              <li><a href="#" class="transition hover:text-primary">Contact</a></li>
              <li><a href="#" class="transition hover:text-primary">Terms of Use</a></li>
            </ul>

            <ul role="list" class="space-y-8">
              <li>
                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                    <path
                      d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z">
                    </path>
                  </svg>
                  <span>Github</span>
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                    <path
                      d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                    </path>
                  </svg>
                  <span>Twitter</span>
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                    <path
                      d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z">
                    </path>
                  </svg>
                  <span>YouTube</span>
                </a>
              </li>

              <li>
                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                    <path
                      d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                    </path>
                  </svg>
                  <span>Facebook</span>
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                    <path
                      d="M9.025 8c0 2.485-2.02 4.5-4.513 4.5A4.506 4.506 0 0 1 0 8c0-2.486 2.02-4.5 4.512-4.5A4.506 4.506 0 0 1 9.025 8zm4.95 0c0 2.34-1.01 4.236-2.256 4.236-1.246 0-2.256-1.897-2.256-4.236 0-2.34 1.01-4.236 2.256-4.236 1.246 0 2.256 1.897 2.256 4.236zM16 8c0 2.096-.355 3.795-.794 3.795-.438 0-.793-1.7-.793-3.795 0-2.096.355-3.795.794-3.795.438 0 .793 1.699.793 3.795z">
                    </path>
                  </svg>
                  <span>Medium</span>
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="5"
                    viewBox="0 0 16 16">
                    <path
                      d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z">
                    </path>
                  </svg>
                  <span>Pintrest</span>
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                  <img class="h-5 w-5" width="32" height="32"
                    src="https://c5.patreon.com/external/favicon/favicon.ico?v=69kMELnXkB" alt="patreon icon">
                  <span>Patreon</span>
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                    <path
                      d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                    </path>
                  </svg>
                  <span>Instagram</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="m-auto mt-16 w-10/12 space-y-6 text-center sm:mt-auto sm:w-5/12 sm:text-left">
            <span class="block text-gray-500 dark:text-gray-400">We change the way UI components librairies are
              used</span>

            <span class="block text-gray-500 dark:text-gray-400">Tailus Blocks &copy; <span id="year"></span></span>

            <span class="flex justify-between text-gray-600 dark:text-white">
              <a href="#" class="font-medium">Terms of Use </a>
              <a href="#" class="font-medium"> Privacy Policy</a>
            </span>

            <span class="block text-gray-500 dark:text-gray-400">Need help? <a href="#"
                class="font-semibold text-gray-600 dark:text-white"> Contact Us</a></span>
          </div>
        </div>
      </div>
    </div>
  </footer>
<script src="/./js/situation.js"></script>

</x-app>