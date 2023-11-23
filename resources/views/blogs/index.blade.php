<!DOCTYPE html>
<html>

<head>
    <title>Laravel Redis</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

    <h2 style="text-align:center">Redis Çalışma Durumu: {{ $feedback }}</h2>
    @foreach ($posts as $post)
        <div class="card">
            <img src="{{ $post->image }}" alt="John" style="width:100%">
            <h1>{{ $number++ }} - {{ $post->title }}</h1>
            <p class="title">{{ $post->content }}</p>
            <div style="margin: 24px 0;">
                Yayınlanma Tarihi: {{ $post->published_at }}
            </div>
            <p><button>Devamını Oku</button></p>
        </div>
    @endforeach


</body>

</html>
