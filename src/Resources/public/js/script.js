$(document).ready(function() {
    let shown = localStorage.getItem('holidayShown');

    if(shown != 1){
        $('.mod_maniax_contao_holiday_list').addClass('show');
        localStorage.setItem('holidayShown', 1);
    }

    $('.holidayClose').on('click', function(e){
        e.preventDefault();
        $('.mod_maniax_contao_holiday_list').removeClass('show');
    })

    //test

    $('.mod_maniax_contao_holiday_list').addClass('show');
    // end test
});
