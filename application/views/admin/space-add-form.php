<div class="container center">
    <div class="row">
        <div class="col-12 d-flex justify-content-end">
            <button class="btn btn-dark btn-sm my-2"><a class="text-white" href="<?php echo base_url() . 'space' ?>">Back</a></button>
        </div>
    </div>
  <div class="card my-5">
    <div class="card-body">
      <h2 class="card-title text-center">Space Form</h2>
      <form method="POST" action="<?php echo base_url() .'add-space'?>">
        <div class="form-group">
          <label for="space">Space:</label>
          <input type="text" class="form-control" id="space" name="space" placeholder="Enter space" required>
        </div>
        <div class="form-group">
          <label for="floorNo">Floor No:</label>
          <input type="text" class="form-control" id="floorNo" name="floorNo" placeholder="Enter floor number" required>
        </div>
        <div class="form-group">
          <label for="furnished">Furnished:</label>
          <select class="form-control" id="furnished" name="furnished" required>
            <option value="">Select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
        </div>
        <div class="form-group">
          <label for="area">Area:</label>
          <input type="text" class="form-control" id="area" name="area" placeholder="Enter area" required>
        </div>
        <div class="form-group">
          <label for="price">Price:</label>
          <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" required>
        </div>
        <div class="form-group">
          <label for="availability">Availability:</label>
          <input type="text" class="form-control" id="availability" name="availability" placeholder="Enter availability" required>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>