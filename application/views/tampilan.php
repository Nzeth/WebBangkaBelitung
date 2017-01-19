

<div class="row container">
  <?php foreach ($record->result_array() as $list) { ?>
   <div class="col s12 m4">
     <div class="card" style="height:450px;">
     <div class="card-image waves-effect waves-block waves-light">
       <img style="height:300px;" class="activator" src="<?php echo base_url(); ?>uploads/wisata/<?php echo $list['gambar'] ?>">
     </div>
     <div class="card-content ">
       <span class="card-title activator grey-text text-darken-4"><?php echo $list['tempat_wisata'] ?><i class="material-icons right">more_vert</i></span>
       <!-- <p><a href="#">This is a link</a></p> -->
     </div>
     <div class="card-reveal">
       <span class="card-title grey-text text-darken-4"><?php echo $list['tempat_wisata'] ?><i class="material-icons right">close</i></span>
       <p><?php echo $list['deskripsi_wisata'] ?>.</p>
     </div>
   </div>
   </div>
   <?php } ?>
 </div>
