
fontSizeString = $("*").css("font-size")

var numsStr = fontSizeString.replace(/[^0-9]/g,'');
fontSizeInt = parseInt(numsStr);

$("#btn-aumentar").on('click', ()=>{
    console.log(fontSizeInt)
    fontSizeInt += 2;
    $("*").css("font-size", fontSizeInt);
    $("#btn-aumentar").css("font-size", 16);
    $("#btn-diminuir").css("font-size", 16);
    $("i").css("font-size", 16);
})
$("#btn-diminuir").on('click', ()=>{
    console.log(fontSizeInt)
    fontSizeInt -= 2;
    $("*").css("font-size", fontSizeInt);
    $("#btn-aumentar").css("font-size", 16);
    $("#btn-diminuir").css("font-size", 16);
    $("i").css("font-size", 16);
})
