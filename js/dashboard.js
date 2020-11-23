$(".dropdown-label").click(function(){
    if($(this).siblings(".dropdown-nav").is(":visible")){
        $(this).siblings(".dropdown-nav").toggle();
    }else{
        $(".dropdown-nav").hide();
        $(this).siblings(".dropdown-nav").toggle();
    }
})

$('#fd_by_merainterest').DataTable({
    bInfo : false,
    "oLanguage": { "sSearch": "" },
    language: {
        searchPlaceholder: "Search",
        lengthMenu: "FD's Opened through merainterest.com"
    }
});

$('#fd_by_manually').DataTable({
    bInfo : false,
    "oLanguage": { "sSearch": "" },
    language: {
        searchPlaceholder: "Search",
        lengthMenu: "FD's Added Manually"
    }
});

$('.owl-carousel').owlCarousel({
    margin:60,
    loop:false,
    autoWidth:true,
    nav: true,
    navText : ["<span class='icon icon-chevron-left'></span>","<span class='icon icon-chevron-right'></span>"]
});

$('#recent_transaction').DataTable({
    // paging: false,
    // ordering: false,
    bInfo : false,
    "oLanguage": { "sSearch": "" },
    language: {
        searchPlaceholder: "Search",
        lengthMenu: 'Recent Transactions'
    }
});
$("#recent_transaction_filter").empty();
$("#recent_transaction_filter").html("<div class='date_filter'><div class='date_box'><label>From</label><input type='date' placeholder='DD/MM/YYYY'></div><div class='date_box'><label>To</label><input type='date' placeholder='DD/MM/YYYY'></div></div>");