@props(['class', 'pathsvg', 'alt'])

<div class="{{ $class }}">
    <img src="./images/{{ $pathsvg }}.svg" alt="{{ $alt }}">
    <p style="padding-top:13px; padding-left:28px; padding-right:28px;">{{ $slot }}</p>
</div>
