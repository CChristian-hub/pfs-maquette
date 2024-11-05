@props(['rate' => 0])

@for ($i = 0; $i < 5; $i++, $rate--)
    @if ($rate > 0)
        <i class="fas fa-star rating-icon-colored"></i>
    @else
        <i class="fas fa-star rating-icon-gray"></i>
    @endif
@endfor

{{--
<i class="material-icons-sharp rating-icon-colored">star</i>
<i class="material-icons-sharp rating-icon-colored">star</i>
<i class="material-icons-sharp rating-icon-colored">star</i>
<i class="material-icons-sharp rating-icon-colored">star</i>
<i class="material-icons-sharp rating-icon-gray">star</i> --}}
