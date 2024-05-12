<nav class="navbar navbar-expand-lg navbar-light bg-dark p-3">
  <a class="navbar-brand text-white" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active px-3">
        <a class="text-white" href="<?php echo base_url() . 'dashboard' ?>">DashBoard</a>
      </li>
      <li class="nav-item px-3">
        <a class="text-white" href="<?php echo base_url() . 'space' ?>">Space</a>
      </li>
      <li class="nav-item px-3">
        <a class="text-white" href="<?php echo base_url() . 'client' ?>">Client</a>
      </li>
    </ul>
  </div>
  <div>
    <ul class="navbar-nav ml-auto">
      <a class="text-white" href="<?php echo base_url() . 'logout' ?>">
        <button class="btn btn-danger">
          Logout
        </button>
      </a>
    </ul>
  </div>
</nav>