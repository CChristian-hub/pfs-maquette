$(document).ready(function () {
    // picture changes
    $('.small-picture').click(
        function () {
            $('#bigPicture')[0].src = this.attributes.src.value;
        }
    )

    // $(".quantity-container")
    $(".quantity-button").click(
        function () {
            /*
            recalculation of the total but not working, weird jumps in number, not correctly rounded and needs more conditions to match model
            let totalPrice = $(this).parent().parent().parent().siblings('.total-price-color').text()

            totalPrice = Number(totalPrice.trim().slice(0, -1).trim())
            */
            if ($(this).text() == '-') {
                let temp = Number($(this).parent().siblings('.quantity-size').text());
                if (temp > 0) {
                    temp -= 1;
                    // totalPrice -= 13.50;
                    $(this).parent().siblings('.quantity-size').text(temp);
                }
            } else {
                let temp = Number($(this).parent().siblings('.quantity-size').text());
                temp += 1;
                // totalPrice += 13.50;
                $(this).parent().siblings('.quantity-size').text(temp);
            }
            // $(this).parent().parent().parent().siblings('.total-price-color').text(totalPrice)
        }
    )
});
