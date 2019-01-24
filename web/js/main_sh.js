function openCart(event) {
  event.preventDefault();

  $.ajax({
    url: '/cart/open',
    type: 'GET',
    success: function(res) {
      // alert(res);
      $('#cart .modal-content').html(res);
      $('#cart').modal('show');
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(xhr.status +" "+thrownError);
    }
  });

}


$('.product-button__add').on('click', function (event) {
  event.preventDefault();
  let name = $(this).data('name');
  console.log();

//  ?????????????????????????????????????????

//
  console.log(name);
//
  $.ajax({
    url: '/cart/add',
    data: {name: name},
    type: 'GET',
    success: function(res) {
      // alert('Success');
      $('#cart .modal-content').html(res);
//    <?=isset($_SESSION['cart.totalQuantity']) ? $_SESSION['cart.totalQuantity'] : 0?> products, $<?=isset($_SESSION['cart.totalSum']) ? $_SESSION['cart.totalSum'] : 0?>
      $('.menu-quantity').html('('+$('.total-quantity').html()+')');
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(xhr.status +" "+thrownError);

    }
  });
} );

//modal-content
$('.cart-table').on('click', '.delete', function () {
  let id = $(this).data('id');
  console.log(id);
  $.ajax({
    url: '/cart/delete',
    data: {id: id},
    type: 'GET',
    success: function(res) {
      // alert('Success');
      $('#cart .modal-content').html(res);
      if($('.total-quantity').html())
        $('.menu-quantity').html('('+$('.total-quantity').html()+')');
      else
        $('.menu-quantity').html('(0)');

    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(xhr.status +" "+thrownError);
    }
  });
})

////////////////////////////////////////////////////////////////////////
$('.modal-content').on('click', '.btn-next', function () {
  $.ajax({
    url: '/cart/order',
    type: 'GET',
    success: function(res) {
      // alert('Success');
      $('#order .modal-content').html(res);
      $('#cart').modal('hide');
      $('#order').modal('show');
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(xhr.status +" "+thrownError);
    }
  });
});


// $('.cart').on('click',function () {
//   $('#cart').modal('show');
// });


$('.modal-content').on('click', '.btn-close', function () {
  $('#cart').modal('hide');
})




function clearCart(event) {
  event.preventDefault();
  if(confirm('Очистить корзину ?')) {

  $.ajax({
    url: '/cart/clear',
    type: 'GET',
    success: function(res) {
      $('#cart .modal-content').html(res);
      $('.menu-quantity').html('(0)');

    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(xhr.status +" "+thrownError);
    }
  });

}

}