<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <script type="text/javascript" src="//use.typekit.net/lvu7qli.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  
  <meta name="robots" content="index, follow" />

  <?php echo css('assets/styles/styles.css') ?>
  <?php echo js('http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js') ?>
<?php echo js('assets/js/jquery.masonry.min.js') ?>
<?php echo js('assets/js/jquery.lettering.js') ?>
<?php echo js('assets/js/jquery.wookmark.js') ?>


<script>$(document).ready(function() {
			$(".content h1").lettering('words').children("span").css({'display':'inline-block', '-webkit-transform':'rotate(-20deg)', '-moz-transform':'rotate(-20deg)' });
			
		});
        
        
        </script>
        
        

</head>

<body>


  <header>
    <h1><a href="<?php echo url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>" width="100%" alt="<?php echo html($site->title()) ?>" /></a></h1>
  </header>