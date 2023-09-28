<div class="row">
    <?php
    // print_r($item_images);
    // exit;
    foreach ($item_names as $val) :
    ?>
        <div class="col-4 col-lg-3 col-md-4 mb-3 card-deck">
            <div class="card pt-2">
                <div class="d-flex justify-content-center mx-2">
                    <img src="<?= $item_images[0] ?>" class="home_page_top_img2" alt="<?= $val; ?>">
                </div>
                <div class="card-body text-center">
                    <a href="" class="card-text category_name"><?= $val; ?></a>
                </div>
            </div>
        </div>
    <?php
    endforeach;
    ?>
</div>