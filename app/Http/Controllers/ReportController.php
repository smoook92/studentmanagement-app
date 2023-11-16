<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Auth;
use App\Models\Payment;

class ReportController extends Controller
{
    public function report1($pid)
    {
        $payment = Payment::find($pid);
        $pdf = App::make('dompdf.wrapper');
        $print = "<div style='margin:20px; padding:20px;>";
        $print.= "<h1 align='center'>Payment receipt</h1>";
        $print.= "<hr />";
        $print.= "<p> Receipt number: <b>" . $pid . "</b> </p>";
        $print.= "<p> Registration number: <b>" . $payment->paid_date . "</b></p>";

        $print.= "<p> Student Name: <b>" . $payment->enrollment->student->name . "</b></p>";

        $print.= "<hr/>";
        $print.= "<table style='width: 100%'>";

        // Создание таблицы отчета
        $print.= "<tr>";
        $print.= "<td>Description</td>";
        $print.= "<td>Price</td>";

        $print.= "</tr>";

        $print.= "<tr>";
        $print.= "<td> <h3>" . $payment->enrollment->batch->name . "</h3> </td>";
        $print.= "<td> <h3>" . $payment->amount . "</h3> </td>";
        $print.= "<tr>";

        $print.= "</table>";
        $print.= "<hr/>";

        $print.= "<span> Printed: <b>" . (Auth::check() ? Auth::user()->name : 'Unknown') . "</b></span>";
        $print.= "<span> Print date: <b>". date('Y-m-d') . "</b></span>";

        $print.= "</div>";
        $pdf->loadHTML($print);
        return $pdf->stream();
    }
  
}

?>