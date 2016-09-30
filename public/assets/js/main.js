$(document).ready(function () {
    //$('.cbp-vm-details').hide();

    var container = $( '#content-view' ),
		optionSwitch = $( 'div.cbp-vm-options a' );

    function initContent() {
		optionSwitch.each( function() {
			$(this).on( 'click', function( ev ) {
				ev.preventDefault();
				_switch( $(this) );
			});
		});
	}

	function _switch( opt ) {
		
		optionSwitch.each( function() {
			$(this).removeClass('cbp-vm-selected');
			container.removeClass($(this).data('view'));
		});

		opt.addClass('cbp-vm-selected');

		container.addClass(opt.data('view'));
	}

	initContent();
   
   $(".cbp-vm-grid").click(function () {
        $('.cbp-vm-details').hide();
    });

    $(".cbp-vm-list").click(function () {
        $('.cbp-vm-details').show();
    });
});