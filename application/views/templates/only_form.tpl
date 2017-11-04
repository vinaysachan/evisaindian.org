<!DOCTYPE html>
<html lang="en">
    <head>
        <?php /* Meta Header */ $this->load->view('includes/meta_header'); ?>
    </head>
    <body class="bg-light form_page">
        <?php /* Google Analytics */ $this->load->view('analyticstracking'); ?>
        <?php /* Top Haeder Part */ $this->load->view('includes/header'); ?>
        <div class="bg-light">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="<?= (!empty($right_bar)) ? 'col-lg-9' : 'col-lg-12' ?> mx-auto bg-white page_content">
                            <?php if (empty($banners)) : ?>
                                <div class="banner_top">
                                    <img src="<?= base_url('public/img/mumbai.jpg') ?>">
                                </div>
                            <?php endif; ?>
                            <h1><?= (!empty($heading)) ? $heading : '' ?></h1>
                            <?= $this->util->show_flash_message() ?>
                            <?php (!empty($view)) ? $this->load->view($view) : $this->load->view($this->router->fetch_class() . '/' . $this->router->fetch_method() . '_view'); ?>
                        </div>
                        <?php
                        if (!empty($right_bar)) :
                            $this->load->view('includes/right_bar');
                        endif;
                        ?>
                    </div>
                </div>
            </section>
        </div>
        <script type="text/javascript"> base_url = '<?= base_url() ?>';</script>
        <?php /* Footer */ $this->load->view('includes/footer_copyright'); ?>
        <?= /* Page JS */ (!empty($js)) ? $this->util->jsList($js) : '' ?>
    </body>
</html>