
  <div>
    <h3>Le Lieu</h3>
    <p><?php echo get_theme_mod('place'); ?></p>
  </div>
  <!-- Nuage du haut-->

<img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/big_cloud.png"
        class="cloud cloud--big"
        data-anchor-target="#place"
        data-500-bottom="transform: translateX(0vh);" data--100-bottom="transform: translateX(-30vh);" />

  <!-- Nuage du bas -->
  <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/little_cloud.png"
        class="cloud cloud--little"
        data-anchor-target="#place"
        data-500-bottom="transform: translateX(0vh);" data--100-bottom="transform: translateX(-30vh);" />