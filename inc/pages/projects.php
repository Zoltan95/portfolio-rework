<?php 
include '../base/head.php';
    include '../modules/navbar.php';
?>
    <main>
        <div class="projects-container container">
            <h1>Projects</h1>
            <div class="projects-container__holder">
                <div class="projects-card">
                    <div class="projects-card__img">
                        <a class="projects-card__codesample-link" href="https://github.com/Zoltan95/netmatters" target=”_blank”>Code Sample</a>
                        <a class="projects-card__img-link" href="https://netmatters.zoltan-urban.netmatters-scs.co.uk/" target=”_blank”>
                            <img src="../../img/projects/netmatters-reflection-page.png" alt="Picture of Netmatters Website Reflection Project">
                        </a>
                    </div>
                    <div class="projects-card__text">
                        <h3>Netmatters Website Reflection</h3>
                        <p>HTML, CSS (SASS), JS</p>
                        <p>Develop the following website page and rebuild it using HTML and SASS.</p>
                        <p>The site should be a mirror of the Netmatters homepage.</p>
                        <a href="https://www.netmatters.co.uk/">https://www.netmatters.co.uk</a>
                        <br>
                        <br>
                        <div class="projects-card__text-date">
                            <p>05/06/2023</p>
                        </div>
                    </div>
                </div>
                <?php
                /*
                foreach (get_projects_list() as $item) {
                echo "<div class='projects-card'>";
                        echo "<div class='projects-card__img'>";
                            echo "<a class='projects-card__codesample-link' href='https://github.com/Zoltan95/netmatters' target='_blank'>Code Sample</a>";
                            echo "<a class='projects-card__img-link' href='https://netmatters.zoltan-urban.netmatters-scs.co.uk/' target='_blank'>";
                                echo "<img src='../../img/projects/netmatters-reflection-page.png' alt='Picture of Netmatters Website Reflection Project'>";
                            echo "</a>";
                        echo "</div>";
                        echo "<div class='projects-card__text'>";
                        echo "<h3>Netmatters Website Reflection</h3>";
                            echo "<p>HTML, CSS (SASS), JS</p>";
                            echo "<p>Develop the following website page and rebuild it using HTML and SASS.</p>";
                            echo "<p>The site should be a mirror of the Netmatters homepage.</p>";
                            echo "<a href='https://www.netmatters.co.uk/'>https://www.netmatters.co.uk</a>";
                            echo "<br>";
                            echo "<br>";
                            echo "<div class='projects-card__text-date'>";
                                echo "<p>05/06/2023</p>";
                                echo "</div>";
                        echo "</div>";
                echo "</div>";
                }
                */        
                ?>
            </div>
        </div>
    </main>
<?php
include '../base/foot.php';
?>