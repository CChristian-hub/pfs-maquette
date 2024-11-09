$(document).ready(function () {
    // picture changes
    $('.small-picture').click(
        function () {
            $('#bigPicture')[0].src = this.attributes.src.value;
        }
    )

    // dynamic buttons
    $(".quantity-button").click(
        function () {
            let totalPrice = $(this).parent().parent().parent().siblings('.total-price-color').text()
            console.log(totalPrice.trim())
            totalPrice = totalPrice.replace(',', '.')
            totalPrice = Number(totalPrice.trim().slice(0, -1).trim())

            if ($(this).text() == '-') {
                let temp = Number($(this).parent().siblings('.quantity-size').text());
                if (temp > 0) {
                    temp -= 1;
                    totalPrice -= 13.50;
                    $(this).parent().siblings('.quantity-size').text(temp);
                }
            } else {
                let temp = Number($(this).parent().siblings('.quantity-size').text());
                temp += 1;
                totalPrice += 13.50;
                $(this).parent().siblings('.quantity-size').text(temp);
            }

            if (totalPrice > 100) {
                totalPrice = totalPrice + '€';
                if (totalPrice.indexOf('.') >= 0) {
                    console.log(typeof (totalPrice))
                    console.log(totalPrice)
                    let formattedTotal = totalPrice.replace('.5', ',50')
                    console.log("format", formattedTotal)
                    $(this).parent().parent().parent().siblings('.total-price-color').text((formattedTotal))
                } else {
                    $(this).parent().parent().parent().siblings('.total-price-color').text((totalPrice))
                }
            }
            if (totalPrice < 100) {
                if (totalPrice != 0) {
                    totalPrice = totalPrice + '€';
                    if (totalPrice.indexOf('.') >= 0) {
                        let formattedTotal = totalPrice.replace('.5', ',50')
                        $(this).parent().parent().parent().siblings('.total-price-color').text((formattedTotal))
                    } else {
                        let formattedTotal = totalPrice.replace('€', ',00€')
                        $(this).parent().parent().parent().siblings('.total-price-color').text((formattedTotal))
                    }
                } else {
                    totalPrice = totalPrice + '€';
                    $(this).parent().parent().parent().siblings('.total-price-color').text((totalPrice))
                }
            }
        }
    )
});
