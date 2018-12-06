$(document).ready(function () {

    $('.btn-update-terminal').on('click',function () {
        var value = $('.terminal-state').val();
        $.ajax({
           data : {
               'stateId' : value,
               'terminalId' : $(this).attr('data-terminalid')
           },
           url : '/api/terminalUpdate',
            method: 'POST',
            success : function (data) {
                if (data == 'false'){
                    alert('something went wrong!');
                }else if (data == 'true'){
                    alert('state was updated!');
                }
            }
        });
    });

    $('.select-branch').on('change',function () {
        var value = $(this).val();
        window.location.href = updateQueryStringParameter(location.href,'filter',value);
    });

    function updateQueryStringParameter(uri, key, value) {
        var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
        var separator = uri.indexOf('?') !== -1 ? "&" : "?";
        if (uri.match(re)) {
            return uri.replace(re, '$1' + key + "=" + value + '$2');
        }
        else {
            return uri + separator + key + "=" + value;
        }
    }


    $('.terminals').on('click','.btn-delete-terminal',function () {
        var isDelete = confirm('do you want delete this terminal ? ');
        if (isDelete){
            $.ajax({
                data : {
                    'terminalId' : $(this).attr('data-terminalid')
                },
                url : '/api/terminalDelete',
                method: 'POST',
                success : function (data) {
                    if (data == 'false'){
                        alert('something went wrong!');
                    }else if (data == 'true'){
                       document.location.reload();
                    }
                }
            });
        }

    })

});