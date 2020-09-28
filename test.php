<?php
$db = mysqli_connect('db', 'root', '', 'testproducts');
$getOrders = $db->query("SELECT * FROM `orders`");
$dataResults = $getOrders->fetch_all(MYSQLI_ASSOC);
$usersWithOrders = array_unique($dataResults);


$dateRange = $db->query("SELECT users.name, orders.created_at, orders.id FROM orders LEFT JOIN users ON orders.created_at between '2020-07-01' and '2020-07-30' AND users.id = orders.user_id WHERE users.name !="NULL";");
$rangedUsers = $dateRange->fetch_all(MYSQLI_ASSOC);
print_r($userSpent);


//
//$res = $db->query("SELECT * FROM users");
//$users = $res->fetch_all(MYSQLI_ASSOC);


//            {foreach from=$users item=user}
//                <tr>
//                    <th scope="row">1</th>
//                    <td>{$user['name']}</td>
//                    <td>Otto</td>
//
//                </tr>
//            {/foreach}
//
//$db->query("SELECT user_id, COUNT(id) as odrers_number FROM orders GROUP BY user_id;")

//SELECT orders.user_id, users.name, COUNT(orders.id) as orders_number FROM orders LEFT JOIN users ON orders.user_id = users.id GROUP BY orders.user_id;

SELECT users.name, orders.created_at, orders.id FROM orders LEFT JOIN users ON orders.created_at between '2020-07-01' and '2020-07-30' AND users.id = orders.user_id WHERE users.name !="NULL";

