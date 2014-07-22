<!DOCTYPE html>

<head>
    <title> This is the Video Presentation of ISAM vs INNODB'</title>
    <?php include ( 'modules/head.php'); ?>

</head>

<body>




    <div id="pageWrapper">

        <header id="pageHeader">
            <?php include ( 'modules/header.php'); ?>
        </header>


        <div id="contentWrapper" class="clearfix">
            <nav id="pageNav">
                <?php include ('modules/navigation.php'); ?>
            </nav>

            
            <section id="mainContentSection">

                
                <h3><?php echo $articles[0]['title']; ?></h3><br>

                <article>
                    <h1>MyISAM vs. INNODB</h1>
                    <video controls="controls" autoplay="autoplay" width="640" height="480">
                        <source src="media/MyISAM vs INNODB_x264.mp4" type="video/mp4" />
                        <source src="media/MyISAM vs INNODB_libtheora.ogv" type="video/ogg" />
                        Your browser does not support the video tag.
                    </video>
                </article>
            </section>

            <aside id="pageAside">
                <?php if (!isset($_SESSION['username'])) : ?>
                    <?php include ('modules/login.php'); ?>
                <?php endif; ?>
                <h2>Whats New?</h2>
                <?php $articles = getAllArticles('LIMIT 0,3'); ?>
                <?php foreach ($articles as $article) : ?>
                    <a href="/articles/article.php?articleID=<?php echo $article['articleID']; ?>"> 
                        <h3><?php echo $article['title']; ?></h3>
                    </a>
                    <article><?php echo $article['description']; ?></article><br>
                    <a href="/articles/article.php?articleID=<?php echo $article['articleID']; ?>">Read More</a>

                <?php endforeach; ?>             
            </aside>
        </div>
        <footer id="pageFooter">
            <?php include ('modules/footer.php'); ?>
        </footer>
    </div>
</body>
</html>