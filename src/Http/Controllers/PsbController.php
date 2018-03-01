<?php namespace Bantenprov\Psb\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\Psb\Facades\Psb;
use Bantenprov\Psb\Models\PsbModel;

/**
 * The PsbController class.
 *
 * @package Bantenprov\Psb
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PsbController extends Controller
{
    public function demo()
    {
        return Psb::welcome();
    }
}
