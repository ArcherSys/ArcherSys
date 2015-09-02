<<<<<<< HEAD
<<<<<<< HEAD
jQuery(document).ready( function($) {
    alert('pointer.js loaded');
    console.log('pointerContent', pointerContent);

    $('#menu-comments').pointer({
        content: pointerContent,
        position: {
            edge: 'left', // arrow direction
            align:  'center' // vertical alignment
        },
        pointerWidth: 350,
        close: function() {
            $.post(ajaxurl, {
                pointer: 'disqus_settings_pointer', // pointer ID
                action: 'dismiss-wp-pointer'
            });
        }
    }).pointer('open');
});
=======
jQuery(document).ready( function($) {
    alert('pointer.js loaded');
    console.log('pointerContent', pointerContent);

    $('#menu-comments').pointer({
        content: pointerContent,
        position: {
            edge: 'left', // arrow direction
            align:  'center' // vertical alignment
        },
        pointerWidth: 350,
        close: function() {
            $.post(ajaxurl, {
                pointer: 'disqus_settings_pointer', // pointer ID
                action: 'dismiss-wp-pointer'
            });
        }
    }).pointer('open');
});
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
jQuery(document).ready( function($) {
    alert('pointer.js loaded');
    console.log('pointerContent', pointerContent);

    $('#menu-comments').pointer({
        content: pointerContent,
        position: {
            edge: 'left', // arrow direction
            align:  'center' // vertical alignment
        },
        pointerWidth: 350,
        close: function() {
            $.post(ajaxurl, {
                pointer: 'disqus_settings_pointer', // pointer ID
                action: 'dismiss-wp-pointer'
            });
        }
    }).pointer('open');
});
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
