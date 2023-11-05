<main>
 <div class="container-fluid">
 <h1 class="mt-4"></h1>
 <ol class="breadcrumb mb-4">
 <li class="breadcrumbitem"><a href="<?php echo site_url('admin/user') ?>">user</a></li>
 <li class="breadcrumb-item active">user Baru</li>
 </ol>
 <div class="card mb-4">
 <div class="card-body">
 <form action="<?php echo site_url('admin/user/edit') ?>" method="post" >
 <div class="mb-3">
 <label for="username">USERNAME <code>*</code></label>
 <input class="formcontrol" type="hidden" name="id" value="<?=$user->id;?>" required />
 <input class="formcontrol <?php echo form_error('username') ? 'is-invalid':'' ?>"
 type="text" name="username" value="<?=$user->username;?>" placeholder="USERNAME" required />
 <div class="invalid-feedback">
 <?php echo form_error('username') ?>
 </div>
 </div>
 <div class="mb-3">
 <label for="full_name">FULL NAME <code>*</code></label>
 <input class="formcontrol" type="text" name="full_name" value="<?=$user->full_name;?>" placeholder="FULL NAME" required />
 </div>
 <div class="mb-3">
 <label for="phone">PHONE</label>
 <input class="formcontrol" type="text" name="phone" value="<?=$user->phone;?>" placeholder="PHONE" required/>
 </div>
 <div class="mb-3">
 <label for="email">EMAIL</label>
 <input class="formcontrol" type="email" name="email" value="<?=$user->email;?>" placeholder="EMAIL" required/>
 </div>
 <div class="mb-3">
 <label for="role">Role</label>
 <select class="form-select" id="role" name="role" required>
 <option selected></option>
 <option value="admin">ADMIN</option>
 <option value="sekretaris">SEKRETARIS</option>
 </select>
 </div>
 <button class="btn btn-primary" type="submit"><i class="fas faplus"></i> Save</button>
 </form>

 </div>
 </div>
 <div style="height: 100vh"></div>
 </div>
</main>