<!DOCTYPE html>

<head>
    <title>This Page Allows You to Make Changes to Your User Account Settings</title>
    <?php include '../modules/head.php'; ?>

</head>

<body>





    <div id="pageWrapper">

        <header id="pageHeader">
            <?php include ('../modules/header.php'); ?>
        </header>


        <div id="contentWrapper" class="clearfix">
            <nav id="pageNav">
                <?php include  '../modules/navigation.php'; ?>
            </nav>


            <section id="mainContentSection">
                <h3><?php echo $message; ?></h3>
                <article class="sectionArticle">
                    <form class ="smart-form" action="/users/alterUser.php" method="post" onsubmit="return checkUpdate(this);">
                        <h1>Enter Desired Changes</h1>
                        <input type="hidden" name="verifyPassword" value="<?php echo $user['password']; ?>">

                        <label>Username:</label><br>
                        <input type="text" name="username" value = "<?php echo $user['username']; ?>" required pattern="\w+"><br>

                        <label>Email:</label><br>
                        <input type="text" name="email" value="<?php echo $user['email']; ?>" required ><br>
                        
                        <label>Current Password:</label><br>
                         <input type="password" name="password" placeholder="Create Your Password - Required" required=''><br>
                        
                        <label>New Password:</label><br>
                        <input type="password" name="newPassword" value="<?php echo $user['password']; ?>" required=""><br>
                        <p>Password must be at least 8 characters and have at least one capital letter and one number</p><br>
                        
                        <button type="submit">Update Account</button><br>
                    </form>
                    <form class="smart-form" action="/users/deleteUser.php" method="post">
                        <input type='hidden' name='userID' value="<?php echo $user['userID'];?>">
                        <input type='hidden' name='username' value="<?php echo $user['username'];?>">
                        <button type='submit'>Delete This User</button>
                    </form>
                </article>
                
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
            <?php include '../modules/footer.php'; ?>
        </footer>
    </div>
</body>
</html>