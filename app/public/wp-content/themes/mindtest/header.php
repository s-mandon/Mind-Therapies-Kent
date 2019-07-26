<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>
<div class="nav-container">
<nav class="navbar ml-auto navbar-default navbar-expand-sm desktop-nav">
          <ul class="desktop desktop-nav navbar-nav">
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url();?>">HOME</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/services');?>">SERVICES</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/workshops');?>">WORKSHOPS</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/be-a-hero');?>">BE A HERO</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/contact');?>">CONTACT</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/contact');?>">PRIVACY</a></li>
            <li><a href="#"><img src="https://i.imgur.com/2okuHS8.png" alt="mind therapies kent logo"></a>
                  </ul>
            </div>
          </nav>