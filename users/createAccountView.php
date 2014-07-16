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
                <header class="sectionHeader"><h3>Please Fill In Every Box</h3></header>
                <article class="sectionArticle">
                    <form action="/users/createUserAccount.php" method="post" onsubmit="return checkForm(this);">
                        <input type="hidden" name="action" value="newAccount">

                        <label>Username:</label><br>
                        <input type="text" name="username" required pattern="\w+"><br>

                        <label>Email:</label><br>
                        <input type="text" name="email" required ><br>
                        <label>Password:</label><br>
                        
                        <input type="password" name="password" required=""><br>
                        <p>Password must be at least 8 characters and have at least one capital letter and one number</p><br>
                        <label>Confirm Password:</label><br>
                        <input type="password" name="verify_password" required=""><br>

                        <button type="submit">Create Account</button><br>
                    </form>
                </article>
                <footer class="sectionFooter"><h3>Thank You For Joining!!</h3></footer>
            </section>

            <aside id="pageAside">
                <h2>Whats New?</h2>
            </aside>
        </div>
        <footer id="pageFooter">
            <?php include (filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/footer.php'); ?>
        </footer>
    </div>
</body>
</html>