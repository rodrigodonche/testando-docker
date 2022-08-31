<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{asset('js/jquery.js')}}"></script>
</head>
<body>

    @if (Count($somas) != 0)
        <h3>
            @php
                $count = 0;
            @endphp
            @foreach ($somas as $s)

                @php
                    $count++;
                @endphp

                ---------- {{ $count }} ---------- <br>
                Número 1: {{ $s->numero1 }} <br>
                Número 2: {{ $s->numero2 }} <br>
                <span>SOMA</span>: {{ $s->soma }} <br><br>

            @endforeach
        </h3>
    @endif

    <form action="{{ route('soma') }}" method="post">
        @csrf
        @method('POST')
        <div class="col-md-6">
            <label for="numero1">Número 1</label>
            <input type="number" name="numero1">
            <label for="numero2">Número 2</label>
            <input type="number" name="numero2">
        </div>
        <br>
        <button type="submit" class="btn_salvar">Salvar</button>
    </form>
</body>
</html>
