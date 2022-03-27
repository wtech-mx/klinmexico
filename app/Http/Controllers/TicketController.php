<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\DescripcionTicket;
use App\Models\Fixer;
use App\Models\PrecioTicket;
use App\Models\Racks;
use App\Models\Ticket;
use Illuminate\Support\Arr;
use DB;
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

        $racks2 = Racks::get()->makeHidden(['id', 'id_ticket','updated_at', 'created_at']);



        return view('ticket.create', compact('client', 'racks','racks2'));
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
        $klin = $request->get('klin');

        if($request->get('servicio_primario') == 'Essential'){
            $precio_cap = 110;
        }elseif($request->get('servicio_primario') == 'Plus'){
            $precio_cap = 160;
        }elseif($request->get('servicio_primario') == 'Elite'){
            $precio_cap = 190;
        }elseif($request->get('servicio_primario') == 'Pure White'){
            $precio_cap = 170;
        }elseif($request->get('servicio_primario') == 'Special Care'){
            $precio_cap = 160;
        }

        if($request->get('glue')){
            $glue =130;
        }else{
            $glue = 0;
        }

        if($request->get('klin_dye')){
            $klin_dye = 260;
        }else{
            $klin_dye = 0;
        }

        if($request->get('unyellow')){
            $unyellow = 80;
        }else{
            $unyellow = 0;
        }

        if($request->get('sole')){
            $sole = 520;
        }else{
            $sole = 0;
        }

        if($request->get('invisible')){
            $invisible = 180;
        }else{
            $invisible = 0;
        }

        if($request->get('sew') == 1){
            $sew = 130;
        }elseif($request->get('sew') == 2){
            $sew = 240;
        }else{
            $sew = 0;
        }


        if($request->get('protector')){
            $protector = 55;
        }else{
            $protector = 0;
        }

        if($request->get('promocion')){
            $promocion = $request->get('promocion');
        }else{
            $promocion = 0;
        }

        if($request->get('patch') == 1){
            $patch = 240;
        }
        if($request->get('patch') == 2){
            $patch = 160;
        }
        if($request->get('patch') == 3){
            $patch = 160;
        }
        if($request->get('patch') == 4){
            $patch = 240;
        }
        if($request->get('patch') == NULL){
            $patch = 0;
        }

        if($request->get('tint') == 1){
            $tint = 160;
        }
        if($request->get('tint') == 2){
            $tint = 300;
        }
        if($request->get('tint') == 3){
            $tint = 450;
        }

        if($request->get('klin') == 'Klin Bag'){
            $klin = 160;
        }
        if($request->get('klin') == 'Klin Purse'){
            $klin = 110;
        }
        if($request->get('klin') == 'Klin Bag Extra'){
            $klin = 260;
        }

        $suma = $precio_cap+$protector+$tint+$tipo_servicio+$klin+$klin_dye+$unyellow+$glue+$sew+$sole+$patch+$invisible+$request->get('personalizado');

        $descuento = $suma * $promocion;
        $subtotal = $suma - $descuento;
        $total = $subtotal + $request->get('recoleccion');

        if($request->get('por_pagar') == 2){
            $por_pagar2 = $total;
        }else{
            $por_pagar2 = $total - $request->get('por_pagar');
        }

        if($request->get('gifcard')){
            $por_pagar = $por_pagar2 - $request->get('gifcard');

        }else{
            $por_pagar = $total - $por_pagar2 ;

        }

        if($request->get('por_pagar') == 0){
            $por_pagar = $request->get('por_pagar');
        }

        $ticket = new Ticket;
        $ticket->id_user = $request->get('id_user');
        $ticket->rack = $request->get('num_rack');
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

        $precio = new PrecioTicket;
        $precio->id_ticket = $ticket->id;
        $precio->id_descripcion = $descripcion->id;
        $precio->promocion = $request->get('promocion');
        $precio->recoleccion = $request->get('recoleccion');
        $precio->pago = $request->get('pago');
        $precio->gifcard = $request->get('gifcard');
        $precio->por_pagar = $por_pagar;
        $precio->save();

        if($request->get('num_rack') == true){
            $racke = Racks::find($request->get('num_rack'));
            $racke->estatus = 1;
            $racke->save();
     }

        return redirect()->route('ticket.index');
    }
}
