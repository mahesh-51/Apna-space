<style>
   .card {
      display: flex;
      flex-direction: column;
      height: 100%;
    }
    .card-body {
      flex: 1;
    }

    .card-footer {
      margin-top: auto;
      background-color: white;
    }
  </style>

<div class="container p-4">
  <h2>Welcome to Your Dashboard</h2>
  <div class="row py-5">
    <!-- <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Statistics</h5>
          <p class="card-text">View statistics about your website's performance.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">View Statistics</a>
        </div>
      </div>
    </div> -->
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Space</h5>
          <p class="card-text">Total Number of Space: <?php echo $spacecount ?> </p>
        </div>
        <div class="card-footer">
          <a href="<?php echo base_url() . 'space' ?>" class="btn btn-primary">Visit</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Clients</h5>
          <p class="card-text">Total Number of Clients: <?php echo $clientcount ?> </p>
        </div>
        <div class="card-footer">
          <a href="<?php echo base_url() . 'client' ?>" class="btn btn-primary">Visit</a>
        </div>
      </div>
    </div>
  </div>
</div>