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
    <nav aria-label="Breadcrumb" class="flex items-center border-b border-gray-300 text-sm font-semibold px-3 py-2 select-none">
     <ol class="inline-flex items-center space-x-2">
      <li class="flex items-center">
       <span>
        Awal
       </span>
       <svg aria-hidden="true" class="w-4 h-4 mx-2 text-black" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round">
        </path>
       </svg>
      </li>
      <li class="flex items-center">
       <span>
        Transfer
       </span>
       <svg aria-hidden="true" class="w-4 h-4 mx-2 text-black" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round">
        </path>
       </svg>
      </li>
      <li class="flex items-center">
       <span>
        Transfer
       </span>
       <svg aria-hidden="true" class="w-4 h-4 mx-2 text-black" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round">
        </path>
       </svg>
      </li>
      <li>
       <span class="font-bold">
        SKN / RTGS
       </span>
      </li>
     </ol>
    </nav>
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
     </div>
    <div class="mb-6 grid grid-cols-1 sm:grid-cols-[auto_1fr] gap-2 items-center">
        <label class="font-bold w-36" for="bankPenerima">
            Bank Penerima
        </label>
        <select class="border border-gray-400 rounded px-2 py-1 w-full max-w-xs" id="bankPenerima" name="bankPenerima">
       <option>
        <option value="1">Bank BPD DIY</option>
        <option value="2">Bank BRI</option>
        <option value="3">Bank BNI</option>
       </option>
      </select>
    </div>
    <div class="mb-6 grid grid-cols-1 sm:grid-cols-[auto_1fr] gap-2 items-center">
        <label class="font-bold">
            Nama Rekening Penerima
        </label>
         <input aria-label="Nama Rekening Penerima" class="border border-gray-400 rounded px-2 py-1 w-full max-w-xl" type="text"/>
    </div>
    <div class="mb-6 grid grid-cols-1 sm:grid-cols-[auto_1fr] gap-2 items-center">
        <label class="font-bold">
            Kewarganegaraan
        </label>
         <div class="flex items-center space-x-2">
        <input type="radio" id="indonesia" name="kewarganegaraan" value="indonesia" class="w-4 h-4" />
        <label for="indonesia" class="text-sm">Indonesia</label>
        <input type="radio" id="indonesia" name="kewarganegaraan" value="lainnya" class="w-4 h-4" />
        <label for="lainnya" class="text-sm">Lainnya*</label>
      </div>
    </div>
    <div class="mb-6 grid grid-cols-1 sm:grid-cols-[auto_1fr] gap-2 items-center">
        <label class="font-bold">
            Residen
        </label>
         <div class="flex items-center space-x-2">
        <input type="radio" id="indonesia" name="residen" value="penduduk" class="w-4 h-4" />
        <label for="penduduk" class="text-sm">Penduduk</label>
        <input type="radio" id="indonesia" name="residen" value="bukanpenduduk" class="w-4 h-4" />
        <label for="bukanpenduduk" class="text-sm">Bukan Penduduk*</label>
      </div>
    </div>
      <div class="mb-6 grid grid-cols-1 sm:grid-cols-[auto_1fr] gap-2 items-center">
        <label class="font-bold">
            Tipe Penerima
        </label>
         <div class="flex items-center space-x-2">
        <input type="radio" id="individual" name="tipePenerima" value="individual" class="w-4 h-4" />
        <label for="individual" class="text-sm">Individual</label>
        <input type="radio" id="company" name="tipePenerima" value="company" class="w-4 h-4" />
        <label for="company" class="text-sm">Company</label>
        <input type="radio" id="government" name="tipePenerima" value="government" class="w-4 h-4" />
        <label for="government" class="text-sm">Government**</label>
      </div>
    </div>
    <div class="mb-6 grid grid-cols-1 sm:grid-cols-[auto_1fr] gap-2 items-center">
        <label class="font-bold">Jenis Identitas</label>
        <select aria-label="Jenis Identitas" class="border border-gray-400 rounded px-2 py-1 w-40">
            <option value="ktp">KTP</option>
      </select>
    </div>
    <div class="mb-6 grid grid-cols-1 sm:grid-cols-[auto_1fr] gap-2 items-center">
        <label class="font-bold">
            No Identitas
        </label>
         <input aria-label="No Identitas" class="border border-gray-400 rounded px-2 py-1 w-full max-w-xl" type="text"/>
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
            Tipe Transfer
        </label>
         <div class="flex items-center space-x-2">
        <input type="radio" id="skn" name="tipeTransfer" value="skn" class="w-4 h-4" />
        <label for="skn" class="text-sm">SKN</label>
        <input type="radio" id="rtgs" name="tipeTransfer" value="rtgs" class="w-4 h-4" />
        <label for="rtgs" class="text-sm">RTGS</label>
      </div>
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
   </section>
  </main>
 </body>
</html>
