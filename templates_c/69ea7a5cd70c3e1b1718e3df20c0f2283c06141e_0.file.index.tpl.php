<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-28 17:39:51
  from '/laravel/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f721fe77d6845_86147939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ea7a5cd70c3e1b1718e3df20c0f2283c06141e' => 
    array (
      0 => '/laravel/templates/index.tpl',
      1 => 1601314788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f721fe77d6845_86147939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20426034895f721fe77cd567_43992949', "title");
?>
</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"><?php echo '</script'; ?>
>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['order']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['order']->value['orders_number'];?>
</td>

                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spends']->value, 'spend');
$_smarty_tpl->tpl_vars['spend']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['spend']->value) {
$_smarty_tpl->tpl_vars['spend']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['spend']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['spend']->value['total_sum'];?>
 $</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topProducts']->value, 'topProduct');
$_smarty_tpl->tpl_vars['topProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['topProduct']->value) {
$_smarty_tpl->tpl_vars['topProduct']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['topProduct']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['topProduct']->value['total_sum'];?>
 $</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rangedUsers']->value, 'rangedUser');
$_smarty_tpl->tpl_vars['rangedUser']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rangedUser']->value) {
$_smarty_tpl->tpl_vars['rangedUser']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['rangedUser']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['rangedUser']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['rangedUser']->value['created_at'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


            </tbody>
        </table>
    </div>
</div>


</body>
</html><?php }
/* {block "title"} */
class Block_20426034895f721fe77cd567_43992949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20426034895f721fe77cd567_43992949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
}
