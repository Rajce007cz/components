<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <?php
                echo anchor('typy', 'Main Page',['class'=> 'nav-link']);
            ?>
        </li>
        <li class="nav-item">
        <?php
                echo anchor('typy', 'Přehled stanic',['class'=> 'nav-link']);
            ?>
        </li>
      </ul>
    </div>
  </div>
</nav>