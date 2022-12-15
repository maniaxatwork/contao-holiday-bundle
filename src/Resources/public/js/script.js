$(document).ready(function() {
    let shown = localStorage.getItem('holidayShown');
    let vDate = $('.holiday_list').attr('data-date');

    if(shown === null || shown < vDate){
        $('.mod_maniax_contao_holiday_list').addClass('show');
        localStorage.setItem('holidayShown', vDate);
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
