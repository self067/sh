
$('.product-button__add').on('click', function (event) {
  event.preventDefault();
  let name = $(this).data('name');
  console.log(name);
  $.ajax({
    url: '/cart/add',
    data: {name: name},
    type: 'GET',
    success: function(res) {
      // alert('Success');
      $('#cart .modal-content').html(res);

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
$('.cart-table').on('click', 'td.delete', function () {
  let id = $(this).data('id');
  console.log(id);
  $.ajax({
    url: '/cart/delete',
    data: {id: id},
    type: 'GET',
    success: function(res) {

      console.log(res);
      // $('#cart-content').html(res);
      // $('#cart-content').html('');
      $('#cont').html(res);

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
