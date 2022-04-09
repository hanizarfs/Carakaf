<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Edit Formulir') }}
        </h2>
    </x-slot>
    <div class="container">
        <form action="{{ route('edit', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <input type="hidden" value="{{ $data->id }}">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">NPM</label>
                <input type="text" class="form-control" id="npm" name="name" value="{{ $data->name }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">NPM</label>
                <input type="text" class="form-control" id="npm" name="description" value="{{ $data->description }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">NPM</label>
                <input type="file" class="form-control" id="npm" name="file" value="{{ $data->file }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</x-app-layout>
