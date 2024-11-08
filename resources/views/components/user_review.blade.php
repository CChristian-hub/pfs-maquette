@props(['date', 'user', 'location', 'comment', 'title', 'like', 'rate'])

<div style="border: 1px solid #E2E2E2; padding: 21px 101px 24px 67px; margin-bottom: 13px">
    <div class="review-rate-date-container">
        <div class="review-rate-date-container-left">
            <x-rating_stars rate="{{ $rate }}" pr="2.6" width="20" height="20"></x-rating_stars>
            <p class="review-date">{{ $date }}</p>
        </div>
        <div class="review-rate-date-container-right">
            <p>{{ $like }}&nbsp;</p>
            <img src="./images/thumb.svg" alt="thumbsvg" style="margin-bottom: 1px">
        </div>
    </div>
    <p class="user-review-title">{{ $title }}</p>
    <p class="user-review-comment">{{ $comment }}</p>
    <div class="user-review-name-location">
        <p>{{ $user }}</p>
        <p>&nbsp;&nbsp;</p>
        <p>from {{ $location }}</p>
    </div>
</div>
