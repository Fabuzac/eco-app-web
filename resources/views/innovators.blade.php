@extends('layouts.app')

@section('content')
<body style="background: rgb(41, 41, 41)" >    

    <div class="container">
        <h1>
            @php
                $command = escapeshellcmd('python C:\laragon\www\eco-blog-v2\resources\python\index.py');
                $output = shell_exec($command);
                echo $output;
            @endphp            
        </h1>
    </div>
</body>
@endsection