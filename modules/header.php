<?php if (isset($_SESSION['username'])) : ?>

    <div class = "username"> 
        
        <?php echo 'Welcome ' . $_SESSION['username']; ?> 
        <a href="/users/logout.php">Logout</a>
        
    </div>

<?php endif; ?>

<img class="headerimage" src=" /images/Snowy_Egret.JPG" alt="Snowy Egret wading in a deep blue pond">

<h1 class="headertitle">Wings at the Waters Edge</h1>
