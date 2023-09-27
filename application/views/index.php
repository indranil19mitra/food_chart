<div class="container-fluid index_body_page full_stretch_height_width">
    <!-- <div class="row parent_div">
        <img src="<?= base_url(); ?>assets\images\index_page_background_theme.jpg" alt="" class="img_css">
    </div> -->

    <div class="row d-flex justify-content-center">
        <img src="<?= base_url() ?>assets/images/login_page_top_img2.png" class="login_page_top_img" alt="">
    </div>
    <div class="row hotel_names">
        <label class="text-center" for="">House of Royals</label>
    </div>
    <div class="row welcome_msg hotel_names">
        <label for="" class="text-center">Welcome</label>
    </div>
    <div class="row mt-2 d-flex justify-content-center">
        <div class="col-6 text-center">
            <!-- <a href="<?=base_url()?>my_controller/home_page" class="btn btn-outline-secondary btn-rounded" id="menuCart" type="button"><i class="fa-solid fa-bowl-food"></i> <span class="text-dark">Order Food</span></a> -->
            
            <a href="<?=base_url()?>home" class="btn btn-outline-secondary btn-rounded" id="menuCart" type="button"><i class="fa-solid fa-bowl-food"></i> <span class="text-dark">Order Food</span></a>

        </div>
    </div>
</div>
<script>    
    const cnt_url = '<?php echo base_url("My_controller/"); ?>';
</script>