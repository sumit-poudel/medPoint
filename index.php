<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>  
    <style type="text/tailwindcss" >
     @theme {
  --color-med-lime: #28A745;
  --color-txt-ash: #666666;
  --color-bdr-ash: #CECECE;
  --color-med-drklime: #304D30;
}
    </style>
</head>
<body>
     <header class=" w-full py-2 flex items-center justify-around border-b-bdr-ash border-b-2 " >
        <img src="./public/med-logo.png" class="h-8" alt="medpoint logo"> 
      <section class="flex items-center rounded-md border-2 border-r-0 h-10 p-0.5 pl-2 border-bdr-ash overflow-visible " >
           <label for="search">Search |</label>
        <input type="text" id="search" placeholder="search" value="" class=" focus:outlime-0 pl-1 h-10 text-txt-ash" >
      <button type="search" class=" active:bg-med-drklime rounded-md w-10.75 h-10.75 flex justify-center items-center  bg-med-lime text-white font-extrabold  " >
          <img class="h-4 w-4 " src="./public/search.svg" alt="search">
        </button>
      </section>
        <section>
        <button onclick="window.location.href='/login' " type="login" class="flex items-center px-2 h-10 gap-1 border-2 rounded-md border-bdr-ash active:bg-txt-ash active:text-white " >
          login
          <img class="h-7 w-7" src="./public/login-svg.svg" alt="login">
        </button>
      </section>
    </header>
     <nav class="flex justify-around pl-5 h-10 items-center " >
      <button type="options" >pain relief</button>
      <button type="options" >cold and flu</button>
      <button type="options" >diabetes care</button>
      <button type="options" >digestive health</button>
    </nav>
    <main class=" flex h-40 justify-center items-center " >
                  <h3>
               to be continue...
</h3>
    </main>
    <footer class="bg-med-lime text-white">
      <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-5  gap-8 border-b " >
    
    
    <div>
      <h3 class="font-semibold  mb-3.5" >Contact</h3>
      <p class=" gap-2.5 mb-2">
         📍 Hakim-Chowk, Chitwan 
      </p>
      <p class="gap-2.5 mb-2">
         📧 sumitpoudel325@gmail.com
      </p>
         
    </div>

    
    <div>
      <h3 class="font-semibold  mb-3.5" >Quick Links</h3>
      <ul class="space-y-2">
        <li><a href="#" class="hover:underline">Home</a> </li>
        <li><a href="#" class="hover:underline">About</a> </li>
        <li><a href="#" class="hover:underline">Services</a> </li>
        <li><a href="#" class="hover:underline">Careers</a> </li>
        <li><a href="#" class="hover:underline">Contact</a> </li>
      </ul>

    </div>


    
    <div>
      <h3 class="font-semibold mt-0.5 mb-3.5" >Specialities</h3>
      <ul class="space-y-2">
        <li>Anesthesiology </li>
        <li>Psychiatry</a> </li>
        <li>General surgery </li>
        <li>Family medicine </li>
        <li>Pediatrics </li>
      </ul>

    </div>

    

    <div>
      <h3 class="font-semibold  mb-3.5" >Services</h3>
      <ul class="space-y-2">
        <li>Medical</li>
        <li>Operation </li>
        <li>Laboratory </li>
        <li>ICU</li>
        <li>Patient Ward</li>
      </ul>

    </div>

    
    <div>
    <h3 class="font-semibold  mb-3.5" >Social Media</h3>
      <div class="flex gap-4 text-2xl">
        <a href="#" class="hover:text-blue-400">🌐</a> 
       <a href="#" class="hover:text-pink-500">📸</a> 
        <a href="#" class="hover:text-blue-400"> 💼</a> 
       <a href="#" class="hover:text-red-600"> ▶</a> 
        </div>
     
      </div>
    </div>


      <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col md:flex-row justify-between text-gray-300 text-sm">
    <p>© 2023 HEALTHY. All rights reserved.</p>
    <div class="flex gap-6  mt-0">
        <a href="#" class="hover:underline">Terms and Conditions</a>
        <a href="#" class="hover:underline">Privacy Policy</a>
      </div>
      </div>
    </footer>
    <script src="index.js" >
    </script>
</body>
</html>
