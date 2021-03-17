<x-template-layout>
    <h2 class="font-semiibold text-xl text-gray-800 leading-tight"></h2>
    <div class="rounded-tl-3xl bg-gradient-to-r from-red-500 to-orange-800 p-4 shadow text-2xl text-white">
      <h3 class="font-bold pl-2">{{$title}}</h3>
</div>
</h2>
<div>
    <div class="">
<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
  <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <!-- More items... -->
            <tr>
            <td class="px-6 py-4 whitespace-nowrap">1</td>
            <td class="px-6 py-4 whitespace-nowrap">Putu Kartini</td>
            <td class="px-6 py-4 whitespace-nowrap">Krama</td>
            <td class="px-6 py-4 whitespace-nowrap">Nyada</td>
            <td class="px-6 py-4 whitespace-nowrap">
              <a href="#" class="text-red">Edit</a> |
              <a href="#" class="text-orange">Hapus</a>
            </td>
            </tr>

            <tr>
              <td class="px-6 py-4 whitespace-nowrap">2</td>
              <td class="px-6 py-4 whitespace-nowrap">Made Pasek</td>
              <td class="px-6 py-4 whitespace-nowrap">Pecalang</td>
              <td class="px-6 py-4 whitespace-nowrap">-</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <a href="#" class="text-red">Edit</a> |
                <a href="#" class="text-orange">Hapus</a>
              </td>
              </tr>
           
          </tbody>
        </table>
      </div>
    </div>
</div>
</x-template-layout>