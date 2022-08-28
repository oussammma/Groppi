$('.EditeBtn').on('click', function() {
    $tr = $(this).closest('tr')
    var data = $tr.children('td').map(function() {
        return $(this).text();
    }).get();
    console.log(data)
    $('#pro_idE').val(data[9])
    $('#nom_PE').val($.trim(data[1]))
    $('#categoriesE').val(data[10])
    $('#marquesE').val(data[11])
    $('#description_PE').val(data[4])
    $('#recomendation_PE').val(data[5])
    $('#prix_PE').val(parseInt(data[6]))
    if (data[7] == 1) {
        $('#is_medicalE')[0].checked = true;
    } else {
        $('#is_medicalE')[0].checked = false;
    }
    if (data[8] == 1) {
        $('#disponibleE')[0].checked = true;
    } else {
        $('#disponibleE')[0].checked = false;
    }
    // $('#img_p_1E').html(data[12])
    $('#old_img_1').val(data[13])
    $('#old_img_2').val(data[14])
    $('#old_img_3').val(data[15])
    $('#old_img_4').val(data[16])
})

$('.show_detais').on('click', function() {
    $tr = $(this).closest('tr')
    var data = $tr.children('td').map(function() {
        return $(this).text();
    }).get();
    // console.log(data)
    $('#d_categorie').text($.trim(data[2]))
    $('#d_nom').text($.trim(data[1]))
    if (data[8] == 1) {
        $('#d_disponible').html('<i class="fa-solid fa-circle-check"></i> Disponible')
    } else {
        $('#d_disponible').html('<i class="fa-solid fa-ban text-danger"></i> Rupture de stock')
    }
    $('#d_prix').text($.trim(parseInt(data[6])) + " DH")
    $('#d_description').text($.trim(data[4]))
    $('#d_recomendation').text($.trim(data[5]))
    $('#d_image_M').attr('src', data[12])
    if (data[13] == "") {
        $('#d_img_1').css('display', 'none')
    }else {
        $('#d_img_1').attr('src', data[13])
    }
    if (data[14] == "") {
        $('#d_img_2').css('display', 'none')
    }else {
        $('#d_img_2').attr('src', data[14])
    }
    if (data[15] == "") {
        $('#d_img_3').css('display', 'none')
    }else {
        $('#d_img_3').attr('src', data[15])
    }
    if (data[16] == "") {
        $('#d_img_4').css('display', 'none')
    }else {
        $('#d_img_4').attr('src', data[16])
    }

})

var show_more = document.getElementById('show-more');
var height = document.getElementById('descri');
var down = document.getElementById('down');
var shwo = document.getElementById('show');
show_more.addEventListener('click', function() {
    height.classList.toggle('active');
    if (height.classList.contains('active')) {
        down.classList.remove('fa-chevron-down')
        down.classList.add('fa-angle-up')
        shwo.innerText = "montre Moins"
    } else {
        down.classList.add('fa-chevron-down')
        down.classList.remove('fa-angle-up')
        shwo.innerText = "montre plus"
    }
});