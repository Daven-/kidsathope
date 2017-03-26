<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

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
        $studentData = explode(' ', $line[0]);
        $student = new Student;
        $student->fname = $studentData[0];
        $student->lname = $studentData[1];
        $student->grade = $studentData[2];
        $student->student_id_num = $studentData[3];
        $student->school_id = 1;
        $student->save();

      }
      return redirect('admin/dashboard')->with('csv', $pLines);
    }
}
