<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\DescripcionTicket;
use App\Models\Fixer;
use App\Models\PrecioTicket;
use App\Models\Racks;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){

        $ticket = Ticket::get();

        $precio_ticket = PrecioTicket::get();

        return view('ticket.index', compact('ticket', 'precio_ticket'));
    }

    public function create()
    {
        $client = Client::get();

        $racks = Racks::get();

        return view('ticket.create', compact('client', 'racks'));
    }

    public function store(Request $request)
    {

        $validate = $this->validate($request, [
            'id_user' => 'required',
        ]);

        $precio_cap = $request->get('precio_cap');
        $por_pagar = $request->get('por_pagar');
        $tipo_servicio = $request->get('tipo_servicio');
        $tint = $request->get('tint');

        if($request->get('glue')){
            $glue = '130';
        }else{
            $glue = '0';
        }

        if($request->get('sole')){
            $sole = '130';
        }else{
            $sole = '0';
        }

        if($request->get('invisible')){
            $invisible = '130';
        }else{
            $invisible = '0';
        }

        if($request->get('sew') == 1){
            $sew = '130';
        }elseif($request->get('sew') == 2){
            $sew = '240';
        }else{
            $sew = '0';
        }

        if($request->get('protector')){
            $protector = '55';
        }else{
            $protector = '0';
        }

        if($request->get('promocion')){
            $promocion = $request->get('promocion');
        }else{
            $promocion = '0';
        }

        switch($request->get('patch')){
            case($request->get('patch') == 1):
                $patch = '240';
                break;
            case($request->get('patch') == 2):
                    $patch = '160';
                    break;
            case($request->get('patch') == 3):
                $patch = '160';
                break;
            case($request->get('patch') == 4):
                $patch = '240';
                break;
            case($request->get('patch')):
                $patch = '0';
                break;
        }

        if($request->get('tint') == 1){
            $tint = '160';
        }
        if($request->get('tint') == 2){
            $tint = '300';
        }
        if($request->get('tint') == 3){
            $tint = '450';
        }

        $suma = $precio_cap+$protector+$tint+$tipo_servicio;
        $descuento = $suma * $promocion;
        $subtotal = $suma - $descuento;
        $total = $subtotal + $request->get('recoleccion');

        if($request->get('gifcard')){
            $protector = '55';
            $por_pagar = $total - $request->get('por_pagar') - $request->get('gifcard');
        }else{
            $por_pagar = $total - $request->get('por_pagar');
        }



        if($request->get('por_pagar') == 2){
            $por_pagar = $total;
        }

        $ticket = new Ticket;
        $ticket->id_user = $request->get('id_user');
        $ticket->rack = $request->get('rack');
        $ticket->estatus = 0;
        $ticket->servicio_primario = $request->get('servicio_primario');
        $ticket->unyellow = $request->get('unyellow');
        $ticket->tint = $request->get('tint');
        $ticket->tint_descripcion = $request->get('tint_descripcion');
        $ticket->klin = $request->get('klin');
        $ticket->protector = $request->get('protector');
        $ticket->factura = $request->get('factura');
        $ticket->subtotal = $subtotal;
        $ticket->total = $total;
        $ticket->save();

        if($request->get('glue') || $request->get('sew') || $request->get('sole') || $request->get('patch') || $request->get('invisible') || $request->get('personalizado')){
            $fixer = new Fixer;
            $fixer->id_ticket = $ticket->id;
            $fixer->glue = $request->get('glue');
            $fixer->sew = $request->get('sew');
            $fixer->sole = $request->get('sole');
            $fixer->patch = $request->get('patch');
            $fixer->invisible = $request->get('invisible');
            $fixer->personalizado = $request->get('personalizado');
            $fixer->save();
        }

        $precio = new PrecioTicket;
        $precio->id_ticket = $ticket->id;
        $precio->promocion = $request->get('promocion');
        $precio->recoleccion = $request->get('recoleccion');
        $precio->pago = $request->get('pago');
        $precio->gifcard = $request->get('gifcard');
        $precio->por_pagar = $por_pagar;
        $precio->save();

        $descripcion = new DescripcionTicket;
        $descripcion->id_ticket = $ticket->id;
        $descripcion->marca = $request->get('marca');
        $descripcion->modelo = $request->get('modelo');
        $descripcion->color1 = $request->get('color1');
        $descripcion->color2 = $request->get('color2');
        $descripcion->talla = $request->get('talla');
        $descripcion->categoria = $request->get('categoria');
        $descripcion->observacion = $request->get('observacion');
        $descripcion->tipo_servicio = $request->get('tipo_servicio');
        $descripcion->save();

        $racks = Racks::findOrFail(1);
        $racks->r141 = $request->get('r141');
        $racks->r142 = $request->get('r142');
        $racks->r143 = $request->get('r143');
        $racks->r144 = $request->get('r144');
        $racks->r145 = $request->get('r145');
        $racks->r146 = $request->get('r146');
        $racks->r147 = $request->get('r147');
        $racks->r148 = $request->get('r148');
        $racks->r149 = $request->get('r149');
        $racks->r150 = $request->get('r150');
        $racks->r151 = $request->get('r151');
        $racks->r152 = $request->get('r152');
        $racks->r153 = $request->get('r153');
        $racks->r154 = $request->get('r154');
        $racks->r155 = $request->get('r155');
        $racks->r156 = $request->get('r156');
        $racks->r157 = $request->get('r157');
        $racks->r158 = $request->get('r158');
        $racks->r159 = $request->get('r159');
        $racks->r160 = $request->get('r160');
        $racks->r161 = $request->get('r161');
        $racks->update();

        return redirect()->route('ticket.index');
    }
}
