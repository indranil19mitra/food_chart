
<?php

// print_r($page);
// exit;   
$this->load->view('template/include/header_portion/header');
?>

<head>
    <?php $this->load->view('template/include/head/meta'); ?>
    <?php $this->load->view('template/include/head/default_link'); ?>
    <?php $this->load->view('template/include/head/mycss'); ?>
</head>

<?php $this->load->view('template/include/main_body/body'); ?>

<!-- start page title -->
<?php if (!empty($page_title)) : ?>
    <?php $this->load->view('template/include/head/page_title', $page_title); ?>
<?php endif; ?>
<!-- end page title -->
<!-- start page title -->
<?php if (!empty($page)) : ?>
    <?php $this->load->view($page) ?>
<?php endif; ?>
<!-- end page title -->

<?php $this->load->view('template/include/footer'); ?>