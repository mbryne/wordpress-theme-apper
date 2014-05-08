/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
(function($){
	
	
    //
    //	DROPDOWN NAVIGATION
    //

    var $select = $('<select class="menu-select"></select>');
    $select.appendTo('.menu-select-container');

    //	add blank option
    var $option = $('<option>')
        .text('- Menu -')
        .val('#')
        .appendTo($select);

    //	add options
    $('#navigation li.menu-item').each(function () {
        var $li = $(this),
            $a = $li.find('> a'),
            $p = $li.parents('li'),
            prefix = new Array($p.length + 1).join('-');


        if ($a.length)
            var $option = $('<option>')
                .text(prefix + ' ' + $a.text())
                .val($a.attr('href'))
                .appendTo($select);
        else
            var $option = $('<option>')
                .text(prefix + ' ' + $li.find('b').text().toUpperCase())
                .val('#')
                .appendTo($select);

        if ($li.find('a').hasClass('active')) {
            $option.attr('selected', 'selected');
        }
    });

    //	set change event
    $select.change(function () {
        window.location = $select.find("option:selected").val();
    });

} )(jQuery);
