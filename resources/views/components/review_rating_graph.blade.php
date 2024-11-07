@props(['percent' => 0])

@php
    $width = 0;
    if ($percent > 0) {
        $width = ($percent / 100) * 159;
    }
@endphp

<div class="overall-ratings-bottom">
    <span>
        <img src="./images/star-color.svg" alt="starsvg" style="width:15px; height 15px; transform: rotate(90deg);">
    </span>
    <p style="font-family: 'Montserrat', sans-serif; padding-left: 3.5px; padding-right: 13px;">
        {{ $slot }}</p>
    <div class="progress-bar" style="background: #C4C4C4; margin-top: 3px">
        @php
            echo "<div class='progress-bar' style='background: #FD5C22; width:{$width}px;'></div>";
        @endphp
    </div>
    <p style="font-family: 'Montserrat', sans-serif; padding-left: 10px; ">{{ $percent }}%</p>
</div>
