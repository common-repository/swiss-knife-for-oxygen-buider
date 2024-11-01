<div
    class="swk-topbar-icons button-paste"
    style="display:none" >

    <img src="<?php echo plugin_dir_url(__FILE__) . 'img/clipboard/paste-icon.svg'; ?>">

</div>

<script>

    jQuery(document).ready(function($) {

        $( '.button-paste' ).insertAfter( '.oxygen-toolbar-panels' ).addClass( 'swk-button-loaded' );

    });

</script>

<script>
    const swkUseSystemClipboard = "yes";

    tippy('.button-paste', {
  		content: 'Paste from Clipboard',
		animation: 'shift-toward',
	});

</script>

<style>
    .swk-button-loaded{
        display: flex !important;
    }

    .swk-topbar-icons{
		background: var(--oxy-dark);
		display: flex;
		align-items: center;
		justify-content: center;
		text-align: center;
		padding: 0 12px;
		cursor: pointer;
	}
	.swk-topbar-icons:hover{
		background-color: var(--oxy-hover);
	}	

    .swk-topbar-icons img {
        height: 20px;
    }
</style>

