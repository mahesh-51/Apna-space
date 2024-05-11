<div class="container center">
  <div class="row">
    <div class="col-12 d-flex justify-content-end">
      <button class="btn btn-dark btn-sm my-2"><a class="text-white" href="<?php echo base_url() . 'client' ?>">Back</a></button>
    </div>
  </div>
  <div class="card my-5">
    <div class="card-body">
      <h2 class="card-title text-center">Client Form</h2>
      <form method="POST" action="<?php echo base_url() . 'add-client-create' ?>">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="hidden" id="id" name="id" class="form-control" value="<?php echo isset($data['id']) ? $data['id'] : ''; ?>">
          <input type="text" id="name" name="name" class="form-control" required placeholder="Enter your name" value="<?php echo isset($data['name']) ? $data['name'] : ''; ?>">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" class="form-control" required placeholder="Enter your email" value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>">
        </div>
        <div class="form-group">
          <label for="contact">Contact:</label>
          <input type="text" id="contact" name="contact" class="form-control" required placeholder="Enter your contact number" value="<?php echo isset($data['contact']) ? $data['contact'] : ''; ?>">
        </div>
        <div class="form-group">
          <label for="document_type">Document Type:</label>
          <select id="document_type" name="document_type" class="form-control" required>
            <option value="" disabled>Select Document Type</option>
            <option value="aadhar" <?php echo isset($data['document_type']) && $data['document_type'] == 'aadhar' ? 'selected' : ''; ?>>Aadhaar</option>
            <option value="pan" <?php echo isset($data['document_type']) && $data['document_type'] == 'pan' ? 'selected' : ''; ?>>PAN</option>
            <option value="driving_license" <?php echo isset($data['document_type']) && $data['document_type'] == 'driving_license' ? 'selected' : ''; ?>>Driving License</option>
            <option value="voter_card" <?php echo isset($data['document_type']) && $data['document_type'] == 'voter_card' ? 'selected' : ''; ?>>Voter ID</option>
            <option value="passport" <?php echo isset($data['document_type']) && $data['document_type'] == 'passport' ? 'selected' : ''; ?>>Passport</option>
          </select>
        </div>
        <div class="form-group">
          <label for="document_number">Document Number:</label>
          <input type="text" id="document_number" name="document_number" class="form-control" required placeholder="Enter document number" value="<?php echo isset($data['document_number']) ? $data['document_number'] : ''; ?>">
        </div>
        <!-- <div class="form-group">
          <label for="space_id">Space:</label>
          <input type="text" id="space_id" name="space_id" class="form-control" placeholder="Enter space" value="<?php //echo isset($data['space_id']) ? $data['space_id'] : ''; ?>">
        </div> -->
        <div class="form-group">
          <label for="time_period">Time Period:</label>
          <input type="text" id="time_period" name="time_period" class="form-control" placeholder="Enter time period" value="<?php echo isset($data['time_period']) ? $data['time_period'] : ''; ?>">
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
