<!-- header -->

<div class="header_wrapper">
  <header class="header clear" role="banner">
    <div class="header-inner nav-right">

      <div class="language-switcher">
        <?php languages_list(); ?>
  		</div>
      <a href="#" class="language-switcher-toggle">
        Dansk
      </a>

      <div class='logo'>
        <a href='<?php echo home_url(); ?>'>
          <img src='<?php echo get_template_directory_uri(); ?>/img/header-logo.svg' alt='Logo' class='logo-img'>
        </a>
      </div>

      <?php secondthought_nav(); ?>

    </div>
  </header>
</div>

<!-- /header -->

<?php get_template_part('partials/mobile_navigation'); ?>
