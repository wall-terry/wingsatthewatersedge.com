<!DOCTYPE html>

<head>
    <title>View of Selected Published Blog Post</title>
    <?php include (filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/head.php'); ?>

</head>

<body>




    <div id="pageWrapper">

        <header id="pageHeader">
            <?php include (filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/header.php'); ?>
        </header>


        <div id="contentWrapper" class="clearfix">
            <nav id="pageNav">
                <?php include (filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/navigation.php'); ?>
            </nav>

            <section id="mainContentSection">               
             
               
                    <article>
                         <h3><?php echo $article['title'];?></h3><br>
                        <?php echo $article['content'];?>
                    </article> 
            
                <?php if($_SESSION['username'] == $article['username']): ?>
                <form class="smart-form" action="/articles/editArticle.php" method="post">
                    <input type='hidden' name='articleID' value="<?php echo $article['articleID'];?>">
                    <button type='submit'>Edit This Article</button>
                </form>
                <form class="smart-form" action="/articles/deleteArticle.php" method="post">
                    <input type='hidden' name='articleID' value="<?php echo $article['articleID'];?>">
                    <input type='hidden' name='username' value="<?php echo $article['username'];?>">
                    <button type='submit'>Delete This Article</button>
                </form>
                <?php endif ?>
            </section>
            <aside id="pageAside">
               <?php if (!isset($_SESSION['username'])) : ?>
                    <?php include ('../modules/login.php'); ?>
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
            <?php include (filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/footer.php'); ?>
        </footer>
    </div>
</body>
</html>