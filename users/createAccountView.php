<!DOCTYPE html>

<head>
    <title>This is Where You Create Your User Account</title>
    <?php include 'modules/head.php'; ?>

</head>

<body>





    <div id="pageWrapper">

        <header id="pageHeader">
            <?php include ('modules/header.php'); ?>
        </header>


        <div id="contentWrapper" class="clearfix">
            <nav id="pageNav">
                <?php include  'modules/navigation.php'; ?>
            </nav>


            <section id="mainContentSection">
                <h3>Please Fill In Every Box</h3>
                <article class="sectionArticle">
                    <form class ="smart-form" action="/users/createUserAccount.php" method="post" onsubmit="return checkForm(this);">
                        <h1>Please Fill In Every Box</h1>
                        <input type="hidden" name="action" value="newAccount">

                        <label>Username:</label><br>
                        <input type="text" name="username" placeholder="User Name is Required" required pattern="\w+"><br>

                        <label>Email:</label><br>
                        <input type="text" name="email" placeholder="Email Address is Required" required ><br>
                        <label>Password:</label><br>
                        
                        <input type="password" name="password" placeholder="Create Your Password - Required" required=''><br>
                        <p>Password must be at least 8 characters and have at least one capital letter and one number</p><br>
                        <label>Confirm Password:</label><br>
                        <input type="password" name="verify_password" placeholder="Retype Yor Password Exactly As You Entered It. " required=""><br>

                        <button type="submit">Create Account</button><br>
                    </form>
                </article>
                <footer class="sectionFooter"><h3>Thank You For Joining!!</h3></footer>
            </section>

            <aside id="pageAside">
                <?php if (!isset($_SESSION['username'])) : ?>
                    <?php include ('/modules/login.php'); ?>
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
            <?php include 'modules/footer.php'; ?>
        </footer>
    </div>
</body>
</html>