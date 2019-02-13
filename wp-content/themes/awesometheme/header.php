<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Awesome Theme</title>
    <?php wp_head(); ?>
</head>

<?php 
    if(is_home()): {
        $awesome_classes = array('awesome-class', 'my-class');
    }else:{
        $awesome_classes = array('no-awesome');
    }
    endif
?>

<body <?php body_class($awesome_classes); ?>>
<?php wp_nav_menu(array('theme_location'=>'primary')); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />