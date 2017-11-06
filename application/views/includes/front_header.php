<nav class="navbar navbar-expand-lg navbar-light bg-white" id="mainNav">
    <div class="container">
        <div class="col-sm-3">
            <a title="<?= SITE_NAME ?>" href="<?= base_url() ?>" class="navbar-brand js-scroll-trigger">
                <img alt="<?= SITE_NAME ?>" class="img-responsive" src="<?= base_url('public/img/logo.png') ?>">
            </a>
        </div>
        <div class="col-sm-9">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container text-right">
                <span><img src="<?=base_url('public/img/uk.png')?>" class="mr20" ><?= CONTACT_NO_UK ?></span>
                <span class="ml25"><i class="fa fa-envelope fs20 mr10"></i><?= CONTACT_EMAIL1 ?></span>
            </div>
            <div class="collapse navbar-collapse text-right" id="navbarResponsive">
                <div class="container">
                    <ul class="navbar-nav ml-auto pull-right">
                        <li class="nav-item <?= ($class == 'main' && $method == 'index') ? 'active' : '' ?>">
                            <a class="nav-link js-scroll-trigger" title="<?= SITE_NAME ?>" href="<?= base_url() ?>">Home</a>
                        </li>
                        <?php foreach ($page_list as $pl) : if (($pl['slug'] != 'home') && (in_array('top', $pl['menu_location']))) : ?>
                            <li class="nav-item <?= (($class == 'main') && ($method == 'page') && (!empty($slug)) && ($slug == $pl['slug'])) ? 'active' : '' ?>">
                                <a class="nav-link js-scroll-trigger" href="<?= base_url($pl['slug']) ?>"><?= $this->setting_model->page_name_by_slug($pl['slug']) ?></a></li>
                        <?php endif; endforeach; ?>
                        <li class="nav-item <?= ($class == 'main' && $method == 'contact_us') ? 'active' : '' ?>"> 
                            <a class="nav-link js-scroll-trigger" title="Contact us" href="<?= base_url('contact_us') ?>">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>