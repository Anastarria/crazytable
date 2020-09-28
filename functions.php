<?php
$db = mysqli_connect('db', 'root', '', 'testproducts');

$res = $db->query("SELECT * FROM users");
$users = $res->fetch_all(MYSQLI_ASSOC);

$pres = $db->query("SELECT * FROM products");
$products = $pres->fetch_all(MYSQLI_ASSOC);



function fillTables()
{
    global $db;
    global $users;
    global $products;

    $names = array(
        'Viserys',
        'Tirion',
        'Drogo',
        'Daeneris',
        'Sersea',
        'Jamie',
        'Bran',
        'John',
        'Arya',
        'Sansa'
    );

//PHP array containing surnames.
    $surnames = array(
        'Walker',
        'Thompson',
        'Anderson',
        'Johnson',
        'Tremblay',
        'Peltier',
        'Cunningham',
        'Simpson',
        'Mercado',
        'Sellers'
    );

// Insert random names
    for ($i=0; $i < 500; ){
        $random_name = $names[mt_rand(0, sizeof($names) - 1)];
        $random_surname = $surnames[mt_rand(0, sizeof($surnames) - 1)];
        $username = $random_name . '' . $random_surname;
        $query= "INSERT INTO `users` SET `name` = '$username'";
        $db->query($query);
        $i++;
    }


    $sells = ['Cinamon', 'Coconut', 'Basil', 'Orange', 'Cardamon', 'Cloves', 'Salt', 'Pepper'];

    foreach ($sells as $sell) {
        $price = rand(1,20);
        $query= "INSERT INTO `products` SET `name` = '$sell', `price` = '$price'";
        $db->query($query);
    }


//Get random users ID start
$userId = [];
foreach ($users as $user) {
    $userId[] = $user['id'];
}
$randomUsers = [];
for ($i=0; $i < 100; ){
    $randomUsers[] = $userId[mt_rand(0, sizeof($userId) - 1)];
    $i++;
}
// Get random users end

// Adding orders for Random users start
foreach ($randomUsers as $randomUser) {
    $randomOrdersNumber = rand(1,8);

    for ($ord=0; $ord <= $randomOrdersNumber; ) {
        //Get random date start
        $start = strtotime("1 June 2020");
        $end = strtotime("30 August 2020");
        $creationDate = mt_rand($start, $end);
        $dateString = date("Y-m-d H:i:s",$creationDate);
        //Get random date start end


        //Get random product start
        $productName = [];
        foreach ($products as $product) {
            $productName[] = $product['id'];
        }
        $key = array_rand($productName);
        $randomProduct = $productName[$key];
        //Get random product end
        $query= "INSERT INTO `orders` SET `user_id` = '$randomUser', `product_id` = '$randomProduct', `created_at` = '$dateString'";
        $db->query($query);
        $ord++;
    }
}
    header("Location:/");
}

function flushTables()
{
    global $db;
    $removeOrders = "TRUNCATE TABLE `orders`";
    $db->query($removeOrders);

    $removeProducts = "TRUNCATE TABLE `products`";
    $db->query($removeProducts);

    $removeUsers = "TRUNCATE TABLE `users`";
    $db->query($removeUsers);
    header("Location:/");
}

function tablesDisplay()
{
    global $smarty;
    global $users;
    global $products;
    global $orders;

    $smarty->assign('topProducts', topProducts());
    $smarty->assign('spends', moneySpent());
    $smarty->assign('orders', getUserOrdersData());
    $smarty->assign('rangedUsers', rangedUsers());

    $smarty->display('index.tpl');
}

function getUserOrdersData()
{
    global $db;
    $selection = $db->query("SELECT orders.user_id, users.name, COUNT(orders.id) as orders_number FROM orders LEFT JOIN users ON orders.user_id = users.id GROUP BY orders.user_id ORDER BY orders_number desc;");
    $sorted = $selection->fetch_all(MYSQLI_ASSOC);
    return $sorted;
}

function moneySpent()
{
    global $db;
    $moneySpent = $db->query("SELECT users.name, SUM(products.price) as total_sum FROM orders LEFT JOIN products ON products.id = orders.product_id LEFT JOIN users ON orders.user_id = users.id GROUP BY orders.user_id;");
    $userSpent = $moneySpent->fetch_all(MYSQLI_ASSOC);
    return $userSpent;
}

function topProducts()
{
    global $db;
    $totalProducts = $db->query("SELECT products.name, SUM(products.price) as total_sum FROM orders LEFT JOIN products ON products.id = orders.product_id LEFT JOIN users ON orders.user_id = users.id GROUP BY orders.product_id ORDER BY total_sum desc LIMIT 3;");
    $topThree = $totalProducts->fetch_all(MYSQLI_ASSOC);
    return $topThree;
}

function rangedUsers()
{
    global $db;
    $dateRange = $db->query("SELECT users.name, orders.created_at, orders.id FROM orders LEFT JOIN users ON orders.created_at between '2020-07-01' and '2020-07-30' AND users.id = orders.user_id WHERE users.name !='NULL'");
    $rangedUsers = $dateRange->fetch_all(MYSQLI_ASSOC);
    return $rangedUsers;
}