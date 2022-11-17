//-----------------------1단-----------------------------    
    function update_cate1()
    {
        var cateval = $('#sel1').attr('value');
        $.get('get_player.php?cateval=' + cateval,show_cates1);
         
    }
 
    function show_cates1(res){
    $('#catetd2').html(res);
    $('#catetd3').html("");
    $('#catetd4').html("");
 
    }
//-----------------------1단-----------------------------
// //-----------------------2단-----------------------------
//     function update_cate2()
//     {
//         var cateval = $('#sel2').attr('value');
//         $.get('get_cate2.php?cateval=' + cateval,show_cates2);
         
//     }
//     function show_cates2(res2){
//     $('#catetd3').html(res2);
//     $('#catetd4').html("");
 
//     }
//-----------------------2단-----------------------------
// //-----------------------3단-----------------------------
// function update_cate3()
//     {
//         var cateval = $('#sel3').attr('value');
//         $.get('get_cate3.php?cateval=' + cateval,show_cates3);
//     }
//     function show_cates3(res3){
//     $('#catetd4').html(res3);
//     }
// //-----------------------3단-----------------------------