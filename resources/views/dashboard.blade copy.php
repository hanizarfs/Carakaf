<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="wrapp">
    </div>

    <a href="{{ url('user/formulir') }}" class="btn btn-primary">Lihat data Mhs</a>
    <a href="{{ url('user/show') }}" class="btn btn-outline-primary">Lihat Tugas</a>

    <x-jet-welcome />
</x-app-layout>
