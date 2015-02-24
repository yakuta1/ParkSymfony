$(document).ready(function(){
    $('#myModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal

        var num = button.data('num') // Extract info from data-* attributes
        var modal = $(this)
        modal.find('.modal-title').text('Invoice '  +num)
        modal.find('.modal-num2').text(num)
        var date = button.data('date') // Extract info from data-* attributes
        modal.find('.modal-date').text(date)
        var description = button.data('description') // Extract info from data-* attributes
        modal.find('.modal-description').text(description)
        var qty = button.data('qty') // Extract info from data-* attributes
        modal.find('.modal-qty').text(qty)
        var price = button.data('price') // Extract info from data-* attributes
        modal.find('.modal-price').text(price)
        var total = button.data('total') // Extract info from data-* attributes
        modal.find('.modal-total').text(total)
    })
});