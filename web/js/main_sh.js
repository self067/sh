
$('.product-button__add').on('click', function (event) {
  event.preventDefault();
  let name = $(this).data('name');
  $.ajax({
    url: '/cart/add',
    data: {name: name},
    type: 'GET',
    success: function(res) {
      $('#cart .modal-content').html(res);
      // $('#body').html(res);
      if($('#total-q').html())
        $('.menu-quantity').html('<span class="ico-products"></span>'+$("#total-q").html()+' products, $'+$("#total-s").html());
      else
        $('.menu-quantity').html('<span class="ico-products"></span>0 products, $0');
    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(xhr.status +" "+thrownError);
    }
  });
} );

//modal-content
//$('div.cart-table').on('click', 'td.delete', function () {
  $('#body').on('click', 'td.delete', function () {
  let id = $(this).data('id');
  $.ajax({
    url: '/cart/delete',
    data: {id: id},
    type: 'GET',
    success: function(res) {
      // $('#cart-content').html(res);
      $('#body').html(res);
      // $('#cont').html(res);
      // $('#cart .modal-content').html(res);
      if($('#total-q').html())
        $('.menu-quantity').html('<span class="ico-products"></span>'+$("#total-q").html()+' products, $'+$("#total-s").html());
      else
        $('.menu-quantity').html('<span class="ico-products"></span>0 products, $0');

    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(xhr.status +" "+thrownError);
    }
  });
});
