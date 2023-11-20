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
        $print = "<div style='margin:20px; padding:20px;'>";
        $print .= '<h1 align="center" style="font-family: DejaVu Sans, sans-serif;">Квитанция об оплате</h1>';

        $print .= "<hr />";
        $print .= '<p style="font-family: firefly, DejaVu Sans, sans-serif;">Номер квитанции: <b>' . $pid . '</b></p>';
        $print .= '<p style="font-family: firefly, DejaVu Sans, sans-serif;">Регистрационный номер: <b>' . $payment->paid_date . '</b></p>';

        $print .= '<p style="font-family: firefly, DejaVu Sans, sans-serif;">Имя Студента: <b>' . $payment->enrollment->student->name . '</b></p>';

        $print .= "<hr/>";
        $print .= "<table style='width: 100%'>";

        // Создание таблицы отчета
        $print .= "<tr>";
        $print .= '<td style="font-family: firefly, DejaVu Sans, sans-serif;">Описание</td>';
        $print .= '<td style="font-family: firefly, DejaVu Sans, sans-serif;">Цена</td>';
        $print .= "</tr>";

        $print .= "<tr>";
        $print .= '<td> <h3 style="font-family: firefly, \'DejaVu Sans\', sans-serif;">' . $payment->enrollment->batch->name . '</h3> </td>';
        $print .= '<td> <h3 style="font-family: firefly, \'DejaVu Sans\', sans-serif;">' . $payment->amount . ' ₽</h3> </td>';
        $print .= "</tr>";

        $print .= "</table>";
        $print .= "<hr/>";

        $print .= '<span style="font-family: firefly, \'DejaVu Sans\', sans-serif;"> Заказчик: <b>' . (Auth::check() ? Auth::user()->name : 'Неизвестный') . '</b></span>';
        $print .= '<span style="font-family: firefly, \'DejaVu Sans\', sans-serif;"> Дата печати: <b>' . date('Y-m-d') . '</b></span>';

        $print .= "</div>";
        $pdf->loadHTML($print);
        return $pdf->stream();
    }
}
?>
