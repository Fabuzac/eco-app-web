<main>
    <nav class="sidebar-left text-light ">
        <ul class="left-menu">
            <li>
                <i class="fas fa-home"></i>
                <a class="text-bold mb-3 block" href="/">Home</a>
            </li>
        
            <li>
                <i class='fas fa-users'></i>
                <a class="text-bold mb-3 block" href="{{ route('articles.index') }}">Community news</a>
            </li>

            <li>
                <i class='far fa-star'></i>
                <a class="text-bold mb-3 block" href="/renewable-energy">Renewable Energy</a>
            </li>

            <li>
                <i class='fas fa-share-alt'></i>
                <a class="text-bold mb-3 block" href="/celestial">Actors / Groups</a>
            </li>
            
            <li>
                <i class='fas fa-poll'></i>                
                <a class="text-bold mb-3 block" href="/planet">Chart Degree</a>
            </li>

            <li>
                <i class='fab fa-python'></i>
                <a class="text-bold mb-3 block" href="/test">Python chantier</a>
            </li>
            
            <li>
                <i class='fab fa-jedi-order'></i>
                <a class="text-bold mb-3 block" href="/innovators">Innovators Project</a>
            </li>

            @auth                 
                <li>
                    <i class='fa fa-user'></i>
                    <a class="text-bold mb-3 block" href="{{ route( 'profiles.show', auth()->user() ) }}">My Profile</a>
                    
                </li>

                <li>
                    <i class="fas fa-power-off"></i>
                    <a class="text-bold mb-3 block"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    >
                        {{ __('Logout') }}
                    </a>
        
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf            
                    </form>
                </li>
                
            @endauth
        </ul>
    </nav>
</main>


    