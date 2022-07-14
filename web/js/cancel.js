$(document).ready(function () {
    $('#order-order_status').change(function () {
        if (this.value == 3) {
            $('#reason')[0].classList.remove('none')
            $('#order-cancellation')[0].required = true
        }

        if (this.value != 3) {
            if (!$('#reason')[0].classList == 'none') {
                $('#reason')[0].classList.add('none')
                $('#order-cancellation')[0].required = false
            }
        }
    })
})