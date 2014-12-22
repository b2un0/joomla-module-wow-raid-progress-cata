window.wow = window.wow || {};

window.wow.mod_wow_raid_progress_cata = function () {
    jQuery('.mod_wow_raid_progress_cata .header').click(function () {
        if (jQuery(this).next('li').is(':visible')) {
            jQuery(this).next('li').slideUp('slow');
        } else {
            jQuery('.mod_wow_raid_progress_cata .npcs').slideUp('slow');
            jQuery(this).next('li').slideToggle('slow');
        }
    });
};

if (typeof jQuery != 'undefined') {
    jQuery(document).ready(window.wow.mod_wow_raid_progress_cata);
}