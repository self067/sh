<h2 style="padding: 10px; text-align: center">Корзина</h2>

<?php
$this->title = 'Корзина ';
//if(is_array($session['cart'])) {
  if(is_array($session['cart'])) {
?>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Фото</th>
        <th scope="col">Наименование</th>
        <th scope="col">Количество</th>
        <th scope="col">Цена, рублей</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php
        foreach( $session['cart'] as $id => $product) {
        ?>
        <tr>
            <td style="vertical-align: middle" width="150"><img src="/img/<?=$product['img']?>" alt="<?=$product['name']?>"</td>
            <td style="vertical-align: middle"><?=$product['name']?></td>
            <td style="vertical-align: middle"><?=$product['productQuantity']?></td>
            <td style="vertical-align: middle; text-align: right;"><?=number_format($product['price']*$product['productQuantity'])?></td>
            <td class="delete" data-id="<?=$id?>" style="text-align: center; cursor: pointer; vertical-align: middle; color: red"><span>&#10006;</span></td>
        </tr>
        <?php } ?>

    <tr style="border-top: 4px solid black">
        <td colspan="4">Всего товаров</td>
        <td class="total-quantity text-align-right"><?=$session['cart.totalQuantity']?></td>
    </tr>
    <tr>
        <td colspan="4">На сумму </td>
        <td style="font-weight: 700;"><?=$session['cart.totalSum']?></td>
    </tr>
    </tbody>
</table>

<div class="modal-buttons" style="display: flex; padding: 15px; justify-content: space-around">
    <button type="button" class="btn btn-danger" onclick="clearCart(event)">Очистить корзину</button>
    <button type="button" class="btn btn-secondary btn-close">Продолжить
        покупки</button>
    <button type="button" class="btn btn-success btn-next">Оформить заказ</button>
</div>


<?php } else{ ?>
<h3>Ваша корзина пуста </h3>
<button type="button" class="btn btn-secondary btn-close" style="width: 200px;">Начать покупки</button>
<?php
}
