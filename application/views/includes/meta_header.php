<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?= (!empty($title)) ? $title : NULL ?></title>
<meta name="description" content="<?= (!empty($meta_description)) ? $meta_description : NULL ?>">
<meta name="keywords" content="<?= (!empty($meta_keywords)) ? $meta_keywords : NULL ?>">
<meta name="author" content="Travel India Trip">
<meta property="og:description" content="<?= (!empty($meta_description)) ? $meta_description : NULL ?>" />
<meta property="og:site_name" content="<?= SITE_NAME ?>" />
<meta property="og:title" content="<?= (!empty($title)) ? $title : NULL ?>" />
<?= /* Page CSS */ (!empty($css)) ? $this->util->cssList($css) : NULL ?>
<link rel="icon" href="<?= base_url('public/img/favicon.ico') ?>" type="image/x-icon">



 
