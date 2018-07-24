<?php

/**
 * Accounting Helpers
 */

if (! function_exists('account')) {
	/**
	 * Get Account Details
	 * @param  integer $input Account ID
	 * @return \App\Models\Account
	 */
    function account($input = 1)
    {
        return str_pad($input, config('document.sequence_length'), '0', STR_PAD_LEFT);
    }
}
