$( document ).ready(function() {

    $('[name="movie"]').select2({
        minimumResultsForSearch: -1,
        placeholder: 'Вибріть фільм'
    });
    $('[name="date"]').select2({
        minimumResultsForSearch: -1,
        placeholder: 'Вибріть дату'
    });

/*
    $('[name="movie"]').on('change', function () {

        $('[name="date"]').removeAttr('disabled');
    });*/

    /*$('[name="date"]').on('change', function () {
        $("#go-to-reserve").css('display', 'block');
    });*/


    $('[name="movie"]').on('change', function () {
        var id = $( "#check-movie option:selected" ).val();
        var url = $(this).data('form');
        $.ajax({
            type: "GET",
            data: {
                movie_id: id
            },
            url: url,
            success: function (response) {

                var str = '';

                for(var i=0; i<response.length; i++){
                    var user=response[i]+"/00/00";
                    var arrdt= user.split("/");
                    var userdt = new Date(arrdt[2], arrdt[1] - 1, arrdt[0],arrdt[3],arrdt[4]);
                    var currdt = new Date();
                    if (userdt > currdt) {
                        str +='<option value="'+response[i]+'">'+response[i]+'</option>';
                    }



                }

                $("#go-to-reserve").css('display', 'block');
                $('[name="date"]').html(str);
                $('[name="date"]').removeAttr('disabled');
            }
        });
        return false;
    });
});