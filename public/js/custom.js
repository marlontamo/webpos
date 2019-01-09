$(document).ready(function() {

    $('.product').click(function(e){
        var item_id     = this.getAttribute('data-id');
        var item_label  = this.getAttribute('data-label');
        var item_price  = this.getAttribute('data-price');
        var item_qty    = 1;
        var item_amount = item_price*item_qty;
        var table_row   = '';

        if($('tr #item_row_'+item_id).length == 0){
            table_row += '<tr id="item_row_'+item_id+'">';

            table_row += '<td><p class="form-control-static">'+item_label+'</p>';
            table_row += '<input type="hidden" value="'+item_id+'" name="item[]" />';
            table_row += '</td>';

            table_row += '<td><p class="form-control-static text-right">'+item_price+'</p>';
            table_row += '<input type="hidden" value="'+item_price+'" class="price" name="price[]" />';
            table_row += '</td>';

            table_row += '<td><input type="text" name="quantity[]" data-id="'+item_id+'" value="'+item_qty+'" class="text-right form-control quantity" /></td>';
            table_row += '<td class="text-right amount">'+item_amount+'</td>';
            table_row += '<td><button type="button" class="btn btn-sm btn-danger delete-icon" data-id="'+item_id+'"><i class="fa fa-trash-o"></i></button></td>';
            table_row += '</tr>';
        }else{
            var currentqty = $('tr #item_row_'+item_id+' .quantity').val();
            var newqty     = Number(currentqty) + 1;
            var newamount  = item_price*newqty;

            $('tr #item_row_'+item_id+' .quantity').val(newqty);
            $('tr #item_row_'+item_id+' .amount').html(newamount);
        }
        
        $('#posTable tbody').append(table_row);

    });

    $('body').on('change', '.quantity', function (e){
        var item_id  = this.getAttribute('data-id');

        var item_price = $('tr #item_row_'+item_id+' .price').val();
        var item_qty   = this.value;
        var newamount  = item_price * item_qty;

        $('tr #item_row_'+item_id+' .amount').html(newamount);
    });

    $('body').on('click', '.delete-icon', function (e){
        var item_id  = this.getAttribute('data-id');

        $('#deleteItemModal #recordId').val(item_id);
        $('#deleteItemModal').modal('show');
    });

    $('#deleteItemModal #btnYes').click(function (e){
        var item_id  = $('#deleteItemModal #recordId').val();

        $('#deleteItemModal').modal('hide');
        
        var item_row = $('tr #item_row_'+item_id).index();
        $('tr #item_row_'+item_id).closest('tr').remove();
        
    });
});
