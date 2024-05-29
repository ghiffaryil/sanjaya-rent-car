   <!-- Contact Start -->
   <div class="contact">
       <div class="container">
           <div class="section-header text-center">
               <p>Hubungi Kami</p>
               <h2><?php echo $data_website['Judul_Website'] ?></h2>
           </div>
           <div class="row">
               <div class="col-md-4">
                   <div class="contact-info bg-orange" style="background-color: #f2850f; height:90%">
                       <h2>Alamat Kantor</h2>
                       <div class="contact-info-item">
                           
                               <h5 class="text-white"><?php echo $data_website['Alamat_Lengkap'] ?></h5>
                           
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="contact-info" style="height:90%">
                       <h2>Informasi Kontak</h2>
                       <div class="contact-info-item">
                           <div class="contact-info-icon">
                               <i class="fa fa-phone-alt"></i>
                           </div>
                           <div class="contact-info-text">
                               <h3>No. Telepon</h3>
                               <p><?php echo $data_website['Nomor_Telpon'] ?></p>
                           </div>
                       </div>
                       <div class="contact-info-item">
                           <div class="contact-info-icon">
                               <i class="fa fa-mobile-alt"></i>
                           </div>
                           <div class="contact-info-text">
                               <h3>No. HP</h3>
                               <p><?php echo $data_website['Nomor_Handphone'] ?></p>
                           </div>
                       </div>
                       <div class="contact-info-item">
                           <div class="contact-info-icon">
                               <i class="far fa-envelope"></i>
                           </div>
                           <div class="contact-info-text">
                               <h3>Email</h3>
                               <p><?php echo $data_website['Email_Admin'] ?></p>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-md-4">
                   <div class="contact-form" style="height:90%">
                       <div id="success"></div>
                       <form method="POST" id="contactForm" novalidate="novalidate">
                           <div class="control-group">
                               <input type="text" class="form-control" name="Nama" id="name" placeholder="Nama" required="required" data-validation-required-message="Masukkan nama anda" />
                               <p class="help-block text-danger"></p>
                           </div>
                           <div class="control-group">
                               <input type="text" class="form-control" name="Nomor_Handphone" id="email" placeholder="No. Handphone" required="required" data-validation-required-message="Masukkan nomor handphone anda" />
                               <p class="help-block text-danger"></p>
                           </div>
                           <div class="control-group">
                               <textarea class="form-control" name="Pesan" id="message" placeholder="Pesan" required="required" data-validation-required-message="Masukkan pesan anda"></textarea>
                               <p class="help-block text-danger"></p>
                           </div>
                           <div>
                               <button class="btn btn-custom btn-block" type="submit" id="sendMessageButton">Kirim</button>
                           </div>
                       </form>
                   </div>
               </div>
               <div class="col-md-12">
                   <iframe src="https://www.google.com/maps/embed?pb=<?php echo $data_website['Embed_Google_Maps'] ?>" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
               </div>
           </div>
       </div>
   </div>
   <!-- Contact End -->