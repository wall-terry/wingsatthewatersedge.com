
<!DOCTYPE html>

<head>
    <title>Edit Your Blog Post</title>
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
                <form class="smart-form" action="/articles/alterArticle.php" method="post" >
                    <h1>Edit Your Blog Entry</h1>
                    <label>Title:</label>
                    <input type="hidden" name='articleID' value="<?php echo $article['articleID'];?>">
                    <input type="hidden" name='username' value="<?php echo $article['username'];?>">
                    <input type="text" name="title" value="<?php echo $article['title'];?>"><br>
                    <textarea id="article_body" name="text" rows="40" cols="50" placeholder="Created Your Article Here" >
                      <?php echo $article['content'];?>
                    </textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace('article_body');
                    </script>
                    <button type="submit">Save Changes</button>
                </form>
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