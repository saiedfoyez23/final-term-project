<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Hallow, {{Auth::user()->name}}</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li>
                <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="material-icons">exit_to_app</span>
                <p class="d-lg-none d-md-block">Logout</p>
                </a>
                <form id="logout-form" method="post" action="{{route('logout')}}" style="display: none" >
                   @csrf
                </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>