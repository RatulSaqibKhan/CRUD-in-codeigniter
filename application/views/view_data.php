<div class="container">
    <div>
        <h1 class="text-css">All Data</h1>
        <hr>
    </div>
    <table class="table table-striped m-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user_info->result() as $value) {
                ?>
                <tr>
                    <th scope="row"><?php echo $value->id; ?></th>
                    <td><?php echo $value->name; ?></td>
                    <td><?php echo $value->age; ?></td>
                    <td><?php echo ($value->gender==1?'Male':'Female'); ?></td>
                    <td><?php echo $value->email; ?></td>
                    <td><img src="<?php echo base_url('images') . '/' . $value->image; ?>" ></td>
                    <td><a href="<?php echo base_url('update-view-data/'.$value->id);?>">Edit</a></td>
                    <td><a href="<?php echo base_url('delete-data/'.$value->id);?>">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>