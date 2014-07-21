
<!DOCTYPE html>

<head>
    <title>Create A New Bolog Entry</title>
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
                <header class="sectionHeader"><h3>Create a New Blog Entry</h3></header>
                <form class="blog_entry" action="/article/postArticle.php" onsubmit="TRUE">
                    <label>Title:</label>
                    <input type="text" name="title" value="Enter the Title Here"><br>
                    <textarea id="article_body" name="text" rows="40" cols="50" >
                        Create Your Article Text Here
                    </textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace('article_body');
                    </script>
                    <button type="submit">Post This Article</button>
                </form>
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