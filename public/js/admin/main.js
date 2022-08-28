$('.EditeBtn').on('click', function() {
    $tr = $(this).closest('tr')
    var data = $tr.children('td').map(function() {
        return $(this).text();
    }).get();
    console.log(data)       
    $('#cat_idE').val(data[1])
    $('#cat_nomE').val(data[2])
})

$('.EditeBtn').on('click', function() {
    $tr = $(this).closest('tr')
    var data = $tr.children('td').map(function() {
        return $(this).text();
    }).get();
    // console.log(data)
    $('#mar_id').val(data[1])
    $('#mar_nom').val(data[4])
    $('#old_img').val(data[2])
})

$('.DeleteBtn').on('click', function(e) {
    e.preventDefault();
    var link = $(this).attr('href')
    Swal.fire({
        title: 'Êtes-vous sûr?',
        text: "Vous ne pourrez pas revenir en arrière !",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Annuler',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oui, supprime-le!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = link
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })
})