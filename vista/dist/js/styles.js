$('#btnform').click(function () {
    if ($('.fornnuevo').is(":visible")) {
        $('.fornnuevo').hide(600);
    } else {
        $('.fornnuevo').show(600);
    }
})

/**SUBIR FOTOS USUARIOS*/
$('#foto').change(function(){
    $('.alert').remove();
    var imagen = this.files[0];
    /* validar quer la iamgen sea JPG o PNG*/
    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){
        $('#foto').val("");
        $('#foto').after(`
        <div class="alert alert-danger">The type of file is not permited only JPG or PNG files allowed!</div>
        `)
        return;
    }else if(imagen["size"] > 12000000){
        $('#foto').val("");
        $('#foto').after(`
        <div class="alert alert-danger">The image cant be higher than 2 mb in size</div>
        `)
        return;
    }else{
        var datosimagen = new FileReader;
        datosimagen.readAsDataURL(imagen);
        $(datosimagen).on("load", function(event){
            var rutaimagen  = event.target.result;
            $('.prevfotousuario').attr("src", rutaimagen);
        })
    }
})

// As A jQuery Plugin -->
var gallery = $('.gallery a').simpleLightbox({
    /* options */
    nav: true,
});
// ITEM1
$('#1').click(function(){
    $('.alerts1').remove();
var input = $('#1').val();
var input2 = $("#ct1").val();
if(input == 'SI' ){
    $('#1').after(`
    <div class="alert alert-success alerts1">Seleccione una cantidad de unidades</div>
    `)
    var replace2 = $('#ct1').val(0)
}else if(input == 'NO'){
    var replace2 = $('#ct1').val(0)
}
})
$('#ct1').click(function(){
    var input2 = $("#ct1").val();
    var input = $('#1').val();
    if(input2 >= 1){
        $('.alerts1').remove();
    }else if(input2 == 0){
        var replace = $('#1').val('')
    }else if (input2 == 0 && input == 'SI'){
        $('#1').after(`
        <div class="alert alert-success alerts1">Seleccione una cantidad de unidades</div>
        `)
    }
})

// ITEM2
$('#2').click(function(){
    $('.alerts2').remove();
var input = $('#2').val();
var input2 = $("#ct2").val();
if(input == 'SI' ){
    $('#2').after(`
    <div class="alert alert-success alerts2">Seleccione una cantidad de unidades</div>
    `)
    var replace2 = $('#ct2').val(0)
}else if(input == 'NO'){
    var replace2 = $('#ct2').val(0)
}
})
$('#ct2').click(function(){
    var input2 = $("#ct2").val();
    var input = $('#2').val();
    if(input2 >= 1){
        $('.alerts2').remove();
    }else if(input2 == 0){
        var replace = $('#2').val('')
    }else if (input2 == 0 && input == 'SI'){
        $('#2').after(`
        <div class="alert alert-success alerts2">Seleccione una cantidad de unidades</div>
        `)
    }
})

// ITEM3
$('#3').click(function(){
    $('.alerts3').remove();
var input = $('#3').val();
var input2 = $("#ct3").val();
if(input == 'SI' ){
    $('#3').after(`
    <div class="alert alert-success alerts3">Seleccione una cantidad de unidades</div>
    `)
    var replace2 = $('#ct3').val(0)
}else if(input == 'NO'){
    var replace2 = $('#ct3').val(0)
}
})
$('#ct3').click(function(){
    var input2 = $("#ct3").val();
    var input = $('#3').val();
    if(input2 >= 1){
        $('.alerts3').remove();
    }else if(input2 == 0){
        var replace = $('#3').val('')
    }else if (input2 == 0 && input == 'SI'){
        $('#3').after(`
        <div class="alert alert-success alerts3">Seleccione una cantidad de unidades</div>
        `)
    }
})

// ITEM4
$('#4').click(function(){
    $('.alerts4').remove();
var input = $('#4').val();
var input2 = $("#ct4").val();
if(input == 'SI' ){
    $('#4').after(`
    <div class="alert alert-success alerts4">Seleccione una cantidad de unidades</div>
    `)
    var replace2 = $('#ct4').val(0)
}else if(input == 'NO'){
    var replace2 = $('#ct4').val(0)
}
})
$('#ct4').click(function(){
    var input2 = $("#ct4").val();
    var input = $('#4').val();
    if(input2 >= 1){
        $('.alerts4').remove();
    }else if(input2 == 0){
        var replace = $('#4').val('')
    }else if (input2 == 0 && input == 'SI'){
        $('#4').after(`
        <div class="alert alert-success alerts4">Seleccione una cantidad de unidades</div>
        `)
    }
})

