<ul>
    
    <li>  <a href="/index.php">Home</a></li>
    <li>  <a href="http://wingsatthewatersedge.com/galleries/gallery.php">Gallery</a></li>
    <li>  <a href="/articles/articles.php">Articles</a></li>
    <?php if(isset($_SESSION['userID'])) {
    echo '<li>  <a href="/articles/newArticle.php">Publish</a></li>';
    echo '<li>  <a href="/galleries/submissions.php">Submissions</a></li>';
    }
    ?>
    <li>  <a href="/index.php?action=login">Log in</a></li>
    
</ul>
