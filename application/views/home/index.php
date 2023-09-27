<div class="container-fluid home_body_page full_stretch_height_width">
    <div class="row">
        <div class="d-flex justify-content-between search_populate mt-2 mb-2">
            <!-- html is fetch from js -->
        </div>
    </div>
    <div class="row border shadow-none p-1 mb-5 bg-light rounded">
        <div class="d-flex justify-content-between mt-2">
            <div>
                <img src="<?= base_url() ?>assets/images/home_page_plate_img2.png" alt="" class="home_page_top_img">
                <label for="types">10</label>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <!-- <button class="rounded-pill" type="radio"> -->
                <!-- <div class="border border-dark rounded-pill p-1"> -->
                <div>
                    <input class="form-check-input rounded-pill" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Veg</label>
                </div>
                <!-- <div class="border border-dark rounded-pill ms-2 p-1"> -->
                <div class="ms-2 ">
                    <input class="form-check-input rounded-pill" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Non Veg</label>
                </div>
                <!-- </button> -->
            </div>
        </div>
    </div>
    <?php $this->load->view('home/component/home_body'); ?>
</div>