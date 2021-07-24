@extends('layouts.app')

@section('content')
<div id="app">
    <div class="card">
        <div class="card-body">
             <!-- Action -->
            <div class="add">

                <div class="input-group">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Prendre une note…"
                        
                    />
                </div>

                <ul class="list-group pt-3">
                    <li class="list-group-item" v-for="franceTemperature in franceTemperatures">
                        <span class="text-dark">@{{ franceTemperature }}</span>                        
                        <p class="text-dark">@{{ franceTemperature.year }}</p>  
                        <p class="text-dark">@{{ franceTemperature.month }}</p>  
                        <p class="text-dark">@{{ franceTemperature.max_degree }}</p>  
                        <p class="text-dark">@{{ franceTemperature.min_degree }}</p>                         
                        <p class="text-dark">@{{ franceTemperature.average_degree }}</p>                         
                    </li>

                    <li class="list-group-item" v-for="franceTemperature in franceTemperatures">
                        <p class="text-dark">@{{ franceTemperature.month }}</p>  
                    </li>
                    
                    <li><bar-chart style="background-color: aliceblue"></bar-chart></li>
                    <li><line-chart style="background-color: rgb(224, 224, 224); width:50%; margin:auto;" /></li>
                    <li><line-test style="background-color: rgb(224, 224, 224); width:50%; margin:auto;" /><line-test></line-test> </li>
                    

                    {{-- <li v-if="franceTemperatures.length === 0" class="list-group-item text-center">
                        C'est vide !
                    </li> --}}
                </ul>
                
                <button v-on:click="list">List</button>
            </div>
        </div>
    </div>
</div>

  <!-- Liste des franceTemperatures -->

@endsection