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
                <p>Buy by&nbsp;&nbsp;:&nbsp;</p>
                <x-checkbox pl="16">&nbsp;Pack</x-checkbox>
                <x-checkbox pl="28">&nbsp;Unit</x-checkbox>
            </div>
        </div>
    </div>
</body>

</html>
