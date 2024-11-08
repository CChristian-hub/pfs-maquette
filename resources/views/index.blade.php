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
    <div class="main">
        <div class="product-container">
            {{-- Left part of the product container with pictures and socials --}}
            <div class="picture-container">
                <div class="breadcrumb-picture-container">
                    {{-- breadcrumb on top of pictures container --}}
                    <div class="breadcrumb">
                        <x-breadcrumb>Home</x-breadcrumb>
                        &#8250;
                        <x-breadcrumb>Women</x-breadcrumb>
                        &#8250;
                        <x-breadcrumb>Dresse</x-breadcrumb>
                    </div>
                    <div class="pictures">
                        <x-product_small_pictures></x-product_small_pictures>
                        <div class="big-picture">
                            <x-picture size="big" pictureID="03.jpeg" alt="big-picture"></x-picture>
                        </div>
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
                {{-- Description container --}}
                <div class="product-description-container">
                    <div class="translater-container">
                        <img src="./images/planet.svg" alt="planet">
                        <p>&nbsp;&nbsp;Translated by google&nbsp;&nbsp;-&nbsp;&nbsp;</p>
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
    {{-- Separator --}}
    <hr>
    {{-- User's reviews --}}
    <div class="review-container">
        <h2 class="review-brand">Luizacco & Co &nbsp;Customer Reviews</h2>
        {{-- left part of the reviews --}}
        <div class="overall-ratings-container">
            <div class="overall-ratings-top">
                <span style="font-size: 48px; font-weight: 600; color: #111111; letter-spacing: 3px;">4,5&nbsp;</span>
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
            <a href="#">See more reviews&nbsp;&nbsp;<img src="./images/arrow.svg" alt=""></a>

            {{-- user review sample 01 --}}
            {{-- <div style="border: 1px solid #E2E2E2; padding: 21px 101px 24px 67px; margin-bottom: 13px">
                <div class="review-rate-date-container">
                    <div class="review-rate-date-container-left">
                        <x-rating_stars rate="3" pr="2.6" width="20" height="20"></x-rating_stars>
                        <p class="review-date">07 Jul 2019</p>
                    </div>
                    <div class="review-rate-date-container-right">
                        <p>2&nbsp;</p>
                        <img src="./images/thumb.svg" alt="thumbsvg" style="margin-bottom: 1px">
                    </div>
                </div>
                <p class="user-review-title">Quality products</p>
                <p class="user-review-comment">Luizzaco's products are very high quality. I am very satisfied. Fieri,
                    inquam, Triari, nullo pacto
                    potest, ut non dicas, quid non probes eius, a quo dissentias. quid enim me prohiberet.</p>
                <div class="user-review-name-location">
                    <p>Sophie Casey</p>
                    <p>&nbsp;&nbsp;</p>
                    <p>from France</p>
                </div>
            </div> --}}

            <x-user_review date="07 Jul 2019" user="Sophie Casey" location="France" title="Quality products"
                comment="Luizzaco's products are very high quality. I am very satisfied. Fieri, inquam, Triari, nullo pacto potest, ut non dicas, quid non probes eius, a quo dissentias. quid enim me prohiberet."
                like="2" rate="3"></x-user_review>

            <x-user_review date="05 Jul 2019" user="Sophie Casey" location="France" title="Very satisfied"
                comment="Fieri, inquam, Triari, nullo pacto potest, ut non dicas, quid non probes eius, a quo dissentias. quid enim me prohiberet Epicureum esse, si probarem, quae ille diceret? cum o potest, ut non dicas, quid non"
                like="6" rate="5"></x-user_review>
            {{-- user review sample 02 --}}
            {{-- <div style="border: 1px solid #E2E2E2; padding: 21px 101px 24px 67px">
                <div class="review-rate-date-container">
                    <div class="review-rate-date-container-left">
                        <x-rating_stars rate="5" pr="2.6" width="20" height="20"></x-rating_stars>
                        <p class="review-date">05 Jul 2019</p>
                    </div>
                    <div class="review-rate-date-container-right">
                        <p>6&nbsp;</p>
                        <img src="./images/thumb.svg" alt="thumbsvg" style="margin-bottom: 1px">
                    </div>
                </div>
                <p class="user-review-title">Very satisfied</p>
                <p class="user-review-comment">Fieri, inquam, Triari, nullo pacto potest, ut non dicas, quid non probes
                    eius, a quo dissentias. quid enim me prohiberet Epicureum esse, si probarem, quae ille diceret? cum
                    o potest, ut non dicas, quid non</p>
                <div class="user-review-name-location">
                    <p>Sophie Casey</p>
                    <p>&nbsp;&nbsp;</p>
                    <p>from France</p>
                </div>
            </div> --}}


        </div>
    </div>
    <div style="margin-top:57px"></div>
    <hr>
    <div style="padding-bottom:500px"></div>
</body>

</html>
