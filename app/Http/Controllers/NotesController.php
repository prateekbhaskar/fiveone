<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    //showing page
    public function index()
    {
        return view('notes', ['title' => 'Notes']);
    }
    public function formsubmit(Request $request)
    {
        $request->validate(
            [
                'amount' => 'required|numeric',
                'denom' => array(
                    'regex:/(^[1-9])+(,?[0-9])*/i'
                )
            ]
        );
        $amount = $request->amount;
        $revamount = 0;
        $denominations = explode(',', $request->denom);
        arsort($denominations);
        $data= 'Total Amount - ' . $amount . '<br><br>';
        $data.= 'Note - Count - Total<br>';
        foreach ($denominations as $denomination) {
            $count = floor($amount / $denomination);

            $sum = $denomination * $count;
            $amount -= $sum;
            if ($denomination == min($denominations) && $amount > 0) {
                $count++;
                $amount -=$denomination;
                $sum +=$denomination;
            }
            $revamount +=  $sum;
            $data.= $denomination . '  -  ' . $count . ' - ' . $sum . '<br>';
        }
        if ($amount == 0) {
            $data.= '<br>Total - ' . $revamount;
        } else {
            $difference = $request->amount - $revamount;
            $data.= '<br>difference - ' . $difference;
            $data.= '<br>New Amount - ' . $revamount;
        }
        return view('notes', ['title' => 'Notes Count','data'=>$data]);
    }
}
