<x-app-layout>
    <main>
        <div class="row">
            <div class="col">
                <div class="card p-5">
                    <h3>
                        {{ $file->name }}
                        </h3>
                        <iframe src="/files/{{ $file->file }}" height="1000px" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
