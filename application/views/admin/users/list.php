<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Data Users
    <small>kelola data users di sini</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo site_url('admin/users');?>">Menu Users</a></li>
    <li class="active">Data Users</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3>Daftar Data Users</h3>
          <div class="col-md-4">
            <a href="<?php echo site_url('admin/users/tambah');?>" class="btn btn-primary">Tambah Users</a>
          </div>
          <div class="col-md-4 text-center">
              <div style="margin-top: 4px"  id="message">
                  <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
              </div>
          </div>
        </div>
        <div class="box-body">
          <?php if (!empty($users)): ?>
            <table id="userstable" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Login Terakhir</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                      $start = 0;
                      foreach($users as $user):  ?>
                      <tr>
          		            <td><?php echo ++$start ?></td>
                          <td>
                            <?php if ($current_user->id != $user->id): ?>
                              <a href="<?php echo site_url('admin/users/ubah/'.$user->id); ?>"><?php echo $user->nama_depan.' '.$user->nama_belakang; ?></a>
                            <?php else: ?>
                              <?php echo $user->nama_depan.' '.$user->nama_belakang; ?>
                            <?php endif; ?>
                          </td>
                          <td><?php echo $user->email; ?></td>
                          <td><?php echo date('Y-m-d H:i:s', $user->last_login); ?></td>
                          <td>
                              <?php if ($current_user->id != $user->id): ?>
                              <?php
                                  $hapus = array(
                                                'class' => 'btn btn-sm btn-danger',
                                                'onclick' => 'javascript: return confirm(\'Kamu Yakin ?\')');
                                  echo anchor(site_url('admin/users/hapus/'.$user->id),'Hapus',$hapus);
                               ?>
                              <?php endif; ?>
                          </td>
          	        </tr>
                  <?php endforeach; ?>
              </tbody>
            </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section><!-- /.content -->
