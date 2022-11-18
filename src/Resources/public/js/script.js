$(document).ready(function() {
    let shown = localStorage.getItem('holidayShown');

    if(shown != 1){
        $('.mod_maniax_contao_holiday_list').addClass('show');
        localStorage.setItem('holidayShown', 1);
    }

    //test

    $('.mod_maniax_contao_holiday_list').addClass('show');
    // end test
});
