
<!DOCTYPE html>

<head>
    <title>Paged List of Published Blog Posts</title>
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
                <header class="sectionHeader"><h3>Recent Blog Entries</h3></header>
                <div class="pagination">

                    <?php
                    echo $pages->display_items_per_page();
                    echo $pages->display_jump_menu();
                    echo $pages->display_pages();
                    ?>

                </div>
                <div class="blog_list">
                    <?php foreach ($articles as $article) : ?>
                    <a href="/articles/article.php.php?articleID=<?php echo $image['imageID'];?>"> 
                            <image class ="thumbnail" src= "/uploaded_images/<?php echo $image['filename'];?>" alt="<?php echo $image['title'];?>">
                        </a>
                    <?php endforeach; ?>
                </div>
            </section>

            <aside id="pageAside">
                <?php if (!isset($_SESSION['username'])) : ?>
                    <?php include (filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/login.php'); ?>
                <?php endif; ?>
                <h2>Whats New?</h2>
            </aside>
        </div>
        <footer id="pageFooter">
            <?php include (filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/footer.php'); ?>
        </footer>
    </div>
</body>
</html>