		<footer class="footer">

			<h5>Copyright &copy; 2015 <a href="#" class="webtitle">GiantShop</a>. All Rights Reserved.</h5>

			<a href="#"><span class="fa fa-facebook"></span></a>
			<a href="#"><span class="fa fa-twitter"></span></a>
			<a href="#"><span class="fa fa-google-plus"></span></a>

		</footer>

        <div class="modal fade" id="checkout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Cara Pembelian</h4>
                </div>
                <div class="modal-body">

                    <?php
                    if (!isset($_SESSION['loginNama'])) {?>

                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#daftar">Daftar</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#masuk">Masuk</button>

                    <?php
                    }else{
                    ?>
                    
                    <form method="post" action="chekout.php">
                        <div class="form-group">
                            <label>Alamat Pengiriman</label>
                            <textarea name="alamatTujuan" required placeholder="Alamat Tujuan Pengiriman" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>

                    <?php
                    }
                    ?>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
          </div>
        </div>

         <?php
        if(!isset($_SESSION['loginNama'])){
            include 'register-login.php';
        }
        ?>

        <a href="#" class="scrollup"><i class="fa fa-chevron-circle-up"></i></a>

		<script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
            $(window).scroll(function() {
                if($(this).scrollTop() > 100){
                    $('.scrollup').fadeIn();
                }else{
                    $('.scrollup').fadeOut();
                }
                if($(this).scrollTop() > 79){
                    $('.navbar').addClass('navbar-fixed-top');
                }else{
                    $('.navbar').removeClass('navbar-fixed-top');
                }
            });
                
            $('.scrollup').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });

           $('#pesan').change(function(){
                $('#subtotal').val($('#pesan').val() * $('#harga').val());
           });
           $('#pesan').keyup(function(){
                $('#subtotal').val($('#pesan').val() * $('#harga').val());
           });
        });
        </script>
	</body>

</html>