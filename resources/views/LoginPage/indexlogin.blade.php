<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   CMS Bank Bantul
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="images/favicon.png" rel="icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter&amp;display=swap" rel="stylesheet"/>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
 </head>
 <body class="bg-white m-0 p-0">
  <header class="flex justify-between items-center px-6 py-4" style="background: linear-gradient(90deg, #1a3db8 0%, #a3a9e0 100%);">
   <h1 class="text-white font-bold text-xl">
    Login Page
   </h1>
   <img alt="" class="h-12 object-contain" height="50" src="images/logo_bb.png" width="150"/>
  </header>
  <div class="h-3 bg-gray-200">
  </div>
  <main class="flex justify-center mt-16 px-4">
   <div class="bg-gray-200 rounded-lg p-6 flex flex-col sm:flex-row items-center max-w-3xl w-full">
    <img alt="" class="mb-6 sm:mb-0 sm:mr-8" height="120" src="images/logo.png" width="150"/>
    <form class="w-full max-w-xs">
     <label class="block text-xs mb-1 font-semibold" for="idPerusahaan">
      ID Perusahaan
     </label>
     <input class="w-full mb-3 px-2 py-1 rounded text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-600" id="idPerusahaan" placeholder="ID Perusahaan" type="text"/>
     <label class="block text-xs mb-1 font-semibold" for="userId">
      User ID
     </label>
     <input class="w-full mb-3 px-2 py-1 rounded text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-600" id="userId" placeholder="User ID" type="text"/>
     <label class="block text-xs mb-1 font-semibold" for="password">
      Password
     </label>
     <input class="w-full mb-1 px-2 py-1 rounded text-xs border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-600" id="password" placeholder="Password" type="password"/>
     <div class="mb-3 text-xs">
      <i class="fa fa-eye"></i> Show
     </div>
     <a href="/dashboard"><button type="button" class="btn btn-primary w-full">Login</button></a>
    </form>
   </div>
  </main>
 </body>
</html>
