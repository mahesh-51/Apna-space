<div class="container">
  <h2 class="py-2">Space List</h2>
  <div class="row my-2">
    <div class="col-12 d-flex justify-content-end">
      <button class="btn btn-primary btn-sm"><a class="text-white" href="<?php echo base_url() . 'add' ?>">Add Space</a></button>
    </div>
  </div>
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Serial No</th>
        <th>Space</th>
        <th>Floor No</th>
        <th>Furnished</th>
        <th>Price (per day)</th>
        <th>Availability</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php
    if (!empty($spacelist)) { 
    foreach ($spacelist as $data) { ?>
        <tr>
          <td><?php echo $data->id; ?></td>
          <td><?php echo $data->space; ?></td>
          <td><?php echo $data->floor_no; ?></td>
          <td><?php echo $data->furnished; ?></td>
          <td><?php echo $data->price; ?></td>
          <td><?php echo $data->availability; ?></td>
          <td>
            <button type="button" class="btn btn-primary btn-sm my-1"><a class="text-white" href="<?php echo base_url() . 'edit-space/' . $data->id ?>">Edit</a></button>
            <button type="button" class="btn btn-danger btn-sm my-1"><a class="text-white" href="<?php echo base_url() . 'delete-space/' . $data->id ?>">Delete</a></button>
          </td>
        </tr>
        <?php
      }
      } else {
        ?>
        <tr>
          <td colspan="9">     
            <div class="text-center h5">
              <strong>No Record Found</strong>
            </div>
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
</div>