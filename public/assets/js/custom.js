var base_url = $('meta[name="_path"]').attr('content');

//data list dropdown search bar & trigger
$('.flexdatalist').flexdatalist({
	minLength: 0
});

//quote input select
$('input.flexdatalist').on('select:flexdatalist', function(event, set, options) {
    //getQuoteForm(set.value);
    $("#getQuoteModal").modal('show');
    $('#quoteModalIframe').attr('src', base_url+"/quote/"+set.value+"/step-1");
});

//quote search button
$('#getQuoteBtn').bind('click', function() {
    //reset
    $('.flexdatalist').flexdatalist('reset');
    //add step 1 modal
    $('input.flexdatalist').on('select:flexdatalist', function(event, set, options) {
        //getQuoteForm(set.value);
        $("#getQuoteModal").modal('show');
        $('#quoteModalIframe').attr('src', base_url+"/quote/"+set.value+"/step-1");
    });

    $('input.flexdatalist').focus();

});

$(".select2").select2();

//checkbox and radio card select element
$('.checkbox-card').bind('click', function() {
    var checkbox = $(this).find(':checkbox');
    checkbox.attr('checked', !checkbox.attr('checked'));
});


$('.radio-card').bind('click', function() {
    var radio = $(this).find(':radio');
    if(radio.not(':checked')){
    	radio.prop("checked", true);
    }else{
    	radio.prop("checked", false);
    }
});

//login & register block toggle according to radio
$("input[name$='login_register']").click(function() {
    var test = $(this).val();
    if(test == 'register'){
    	$("#userLoginRadioBlock").hide();
    	$("#userRegisterBlock").show();
    }else{
    	$("#userLoginRadioBlock").show();
    	$("#userRegisterBlock").hide();
    }
}); 


function loginBlock(block) {
    if(block == 2){
        $("#userLoginBlockBtn").removeClass('login-tab-active');
        $("#quickerLoginBlockBtn").removeClass('login-tab-active').addClass('login-tab-active');
        $("#userLoginBlock").css('display','none');
        $("#quickerLoginBlock").css('display','block');
    }else{
        $("#userLoginBlockBtn").removeClass('login-tab-active').addClass('login-tab-active');
        $("#quickerLoginBlockBtn").removeClass('login-tab-active');
        $("#quickerLoginBlock").css('display','none');
        $("#userLoginBlock").css('display','block');
    }
}

loginBlock(1);

function switchLogin(block) {
    if(block == 'register'){
        $("#userLoginBox").css('display','none');
        $("#userRegisterBox").css('display','block');
    }else{
        $("#userRegisterBox").css('display','none');
        $("#userLoginBox").css('display','block');
    }
}
loginBlock('login');

