@extends('layouts.app')

@section('content')
<body>    

    <div class="container">
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