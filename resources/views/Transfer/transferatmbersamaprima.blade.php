<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Bank Bantul Transfer
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="images/favicon.png" rel="icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter&amp;display=swap" rel="stylesheet"/>
  <style>
   /* Custom scrollbar for left menu if needed */
    /* Hide default radio button */
    input[type="radio"] {
      accent-color: #000;
    }
  </style>
 </head>
 <body class="bg-white font-sans text-black">
  <!-- Header -->
  <header class="w-full">
   <div class="w-full h-24 flex justify-end items-center px-4 sm:px-6 md:px-10" style="background: linear-gradient(90deg, #1a237e 0%, #7986cb 50%, #e8eaf6 100%)">
    <img alt="" class="h-16 object-contain" height="70" src="images/logo_bb.png" width="180"/>
   </div>
  </header>
  <!-- User info line -->
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
  <nav class="bg-[#00a1ff] text-white text-sm font-semibold px-4 sm:px-6 md:px-10">
   <ul class="flex flex-wrap gap-2 sm:gap-4">
    <li>
     <a class="block py-2 px-3 hover:bg-[#0099e6]" href="#">
      Awal
     </a>
    </li>
    <li>
     <a class="block py-2 px-3 hover:bg-[#0099e6]" href="#">
      Informasi Rekening
     </a>
    </li>
    <li>
     <a class="block py-2 px-3 bg-[#0099e6] hover:bg-[#0099e6]" href="#">
      Transfer
     </a>
    </li>
    <li>
     <a class="block py-2 px-3 hover:bg-[#0099e6]" href="#">
      Transaksi Bulk
     </a>
    </li>
    <li>
     <a class="block py-2 px-3 hover:bg-[#0099e6]" href="#">
      Pembayaran
     </a>
    </li>
    <li>
     <a class="block py-2 px-3 hover:bg-[#0099e6]" href="#">
      Pembelian
     </a>
    </li>
    <li>
     <a class="block py-2 px-3 hover:bg-[#0099e6]" href="#">
      Data saya
     </a>
    </li>
    <li>
     <a class="block py-2 px-3 hover:bg-[#0099e6]" href="#">
      Informasi
     </a>
    </li>
    <li>
     <a class="block py-2 px-3 hover:bg-[#0099e6]" href="#">
      Aktivitas Saya
     </a>
    </li>
   </ul>
  </nav>
  <main class="flex flex-col md:flex-row px-4 sm:px-6 md:px-10 py-4 gap-6">
   <!-- Left menu -->
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
   <!-- Main content -->
   <section class="flex-1 border border-gray-300">
    <!-- Breadcrumb -->
    <div class="flex items-center border-b border-gray-300 px-4 py-2 text-sm font-bold">
     <span>
      Awal
     </span>
     <i class="fas fa-chevron-right mx-2">
     </i>
     <span>
      Transfer
     </span>
     <i class="fas fa-chevron-right mx-2">
     </i>
     <span>
      Transfer
     </span>
     <i class="fas fa-chevron-right mx-2">
     </i>
     <span>
      Transfer ATM Bersama atau Prima
     </span>
    </div>
    <!-- Form content -->
    <form class="p-4 text-sm">
     <!-- Rekening Sumber -->
     <div class="mb-3 flex items-center space-x-2">
      <label class="font-bold w-36" for="rekeningSumber">
       Rekening Sumber
      </label>
      <select class="border border-gray-400 rounded px-1 py-0.5 w-60" id="rekeningSumber" name="rekeningSumber">
       <option>
        <option value="004251000002">004251000002 TABUNGAN ANTAR BANK IDR</option>
       </option>
      </select>
     </div>
     <!-- Data Penerima -->
     <div class="mb-4 bg-gray-200 px-2 py-1 font-bold border border-gray-300">
      Data Penerima
     </div>
     <div class="mb-6 grid grid-cols-1 sm:grid-cols-[auto_1fr] gap-2 items-center">
      <label class="font-bold col-span-full mb-1">
       Rekening tujuan
      </label>
      <div class="flex items-center gap-2">
       <input checked="" class="w-4 h-4" id="daftarPenerima" name="rekeningTujuan" type="radio" value="daftarPenerima"/>
       <label class="text-sm cursor-pointer" for="daftarPenerima">
        Daftar Penerima
       </label>
      </div>
      <select aria-label="Daftar Penerima" class="border border-gray-400 rounded px-2 py-1 w-full max-w-xs">
       <option>
        Silahkan pilih satu
       </option>
      </select>
      <div class="flex items-center gap-2">
       <input class="w-4 h-4" id="rekeningLain" name="rekeningTujuan" type="radio" value="rekeningLain"/>
       <label class="text-sm cursor-pointer" for="rekeningLain">
        Rekening Lain
       </label>
      </div>
      <input aria-label="Rekening Lain" class="border border-gray-400 rounded px-2 py-1 w-full max-w-xs" type="text"/>
     </div>
     <!-- Detil Trasnfer -->
     <div class="mb-4 bg-gray-200 px-2 py-1 font-bold border border-gray-300">
      Detil Trasnfer
     </div>
     <div class="mb-3 grid grid-cols-1 sm:grid-cols-[auto_1fr] gap-2 items-center">
      <label class="font-bold">
       Jumlah
      </label>
      <div class="flex items-center gap-2">
       <span class="text-xs font-normal">
        IDR
       </span>
       <input aria-label="Jumlah" class="border border-gray-400 rounded px-2 py-1 w-32" type="text"/>
      </div>
     </div>
     <div class="mb-3 grid grid-cols-1 sm:grid-cols-[auto_1fr] gap-2 items-center">
      <label class="font-bold">
       Keterangan
      </label>
      <input aria-label="Keterangan" class="border border-gray-400 rounded px-2 py-1 w-full max-w-xl" type="text"/>
     </div>
     <div class="mb-6 grid grid-cols-1 sm:grid-cols-[auto_1fr] gap-2 items-center">
      <label class="font-bold">
       Email Penerima
      </label>
      <input aria-label="Email Penerima" class="border border-gray-400 rounded px-2 py-1 w-full max-w-xl" type="email"/>
     </div>
     <!-- Tanggal pemrosesan -->
     <div class="mb-4 bg-gray-200 px-2 py-1 font-bold border border-gray-300">
      Tanggal pemrosesan
     </div>
     <div class="mb-6 grid grid-cols-1 sm:grid-cols-[auto_1fr] gap-2 items-center">
      <label class="font-bold">
       Waktu Proses Transaksi
      </label>
      <select aria-label="Waktu Proses Transaksi" class="border border-gray-400 rounded px-2 py-1 w-40">
       <option>
        Segera
       </option>
      </select>
     </div>
     <!-- Footer notes -->
     <div class="text-xs text-gray-400 space-y-1 max-w-md">
      <p>
       ● Minimal transaksi IDR 1,00 per transaksi
      </p>
      <p>
       ● Limit Transaksi IDR 25.000.000.000,00 per transaksi
      </p>
      <p>
       ● Limit Transaksi IDR 150.000.000.000,00 per hari
      </p>
      <p>
       ● Biaya Transfer IDR 0,00 per transaksi
      </p>
     </div>
    </form>
   </section>
  </main>
 </body>
</html>
