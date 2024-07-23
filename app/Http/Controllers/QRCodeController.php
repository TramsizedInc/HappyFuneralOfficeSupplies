<?php

namespace App\Http\Controllers;

use App\Models\OrderData;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Crypt;
// user 

class QRCodeController extends Controller
{
    /**
     * Generates a 300 sized QR code from the hashed inner uuid of an order
     * 
     * @param string $inner_uuid The uuid of the order in the in-company format
     * @return Response The resulting QR code in 'image/png' type via a response
     */
    public function generatate_outer_uuid_qr_code($inner_uuid){
        $hash = Crypt::encryptString($inner_uuid);
        
        $qr_code = QrCode::size(300)->generate($hash);

        return response($qr_code)->header('Content-type', 'image/png');
    }

    /**
     * Returns the order id from the outer uuid
     *  
     * @param string $outer_uuid The uuid of the order in the outside-company format
     * @return int The id of the orderdata with this uuid
     */
    public function get_orderdata_id_form_outer_uuid($outer_uuid){
        $inner_uuid = Crypt::decryptString($outer_uuid);
        $order = OrderData::where('inner_uuid', $inner_uuid);

        return $order->id;
    }
}
