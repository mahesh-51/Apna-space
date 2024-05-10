<div class="container">
  <h2 class="py-2">Space List</h2>
  <button><a href="<?php echo base_url() . 'space/add' ?>">Add Space</a></button>
  <table class="table">
    <thead>
      <tr>
        <th>Serial No</th>
        <th>Space</th>
        <th>Floor No</th>
        <th>Furnished</th>
        <th>Area (sq feet)</th>
        <th>Price (per day)</th>
        <th>Availability</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($spacelist as $data) : ?>
        <tr>
          <td><?php echo $data->id; ?></td>
          <td><?php echo $data->type; ?></td>
          <td><?php echo $data->floor_no; ?></td>
          <td><?php echo $data->furnished; ?></td>
          <td><?php echo $data->area; ?></td>
          <td><?php echo $data->price; ?></td>
          <td><?php echo $data->availability; ?></td>
          <td>
            <button type="button" class="btn btn-primary btn-sm">Edit</button>
            <button type="button" class="btn btn-danger btn-sm">Delete</button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>