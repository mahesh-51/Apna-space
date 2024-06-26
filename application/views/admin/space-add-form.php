<div class="container center">
  <div class="row">
    <div class="col-12 d-flex justify-content-end">
    <a class="text-white" href="<?php echo base_url() . 'space' ?>"><button class="btn btn-dark btn-sm my-2">Back</button></a>
    </div>
  </div>
  <div class="card my-5">
    <div class="card-body">
      <h2 class="card-title text-center">Space Form</h2>
      <form method="POST" action="<?php echo base_url() . 'add-space' ?>">
        <div class="form-group">
          <label for="space">Space:</label>
          <input type="hidden" class="form-control" id="id" name="id" value="<?php echo isset($data['id']) ? $data['id'] : ''; ?>" required>
          <input type="text" class="form-control" id="space" name="space" placeholder="Enter space" value="<?php echo isset($data['space']) ? $data['space'] : ''; ?>" required>
        </div>
        <div class="form-group">
          <label for="floor_no">Floor No:</label>
          <input type="text" class="form-control" id="floor_no" name="floor_no" placeholder="Enter floor number" value="<?php echo isset($data['space']) ? $data['floor_no'] : ''; ?>" required>
        </div>
        <div class="form-group">
          <label for="furnished">Furnished:</label>
          <select class="form-control" id="furnished" name="furnished" required>
            <option value="">Select</option>
            <option value="yes" <?php echo isset($data['furnished']) && $data['furnished'] == 'yes' ? 'selected' : ''; ?>>
              Yes</option>
            <option value="no" <?php echo isset($data['furnished']) && $data['furnished'] == 'no' ? 'selected' : ''; ?>>No
            </option>
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
          <select class="form-control" id="availability" name="availability" required>
            <option value="">Select</option>
            <option value="yes" <?php echo isset($data['availability']) && $data['availability'] == 'yes' ? 'selected' : ''; ?>>Yes</option>
            <option value="no" <?php echo isset($data['availability']) && $data['availability'] == 'no' ? 'selected' : ''; ?>>No</option>
          </select>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>