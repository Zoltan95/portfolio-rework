<?php

    $rl = $_SERVER['REQUEST_URI'];
    $bck = "../";
    $active = "active";
    switch ($rl) {

        case '/portfolio-rework/':
            break;
        case '/portfolio-rework/inc/pages/contact.php':
            $l = $bck.$bck;
            $e = $active;
            break; 
        case '/portfolio-rework/inc/pages/scs.php':
            $l = $bck.$bck;
            $c = $active;
            break;
        case '/portfolio-rework/inc/pages/projects.php':
            $l = $bck.$bck;
            $a = $active;
            break;
        case '/portfolio-rework/inc/pages/about.php':
            $l = $bck.$bck;
            $d = $active;
            break;
        case '/portfolio-rework/inc/pages/code-ex.php':
            $l = $bck.$bck;
            $b = $active;
            break;
    }
?>

<div class="navbar-container container">
    <div class="navbar">
        <div>
            <a href="/portfolio-rework/"><h1>Zoltan</h1></a>
        </div>
        <div class="page-links">
            <a class="<?php echo $a;?>" href="<?php echo $l;?>inc/pages/projects.php">My Projects</a>
            <a class="<?php echo $b;?>" href="<?php echo $l;?>inc/pages/code-ex.php">Coding Examples</a>
            <a class="<?php echo $c;?>" href="<?php echo $l;?>inc/pages/scs.php">Scion-Colation Scheme</a>
            <a class="<?php echo $d;?>" href="<?php echo $l;?>inc/pages/about.php">About Me</a>
            <a class="<?php echo $e;?>" href="<?php echo $l;?>inc/pages/contact.php">Contact Me</a>
        </div>
        <div class="mobile-menu">
            <button class="hamburger hamburger--collapse" type="button">
                    <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                    </span>
            </button>
        </div>
    </div>
    <div class="navbar-content">
        <div class="social-links">
            <a href="#">LinkedIn</a>
            <a href="#">Facebook</a>
        </div>
        <div class="page-links">
            <a class="<?php echo $a;?>" href="<?php echo $l;?>inc/pages/projects.php">My Projects</a>
            <a class="<?php echo $b;?>" href="<?php echo $l;?>inc/pages/code-ex.php">Coding Examples</a>
            <a class="<?php echo $c;?>" href="<?php echo $l;?>inc/pages/scs.php">Scion-Colation Scheme</a>
            <a class="<?php echo $d;?>" href="<?php echo $l;?>inc/pages/about.php">About Me</a>
            <a class="<?php echo $e;?>" href="<?php echo $l;?>inc/pages/contact.php">Contact Me</a>
        </div>
    </div>
</div>