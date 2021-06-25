<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FormsController;

class FormsController extends Controller
{
    public function pp()
    {
        return redirect('https://paystack.com/pay/pause-and-pray');
    
    }

    public function mg()
    {
        return view('donation-forms.memorial-gifts');
    }
    
    public function pa()
    {
        //return redirect('https://paystack.com/pay/pause-and-pray');
    }

    public function mm($package)
    {
        

        if($package == 'default'){
            return view('donation-forms.mission-medalist');
        }elseif ($package == 'bronze') {
            return redirect('https://paystack.com/pay/0mhro8vept');
        }elseif ($package == 'silver') {
            return redirect('https://paystack.com/pay/0mhro8vept');
        }elseif ($package == 'gold') {
            return redirect('https://paystack.com/pay/0mhro8vept');
        }

        
    }
}
