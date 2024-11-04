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
    <title>Product Page</title>
</head>

<body>
    <div class="navigation-history">
        {{-- change this into a component --}}
        <a href="#">Home</a> &#8250;
        <a href="#">Women</a> &#8250;
        <a href="#">Dresse</a>
    </div>
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
    </div>

</body>

</html>
