 <!-- Hero Section Begin -->
 <section class="hero">
   <div class="hero__slider owl-carousel">
     <div class="hero__items set-bg" data-setbg="<?= URL ?>public/ong_img/1.jpeg">
       <div class="container">
         <div class="row">
           <div class="col-xl-5 col-lg-7 col-md-8">
             <div class="hero__text">
               <h6>ONG Collection</h6>
               <h2>Don 2023</h2>
               <p>L'ong reconnait et remercie Mr son excelence le president felix pour ces don dans leur center d'orphélinat.</p>
               <a href="<?= URL ?>sociale/orphelina" class="primary-btn">Voir plus <span class="arrow_right"></span></a>
               <div class="hero__social">
                 <a href="#"><i class="fa fa-facebook"></i></a>
                 <a href="#"><i class="fa fa-twitter"></i></a>
                 <a href="#"><i class="fa fa-pinterest"></i></a>
                 <a href="#"><i class="fa fa-instagram"></i></a>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 
 <!-- Hero Section End -->
 <div class="container mt-5">
   <div class="row">
     <?php
      if (!empty($this->sociales)) {
        foreach ($this->sociales as $key) {
      ?>

         <div class="col-lg-4 col-md-6 col-sm-6">
           <div class="blog__item">
             <div class="blog__item__pic set-bg" data-setbg="<?= URL?>public/ong_img/<?= $key['photo_sociale']?>" style="background-image: url(&quot;<?= URL?>public/ong_img/<?= $key['photo_sociale']?>&quot;);"></div>
             <div class="blog__item__text">
               <span><img src="<?= URL?>public/img/icon/calendar.png" alt=""> <?= $key["date_sociale"]?></span>
               <h5><?= $key["description_sociale"]?></h5>
               <!-- <a href="#">Read More</a> -->
             </div>
           </div>
         </div>

     <?php
        }
      }
      ?>
   </div>
 </div>