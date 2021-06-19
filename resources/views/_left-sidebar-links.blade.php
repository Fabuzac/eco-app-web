<main>
    <nav class="sidebar-left text-light ">
        <ul class="left-menu">
            <li>
                <a class="text-bold mb-3 block" href="/">Home</a>
            </li>
        
            <li>
                <a class="text-bold mb-3 block" href="/">Renewable Energy</a>
            </li>
        
            <li>
                <a class="text-bold mb-3 block" href="/explore">Fossil Fuel</a>
            </li>
        
            <li>
                <a class="text-bold mb-3 block" href="/celestial">Celestial Being</a>
            </li>

            <li>
                <a class="text-bold mb-3 block" href="/innovators">Innovators</a>
            </li>
            
            @auth
                <li>
                    <a class="text-bold mb-3 block" href="{{ route( 'profile', auth()->user() ) }}">Profile</a>
                </li>
        
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


    