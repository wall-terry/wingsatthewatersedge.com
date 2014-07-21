<!DOCTYPE html>

<head>

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
                <header class="sectionHeader"><h3>Header To the Main Content Area</h3></header>
                <article class="sectionArticle"><h3>The Main Content Area</h3></article>
                <footer class="sectionFooter"><h3>Footer to the Main Content Area</h3></footer>
            </section>

            <aside id="pageAside">
                <?php if (!isset($_SESSION['username'])) : ?>
                    <?php include ('modules/login.php'); ?>
                <?php endif; ?>
                <h2>Whats New?</h2>
            </aside>
        </div>
        <footer id="pageFooter">
            <?php include ('modules/footer.php'); ?>
        </footer>
    </div>
</body>
</html>