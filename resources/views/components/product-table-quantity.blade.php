@props(['attributes'])

<tr>
    <td>
        <div class="product-color">
            <span class="color-circle" style="background:{{ $attributes['hexColor'] }}"></span>
            <span class="color-name" style="font-size: 10px">{{ $attributes['color'] }}</span>
        </div>
    </td>
    <td>
        <div class="quantity-container">
            <span class="quantity-size">{{ $attributes['quantityS'] }}</span>
            <div style="display: flex; gap:7px">
                <span class="quantity-button"
                    style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">-</span>
                <span class="quantity-button"
                    style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">+</span>
            </div>
        </div>
    </td>
    <td>
        <div class="quantity-container">
            <span class="quantity-size">{{ $attributes['quantityM'] }}</span>
            <div style="display: flex; gap:7px">
                <span class="quantity-button"
                    style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">-</span>
                <span class="quantity-button"
                    style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">+</span>
            </div>
        </div>
    </td>
    <td>
        <div class="quantity-container">
            <span class="quantity-size">{{ $attributes['quantityL'] }}</span>
            <div style="display: flex; gap:7px">
                <span class="quantity-button"
                    style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">-</span>
                <span class="quantity-button"
                    style="background: #f5f5f5; height: 25px; width: 25px; font-size:16px">+</span>
            </div>
        </div>
    </td>
    <td>{{ $attributes['price'] }}</td>
    <td>
        @php
            $result =
                ($attributes['quantityS'] + $attributes['quantityM'] + $attributes['quantityL']) *
                str_replace(',', '.', $attributes['price']);
            if ($attributes['color'] == 'Green') {
                echo $result;
            } else {
                // Sonely to match model
                echo $result . ',00';
            }
        @endphp
        €</td>
</tr>
