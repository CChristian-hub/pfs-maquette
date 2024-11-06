@php
    $array = ['01.jpeg', '02.jpeg', '01.jpeg', '02.jpeg', '03.jpeg', '04.jpeg'];
@endphp


<ul class="small-pictures-container">
    @if (count($array))
        @for ($i = 0; $i < count($array); $i++)
            <li><x-picture size="small" pictureID="{{ $array[$i] }}" alt="small-picture"></x-picture></li>
        @endfor
    @endif
</ul>
