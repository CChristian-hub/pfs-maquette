$(document).ready(function () {
    $('.small-picture').click(
        function () {
            $('#bigPicture').attr('src', this.attributes.src.value)
            $('#imageZoom').css('--url', "url(" + '..' + (this.attributes.src.value) + ')')
        }
    )

    // many conditions to fit the following rules deducted from model
    // above 100 - no comas if no decimals
    // under 100, and with decimals - 2 decilmals display
    $(".quantity-button").click(
        function () {
            let totalPrice = $(this).parent().parent().parent().siblings('.total-price-color').text()
            totalPrice = totalPrice.replace(',', '.')
            totalPrice = Number(totalPrice.trim().slice(0, -1).trim())

            if ($(this).text() == '-') {
                let quantitySize = Number($(this).parent().siblings('.quantity-size').text());
                if (quantitySize > 0) {
                    quantitySize -= 1;
                    totalPrice -= 13.50;
                    $(this).parent().siblings('.quantity-size').text(quantitySize);
                }
            } else {
                let quantitySize = Number($(this).parent().siblings('.quantity-size').text());
                quantitySize += 1;
                totalPrice += 13.50;
                $(this).parent().siblings('.quantity-size').text(quantitySize);
            }

            if (totalPrice > 100) {
                totalPrice = totalPrice + '€';
                if (totalPrice.indexOf('.') >= 0) {
                    let formattedTotal = totalPrice.replace('.5', ',50')
                    $(this).parent().parent().parent().siblings('.total-price-color').text((formattedTotal))
                } else {
                    $(this).parent().parent().parent().siblings('.total-price-color').text((totalPrice))
                }
            }
            if (totalPrice < 100) {
                if (totalPrice != 0) {
                    let formattedTotal;
                    totalPrice = totalPrice + '€';
                    if (totalPrice.indexOf('.') >= 0) {
                        formattedTotal = totalPrice.replace('.5', ',50')
                    } else {
                        formattedTotal = totalPrice.replace('€', ',00€')
                    }
                    $(this).parent().parent().parent().siblings('.total-price-color').text((formattedTotal))
                } else {
                    totalPrice = totalPrice + '€';
                    $(this).parent().parent().parent().siblings('.total-price-color').text((totalPrice))
                }
            }
        }
    )

    $('#imageZoom').on('mousemove', function (event) {
        $(this).css('--display', 'block');
        let pointer = {
            x: (event.offsetX * 100) / $(this).width(),
            y: (event.offsetY * 100) / $(this).height()
        }
        $(this).css('--zoom-x', pointer.x + '%')
        $(this).css('--zoom-y', pointer.y + '%')
    })
    $('#imageZoom').on('mouseout', function () {
        $(this).css('--display', 'none')
    })
});
