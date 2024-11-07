@props(['isFavorite' => false, 'rate' => 0])

<p>Combishort smockée à la taille en broderie anglaise avec nœud au dos&nbsp;
    @if ($isFavorite)
        <span><i class="fas fa-heart"></i></span>
    @else
        <span><i class="far fa-heart"></i></span>
    @endif
</p>
<div class="product-rating">
    <div>
        <x-rating_stars rate='{{ $rate }}' width="16" height="18"></x-rating_stars>
    </div>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;Reviews (2)</p>
</div>
