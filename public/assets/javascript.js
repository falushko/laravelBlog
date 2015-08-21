$(function () {


    $('.delete').click(function (event) {
        event.preventDefault();
        var postName = $(this).parent().prev().prev().text();
        console.log(postName);

        $.post('/delete-post', 'post_name='+postName);
    });



});