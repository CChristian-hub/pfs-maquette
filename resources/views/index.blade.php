<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:wght@300;400;500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/befe272f62.js" crossorigin="anonymous"></script>
    <title>Product Page</title>
</head>

<body>
    {{-- breadcrumb nav, to move it should be in the lower container and not isolated --}}
    <div class="main">
        <div class="breadcrumb">
            <x-breadcrumb>Home</x-breadcrumb>
            &#8250;
            <x-breadcrumb>Women</x-breadcrumb>
            &#8250;
            <x-breadcrumb>Dresse</x-breadcrumb>
        </div>
        {{-- product container --}}
        <div class="product-container">
            {{-- Left part of the product container with pictures and socials --}}
            <div class="picture-container">
                <div class="pictures">
                    <x-product_small_pictures></x-product_small_pictures>
                    <div class="big-picture">
                        <x-picture size="big" pictureID="03.jpeg" alt="big-picture"></x-picture>
                    </div>
                </div>
                <p class="socials">
                    <x-socials></x-socials>
                </p>
            </div>
            {{-- Right part of the container with details --}}
            <div class="details-container">
                {{-- brand name and minimum price --}}
                <div class="product-brand">
                    <h2>Luizacco & Co</h2>
                    <p>Minimum 100€</p>
                </div>
                {{-- details of the product and its reviews --}}
                <div class="product-details">
                    <x-product_information :isFavorite=false rate="4"></x-product_information>
                </div>
                {{-- Starting price --}}
                <div class="price-information">
                    <x-price_information>15,99€</x-price_information>
                </div>
                {{-- Buy options --}}
                <div class="unit-pack-selector">
                    <p>Buy by&nbsp;&nbsp;&nbsp;</p>
                    <x-checkbox pl="16">&nbsp;Pack</x-checkbox>
                    <x-checkbox pl="28">&nbsp;Unit</x-checkbox>
                </div>
                {{-- Sizes table --}}
                <div class="product-table">
                    <table>
                        <thead>
                            <tr>
                                @php
                                    $headers = ['Color', 'S', 'M', 'L', 'Price', 'Total HT'];
                                    foreach ($headers as $head) {
                                        echo '<th>' . $head . '</th>';
                                    }
                                @endphp
                            </tr>
                        </thead>
                        <tbody>
                            <x-product-table-quantity color="Green" hexColor="#24734C" quantityS="3" quantityM="4"
                                quantityL="1" price="13,50"></x-product-table-quantity>
                            <x-product-table-quantity color="Red" hexColor="#FD2222" quantityS="2" quantityM="4"
                                quantityL="0" price="13,5"></x-product-table-quantity>
                        </tbody>
                    </table>
                </div>
                {{-- Add to cart --}}
                <a href="#" class="cart-button">
                    <p>Add to Cart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><img src="./images/cart.svg" alt="cart-svg">
                </a>
                {{-- Shipment information --}}
                <div class="shipment-container">
                    <div class="expected_shipment">
                        <img src="./images/shipment.svg" alt="shipment">
                        <p style="padding-left: 24px">Shipment expected between 4 juillet - 9 juillet</p>
                    </div>
                    <x-shipment_policy class="secured_payment" pathsvg="safepayment" alt="payment">Paiement
                        sécurisé</x-shipment_policy>
                    <x-shipment_policy class="return_policy" pathsvg="return" alt="return">Retour accepté sous
                        7 jours</x-shipment_policy>
                    <x-shipment_policy class="client_support" pathsvg="clientsupport" alt="support">Service client
                        personnalisé</x-shipment_policy>
                </div>
                {{--  --}}
                <div class="product-description-container">
                    <p><img src="./images/planet.svg" alt="planet">Translated by google - <span>See in original
                            language</span></p>
                    <div class="description-block">
                        <p>Description</p>
                        <p>Outer : <span>Leather 95%, Polyamide 5%</span></p>
                        <p>Lining : <span>Polyester 100%</span></p>
                        <p>Sole : <span>Rubber 100%</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Separator --}}
    {{-- maybe replace this with a div or change its style --}}
    <hr>
    {{-- User's reviews --}}
    <div class="review-container">
        <h2>Luizacco & Co &nbsp;Customer Reviews</h2>
        {{-- make a grid for this part --}}
        <div>

        </div>
    </div>

</body>

</html>
