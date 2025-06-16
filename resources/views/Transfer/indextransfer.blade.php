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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter&amp;display=swap" rel="stylesheet"/>
  <style>
   /* Custom font family to match the screenshot's font style */
  body {
    font-family: Arial, sans-serif;
  }
  </style>
 </head>
 <body class="bg-white">
  <!-- Header with gradient and logo -->
  <header class="w-full">
   <div class="w-full h-24 bg-gradient-to-r from-[#2a4db7] via-[#5a7ed7] to-white flex justify-end items-center pr-6">
    <img alt="" class="h-14 object-contain" height="60" src="images/logo_bb.png" width="180"/>
   </div>
  </header>
  <!-- User greeting and logout -->
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
  
  
  <!-- Navigation bar -->
  <nav class="bg-[#00bfff]">
        <ul class="flex flex-wrap text-xs sm:text-sm font-semibold text-white px-4">
            <li class="py-2 px-3 cursor-pointer hover:bg-[#0099e6]">
                <a href="/dashboard">Awal</a>
            </li>
            <li class="py-2 px-3 cursor-pointer hover:bg-[#0099e6]">
                <a href="/inforekening">Informasi Rekening</a>
            </li>
            <li class="py-2 px-3 cursor-pointer bg-[#0099e6] hover:bg-[#0099e6]">
                <a href="/transfer">Transfer</a>
            </li>
            <li class="py-2 px-3 cursor-pointer hover:bg-[#0099e6]">
                <a href="">Transaksi Bulk</a>
            </li>
            <li class="py-2 px-3 cursor-pointer hover:bg-[#0099e6]">
                <a href="/pembayarantagihan">Pembayaran</a>
            </li>
            <li class="py-2 px-3 cursor-pointer hover:bg-[#0099e6]">
                <a href="">Pembelian</a>
            </li>
            <li class="py-2 px-3 cursor-pointer hover:bg-[#0099e6]">
                <a href="">Data saya</a>
            </li>
            <li class="py-2 px-3 cursor-pointer hover:bg-[#0099e6]">
                <a href="">Informasi</a>
            </li>
            <li class="py-2 px-3 cursor-pointer hover:bg-[#0099e6]">
                <a href="">Aktivitas Saya</a>
            </li>
        </ul>
    </nav>
  <main class="flex flex-col md:flex-row px-4 py-4 gap-4">
   <!-- Left sidebar -->
   <aside class="bg-gray-200 w-full md:w-60 p-3">
                <ul class="list-disc list-inside text-xs sm:text-sm font-bold space-y-1">
                    <li class="pl-2 py-1 bg-[#929397] rounded-md">
                        <a href="">Transfer</a>
                    </li>
                    <li class="pl-2 py-1 ml-4 hover:bg-[#929397] rounded-md">
                        <a href="">Daftar Penerima</a>
                    </li>
                    <li class="pl-2 py-1 ml-4 hover:bg-[#929397] rounded-md">
                        <a href="">Rekening Sendiri</a>
                    </li>
                         <li class="pl-2 py-1 ml-4 hover:bg-[#929397] rounded-md">
                        <a href="/transferreklain">Rekening Lain</a>
                    </li>
                         <li class="pl-2 py-1 ml-4 hover:bg-[#929397] rounded-md">
                        <a href="/atmbersamaprima">Transfer ATM Bersama atau Prima</a>
                    </li>
                         <li class="pl-2 py-1 ml-4 hover:bg-[#929397] rounded-md">
                        <a href="/transfersknrtgs">SKN/RTGS</a>
                    </li>
                </ul>
            </aside>
   <!-- Right content area -->
   <section class="flex-1">
    <table class="w-full border border-gray-300 text-xs sm:text-sm">
     <tbody>
      <tr class="bg-gray-100 border-b border-gray-300">
       <th class="text-left font-bold p-2 border-r border-gray-300">
        Awal
       </th>
       <td class="p-2">
       </td>
      </tr>
      <tr class="border-b border-gray-300">
       <th class="text-left font-bold p-2 border-r border-gray-300">
        Waktu Setempat &amp; Tanggal
       </th>
       <td class="p-2 text-right">
       
       </td>
      </tr>
      <tr class="bg-gray-100 border-b border-gray-300">
       <th class="text-left font-bold p-2 border-r border-gray-300">
        Login Terakhir Anda
       </th>
       <td class="p-2 text-right">
       
       </td>
      </tr>
      <tr class="border-b border-gray-300">
       <th class="text-left font-bold p-2 border-r border-gray-300">
        Keterangan
       </th>
       <td class="p-2 text-right">
     
       </td>
      </tr>
      <tr class="bg-gray-100 border-b border-gray-300">
       <th class="text-left font-bold p-2 border-r border-gray-300">
        Tugas menunggu
       </th>
       <td class="p-2 text-right">
     
       </td>
      </tr>
      <tr>
       <th class="text-left font-bold p-2 border-r border-gray-300">
        Tugas ditolak
       </th>
       <td class="p-2 text-right">
       
       </td>
      </tr>
     </tbody>
    </table>
   </section>
  </main>
 </body>
</html>
