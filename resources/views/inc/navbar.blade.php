<nav class="navbar navbar-expand-lg navbar-dark DarkGreen-background fixed-top shadow">
    <div class="container-xl ">

      <a class="navbar-brand fancy" href="/">
        Ben blij met jij
        <img src="/images/Logo.png" width="40" height="40" class="d-inline-block align-top" alt="Ben blij met jij">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07XL">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item {{ Request::is('overons') ? 'active' : '' }}">
            <a class="nav-link" href="/overons">Over ons</a>
          </li>
          <li class="nav-item {{ Request::is('kinderen') ? 'active' : '' }}">
            <a class="nav-link" href="/kinderen">Kinderen</a>
          </li>
          <li class="nav-item {{ Request::is('ouders') ? 'active' : '' }}">
            <a class="nav-link" href="/ouders">Ouders</a>
          </li>
          <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
