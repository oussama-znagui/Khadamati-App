<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <title>Document</title>
</head>
<body>
    
    <main>
        <div class="w-3/5 m-auto h-screen my-4 bg-gray-300">
        <div class="flex justify-between items-center w-3/4 m-auto py-5">
              <div>
                <h1 class="text-4xl font-black ">DEVIS</h1>

            </div>
                <div class=" ">
                <img class="w-3/4 m-auto" src="./assets/img/logo.png" alt="">
                <h1 class="font-bold text-gray-700">KHADAMATI</h1>
            </div>
          
        </div>
        <div class="flex justify-between r w-3/4 m-auto py-5 ">
              <div >
          
               <p class="text-gray-800 "><span>Data :</span> {{ $date }}<br><span>Valable jusqu'au :</span> 25/02/2024<br><span>Client ID :</span> {{ $client->id }}</p>

            </div>
                <div  class="text-right">
             
               <p class="text-gray-800 ">06 69 66 62 06 <br> 05 24 23 33 44 <br> contact@khadamati.ma <br> www.khadamati.ma</p>
            </div>
          
        </div>
         <div class=" py-5  w-3/4 m-auto py-5 my-5">
              <div >
                <h1 class="font-bold text-gray-800 text-2xl">Client :</h1>
               <p class="text-gray-800 "> {{ $client->prenom . ' ' . $client->nom }} <br>{{$client->email}}<br><span> {{$client->tel}}</p>

            </div>
            
          
        </div>

        

<div class="relative overflow-x-auto w-4/5 m-auto">
    <table class="border-2 border-solid border-gray-500 rounded-xl w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Bricole
                </th>
                <th scope="col" class="px-6 py-3">
                    Joures estimés
                </th>
                <th scope="col" class="px-6 py-3">
                    profession
                </th>
                <th scope="col" class="px-6 py-3">
                   PRix
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$bricole->titre}}
                </th>
                <td class="px-6 py-4">
                    {{$bricole->nde}}
                </td>
                <td class="px-6 py-4">
                    {{$bricole->profession->profession}}
                </td>
                <td class="px-6 py-4">
                    {{ $offre->prix }}
                </td>
            </tr>
            
        </tbody>
    </table>
</div>

        
<div>

</div>
        </div>
    </main>

    
</body>
</html>