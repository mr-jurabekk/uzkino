$(document).ready(function () {
    $('.remove').on('click', function (e) {
    let answer = confirm("Rostan ham o'chirmoqchimisiz?");
    if (!answer){
        e.preventDefault();
        return false;
    }
    });

    $('#menu_position').on('input', function (e) {
        let position = $(this).val();
        $.ajax({
            url: '/admin/?r=menu-parent',
            method: 'get',
            data: {position: position},
            success: function (data) {
                console.log(data);
                $('#menu_parent').html(data);
            },
            error: function (data) {
                alert('wooops')
            }
        })
    })

    document.querySelector('.preview').onchange = evt => {

        const element = document.querySelector('.preview');

        const [file] = element.files
        if (file) {
            element.parentNode.querySelector('img').src = URL.createObjectURL(file)
        }
    }
})