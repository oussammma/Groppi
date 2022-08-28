$('#search').on('keyup', function () {
    var query = $(this).val();
    if (query != '') {
        $.ajax({
            method: 'GET',
            url: "/produits-liste",
            data: {
                // "_token": "{{ csrf_token() }}",
                query: query
            },
            success: function(data) {
                $("#countryList").fadeIn();
                $("#countryList").html(data);
                console.log(data)
            },
        })
    }else {
        $("#countryList").html('');
    }
})


