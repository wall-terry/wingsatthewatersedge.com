<!DOCTYPE html>

<head>
    <title>This is the home page</title>
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

            <section class="featuredSection">
                <img src="/images/Legg%20Lake%20Green%20Heron.jpg" alt="Green Heron Hiding in the reeds">
            </section>
            <section class="featuredSection">
                <img src="/images/Bewicks%20Wren.JPG" alt="Bewicks Wren amongst the wildflowers">
            </section>
            <section class="featuredSection">
                <img src="/images/Black%20Necked%20Stilt.JPG" alt="Black Necked Stilt Wadingin the Shallows.">
            </section>
            <section id="mainContentSection">

                <?php $articles = getAllArticles('LIMIT 0,1'); ?>
                <h3><?php echo $articles[0]['title']; ?></h3><br>

                <article>
                    <?php echo $articles[0]['content']; ?>
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