$(document).ready(function () {
    $('.small-picture').click(
        function () {
            let picturePath = this.attributes.src.value;
            console.log(picturePath);
            $('#bigPicture')[0].src = picturePath;
        }
    )
});
