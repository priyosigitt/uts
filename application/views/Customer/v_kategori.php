      <div class="col-lg-9"><br>
        <h2><center>
          <?php foreach ($nama_kategori as $row){
          echo $row ["nama_kategori"];}?>
          </center>
        </h2><br>
        <div class="row">

<?php
    foreach ($produk as $row) 
      { 
        ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card border-dark">
              <form method="post" action="<?php echo base_url();?>Customer/shopping/tambah" method="post" accept-charset="utf-8" >
                <img class="img-thumbnail" src="<?php echo base_url() . 'gambar/product/'.$row['gambar']; ?>"/>
                <div class="card-body">
                  <h5 class="card-title">
                    <h4><?php echo $row['nama_produk'];?></h4>  
                  </h5>   
                  <h5><font color="#bd34eb"><b>Rp. <?php echo number_format($row['harga'],0,",",".");?></b></font></h5>
                  <p class="card-text"><?php echo $row['deskripsi'];?></p>   
                </div>    
                <div class="card-footer">
                  <a href="<?php echo base_url();?>Customer/shopping/detail_produk/<?php echo $row['id_produk'];?>" class="btn btn-sm btn-outline-dark">
                    <i class="glyphicon glyphicon-search"></i><strong>Detail</strong></a>
                  <input type="hidden" name="id" value="<?php echo $row['id_produk'];  ?>" />  
                  <input type="hidden" name="nama" value="<?php echo $row['nama_produk']; ?>" />
                  <input type="hidden" name="harga" value="<?php echo $row['harga']; ?>"  />
                  <input type="hidden" name="gambar" value="<?php echo $row['gambar']; ?>" />
                  <input type="hidden" name="qty" value="1" />
                  <button type="submit" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#exampleModal" data-isi="Web Master">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                    <strong>Beli</strong>
                  </button>
                </div>
                </form>
              </div>
            </div>
 
<?php }?> 
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->
 <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Berhasil </h4>
            </div>
            <div class="modal-body">
              <h5 class="modal-title" id="exampleModalLabel">Produk Ditambahkan Kedalam Keranjang </h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Oke</button>
            </div>
          </div>
        </div>
      </div>
<script type="text/javascript">
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('isi')
    var modal = $(this)
    modal.find('.modal-title').text('Submit Masukan Paket  ' + recipient)
    modal.find('.modal-body input').val(recipient)
  })</script>

