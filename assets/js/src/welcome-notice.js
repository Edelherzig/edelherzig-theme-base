/* global edelherzigData, jQuery */

import { installPlugin, activatePlugin } from './common/plugin-install';

function handleWelcomeNotice( $ ) {
	const {
		activating,
		installing,
		done,
		activationUrl,
		onboardingUrl,
		ajaxUrl,
		nonce,
		otterRefNonce,
		otterStatus,
	} = edelherzigData;

	const installBtn = $( '.edelherzig-welcome-notice #edelherzig-install-otter' );
	const dismissBtn = $( '.edelherzig-welcome-notice .notice-dismiss' );
	const notice = $( '.edelherzig-welcome-notice' );
	const installText = installBtn.find( '.text' );
	const installSpinner = installBtn.find( '.dashicons' );

	const hideAndRemoveNotice = () => {
		notice.fadeTo( 100, 0, () => {
			notice.slideUp( 100, () => {
				notice.remove();
			} );
		} );
	};

	const activateOtter = async () => {
		installText.text( activating );
		await activatePlugin( activationUrl );

		await $.post( ajaxUrl, {
			nonce: otterRefNonce,
			action: 'edelherzig_set_otter_ref',
		} );

		installSpinner.removeClass( 'dashicons-update' );
		installSpinner.addClass( 'dashicons-yes' );
		installText.text( done );
		setTimeout( hideAndRemoveNotice, 1500 );
		window.location.href = onboardingUrl;
	};

	$( installBtn ).on( 'click', async () => {
		installSpinner.removeClass( 'hidden' );
		installBtn.attr( 'disabled', true );

		if ( otterStatus === 'active' ) {
			window.location.href = onboardingUrl;
			return;
		}

		if ( otterStatus === 'installed' ) {
			await activateOtter();
			return;
		}

		installText.text( installing );
		await installPlugin( 'otter-blocks' );
		await activateOtter();
	} );

	$( dismissBtn ).on( 'click', () => {
		$.post( ajaxUrl, {
			nonce,
			action: 'edelherzig_dismiss_welcome_notice',
			success: hideAndRemoveNotice,
		} );
	} );
}

document.addEventListener( 'DOMContentLoaded', () => {
	handleWelcomeNotice( jQuery );
} );
