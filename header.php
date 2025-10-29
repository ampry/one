<!doctype html>
<html>
    <head>

        <!-- meta -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/assets/css/style.css?r=<? echo rand(1,999) ?>">

        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,100..900&family=Roboto+Serif:opsz,wght@8..144,100..900&display=swap" >

        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.6.7/es5-shim.min.js"></script>
        <![endif]-->

        <? wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="c">
                <a class="logo" href="<?= get_home_url(); ?>">
                    <?= wp_get_attachment_image(get_field('logo', 'option'), 'full'); ?>
                </a><!-- logo -->
                <? wp_nav_menu(array('menu' => 'Main', 'container'  => false, 'menu_class' => 'menu'));?>
                <a class="header-cta" href="">View CTA Now!</a>
            </div><!-- c -->
        </header>