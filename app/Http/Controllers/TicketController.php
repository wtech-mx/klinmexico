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
        $klin = $request->get('klin');

        if($request->get('servicio_primario') == 'Essential'){
            $precio_cap = '110';
        }elseif($request->get('servicio_primario') == 'Plus'){
            $precio_cap = '160';
        }elseif($request->get('servicio_primario') == 'Elite'){
            $precio_cap = '190';
        }elseif($request->get('servicio_primario') == 'Pure White'){
            $precio_cap = '170';
        }elseif($request->get('servicio_primario') == 'Special Care'){
            $precio_cap = '160';
        }

        if($request->get('glue')){
            $glue = '130';
        }else{
            $glue = '0';
        }

        if($request->get('klin_dye')){
            $klin_dye = '260';
        }else{
            $klin_dye = '0';
        }

        if($request->get('unyellow')){
            $unyellow = '80';
        }else{
            $unyellow = '0';
        }

        if($request->get('sole')){
            $sole = '520';
        }else{
            $sole = '0';
        }

        if($request->get('invisible')){
            $invisible = '180';
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

        if($request->get('patch') == 1){
            $patch = '240';
        }
        if($request->get('patch') == 2){
            $patch = '160';
        }
        if($request->get('patch') == 3){
            $patch = '160';
        }
        if($request->get('patch') == 4){
            $patch = '240';
        }
        if($request->get('patch') == NULL){
            $patch = '0';
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

        if($request->get('klin') == 'Klin Bag'){
            $klin = '160';
        }
        if($request->get('klin') == 'Klin Purse'){
            $klin = '110';
        }
        if($request->get('klin') == 'Klin Bag Extra'){
            $klin = '260';
        }

        $suma = $precio_cap+$protector+$tint+$tipo_servicio+$klin+$klin_dye+$unyellow+$glue+$sew+$sole+$patch+$invisible+$request->get('personalizado');

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

        $racks = Racks::findOrFail(1);
        if($request->get('servicio_primario')=='Essential' || $request->get('servicio_primario')=='Fixer Snkrs' || $request->get('servicio_primario')=='Plus' || $request->get('servicio_primario')=='Elite' || $request->get('servicio_primario')=='Pure White' || $request->get('servicio_primario')=='Special Care'){
            $racks->r1 = $request->get('r1');
            $racks->r2 = $request->get('r2');
            $racks->r3 = $request->get('r3');
            $racks->r4 = $request->get('r4');
            $racks->r5 = $request->get('r5');
            $racks->r6 = $request->get('r6');
            $racks->r7 = $request->get('r7');
            $racks->r8 = $request->get('r8');
            $racks->r9 = $request->get('r9');
            $racks->r10 = $request->get('r10');
            $racks->r11 = $request->get('r11');
            $racks->r12 = $request->get('r12');
            $racks->r13 = $request->get('r13');
            $racks->r14 = $request->get('r14');
            $racks->r15 = $request->get('r15');
            $racks->r16 = $request->get('r16');
            $racks->r17 = $request->get('r17');
            $racks->r18 = $request->get('r18');
            $racks->r19 = $request->get('r19');
            $racks->r20 = $request->get('r20');
            $racks->r21 = $request->get('r21');
            $racks->r22 = $request->get('r22');
            $racks->r23 = $request->get('r23');
            $racks->r24 = $request->get('r24');
            $racks->r25 = $request->get('r25');
            $racks->r26 = $request->get('r26');
            $racks->r27 = $request->get('r27');
            $racks->r28 = $request->get('r28');
            $racks->r29 = $request->get('r29');
            $racks->r30 = $request->get('r30');
            $racks->r31 = $request->get('r31');
            $racks->r32 = $request->get('r32');
            $racks->r33 = $request->get('r33');
            $racks->r34 = $request->get('r34');
            $racks->r35 = $request->get('r35');
            $racks->r36 = $request->get('r36');
            $racks->r37 = $request->get('r37');
            $racks->r38 = $request->get('r38');
            $racks->r39 = $request->get('r39');
            $racks->r40 = $request->get('r40');
            $racks->r41 = $request->get('r41');
            $racks->r42 = $request->get('r42');
            $racks->r43 = $request->get('r43');
            $racks->r44 = $request->get('r44');
            $racks->r45 = $request->get('r45');
            $racks->r46 = $request->get('r46');
            $racks->r47 = $request->get('r47');
            $racks->r48 = $request->get('r48');
            $racks->r49 = $request->get('r49');
            $racks->r50 = $request->get('r50');
            $racks->r51 = $request->get('r51');
            $racks->r52 = $request->get('r52');
            $racks->r53 = $request->get('r53');
            $racks->r54 = $request->get('r54');
            $racks->r55 = $request->get('r55');
            $racks->r56 = $request->get('r56');
            $racks->r57 = $request->get('r57');
            $racks->r58 = $request->get('r58');
            $racks->r59 = $request->get('r59');
            $racks->r60 = $request->get('r60');
            $racks->update();
        }

        if($request->get('servicio_primario') == 'Klin Cap'){
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
        }

        if($request->get('servicio_primario') == 'Klin Bag'){
            $racks->r162 = $request->get('r162');
            $racks->r163 = $request->get('r163');
            $racks->r164 = $request->get('r164');
            $racks->r165 = $request->get('r165');
            $racks->r166 = $request->get('r166');
            $racks->r167 = $request->get('r167');
            $racks->r168 = $request->get('r168');
            $racks->r168 = $request->get('r169');
            $racks->r170 = $request->get('r170');
            $racks->r171 = $request->get('r171');
            $racks->r172 = $request->get('r172');
            $racks->r173 = $request->get('r173');
            $racks->r174 = $request->get('r174');
            $racks->r175 = $request->get('r175');
            $racks->r176 = $request->get('r176');
            $racks->r177 = $request->get('r177');
            $racks->r178 = $request->get('r178');
            $racks->r179 = $request->get('r179');
            $racks->r180 = $request->get('r180');
            $racks->r181 = $request->get('r181');
            $racks->r182 = $request->get('r182');
            $racks->update();
        }
        return redirect()->route('ticket.index');
    }
}
