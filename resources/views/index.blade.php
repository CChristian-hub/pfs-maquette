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
                <ul class="small-pictures-container">
                    <li><x-picture size="small" pictureID="01.jpeg" alt="small-picture"></x-picture></li>
                    <li><x-picture size="small" pictureID="02.jpeg" alt="small-picture"></x-picture></li>
                    <li><x-picture size="small" pictureID="01.jpeg" alt="small-picture"></x-picture></li>
                    <li><x-picture size="small" pictureID="02.jpeg" alt="small-picture"></x-picture></li>
                    <li><x-picture size="small" pictureID="03.jpeg" alt="small-picture"></x-picture></li>
                    <li><x-picture size="small" pictureID="04.jpeg" alt="small-picture"></x-picture></li>
                </ul>
                <div class="big-picture">
                    <x-picture size="big" pictureID="03.jpeg" alt="big-picture"></x-picture>
                </div>
            </div>
            <p class="pictures-footer">
                Share :
                <span class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                </span>
                <span class="social-icon">
                    <i class="fab fa-pinterest-p"></i>
                </span>
                <span style="cursor:pointer">...</span>
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
                <p>Combishort smockée à la taille en broderie anglaise avec nœud au dos&nbsp;
                    <span><i class="far fa-heart"></i></span>
                </p>
                <div class="product-rating">
                    <div>
                        <i class="fas fa-star rating-icon-colored"></i>
                        <i class="fas fa-star rating-icon-colored"></i>
                        <i class="fas fa-star rating-icon-colored"></i>
                        <i class="fas fa-star rating-icon-colored"></i>
                        <i class="fas fa-star rating-icon-gray"></i>
                    </div>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;Reviews (2)</p>
                </div>
            </div>
            {{-- Starting price --}}
            <div class="price-container">
                <p class="">Starting at</p>
                <p class="price-display">15,99€</p>
            </div>

            {{-- Buy options --}}
            <div>
                <p>Buy by :&nbsp;</p>
                <span><input type="radio" name="Pack" id="pack" class="button-test"> Pack</span>
                <span><input type="radio" name="Pack" id="pack"> Unit</span>
            </div>
        </div>
    </div>

    {{--
    <div class="product-container">
        <div class="product-picture">
            <ul class="product-preview">
                <li><img src="/images/picture-preview-01.jpeg" alt="mini-preview" class="image-small"></li>
                <li><img src="/images/picture-preview-02.jpeg" alt="mini-preview" class="image-small"></li>
                <li><img src="/images/picture-preview-01.jpeg" alt="mini-preview" class="image-small"></li>
                <li><img src="/images/picture-preview-02.jpeg" alt="mini-preview" class="image-small"></li>
                <li><img src="/images/picture-preview-03.jpeg" alt="mini-preview" class="image-small"></li>
                <li><img src="/images/picture-preview-04.jpeg" alt="mini-preview" class="image-small"></li>
            </ul>
            <img class="image-big" src="./images/picture-preview-03.jpeg" alt="main-disp">
            <p class="socials">Share :</p>
        </div>
        <div class="product-info">Desc</div>
    </div> --}}

</body>

</html>
