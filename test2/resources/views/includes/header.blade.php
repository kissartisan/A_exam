<nav class="apolloGreen">
    <div class="nav-wrapper">
      <div class="container">
        <a href="{{ route('home') }}" class="brand-logo">Relationship tree</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
         <li><a href="{{ route('home') }}">Home <i class="material-icons left">&#xE88A;</i></a></li>
          <li><a href="{{ route('crud-dashboard') }}">CRUD dashboard <i class="material-icons left">&#xE871;</i></a></li>
        </ul>
      </div>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{ route('home') }}">Home <i class="material-icons left">&#xE88A;</i></a></li>
        <li><a href="{{ route('crud-dashboard') }}">CRUD dashboard <i class="material-icons left">&#xE871;</i></a></li>
      </ul>

    </div>
  </nav>