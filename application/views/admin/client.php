<div class="container">
  <h2 class="py-2">Client List</h2>
  <div class="row my-2">
    <div class="col-12 d-flex justify-content-end">
    <a class="text-white" href="<?php echo base_url() . 'add-client' ?>"><button class="btn btn-primary btn-sm">Add Client</button></a>
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
          <th>Time Period (in days)</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $count = 1  ;
        if (!empty($clientlist)) {
          foreach ($clientlist as $data) { ?>
            <tr>
              <td><?php echo $count ++     ; ?></td>
              <td><?php echo $data->name; ?></td>
              <td><?php echo $data->email; ?></td>
              <td><?php echo $data->contact; ?></td>
              <td><?php echo $data->document_type; ?></td>
              <td><?php echo $data->document_number; ?></td>
              <td><?php echo $data->time_period; ?></td>
              <td>
              <a class="text-white" href="<?php echo base_url() . 'edit-client/' . $data->id ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
              <a class="text-white" href="<?php echo base_url() . 'delete-client/' . $data->id ?>"><button type="button" class="btn btn-danger btn-sm my-1">Delete</button></a>
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