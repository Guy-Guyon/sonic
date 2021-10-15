<nav>
<ul class="nav">
  <img class="nav-logo" src="assets/img/sonic-logo.png" alt="Background Image">
  <li class="nav-item">
    <a class="nav-link" href="<?= $viewVars['router']->generate('home') ?>">Les personnages</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= $viewVars['router']->generate('creators') ?>">Les créateurs</a>
  </li>
</ul>
</nav>