      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Data Order</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/admin')?>">Home</a></li>
            <li class="breadcrumb-item active">Category        </li>
            <li class="breadcrumb-item active">Order        </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                    <div class="row d-flex justify-content-center">
                      <div class="card card-primary">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          <table class="table table-striped text-nowrap">
                            <thead class="text-white">
                              <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>Alamat</th>
                                <th>Telp</th>
                                <th>Pengiriman</th>
                                <th>Pembayaran</th>
                                <th>Tanggal</th>
                                <th>Option</th>
                              </tr>
                            </thead>
                            <tbody class="text-white">
                              <?php 
                                  $no = 1;
                                  foreach($order as $u){ 
                                  ?>
                              <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $u->nama ?></td>
                                <td><?php echo $u->alamat ?></td>
                                <td><?php echo $u->telp ?></td>
                                <td><?php echo $u->pengiriman ?></td>
                                <td><?php echo $u->pembayaran ?></td>
                                <td><?php echo $u->tanggal ?></td>
                                <td>
                                  <a href="<?php echo site_url('Admin/order/detail/'.$u->id_order) ?>"  class="btn btn-warning text-white"><b class="text-dark">Detail Order</b></a>
                                </td>
                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
