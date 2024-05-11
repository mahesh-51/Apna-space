<div class="container center">
  <div class="row">
        <div class="col-12 d-flex justify-content-end">
            <button class="btn btn-dark btn-sm my-2"><a class="text-white" href="<?php echo base_url() . 'client' ?>">Back</a></button>
        </div>
    </div>
  <div class="card my-5">
    <div class="card-body">
      <h2 class="card-title text-center">Client Form</h2>
      <form method="POST" action="<?php echo base_url() .'add-client-create'?>">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" class="form-control" required placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" class="form-control" required placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="contact">Contact:</label>
          <input type="text" id="contact" name="contact" class="form-control" required placeholder="Enter your contact number">
        </div>
        <div class="form-group">
            <label for="doc_type">Document Type:</label>
                <select id="doc_type" name="doc_type" class="form-control" required>
                    <option value="" disabled selected>Select Document Type</option>
                    <option value="Aadhaar">Aadhaar</option>
                    <option value="PAN">PAN</option>
                    <option value="Driving License">Driving License</option>
                    <option value="Voter ID">Voter ID</option>
                </select>
        </div>
        <div class="form-group">
          <label for="doc_number">Document Number:</label>
          <input type="text" id="doc_number" name="doc_number" class="form-control" required placeholder="Enter document number">
        </div>
        <div class="form-group">
          <label for="space">Space:</label>
          <input type="text" id="space" name="space" class="form-control" placeholder="Enter space">
        </div>
        <div class="form-group">
          <label for="time_period">Time Period:</label>
          <input type="text" id="time_period" name="time_period" class="form-control" placeholder="Enter time period">
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
 