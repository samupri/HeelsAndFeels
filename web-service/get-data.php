<?php

function queryCollect($prod_code)
{
    include 'db-connection\connect.php';
    
    //get webserver to select from the database
    //retrieve the data
    $q = "SELECT * FROM products";
    $record_sets = mysqli_query($conn, $q);
    
    // collect all record-sets as associative arrays inside $data array
    $data = [
        'error' => '',
        'products' => []
    ];
    

    //if the code entered by the user matches with the given, corresponding data is fetched from the database
    if($prod_code)
    {
        $q = "SELECT * FROM products WHERE prod_code = '". $prod_code ."';";

    }
    
    $result = mysqli_query($conn, $q);

    if($record_sets)
    {
        while($row = mysqli_fetch_assoc($record_sets))
        {
            // collecting all associative arrays
            array_push($data['products'], $row);
        }

    }
        else
        {
            $err = '<p>Oops ! This query does not work !</p>';
            $data['error'] = $err;
        }

            return $data;

// close queryCollect function          
}

// PRINT HTML:
// Create function printHTML.
function printHTML()
{
    $selectArray = [];
    
     //If product code is 
    // in $_GET array, it means user selected it, and you will 
    // print only the products of the selected type, otherwise
    // print all products.
    if(isset($_GET['prod_code']))
    {
        $selectArray = queryCollect($_GET['prod_code']);
        $products = $selectArray['products'];
    }


    else
    {
        echo '<p>All products : </p>';
        $selectArray = queryCollect($prod_code = "");
        
    }
    if(!empty($selectArray['error']))
    {
    echo $selectArray['error'];
    }
    else{
        $products = $selectArray['products'];
    }

    
    // You need to loop through the array of selected products,
    foreach($products as $product)
    {
        echo '<div class="card col col-12 col-md-6 col-lg-3 mb-0">
                <figure class="card-body p-3 mb-5 bg-body rounded">
                    <img src="' . $product["prod_image"] . '" class="card-img-top img-fluid" "alt="' . $product["prod_name"] . '" />
                    <figcaption>
                        <ul>
                            <li class="card-text text-center">' . $product["prod_name"] . '</li>
                            <li class="card-text text-center">' . $product["prod_price"] . '</li>
                        </ul>
                    </figcaption>
                </figure>
            </div>';
    // Close loop.
    }
    
// Close printHTML.
}
?>
