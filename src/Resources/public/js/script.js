$(document).ready(function() {
    let hID = localStorage.getItem('holidayID');
    let vId = $('.holiday_list').attr('data-id');

    if(hID === null || hID < vId){
        $('.mod_maniax_contao_holiday_list').addClass('show');
        localStorage.setItem('holidayID', vId);
    }

    $('.holidayClose').on('click', function(e){
        e.preventDefault();
        $('.mod_maniax_contao_holiday_list').removeClass('show');
    })

    if( ($('.holiday_list').length) && ($('body').hasClass('start')) ){
        $('#headerimage .inside').append('<div id="holidayInfoIcon" class="holidayInfoIcon"><i class="fas fa-circle-info" aria-hidden="true"></i> Urlaub</div>');

        $('.holidayInfoIcon').on('click', function(e){
            $('.mod_maniax_contao_holiday_list').addClass('show');
        })
    }
});
