
<?php include 'web-service/get-data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags in include file -->
    <?php include 'includes/meta.php'; ?>
    
    <!-- Style CSS -->
    <?php include 'includes/styles.php';?>
 
</head>
<body>
<main>
    <!-- Including the navigation -->
    <?php include 'includes/navigation.php';?>
    
    <!-- Including the master header -->
    
        <?php include 'includes/masthead.php';?>
    
    
    <!-- For printing the products on the page -->
    <div class="container"> 


            <div class="row">
                <h3 id="catalog">PRODUCTS :</h3>
            </div>

            <div class="row g-2 g-lg-3">
                <?php printHTML(); ?>
            </div>

        </div>
    </main>

   <!-- Including the footer  -->
    <?php include 'includes/footer.php'; ?>

    <!-- Including the scripts -->
    <?php include 'includes/scripts.php'; ?>
    
</body>
</html>