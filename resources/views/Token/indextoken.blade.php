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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter&amp;display=swap" rel="stylesheet"/>
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
  <div class="flex flex-row py-2">
            <div class="ms-3 me-1">Kiki | </div>
            <a class="cursor-pointer text-red-500" data-bs-toggle="modal" data-bs-target="#logoutModal"><b>Keluar</b></a>
        </div>
        <!-- Modal Logout-->
        <div class="modal" id="logoutModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body">
                    <h1 class="font-bold text-black text-xl mb-10">Yakin ingin keluar?</h1>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <a href="/"><button type="button" class="btn btn-secondary">Ya</button></a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                </div>
                </div>
            </div>
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
    <a href="/dashboard"><button type="button" class="btn btn-primary bg-green w-full">
      Kirim
     </button></a>
    </form>
   </section>
  </main>
 </body>
</html>
