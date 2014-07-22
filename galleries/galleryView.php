
<!DOCTYPE html>

<head>
    <title>This View Shows Paged Thumbnails of All the Gallery Images</title>
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
                <h3>Image Gallery<?php echo $imageID; ?></h3>
                <div class="pagination">

                    <?php
                    echo $pages->display_items_per_page();
                    echo $pages->display_jump_menu();
                    echo $pages->display_pages();
                    ?>

                </div>
                <div class="gallery">
                    <?php foreach ($images as $image) : ?>
                        <a href="/galleries/image.php?imageID=<?php echo $image['imageID'];?>"> 
                            <image class ="thumbnail" src= "/uploaded_images/<?php echo $image['filename'];?>" alt="<?php echo $image['title'];?>">
                        </a>
                    <?php endforeach; ?>
                </div>
                
                <div class="pagination"><?php echo $pages->display_pages();?></div>
                    
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