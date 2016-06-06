<?php
require('indexCommon/indexHead.php');
?>

<body>
<!-- Navigation -->
    <?php
    require('indexCommon/indexNav.php');
    ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Emily's Blog</h1>
                        <hr class="small">
                        <span class="subheading">Learning notes for PHP, AngularJS, Laravel, Wordpress, AWS...</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="../post/post1.php">
                        <h2 class="post-title">
                           Where should I put my PHP file?
                        </h2>
                        <h3 class="post-subtitle">
                            cd  /Library/WebServer/Documents/
                        </h3>
                    </a>
                    <p class="post-meta">Posted on<a href="#"> May 30, 2016</a></p>
                </div>


                <hr>
                <div class="post-preview">
                    <a href="../otherStuff/pageSample/post.html">
                        <h2 class="post-title">
                            Empty Here...
                        </h2>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="../otherStuff/pageSample/post.html">
                        <h2 class="post-title">
                            Be patient...
                        </h2>
                        <h3 class="post-subtitle">
                           ...........
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="../otherStuff/pageSample/post.html">
                        <h2 class="post-title">
                            Please wait for future update...
                        </h2>
                        <h3 class="post-subtitle">
                            .........
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
                </div>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

<!-- Footer -->
<?php
require('indexCommon/indexFooter.php');
?>
