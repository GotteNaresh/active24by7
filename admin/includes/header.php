<?php
include('config.php');
?>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="Laborator.co" />
    <link rel="icon" href="<?php echo $base_url?>/assets/images/favicon.ico">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141030632-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-141030632-1', {
        "groups": "laborator_analytics",
        "link_attribution": true,
        "linker": {
          "accept_incoming": true,
          "domains": ["laborator.co", "kaliumtheme.com", "oxygentheme.com", "neontheme.com", "themeforest.net", "laborator.ticksy.com"]
        }
      });
    </script>
    <title>Neon | Tiles</title>
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/css/font-icons/entypo/css/entypo.css" id="style-resource-2">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3">
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/css/bootstrap.css" id="style-resource-4">
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/css/neon-core.css" id="style-resource-5">
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/css/neon-theme.css" id="style-resource-6">
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/css/neon-forms.css" id="style-resource-7">
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/css/custom.css" id="style-resource-8">
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/css/custom-styles.css" id="style-resource-8">
    <script src="../assets/js/jquery-1.11.3.min.js"></script>
    
    <!--[if lt IE 9]>
													<script src="https://demo.neontheme.com/assets/js/ie8-responsive-file-warning.js"></script>
													<![endif]-->
    <!--[if lt IE 9]>
													<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
													<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
													<![endif]-->
  </head>