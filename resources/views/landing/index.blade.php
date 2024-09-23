<x-landing-layout>
  <!-- Hero Section -->
  <div class="relative flex justify-center items-center h-screen bg-black">
    <img src="{{ asset('asset/masjid.png') }}" alt="Masjid" class="absolute inset-0 w-full h-full object-cover brightness-50">
    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-gray-900 opacity-75"></div>
    <div class="relative z-10 text-center">
      <h1 class="text-white text-5xl lg:text-6xl font-semibold animate-fade-in-up">Masjid Raya Sheikh Zayed</h1>
      <p class="text-white mt-4 max-w-2xl mx-auto">Masjid Raya Sheikh Zayed adalah simbol spiritual dan keagungan arsitektur modern di Kota Suci. Sebuah pusat ibadah dan refleksi bagi umat Islam dari seluruh penjuru dunia.</p>
    </div>
  </div>

  <!-- Laporan Keuangan Section -->
  <div class="w-full p-8 bg-gray-50">
    <h1 class="text-4xl font-bold text-center mb-12">Laporan Keuangan Masjid</h1>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      <!-- Pemasukan -->
      <div class="p-8 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">Total Pemasukan</h2>
        <p class="text-4xl font-bold text-green-600">Rp. {{ $pemasukan->sum('nominal') }}</p>
        <table class="mt-8 w-full table-auto border-collapse">
          <thead class="bg-green-500 text-white">
            <tr>
              <th class="px-4 py-2">No</th>
              <th class="px-4 py-2">Tanggal</th>
              <th class="px-4 py-2">Nominal</th>
            </tr>
          </thead>
          <tbody class="bg-gray-100">
            @foreach ($pemasukan as $d)
            <tr class="border-b">
              <td class="px-4 py-2">{{ $loop->iteration }}</td>
              <td class="px-4 py-2">{{ $d->created_at }}</td>
              <td class="px-4 py-2">Rp. {{ number_format($d->nominal, 0, ',', '.') }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <!-- Pengeluaran -->
      <div class="p-8 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">Total Pengeluaran</h2>
        <p class="text-4xl font-bold text-red-600">Rp. {{ $pengeluaran->sum('nominal') }}</p>
        <table class="mt-8 w-full table-auto border-collapse">
          <thead class="bg-red-500 text-white">
            <tr>
              <th class="px-4 py-2">No</th>
              <th class="px-4 py-2">Tanggal</th>
              <th class="px-4 py-2">Nominal</th>
            </tr>
          </thead>
          <tbody class="bg-gray-100">
            @foreach ($pengeluaran as $d)
            <tr class="border-b">
              <td class="px-4 py-2">{{ $loop->iteration }}</td>
              <td class="px-4 py-2">{{ $d->created_at }}</td>
              <td class="px-4 py-2">Rp. {{ number_format($d->nominal, 0, ',', '.') }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Lokasi Masjid Section -->
  <div class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-extrabold text-center text-gray-900 mb-8">Lokasi Masjid Raya Sheikh Zayed</h2>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
        <!-- Teks Lokasi -->
        <div>
          <h3 class="text-2xl font-semibold text-gray-800 mb-4">Alamat Masjid</h3>
          <p class="text-lg text-gray-600 mb-6">Jl. Masjid Raya No.10, Kelurahan Islami, Kota Suci, Provinsi Harmoni, Indonesia</p>
          <p class="text-lg text-gray-600 mb-4">Masjid Raya Sheikh Zayed terletak di jantung Kota Suci, dengan akses mudah dari berbagai penjuru. Area ini menawarkan ketenangan dan lingkungan yang mendukung spiritualitas pengunjung.</p>
          <a href="https://maps.app.goo.gl/vzzK8VtmuYrPD617A" target="_blank" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-md shadow hover:bg-blue-700">Lihat di Google Maps</a>
        </div>
        
        <!-- Peta Lokasi -->
        <div class="w-full h-64 lg:h-96 bg-gray-200 rounded-lg overflow-hidden shadow-lg">
          <iframe 
            class="w-full h-full"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.185632525305!2d110.82413807404573!3d-7.554727774594625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a17dac308ebbf%3A0xa8c652329428591d!2sSheikh%20Zayed%20Great%20Mosque%20Surakarta!5e0!3m2!1sen!2sid!4v1727063672421!5m2!1sen!2sid" 
            frameborder="0" 
            allowfullscreen="" 
            aria-hidden="false" 
            tabindex="0">
          </iframe>
        </div>
      </div>
    </div>
  </div>

  <!-- Jadwal Sholat Section -->
  <div class="bg-white py-8 px-6 shadow-lg rounded-lg text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">Jadwal Sholat</h2>
    <div class="grid grid-cols-5 gap-4 text-center">
      <div class="p-4 bg-gray-100 rounded-md">
        <h3 class="text-lg font-semibold text-gray-700">Subuh</h3>
        <p class="text-2xl font-bold text-gray-900">04:30 AM</p>
      </div>
      <div class="p-4 bg-gray-100 rounded-md">
        <h3 class="text-lg font-semibold text-gray-700">Dzuhur</h3>
        <p class="text-2xl font-bold text-gray-900">12:15 PM</p>
      </div>
      <div class="p-4 bg-gray-100 rounded-md">
        <h3 class="text-lg font-semibold text-gray-700">Ashar</h3>
        <p class="text-2xl font-bold text-gray-900">15:30 PM</p>
      </div>
      <div class="p-4 bg-gray-100 rounded-md">
        <h3 class="text-lg font-semibold text-gray-700">Maghrib</h3>
        <p class="text-2xl font-bold text-gray-900">18:05 PM</p>
      </div>
      <div class="p-4 bg-gray-100 rounded-md">
        <h3 class="text-lg font-semibold text-gray-700">Isya</h3>
        <p class="text-2xl font-bold text-gray-900">19:15 PM</p>
      </div>
    </div>
  </div>

  <!-- Program Kegiatan Masjid Section -->
  <div class="bg-white py-8 px-6 mt-8">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Program Kegiatan Masjid</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="bg-green-100 p-6 rounded-lg text-center shadow-md">
        <h3 class="text-xl font-semibold text-green-800">Kajian Rutin</h3>
        <p class="mt-4 text-gray-700">Setiap Jumat, pukul 17.00 WIB</p>
      </div>
      <div class="bg-blue-100 p-6 rounded-lg text-center shadow-md">
        <h3 class="text-xl font-semibold text-blue-800">Pengajian Bulanan</h3>
        <p class="mt-4 text-gray-700">Setiap bulan pertama, pukul 09.00 WIB</p>
      </div>
      <div class="bg-yellow-100 p-6 rounded-lg text-center shadow-md">
        <h3 class="text-xl font-semibold text-yellow-800">Bakti Sosial</h3>
        <p class="mt-4 text-gray-700">Setiap tiga bulan, tanggal akan diumumkan</p>
      </div>
    </div>
  </div>

  <!-- Testimoni Jamaah Section -->
  <div class="bg-gray-50 py-8 px-6 mt-8">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Testimoni Jamaah</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="bg-white p-4 rounded-lg shadow-md">
        <p class="text-gray-600">"Masjid ini memberikan ketenangan dan kedamaian setiap kali saya beribadah di sini."</p>
        <p class="mt-2 text-sm text-gray-500">- Ahmad</p>
      </div>
      <div class="bg-white p-4 rounded-lg shadow-md">
        <p class="text-gray-600">"Lingkungan yang sangat mendukung dan kegiatan yang bermanfaat bagi jamaah."</p>
        <p class="mt-2 text-sm text-gray-500">- Fatima</p>
      </div>
    </div>
  </div>

    <!-- Footer -->
  <footer class="bg-gray-800 py-6">
    <div class="max-w-7xl mx-auto text-center">
      <p class="text-white">&copy; 2024 Masjid Raya Sheikh Zayed. All rights reserved.</p>
    </div>
  </footer>

  <!-- Animation CSS -->
  <style>
    @keyframes fade-in-up {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fade-in-up {
      animation: fade-in-up 0.8s ease-out;
    }
  </style>
</x-landing-layout>
