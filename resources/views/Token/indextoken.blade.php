<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Bank Bantul
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
    <link href="images/favicon.png" rel="icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Arial&display=swap');
  </style>
 </head>
 <body class="m-0 p-0 font-sans">
  <!-- Header with gradient and logo -->
  <header class="w-full h-24 bg-gradient-to-r from-[#4a6edb] via-[#7a8edb] to-[#dbe0f7] flex justify-end items-center pr-8">
   <img alt="" class="h-16 w-auto" height="70" src="images/logo_bb.png" width="180"/>
  </header>
  <!-- User bar -->
  <div class="w-full bg-[#f0f0f0] text-black text-base px-4 py-1">
   <span>
    Kiki
   </span>
   <span class="text-red-600">
    | Keluar
   </span>
  </div>
  <!-- Main content container -->
  <main class="w-full flex justify-center mt-8 px-4">
   <section class="bg-[#e6e6e6] rounded-lg w-full max-w-lg p-6" style="min-height: 220px">
    <!-- Info box -->
    <div class="bg-white rounded-md p-6 mb-4 max-w-md mx-auto" style="min-width: 320px">
     <dl class="text-base leading-7">
      <div class="flex justify-between mb-2">
       <dt>
        ID Perusahaan
       </dt>
       <dd class="font-mono">
        : 1234567890
       </dd>
      </div>
      <div class="flex justify-between mb-2">
       <dt>
        Nama Perusahaan
       </dt>
       <dd class="font-mono">
        : bankbantul
       </dd>
      </div>
      <div class="flex justify-between">
       <dt>
        ID pengguna
       </dt>
       <dd class="font-mono">
        : kiki
       </dd>
      </div>
     </dl>
    </div>
    <!-- Input box -->
    <form class="bg-white rounded-md p-4 max-w-md mx-auto flex flex-col items-center" style="min-width: 320px">
     <label class="text-xs font-bold mb-2 w-full text-left" for="mPassCode">
      Masukan mPassCode Anda
     </label>
     <input class="border border-gray-300 rounded px-2 py-1 w-40 mb-3" id="mPassCode" name="mPassCode" placeholder="mPassCode" type="text"/>
     <button class="bg-[#00ff00] text-black text-xs font-bold px-3 py-1 rounded" type="submit">
      Kirim
     </button>
    </form>
   </section>
  </main>
 </body>
</html>