// ITEM5
$('#5').click(function(){
    $('.alerts5').remove();
var input = $('#5').val();
var input2 = $("#ct5").val();
if(input == 'SI' ){
    $('#5').after(`
    <div class="alert alert-success alerts5">Seleccione una cantidad de unidades</div>
    `)
    var replace2 = $('#ct5').val(0)
}else if(input == 'NO'){
    var replace2 = $('#ct5').val(0)
}
})
$('#ct5').click(function(){
    var input2 = $("#ct5").val();
    var input = $('#5').val();
    if(input2 >= 1){
        $('.alerts5').remove();
    }else if(input2 == 0){
        var replace = $('#5').val('')
    }else if (input2 == 0 && input == 'SI'){
        $('#5').after(`
        <div class="alert alert-success alerts5">Seleccione una cantidad de unidades</div>
        `)
    }
})

// ITEM6
$('#6').click(function(){
    $('.alerts6').remove();
var input = $('#6').val();
var input2 = $("#ct6").val();
if(input == 'SI' ){
    $('#6').after(`
    <div class="alert alert-success alerts6">Seleccione una cantidad de unidades</div>
    `)
    var replace2 = $('#ct6').val(0)
}else if(input == 'NO'){
    var replace2 = $('#ct6').val(0)
}
})
$('#ct6').click(function(){
    var input2 = $("#ct6").val();
    var input = $('#6').val();
    if(input2 >= 1){
        $('.alerts6').remove();
    }else if(input2 == 0){
        var replace = $('#6').val('')
    }else if (input2 == 0 && input == 'SI'){
        $('#6').after(`
        <div class="alert alert-success alerts6">Seleccione una cantidad de unidades</div>
        `)
    }
})

// ITEM7
$('#7').click(function(){
    $('.alerts7').remove();
var input = $('#7').val();
var input2 = $("#ct7").val();
if(input == 'SI' ){
    $('#7').after(`
    <div class="alert alert-success alerts7">Seleccione una cantidad de unidades</div>
    `)
    var replace2 = $('#ct7').val(0)
}else if(input == 'NO'){
    var replace2 = $('#ct7').val(0)
}
})
$('#ct7').click(function(){
    var input2 = $("#ct7").val();
    var input = $('#7').val();
    if(input2 >= 1){
        $('.alerts7').remove();
    }else if(input2 == 0){
        var replace = $('#7').val('')
    }else if (input2 == 0 && input == 'SI'){
        $('#7').after(`
        <div class="alert alert-success alerts7">Seleccione una cantidad de unidades</div>
        `)
    }
})

// ITEM8
$('#8').click(function(){
    $('.alerts8').remove();
var input = $('#8').val();
var input2 = $("#ct8").val();
if(input == 'SI' ){
    $('#8').after(`
    <div class="alert alert-success alerts8">Seleccione una cantidad de unidades</div>
    `)
    var replace2 = $('#ct8').val(0)
}else if(input == 'NO'){
    var replace2 = $('#ct8').val(0)
}
})
$('#ct8').click(function(){
    var input2 = $("#ct8").val();
    var input = $('#8').val();
    if(input2 >= 1){
        $('.alerts8').remove();
    }else if(input2 == 0){
        var replace = $('#8').val('')
    }else if (input2 == 0 && input == 'SI'){
        $('#8').after(`
        <div class="alert alert-success alerts8">Seleccione una cantidad de unidades</div>
        `)
    }
})

// ITEM9
$('#9').click(function(){
    $('.alerts9').remove();
var input = $('#9').val();
var input2 = $("#ct9").val();
if(input == 'SI' ){
    $('#9').after(`
    <div class="alert alert-success alerts9">Seleccione una cantidad de unidades</div>
    `)
    var replace2 = $('#ct9').val(0)
}else if(input == 'NO'){
    var replace2 = $('#ct9').val(0)
}
})
$('#ct9').click(function(){
    var input2 = $("#ct9").val();
    var input = $('#9').val();
    if(input2 >= 1){
        $('.alerts9').remove();
    }else if(input2 == 0){
        var replace = $('#9').val('')
    }else if (input2 == 0 && input == 'SI'){
        $('#9').after(`
        <div class="alert alert-success alerts9">Seleccione una cantidad de unidades</div>
        `)
    }
})

