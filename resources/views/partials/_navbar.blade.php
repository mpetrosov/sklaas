
   @if (!$user = Auth::user())
    <div class="nav">
        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle"/>
        <div class="menu">
            <a href="/">Home</a>
            <a href="/about">Over ons</a>
            <span><a href="/wishlist">maak verlanglijst</a></span>
            <a href="/contact">Contact</a>
            <a href="/login">login</a>
        </div>
    </div>
    @else
  <div class="nav">
        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle"/>
        <div class="menu">
            <a href="/">Home</a>
            <a href="/about">Over ons</a>
            <span><a href="/wishlist">maak verlanglijst</a></span>
            <a href="/contact">Contact</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </div>
    </div>
    @endif    
   