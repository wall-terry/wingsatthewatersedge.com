
<!DOCTYPE html>

<head>

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
                <header class="sectionHeader"><h3>Image Gallery<?php echo $imageID; ?></h3></header>
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