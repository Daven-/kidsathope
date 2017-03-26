<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class DashboardController.
 */
class CSVController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
    }
    public function uploadCSV(Request $request){
      $fh = fopen($_FILES['file']['tmp_name'], 'r+');
      $lines = array();
      while( ($row = fgetcsv($fh, 8192)) !== FALSE ) {
	     $lines[] = $row;
      }
      $pLines = array();
      foreach ($lines as $line) {
        $pLines[] = explode(' ', $line[0]);
      }
      return redirect('admin/dashboard')->with('csv', $pLines);
    }
}
``
