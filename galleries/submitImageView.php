<!DOCTYPE html>

<head>

    <?php 
    include (filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/head.php');
    ?>

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
                <?php if(!$message ===''){
                    echo '<span class="error">'.$message.'!!!</span>';
                }?>
                <h3>Select Image For Upload</h3>
                <article class="image_upload">                   
                    <form action="/galleries/submitImage.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="action" value="getImage" >
                        <label>Select Image File:</label><br>
                        <input type="file" name="imageFile" id="fileChooser" onchange="return ValidateFileUpload();">
                        <br>
                        <img src="/uploaded_images/no_pic_available.jpg" id="blah" style="max-height: 150px;" alt="preview image up load.">
                        <br>
                        <label>Give Your Image A Title</label><br>
                        <input type='text' name='title'><br>
                        <label>Details and Descriptions</label><br>
                        <textarea rows="4" cols="24" name="description" id="description">Describe the image and shooting conditions</textarea><br>
                        <button type="submit"> Upload the Image</button>           
                    </form>
                </article>
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