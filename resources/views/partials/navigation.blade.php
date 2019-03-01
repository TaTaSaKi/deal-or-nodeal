<nav class="navbar navbar-expand-lg navbar-light fixed-top topbar mb-4 static-top shadow" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="https://www.facebook.com/ratanakchheangvanny">Chheang Vanny Ratanak</a>
        </li>
      </ul>
     
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" href="{{ url('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('contact') }}">Contact</a>
          </li>
          <li class="nav-item">
              <div class="input-group">
                  <input type="text" class="form-control bg-light border-1 small" placeholder="Search for articles" aria-label="Search" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                      <button class="btn btn-primary" style="padding: 0px 10px;font-size: 19px; background-color: #3f2725; border-color: #3f2725; border-radius: 0px 5px 5px 0px;" type="button">
                          <i class="fas fa-search fa-sm"></i>
                      </button>
                  </div>
              </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>