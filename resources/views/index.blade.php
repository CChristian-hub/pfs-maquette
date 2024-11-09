<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:wght@300;400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/befe272f62.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/script.js"></script>
    <title>Product Page</title>
</head>

<body>
    <div class="main">
        <div class="product-container">
            {{-- Left part of the product container with pictures and socials --}}
            <div class="picture-container">
                <div class="breadcrumb-picture-container">
                    <div class="breadcrumb">
                        <x-breadcrumb>Home</x-breadcrumb>
                        &#8250;
                        <x-breadcrumb>Women</x-breadcrumb>
                        &#8250;
                        <x-breadcrumb>Dresse</x-breadcrumb>
                    </div>
                    <div class="pictures">
                        <x-product_small_pictures></x-product_small_pictures>
                        <div id="imageZoom"
                            style="--url: url(../images/picture-preview-03.jpeg);
                                --zoom-x: 0%;
                                --zoom-y: 0%;
                                --display:none">
                            <x-picture size="big" picturePath="03.jpeg" alt="big-picture"></x-picture>
                        </div>
                    </div>
                </div>
                <p class="socials">
                    <x-socials></x-socials>
                </p>
            </div>
            {{-- Right part of the container with details --}}
            <div class="details-container">
                <div class="product-brand">
                    <h2>Luizacco & Co</h2>
                    <p>Minimum 100€</p>
                </div>
                <div class="product-details">
                    <x-product_information :isFavorite=false rate="4"></x-product_information>
                </div>
                <div class="price-information">
                    <x-price_information>15,99€</x-price_information>
                </div>
                <div class="unit-pack-selector">
                    <p>Buy by <span style="padding-right: 3px"></span>:</p>
                    <x-checkbox pl="16">Pack</x-checkbox>
                    <x-checkbox pl="28">Unit</x-checkbox>
                </div>
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
                            <x-product_table_quantity color="Green" hexColor="#24734C" quantityS="3" quantityM="4"
                                quantityL="1" price="13,50"></x-product_table_quantity>
                            <x-product_table_quantity color="Red" hexColor="#FD2222" quantityS="2" quantityM="4"
                                quantityL="0" price="13,50"></x-product_table_quantity>
                        </tbody>
                    </table>
                </div>
                <a href="#" class="cart-button">
                    <p style="padding-right: 19px">Add to Cart</p><img src="./images/cart.svg" alt="cart-svg">
                </a>
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
                <div class="product-description-container">
                    <div class="translater-container">
                        <img src="./images/planet.svg" alt="planet">
                        <p style="padding-left:7px">Translated by google</p>
                        <p style="padding: 0px 7px">-</p>
                        <span class="translater-google">See in original language</span>
                    </div>
                    <div class="description-block">
                        <p style="font-weight: 500">Description</p>
                        <p>Outer : <span>Leather 95%, Polyamide 5%</span></p>
                        <p>Lining : <span>Polyester 100%</span></p>
                        <p>Sole : <span>Rubber 100%</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="review-container">
        <h2 class="review-brand">Luizacco & Co <span style="padding-right:7px"></span> Customer Reviews</h2>
        {{-- left part of the reviews --}}
        <div class="overall-ratings-container">
            <div class="overall-ratings-top">
                <span
                    style="font-size: 48px; font-weight: 600; color: #111111; letter-spacing: 3px; padding-right: 8px">4,5</span>
                <span>out of 5 stars</span>
                <div style="padding-top: 5px">
                    <x-rating_stars rate="3" pr="9" width="31" height="31"></x-rating_stars>
                </div>
                <p
                    style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #3C3C3B; padding-top: 10px; padding-left:2px; margin-bottom: 35px">
                    2 Ratings</p>
            </div>
            <x-review_rating_graph percent="74">5</x-review_rating_graph>
            <x-review_rating_graph percent="32">4</x-review_rating_graph>
            <x-review_rating_graph percent="16">3</x-review_rating_graph>
            <x-review_rating_graph percent="2">2</x-review_rating_graph>
            <x-review_rating_graph percent="0">1</x-review_rating_graph>
        </div>
        {{-- right part of the reviews --}}
        <div class="customer-review-container">
            <a href="#">See more reviews<img style="padding-left:6px"src="./images/arrow.svg" alt=""></a>
            <x-user_review date="07 Jul 2019" user="Sophie Casey" location="France" title="Quality products"
                comment="Luizzaco's products are very high quality. I am very satisfied. Fieri, inquam, Triari, nullo pacto potest, ut non dicas, quid non probes eius, a quo dissentias. quid enim me prohiberet."
                like="2" rate="3"></x-user_review>
            <x-user_review date="05 Jul 2019" user="Sophie Casey" location="France" title="Very satisfied"
                comment="Fieri, inquam, Triari, nullo pacto potest, ut non dicas, quid non probes eius, a quo dissentias. quid enim me prohiberet Epicureum esse, si probarem, quae ille diceret? cum o potest, ut non dicas, quid non"
                like="6" rate="5"></x-user_review>
        </div>
    </div>
    <div style="margin-top:57px"></div>
    <hr>
    <div style="padding-bottom:500px"></div>
</body>

</html>
