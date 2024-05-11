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
          <input type="hidden" class="form-control" id="id" name="id" value="<?php echo isset($data['id']) ? $data['id'] : ''; ?>" required>
          <input type="text" class="form-control" id="space" name="space" placeholder="Enter space"  value="<?php echo isset($data['space']) ? $data['space'] : ''; ?>" required>
        </div>
        <div class="form-group">
          <label for="floor_no">Floor No:</label>
          <input type="text" class="form-control" id="floor_no" name="floor_no" placeholder="Enter floor number" value="<?php echo isset($data['space']) ? $data['floor_no'] : ''; ?>" required>
        </div>
        <div class="form-group">
          <label for="furnished">Furnished:</label>
          <select class="form-control" id="furnished" name="furnished" required>
            <option value="">Select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
        </div>
        <!-- <div class="form-group">
          <label for="area">Area:</label>
          <input type="text" class="form-control" id="area" name="area" placeholder="Enter area" required>
        </div> -->
        <div class="form-group">
          <label for="price">Price:</label>
          <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" value="<?php echo isset($data['price']) ? $data['price'] : ''; ?>" required>
        </div>
        <div class="form-group">
          <label for="availability">Availability:</label>
          <input type="text" class="form-control" id="availability" name="availability" placeholder="Enter availability" value="<?php echo isset($data['availability']) ? $data['availability'] : ''; ?>" required>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>