<?php
include "koneksi.php";
$sql="SELECT * FROM profil ";
$query=mysqli_query($koneksi,$sql);
$r=mysqli_fetch_assoc($query);
?>
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <a href="#" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>
                            <p></p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <h5 class="widget-title">Menu</h5>
                            <nav class="footer-menu">
                                <ul>
                                    <li><a href="index.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Beranda</a></li>
                                    <li><a href="about.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sejarah</a></li>
                                    <li><a href="events.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Renungan</a></li>
                                    <li><a href="ibadahdetail.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Ibadah</a></li>
                                    <li><a href="ibadah.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Dokumentasi</a></li>
                                    <li><a href="admin/login.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Login</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
					
					 <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
						</div>
                    </div>
					
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <h5 class="widget-title">Kontak</h5>

                            <div class="contact-information">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo$r['alamat'];?></p>
                                <a href="callto:001-1234-88888"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo$r['nohp'];?></a>
                                <a href="mailto:info.deercreative@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo$r['email'];?></a>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> Mon - Fri: 08.00am - 18.00pm</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copwrite Area -->
        <div class="copywrite-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center flex-wrap">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> GSJA Kristus Kekal | Kenny Dio</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>

                    <!-- Footer Social Icon -->
                    <div class="col-12 col-md-6">
                        <div class="footer-social-icon">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>