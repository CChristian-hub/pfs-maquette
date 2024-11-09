@props(['isFavorite' => false, 'rate' => 0])

<p>Combishort smockée à la taille en broderie anglaise avec nœud au dos&nbsp;
    @if ($isFavorite)
        <span><i class="fas fa-heart"></i></span>
    @else
        <span><i class="far fa-heart"></i></span>
    @endif
</p>
<div class="product-rating">
    <x-rating_stars rate='{{ $rate }}' pr="2" width="16" height="17"></x-rating_stars>
    <p style="padding-top: 4px; padding-left: 11px">Reviews (2)</p>
</div>
