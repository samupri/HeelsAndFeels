<!-- Inside navbar, you will have a drop-down menu for selecting type 
of a product.  -->

<nav class="navbar navbar-expand-md navbar-dark bg-dark ">

    <div class="container-fluid">

        <a class="navbar-brand" href="index.php">
        <img src="img\logo.png" alt="" width="40" height="auto" class="d-inline-block align-text-top">
        
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" 
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Products
                    </a>

                    <!-- Inside navbar, you will have a drop-down menu for selecting type of a product.
                    Drop-down has 3 items. These items are links. Href
                    attribute of each link will point to index.php. 
                    Each link will also contain a unique query-string-value. This value 
                    is unique because it defines a type of a product. -->

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                    <!-- When a link of drop-down menu is clicked, it calls index.php and passes a unique value of 
                    product-type to $_GET array.  -->
                        <li><a class="dropdown-item" href="index.php?prod_code=shoe">Shoes</a></li>
                        <li><a class="dropdown-item" href="index.php?prod_code=blt">Belts</a></li>
                        <li><a class="dropdown-item" href="index.php?prod_code=brc">Bracelets</a></li>
                    </ul>

                </li>
            </ul>
        </div>
    </div>

</nav>