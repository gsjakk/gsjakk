<!DOCTYPE html>
<html lang="en">
<?php include "header.php";?>
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kontak</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Google Maps Start ##### -->
    <div class="map-area mt-30">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0463775004764!2d110.85434011420764!3d-7.56992307686682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1654d31ac7c3%3A0x12eda8b7235c2751!2sGSJA%20Kristus%20Kekal%20Pucang%20Sawit!5e0!3m2!1sid!2sid!4v1589620514191!5m2!1sid!2sid" allowfullscreen></iframe>
    </div>
    <!-- ##### Google Maps End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content-area">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="contact-content contact-information">
                                    <h4>Email</h4>
                                    <p>gsjakristuskekal20@gmail.com</p>
                                    <p>(+62) 81228213057</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="contact-content contact-information">
                                    <h4>Alamat</h4>
                                    <p>Pucangsawit 02/09 Jebres, Surakarta.</p>
                                    <p>Jawa Tengah</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="contact-content contact-information">
                                    <h4>Jam Operasional</h4>
                                    <p>08.00 - 16.00 WIB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Contact Form Area Start ##### -->
    <div class="contact-form section-padding-0-100">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Kirim Pesan</h2>
                        <p>Pastikan semua kolom terisi dengan baik dan benar.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="kirim.php"method="post" autocomplete="off" role="form">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="contact-name">Nama :</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama" autoloadoff>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="contact-email">Email :</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="@mail.com">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="contact-number">Subject :</label>
                                        <input type="text" name="subject" class="form-control" id="subject" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message">Pesan :</label>
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="10" ></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit"  class="btn crose-btn mt-15">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "footer.php";?>