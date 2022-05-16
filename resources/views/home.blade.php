@extends('layouts.app')
@section('content')
<body>
    <div class="container">
        <div class="justify-content-center text-center">
            <h1 class="text-light">Earth-Health</h1>
            <h2>Dashboard </h2>       
            <div>                
                <iframe width="100%" 
                        height="600px" 
                        frameborder="0" 
                        src="https://framacarte.org/fr/map/carte-sans-nom_106607?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"
                        allowfullscreen>
                </iframe>
                <p><a href="https://framacarte.org/fr/map/new/">Voir en plein écran</a></p>
            </div>
            <div class="card">
                <h3 class="card-header">Title</h3>
                <p></p>
            </div>            
        </div>
    </div>
</body>
@endsection