<header id="home" class="@if(request()->routeIs('index')) header-index @endif">
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
    <div class="container">
      <a href="{{ route('index') }}" class="navbar-brand text-warning fw-bold">GoSports</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a href="{{ route('index') }}" class="nav-link active">Home</a></li>
          <li class="nav-item"><a href="{{ route('eventsdetails') }}" class="nav-link">Event Details</a></li>
          <li class="nav-item"><a href="{{ route('news') }}" class="nav-link">News & Announcements</a></li>
          <li class="nav-item"><a href="{{ route('aboutus') }}" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact Us</a></li>
        </ul>
        
        <ul class="navbar-nav">
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="text-white">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" 
                              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login.form') }}">
                        <i class="bi bi-person-circle align-icon" style="font-size: 1.5rem;"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register.form') }}">Sign Up</a>
                </li>
           @endauth
        </ul>

      </div>
    </div>
</nav>
</header>
