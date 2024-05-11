<div class="container">
  <h2 class="py-2">Client List</h2>
  <div class="row my-2">
    <div class="col-12 d-flex justify-content-end">
      <button class="btn btn-primary btn-sm"><a class="text-white" href="<?php echo base_url() . 'add-client' ?>">Add Client</a></button>
    </div>
  </div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Doc Type</th>
          <th>Doc Number</th>
          <th>Space</th>
          <th>Time Period</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (!empty($clientlist)) {
          foreach ($clientlist as $data) { ?>
            <tr>
              <td><?php echo $data->id; ?></td>
              <td><?php echo $data->name; ?></td>
              <td><?php echo $data->email; ?></td>
              <td><?php echo $data->contact; ?></td>
              <td><?php echo $data->document_type; ?></td>
              <td><?php echo $data->document_number; ?></td>
              <td><?php echo $data->type; ?></td>
              <td><?php echo $data->time_period; ?></td>
              <td>
                <button type="button" class="btn btn-primary btn-sm"><a class="text-white" href="<?php echo base_url() . 'edit-client/' . $data->id ?>">Edit</a></button>
              <button type="button" class="btn btn-danger btn-sm my-1"><a class="text-white" href="<?php echo base_url() . 'delete-client/' . $data->id ?>">Delete</a></button>
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