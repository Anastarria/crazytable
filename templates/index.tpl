<html>
<head>
    <title>{block name="title"}{/block}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<div clas="row">
    <a href="/?action=fillTables" class="btn btn-secondary btn-block" role="button">Fill Tables</a><br>
    <a href="/?action=flushTables" class="btn btn-secondary btn-block" role="button">Flush Data</a><br>


</div>
<div class="row">
    <div class="col-md-3">
        <table class="table">
            <thead>
            <tr class="thead-dark">
                <th colspan="4" style="text-align: center">Users sorted by Number of orders</th>
            </tr>
            <tr class="thead-light" >
                <th scope="col">User</th>
                <th scope="col">Number of Orders</th>

            </tr>
            </thead>
            <tbody>
            {foreach from=$orders item=order}
                <tr>
                    <td>{$order['name']}</td>
                    <td>{$order['orders_number']}</td>

                </tr>
            {/foreach}


            </tbody>
        </table>
    </div>


    <div class="col-md-3">
        <table class="table">
            <thead>
            <tr class="thead-dark">
                <th colspan="4" style="text-align: center">Sum spent by each user</th>
            </tr>
            <tr class="thead-light">
                <th scope="col">User</th>
                <th scope="col">Sum spent</th>
            </tr>
            </thead>
            <tbody>
            {foreach from=$spends item=spend}
                <tr>
                    <td>{$spend['name']}</td>
                    <td>{$spend['total_sum']} $</td>
                </tr>
            {/foreach}

            </tbody>
        </table>
    </div>


    <div class="col-md-3">
        <table class="table">
            <thead>
            <tr class="thead-dark">
                <th colspan="4" style="text-align: center">Top 3 Products</th>
            </tr>
            <tr class="thead-light">
                <th scope="col">Product</th>
                <th scope="col">Sum Earned</th>
            </tr>
            </thead>
            <tbody>
            {foreach from=$topProducts item=topProduct}
                <tr>
                    <td>{$topProduct['name']}</td>
                    <td>{$topProduct['total_sum']} $</td>
                </tr>
            {/foreach}

            </tbody>
        </table>
    </div>


    <div class="col-md-3">
        <table class="table">
            <thead>
            <tr class="thead-dark">
                <th colspan="4" style="text-align: center">Orders made between 2020-07-01 and 2020-07-30</th>
            </tr>
            <tr class="thead-light">
                <th scope="col">User</th>
                <th scope="col">Order_id</th>
                <th scope="col">Date</th>
            </tr>
            </thead>
            <tbody>
            {foreach from=$rangedUsers item=rangedUser}
                <tr>
                    <td>{$rangedUser['name']}</td>
                    <td>{$rangedUser['id']}</td>
                    <td>{$rangedUser['created_at']}</td>
                </tr>
            {/foreach}


            </tbody>
        </table>
    </div>
</div>


</body>
</html>