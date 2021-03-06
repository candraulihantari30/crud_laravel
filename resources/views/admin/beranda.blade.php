<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dasboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <h1>{{$title}} </h1>
               <h2>NAMA: {{$data['krama']['nama']}}</h2>
               <h2>JABATAN: {{$data['krama']['jabatan']}}</h2>
               <h2>KETERANGAN: {{$data['krama']['keterangan']}}</h2>
            </div>
        </div>
    </div>
</x-template-layout>