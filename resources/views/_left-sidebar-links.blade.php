<main>
    <nav class="sidebar-left text-light ">
        <ul class="left-menu">
            <li>
                <a class="text-bold mb-3 block" href="/">Home</a>
            </li>
        
            <li>
                <a class="text-bold mb-3 block" href="/renewable-energy">Renewable Energy</a>
            </li>
        
            <li>
                <a class="text-bold mb-3 block" href="/community">Community news</a>
            </li>
            
            <li>
                <a class="text-bold mb-3 block" href="/planet">Chart</a>
            </li>
        
            <li>
                <a class="text-bold mb-3 block" href="/celestial">Celestial Being / Charts</a>
            </li>

            <li>
                <a class="text-bold mb-3 block" href="/test">Python view o.O</a>
            </li>
            
            <li>
                <a class="text-bold mb-3 block" href="/innovators">Innovators Project</a>
            </li>

            @auth
                        
                <li>
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


    