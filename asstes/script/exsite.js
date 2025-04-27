function alert1(){
    $.ajax({
        url: '/admin/program',
        type: 'POST',
        data: {
            'key':'sssddd'
        },
        dataType: 'html',
        success: function(data) {
            alert(data);
            $('#num1').append(data);
        }
    });
}