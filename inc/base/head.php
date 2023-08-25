<?php
    if(session_status() !== PHP_SESSION_ACTIVE) {session_start();}

    $au = "Zoltan Urban";
    $bck = "../";

    $rl = $_SERVER['REQUEST_URI'];
    $t = "";
    $d = "";
    $l = "";
    $a = "";
    switch ($rl) {

        case '/portfolio-rework/':
            $t = "Portfolio | " . $au;
            $d = 
            "I am a Web Debeloper
            See a showcase of my projects and skills,
            on this site.
            Any enquiry, please get in touch through Email or Phone.";
            break;

        case '/portfolio-rework/inc/pages/contact.php':
            $t = "Contat Me | " . $au;
            $d = 
            "I am a Web Debeloper
            See a showcase of my projects and skills,
            on this site.
            Any enquiry, please get in touch through Email or Phone.";
            $l = $bck.$bck;
            break;

        case '/portfolio-rework/inc/pages/scs.php':
            $t = "SCS | " . $au;
            $d = 
            "I am a Web Debeloper
            See a showcase of my projects and skills,
            on this site.
            Any enquiry, please get in touch through Email or Phone.";
            $l = $bck.$bck;
            break;
        case '/portfolio-rework/inc/pages/projects.php':
            $t = "Projects | " . $au;
            $d = 
            "I am a Web Debeloper
            See a showcase of my projects and skills,
            on this site.
            Any enquiry, please get in touch through Email or Phone.";
            $l = $bck.$bck;
            break;
        case '/portfolio-rework/inc/pages/about.php':
            $t = "About | " . $au;
            $d = 
            "I am a Web Debeloper
            See a showcase of my projects and skills,
            on this site.
            Any enquiry, please get in touch through Email or Phone.";
            $l = $bck.$bck;
            break;
        case '/portfolio-rework/inc/pages/code-ex.php':
            $t = "Coding Examples | " . $au;
            $d = 
            "I am a Web Debeloper
            See a showcase of my projects and skills,
            on this site.
            Any enquiry, please get in touch through Email or Phone.";
            $l = $bck.$bck;
            break;
    }
?>

<?php ////// HTML Code ////// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="<?php echo $au;?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $a;?>
    <link rel="stylesheet" href="<?php echo $l;?>css/application.css">
    <link rel="icon" type="image/x-icon" href="<?php echo $l;?>img/favicon.ico">
    <title><?php echo $t;?></title>
    <meta name="description" content="<?php echo $d;?>">
</head>
<body>