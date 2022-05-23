@extends('layouts.app')
@section('content')
<body>
    <div class="container">
        <div class="justify-content-center text-center">
            <h1 class="text-light">Earth-Health</h1>
            <h2>ACTU</h2>       

            <div class="row justify-content-around">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="{{ asset('images/242881064_314393040454284_1518070507569810073_n.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text text-primary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>     
                
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="{{ asset('images/242881064_314393040454284_1518070507569810073_n.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text text-primary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>

                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="{{ asset('images/242881064_314393040454284_1518070507569810073_n.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text text-primary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>

                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="{{ asset('images/242881064_314393040454284_1518070507569810073_n.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text text-primary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>

                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="{{ asset('images/242881064_314393040454284_1518070507569810073_n.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text text-primary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <h2>MY MODELS</h2>   
            <div class="row">
                <div class="card m-5" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-secondary">My Models</h5>
                        <h6 class="card-subtitle mb-2 text-muted">EcoSave01</h6>
                        <p class="card-text text-primary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>

                <div class="card m-5" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-secondary">My Models</h5>
                        <h6 class="card-subtitle mb-2 text-muted">EcoSave01</h6>
                        <p class="card-text text-primary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            
            <h2>MODEL DATA</h2>   
            <div class="app bg-light" >
                <div id="ChartLine"></div>
            </div>

        </div>
    </div>
</body>
@endsection