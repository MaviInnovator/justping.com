<?php // Code within app\Helpers\Helper.php
namespace App\Helpers;

use Illuminate\Http\Request;
use Config;
use Auth;
use App\Models\User;
use App\Models\UserDetailsModel;

class Helper
{
    public static function getHost()
    {
        $host = request()->getHost();
        $host = 'www.vrsoftsolutions.com';
        $allowed_hosts = array('localhost', 'vrsoftsolutions.com/justping');
        if (in_array($host, $allowed_hosts)) {
            return false;
        } else {
            return 'vrsoftsolutions.com';;
        }
    }
}
