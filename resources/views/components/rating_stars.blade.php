@props(['rate' => 0, 'width', 'height', 'pr' => 0])

@for ($i = 0; $i < 5; $i++, $rate--)
    @if ($rate > 0)
        <img src="./images/star-color.svg" alt="starsvg"
            style="width: {{ $width }}px; height {{ $height }}px;
            @if ($pr != 0) margin-right: {{ $pr }}px @endif
            ">
    @else
        <img src="./images/star-nocolor.svg" alt="starsvg"
            style="width: {{ $width }}px; height {{ $height }}px;
            @if ($pr != 0) margin-right: {{ $pr }}px @endif
            ">
    @endif
@endfor
