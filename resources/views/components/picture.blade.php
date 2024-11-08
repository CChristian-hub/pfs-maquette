@props(['alt', 'size', 'picturePath'])

@if ($size == 'big')
    <img id="bigPicture"src="/images/picture-preview-{{ $picturePath }}" alt="{{ $alt }}"
        class="{{ $size }}-picture">
@else
    <img src="/images/picture-preview-{{ $picturePath }}" alt="{{ $alt }}" class="{{ $size }}-picture">
@endif
