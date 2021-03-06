
<div class="container">
    <form class="form-group" action="<?php echo base_url('update-form-action'); ?>" method="post" enctype="multipart/form-data">
        <fieldset class="">
            <input type="hidden" name="id" value="<?php echo $user_info->id;?>">
            <p>
                <label class="text-css" for="name">Name:</label>
                <input class="input-css" type="text" name="name" placeholder="Name" value="<?php echo $user_info->name;?>">
                <?php echo form_error('name');?>
            </p>
            <p>
                <label class="text-css" for="age">Age:</label>
                <input class="input-css" type="text" name="age" placeholder="Age" value="<?php echo $user_info->age;?>">
                <?php echo form_error('age');?>
            </p>
            <p>
                <label class="text-css" for="gender">Gender:</label>
                <select class="select-css text-css" name="gender">
                    <option class="text-css" value="">Select Gender</option>
                    <option class="text-css" value="1" <?php echo ($user_info->gender == 1?'selected':'');?>>Male</option>
                    <option class="text-css" value="2" <?php echo ($user_info->gender == 2?'selected':'');?>>Female</option>
                </select>
                <?php echo form_error('gender');?>
            </p>
            <p>
                <label for="email" class="text-css">Email:</label>
                <input class="input-css" type="email" name="email" placeholder="Email" value="<?php echo $user_info->email;?>">
                <?php echo form_error('email');?>
            </p>
            <p>
                <label for="password" class="text-css">Password:</label>
                <input class="input-css" type="password" name="password">
                <?php echo form_error('password');?>
            </p>
            <p>
                <label for="image" class="text-css">Image:</label>
                <input class="input-css" type="file" name="image">
                
            </p>
            <p>
                <input class="button-css" type="submit" name="submit" value="Update Data">
            </p>
        </fieldset>
    </form>
</div>



