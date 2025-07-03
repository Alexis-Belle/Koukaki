
  <div>
    <h3>Le Lieu</h3>
    <p><?php echo get_theme_mod('place'); ?></p>
  </div>
  <!-- Nuage du haut-->

<img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/decorations/big_cloud.png"
        class="cloud cloud--big"
        data-anchor-target="#place"
        data-600-bottom="transform: translateX(0vw);" data--0-bottom="transform: translateX(-25vw);" />

  <!-- Nuage du bas -->
  <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/decorations/little_cloud.png"
        class="cloud cloud--little"
        data-anchor-target="#place"
        data-600-bottom="transform: translateX(0vw);" data--0-bottom="transform: translateX(-25vw);" />