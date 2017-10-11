<?php

if( isset( $_POST[ 'Submit' ]  ) ) {
	// Get input
	$target = $_REQUEST[ 'ip' ];
    $action = trim($_REQUEST[ 'action' ]);
    unset($_REQUEST[ 'ip' ]);
	// Determine OS and execute the ping command.
	if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
		// Windows
		$cmd = shell_exec( "$action  " . $target );
	}
	else {
		// *nix
		$cmd = shell_exec( "$action  -c 4 " . $target );
	}

	// Feedback for the end user
	$html .= "<pre>{$cmd}</pre>";
}

?>
