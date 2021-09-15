@extends('layouts.app')

@section('content')
<body>    
    <div class="container text-center">
        <h2>Python Project</h2>
        <img src="https://img.icons8.com/nolan/2x/python.png" alt="">
        <h1>
            @php
                $command = escapeshellcmd('python index.py');
                $output = shell_exec($command);
                echo $output;                
            @endphp            
        </h1>
    </div>
</body>
@endsection