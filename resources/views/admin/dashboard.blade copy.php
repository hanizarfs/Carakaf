<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Formulir') }}
        </h2>
    </x-slot>



    <div class="wrapp">
        <H1>ADMIN</H1>
        <a href="{{ route('tampilformuliradmin') }}" class="btn btn-primary">Data Mahasiswa</a>
        <a href="{{ url('/uploadpage') }}" class="btn btn-outline-primary">Upload Tugas</a>
    </div>

    <x-jet-welcome />
</x-app-layout>
