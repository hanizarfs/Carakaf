<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- {{ $data->nama }} --}}
    {{-- {{ $data->description }} --}}
    <h1>
    {{ $data->name }}
    </h1>
    <h3>{{ $data->description }}</h3>

    <iframe src="/assets/{{ $data->file }}" height="500px" frameborder="0">isi file</iframe>
</body>
</html>
