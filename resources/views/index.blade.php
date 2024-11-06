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
                                <th>
                                    Color
                                </th>
                                <th>
                                    S
                                </th>
                                <th>
                                    M
                                </th>
                                <th>
                                    L
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Total HT
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="product-color">
                                        <span class="color-circle" style="background:#24734C"></span>
                                        <span class="color-name" style="font-size: 10px">Green</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity-container">
                                        <span class="quantity-size">3</span>
                                        <div style="display: flex; gap:7px">
                                            <span class="quantity-button"
                                                style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">-</span>
                                            <span class="quantity-button"
                                                style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">+</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity-container">
                                        <span class="quantity-size">4</span>
                                        <div style="display: flex; gap:7px">
                                            <span class="quantity-button"
                                                style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">-</span>
                                            <span class="quantity-button"
                                                style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">+</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity-container">
                                        <span class="quantity-size">1</span>
                                        <div style="display: flex; gap:7px">
                                            <span class="quantity-button"
                                                style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">-</span>
                                            <span class="quantity-button"
                                                style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">+</span>
                                        </div>
                                    </div>
                                </td>
                                <td>13,50€</td>
                                <td>108€</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-color">
                                        <span class="color-circle" style="background:#FD2222"></span>
                                        <span class="color-name"style="font-size: 10px">Red</span>
                                    </div>
                                </td>
                                <td style="padding: 18px 0px">
                                    <div class="quantity-container">
                                        <span class="quantity-size">2</span>
                                        <div style="display: flex; gap:7px">
                                            <span class="quantity-button"
                                                style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">-</span>
                                            <span class="quantity-button"
                                                style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">+</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity-container">
                                        <span class="quantity-size">4</span>
                                        <div style="display: flex; gap:7px">
                                            <span class="quantity-button"
                                                style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">-</span>
                                            <span class="quantity-button"
                                                style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">+</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity-container">
                                        <span class="quantity-size">0</span>
                                        <div style="display: flex; gap:7px">
                                            <span class="quantity-button"
                                                style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">-</span>
                                            <span class="quantity-button"
                                                style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">+</span>
                                        </div>
                                    </div>
                                </td>
                                <td>13,50€</td>
                                <td>81,00€</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- Add to cart --}}
                <div class="cart-button">
                    <p>Add to Cart</p><span>logo</span>
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
