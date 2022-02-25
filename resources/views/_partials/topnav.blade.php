
<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-around">
    <div >
    <a class="navbar-brand" href="/">Event Portal</a>
    </div>
    <div class="d-flex justify-content-between ">
    <div>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contacts">Contacts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/all-events">Events</a>
          </li>
      @if(Auth::check())
      <li class="nav-item">
        <a class="nav-link" href="/profile">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
      </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
            @endif
        </ul>
    </div>
    </div>
  </nav>
