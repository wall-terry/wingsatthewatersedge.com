<!DOCTYPE html><!DOCTYPE html>

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
                               
				<header class="sectionHeader"><h3>Enter Username and Password</h3></header>
                                 <?php if (isset($error_message)){ 
                                    echo '<span class="error">'.$error_message.'</span>';
                                    
                                } ?>
				<article class="sectionArticle"><h3><?php include (filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . '/modules/login.php'); ?></h3></article>
				<footer class="sectionFooter"><h3>Thank you for stopping by.</h3></footer>
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