<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\DescripcionTicket;
use App\Models\Fixer;
use App\Models\PrecioTicket;
use App\Models\Direccion;
use App\Models\Racks;
use App\Models\Ticket;
use App\Models\Venta;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;
Use Alert;

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


class TicketController extends Controller
{
    public function index()
    {

        $ticket = Ticket::orderBy('created_at','DESC')
        ->get();

        $precio_ticket = PrecioTicket::orderBy('created_at','DESC')
        ->get();

        $venta = Venta::orderBy('created_at','DESC')
        ->get();

        return view('ticket.index', compact('ticket', 'precio_ticket', 'venta'));
    }

    public function sed_mail(Request $request, \Exception $e)
    {

            $validator = Validator::make($request->all(), [
                'id_user' => 'required',
                'id_ticket_id' => 'required',
                'email_client' => 'required',
                'estatus' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->with('errorForm', $validator->errors()->getMessages())
                    ->withInput();
            }

            if($request->get('estatus') == 'admin'){

                $venta = Venta::findOrFail($request->get('id_ticket_id'));
                $ticket =  Ticket::where('id_venta', '=', $request->get('id_ticket_id'))->get();

                $subject = "Ticket KLINMEXICO";
                $for = "noreply@klinmexico.com";

                Mail::send('emails.ticket_admin_email',['venta' => $venta,'ticket' => $ticket], function($msj) use($subject,$for){
                    $msj->from("noreply@klinmexico.com");
                    $msj->subject($subject);
                    $msj->to($for);
                });

            }else{
                $email_client = $request->get('email_client');

                $venta = Venta::findOrFail($request->get('id_ticket_id'));
                $ticket =  Ticket::where('id_venta', '=', $request->get('id_ticket_id'))->get();

                $subject = "Ticket KLINMEXICO";
                $for = $email_client;

                Mail::send('emails.ticket_user_email',['venta' => $venta,'ticket' => $ticket], function($msj) use($subject,$for){
                    $msj->from("noreply@klinmexico.com");
                    $msj->subject($subject);
                    $msj->to($for);
                });
            }

            try {
                return redirect()->route('ticket.index')
                ->with('success', 'Correo enviado exitosamente!');

            } catch (\Exception $e) {
                return redirect()->back()
                    ->with('error', 'Error al enviar correo');
            }

    }

    public function create()
    {
        $client = Client::get();
        $racks_sneakers_altos = Racks::where('num_rack', '>=', 1)
        ->where('num_rack', '<', 8)
        ->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

        $racks_sneakers_altos2 = Racks::where('num_rack', '>', 63)
        ->where('num_rack', '<', 75)
        ->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

        $racks_sneakers_altos3 = Racks::where('num_rack', '>', 89)
        ->where('num_rack', '<', 96)
        ->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

        $racks_sneakers_normales = Racks::where('num_rack', '>', 8)
        ->where('num_rack', '<', 64)
        ->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

        $racks_sneakers_normales2 = Racks::where('num_rack', '>', 74)
        ->where('num_rack', '<', 90)
        ->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

        $racks_sneakers_apoyo = Racks::where('num_rack', '>', 95)
        ->where('num_rack', '<', 141)
        ->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

        $racks_cap = Racks::where('num_rack', '>', 140)
        ->where('num_rack', '<', 162)
        ->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

        $racks_bag = Racks::where('num_rack', '>', 161)
        ->where('num_rack', '<=', 182)
        ->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

        $venta = Venta::orderBy('created_at','DESC')
        ->first();

        if(!empty($venta)){
            $client_factura = Client::find($venta->id_user);

            $direccion = Direccion::where('id_user', '=', $venta->id_user )
            ->get();

            return view('ticket.create', compact('client', 'racks_sneakers_altos', 'racks_sneakers_altos2', 'racks_sneakers_altos3', 'racks_sneakers_normales', 'racks_sneakers_normales2', 'racks_sneakers_apoyo', 'venta', 'direccion', 'client_factura', 'racks_cap', 'racks_bag'));
        }

            return view('ticket.create', compact('client', 'racks_sneakers_altos', 'racks_sneakers_altos2', 'racks_sneakers_altos3', 'racks_sneakers_normales', 'racks_sneakers_normales2', 'racks_sneakers_apoyo', 'venta', 'racks_cap', 'racks_bag'));


    }

    public function store_venta(Request $request)
    {
        $venta = new Venta;

        $validator = Validator::make($request->all(), [
            'id_user' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        try {
        $venta->id_user = $request->get('id_user');
        $venta->save();

        return redirect()->route('ticket_tab.store_venta');

        } catch (\Exception $e) {
            // dd($e);
            return redirect()->back()
                ->with('error', 'Faltan seleccionar cliente !');
        }

    }

    public function store_precio(Request $request)
    {
        if ($request->get('promocion')) {
            $promocion = $request->get('promocion');
        } else {
            $promocion = 0;
        }

        $venta = Venta::orderBy('created_at','DESC')
        ->first();

        $descuento = $venta->suma * $promocion;
        $subtotal = $venta->suma - $descuento;
        $total = $subtotal + $request->get('recoleccion');

        if ($request->get('anticipo') == 2) {
            $por_pagar2 = $total;
        } elseif($request->get('anticipo') == 0) {
            $por_pagar2 = '0';
        }else{
            $por_pagar2 = $total - $request->get('por_pagar');
        }

        if ($request->get('gifcard')) {
            $por_pagar = $por_pagar2 - $request->get('gifcard');
        } else {
            $por_pagar = $por_pagar2;
        }

        $precio = new PrecioTicket;
        $precio->id_venta = $venta->id;
        $precio->descuento = $descuento;
        $precio->anticipo = $request->get('anticipo');
        $precio->promocion = $request->get('promocion');
        $precio->recoleccion = $request->get('recoleccion');
        $precio->pago = $request->get('pago');
        $precio->gifcard = $request->get('gifcard');
        $precio->por_pagar = $por_pagar;
        $precio->subtotal = $subtotal;
        $precio->total = $total;
        $precio->factura = $request->get('factura');
        if ($request->get('calle') == null) {
            $precio->id_direccion = $request->get('direccion');
        }
        $precio->save();

        if ($request->get('cp') != null) {
            $direccion = new Direccion;
            $direccion->id_user = $venta->id_user;
            $direccion->calle = $request->get('calle');
            $direccion->colonia = $request->get('colonia');
            $direccion->alcaldia = $request->get('alcaldia');
            $direccion->estado = $request->get('estado');
            $direccion->cp = $request->get('cp');
            $direccion->save();

            $direccion_ticket = PrecioTicket::find($precio->id);
            $direccion_ticket->id_direccion = $direccion->id;
            $direccion_ticket->update();
        }

        if ($request->get('cp_factura') != null) {
            $direccion_fac = Client::find($venta->id_user);
            $direccion_fac->calle = $request->get('calle_factura');
            $direccion_fac->colonia = $request->get('colonia_factura');
            $direccion_fac->alcaldia = $request->get('alcaldia_factura');
            $direccion_fac->estado = $request->get('estado_factura');
            $direccion_fac->cp = $request->get('cp_factura');
            $direccion_fac->rfc = $request->get('rfc');
            $direccion_fac->update();
        }

        return redirect()->route('ticket.index')
                ->with('success', 'Ticket creado exitosamente!');

    }

    public function store_nano(Request $request)
    {
        $venta = Venta::orderBy('created_at','DESC')
        ->first();

        $venta_suma = Venta::findOrFail($venta->id);
        $venta_suma->suma = $venta->suma + '55';
        $venta_suma->update();

        $ticket = new Ticket;
        $ticket->id_venta = $venta->id;
        $ticket->id_user = $venta->id_user;
        $ticket->servicio_primario = $request->get('servicio_primario');
        $ticket->save();

        alert()->html('<i>HTML</i> <u>Servicio agregado</u>',"<a href='#pills-Pago'>Ir a pago</a> <a href='#pills-Servicios'>Agregar otro servicio</a>",'success');
        return redirect()->route('ticket_tab_exito.store');
    }

    public function update_rack(Request $request){

        $validator = Validator::make($request->all(), [
            'rack' => 'required',
            'estatus_rack' => 'required',
            'ticker_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }
        try {

        $num_rack =  $request->get('rack');
        $estatus_rack =  $request->get('estatus_rack');
        $ticker_id =  $request->get('ticker_id');

        if ($estatus_rack == 1){
            $rack = Racks::findOrFail($num_rack);
            $rack->estatus = 0;
            $rack->update();

            $ticket = Ticket::findOrFail($ticker_id);
            $ticket->estatus = 1;
            $ticket->update();

            return redirect()->back()->with('success', 'Rack liberado con exito!');
        }else{
            return redirect()->back() ->with('error', 'Solicitud cancelada , el rack sigue ocupado!');
        }

          } catch (\Exception $e) {
            // dd($e);
            return redirect()->back()
                ->with('error', 'Faltan Validar datos!');
        }

    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'servicio_primario' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'talla' => 'required',
            'categoria' => 'required',
            'tipo_servicio' => 'required',
            'num_rack' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        try {

            $precio_cap = $request->get('precio_cap');
            $por_pagar = $request->get('por_pagar');
            $tipo_servicio = $request->get('tipo_servicio');
            $tint = $request->get('tint');
            $klin = $request->get('klin');

            if ($request->get('servicio_primario') == 'Essential') {
                $precio_cap = 110;
            } elseif ($request->get('servicio_primario') == 'Plus') {
                $precio_cap = 160;
            } elseif ($request->get('servicio_primario') == 'Elite') {
                $precio_cap = 190;
            } elseif ($request->get('servicio_primario') == 'Pure White') {
                $precio_cap = 170;
            } elseif ($request->get('servicio_primario') == 'Special Care') {
                $precio_cap = 160;
            } elseif ($request->get('servicio_primario') == 'Klin Cap') {
                $precio_cap = 60;
            }

            if ($request->get('glue')) {
                $glue = 130;
            } else {
                $glue = 0;
            }

            if ($request->get('klin_dye')) {
                $klin_dye = 260;
            } else {
                $klin_dye = 0;
            }

            if ($request->get('unyellow')) {
                $unyellow = 80;
            } else {
                $unyellow = 0;
            }

            if ($request->get('sole')) {
                $sole = 520;
            } else {
                $sole = 0;
            }

            if ($request->get('invisible')) {
                $invisible = 180;
            } else {
                $invisible = 0;
            }

            if ($request->get('sew') == 1) {
                $sew = 130;
            } elseif ($request->get('sew') == 2) {
                $sew = 240;
            } else {
                $sew = 0;
            }

            if ($request->get('protector')) {
                $protector = 55;
            } else {
                $protector = 0;
            }

            if ($request->get('patch') == 1) {
                $patch = 240;
            }
            if ($request->get('patch') == 2) {
                $patch = 160;
            }
            if ($request->get('patch') == 3) {
                $patch = 160;
            }
            if ($request->get('patch') == 4) {
                $patch = 240;
            }
            if ($request->get('patch') == NULL) {
                $patch = 0;
            }

            if ($request->get('tint') == 1) {
                $tint = 160;
            }
            if ($request->get('tint') == 2) {
                $tint = 300;
            }
            if ($request->get('tint') == 3) {
                $tint = 450;
            }

            if ($request->get('klin') == 'Klin Bag') {
                $klin = 160;
            }
            if ($request->get('klin') == 'Klin Purse') {
                $klin = 110;
            }
            if ($request->get('klin') == 'Klin Bag Extra') {
                $klin = 260;
            }


            $suma = $precio_cap + $protector + $tint + $request->get('tint_personalizado') + $tipo_servicio + $klin + $klin_dye + $unyellow + $glue + $sew + $sole + $patch + $invisible + $request->get('personalizado');

            $venta = Venta::orderBy('created_at','DESC')
            ->first();

            $venta_suma = Venta::findOrFail($venta->id);
            $venta_suma->suma = $venta->suma + $suma;
            $venta_suma->update();

            $ticket = new Ticket;
            $ticket->rack = $request->get('num_rack');
            $ticket->id_venta = $venta->id;
            $ticket->id_user = $venta->id_user;
            $ticket->estatus = 0;
            $ticket->servicio_primario = $request->get('servicio_primario');
            $ticket->unyellow = $request->get('unyellow');
            $ticket->tint = $request->get('tint');
            $ticket->tint_descripcion = $request->get('tint_descripcion');
            $ticket->klin = $request->get('klin');
            $ticket->protector = $request->get('protector');
            $ticket->save();


            if ($request->get('glue') || $request->get('sew') || $request->get('sole') || $request->get('patch') || $request->get('invisible') || $request->get('personalizado')) {
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

            if ($request->get('num_rack') == true) {
                $racke = Racks::find($request->get('num_rack'));
                $racke->estatus = 1;
                $racke->save();
            }

            return redirect()->route('ticket_tab_exito.store');



        } catch (\Exception $e) {
            // dd($e);
            return redirect()->back()
                ->with('error', 'Faltan Validar datos!');
        }
    }

    public function  edit($id)
    {
            $client = Client::get();
            $venta = Venta::findOrFail($id);
            $ticket = Ticket::where('id_venta', '=', $id)->get();

            $racks_sneakers_altos = Racks::where('num_rack', '>=', 1)
            ->where('num_rack', '<', 8)
            ->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

            $racks_sneakers_altos2 = Racks::where('num_rack', '>', 63)
            ->where('num_rack', '<', 75)
            ->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

            $racks_sneakers_altos3 = Racks::where('num_rack', '>', 89)
            ->where('num_rack', '<', 96)
            ->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

            $racks_sneakers_normales = Racks::where('num_rack', '>', 8)
            ->where('num_rack', '<', 64)
            ->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

            $racks_sneakers_normales2 = Racks::where('num_rack', '>', 74)
            ->where('num_rack', '<', 90)
            ->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

            $racks_sneakers_apoyo = Racks::where('num_rack', '>', 95)
            ->where('num_rack', '<', 141)
            ->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

            $racks_cap = Racks::where('num_rack', '>', 140)
            ->where('num_rack', '<', 162)
            ->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

            $racks_bag = Racks::where('num_rack', '>', 161)
            ->where('num_rack', '<=', 182)
            ->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

            if(!empty($venta)){
                $client_factura = Client::find($venta->id_user);

                $direccion = Direccion::where('id_user', '=', $venta->id_user )
                ->get();

                return view('ticket.edit.edit', compact('ticket', 'client', 'racks_sneakers_altos', 'racks_sneakers_altos2', 'racks_sneakers_altos3', 'racks_sneakers_normales', 'racks_sneakers_normales2', 'racks_sneakers_apoyo', 'racks_cap', 'racks_bag', 'venta', 'client_factura', 'direccion'));
            }

            return view('ticket.edit.edit', compact('ticket', 'client', 'racks_sneakers_altos', 'racks_sneakers_altos2', 'racks_sneakers_altos3', 'racks_sneakers_normales', 'racks_sneakers_normales2', 'racks_sneakers_apoyo', 'racks_cap', 'racks_bag', 'venta'));
    }

    public function update(Request $request, $id)
    {
                $precio = PrecioTicket::where('id_venta', '=', $id)->first();
                $precio->por_pagar = 0;
                $precio->subtotal = 0;
                $precio->total = 0;
                $precio->update();

                $venta = Venta::findOrFail($id);
                $venta->suma = 0;
                $venta->update();

                $ticket = Ticket::where('id_venta', '=', $id)->first();
                $ticket->rack = $request->get('num_rack');
                $ticket->estatus = 0;
                $ticket->servicio_primario = $request->get('servicio_primario');
                $ticket->unyellow = $request->get('unyellow');
                $ticket->tint = $request->get('tint');
                $ticket->tint_descripcion = $request->get('tint_descripcion');
                $ticket->klin = $request->get('klin');
                $ticket->protector = $request->get('protector');
                $ticket->update();

                if ($request->get('glue') || $request->get('sew') || $request->get('sole') || $request->get('patch') || $request->get('invisible') || $request->get('personalizado')) {
                    $fixer = Fixer::where('id_ticket', '=', $ticket->id)->first();
                    $fixer->glue = $request->get('glue');
                    $fixer->sew = $request->get('sew');
                    $fixer->sole = $request->get('sole');
                    $fixer->patch = $request->get('patch');
                    $fixer->invisible = $request->get('invisible');
                    $fixer->personalizado = $request->get('personalizado');
                    $fixer->update();
                }
                $tickets = Ticket::where('id_venta', '=', $id)->get();

            $contador = count($tickets);

            for($i=0; $i<$contador; $i++){

                $tipo_servicio = $tickets[$i]->DescripcionTicket->tipo_servicio;
                $tint = $tickets[$i]->tint;
                $klin = $tickets[$i]->klin;

                if ($request->get('servicio_primario') == 'Essential') {
                    $precio_cap = 110;
                } elseif ($request->get('servicio_primario') == 'Plus') {
                    $precio_cap = 160;
                } elseif ($request->get('servicio_primario') == 'Elite') {
                    $precio_cap = 190;
                } elseif ($request->get('servicio_primario') == 'Pure White') {
                    $precio_cap = 170;
                } elseif ($request->get('servicio_primario') == 'Special Care') {
                    $precio_cap = 160;
                } elseif ($request->get('servicio_primario') == 'Bolsos') {
                    $precio_cap = 0;
                }   elseif ($request->get('servicio_primario') == 'Klin Cap') {
                    $precio_cap = 60;
                }

                if (!empty($tickets[$i]->Fixer) && $tickets[$i]->Fixer->glue) {
                    $glue = 130;
                } else {
                    $glue = 0;
                }

                if (!empty($tickets[$i]->Fixer) && $tickets[$i]->Fixer->klin_dye) {
                    $klin_dye = 260;
                } else {
                    $klin_dye = 0;
                }

                if (!empty($tickets[$i]->Fixer) && $tickets[$i]->Fixer->unyellow) {
                    $unyellow = 80;
                } else {
                    $unyellow = 0;
                }

                if (!empty($tickets[$i]->Fixer) && $tickets[$i]->Fixer->sole) {
                    $sole = 520;
                } else {
                    $sole = 0;
                }

                if (!empty($tickets[$i]->Fixer) && $tickets[$i]->Fixer->invisible) {
                    $invisible = 180;
                } else {
                    $invisible = 0;
                }

                if (!empty($tickets[$i]->Fixer) && $tickets[$i]->Fixer->sew == 1) {
                    $sew = 130;
                } elseif (!empty($tickets[$i]->Fixer) && $tickets[$i]->Fixer->sew == 2) {
                    $sew = 240;
                } else {
                    $sew = 0;
                }

                if (!empty($tickets[$i]->Fixer) && $tickets[$i]->Fixer->personalizado != NULL) {
                    $fixer_per = $tickets[$i]->Fixer->personalizado;
                }else{
                    $fixer_per = 0;
                }

                if ($tickets[$i]->protector) {
                    $protector = 55;
                } else {
                    $protector = 0;
                }

                if (!empty($tickets[$i]->Fixer) && $tickets[$i]->Fixer->patch == 1) {
                    $patch = 240;
                }elseif (!empty($tickets[$i]->Fixer) && $tickets[$i]->Fixer->patch == 2) {
                    $patch = 160;
                }elseif (!empty($tickets[$i]->Fixer) && $tickets[$i]->Fixer->patch == 3) {
                    $patch = 160;
                }elseif (!empty($tickets[$i]->Fixer) && $tickets[$i]->Fixer->patch == 4) {
                    $patch = 240;
                }else {
                    $patch = 0;
                }

                if ($tickets[$i]->tint == 1) {
                    $tint = 160;
                }
                if ($tickets[$i]->tint == 2) {
                    $tint = 300;
                }
                if ($tickets[$i]->tint == 3) {
                    $tint = 450;
                }

                if ($tickets[$i]->klin == 'Klin Bag') {
                    $klin = 160;
                }elseif ($tickets[$i]->klin == 'Klin Purse') {
                    $klin = 110;
                }elseif ($tickets[$i]->klin == 'Klin Bag Extra') {
                    $klin = 260;
                }else {
                    $klin = 0;
                }

                if ($request->get('tint_personalizado') == NULL) {
                    $tint_per = 0;
                }else{
                    $tint_per = $request->get('tint_personalizado');
                }

                $suma = $precio_cap + $protector + $tint + $tint_per + $tipo_servicio + $klin + $klin_dye + $unyellow + $glue + $sew + $sole + $patch + $invisible + $fixer_per;

                $venta = Venta::findOrFail($id);
                $venta->suma =  $venta->suma + $suma;
                $venta->update();
            }

                $regresar_ticket = Ticket::where('id_venta', '=', $id)->first();
                $rack = Racks::find($regresar_ticket->rack);
                $rack->estatus = 0;
                $rack->update();

                $descripcion = DescripcionTicket::where('id_ticket', '=', $ticket->id)->first();
                $descripcion->marca = $request->get('marca');
                $descripcion->modelo = $request->get('modelo');
                $descripcion->color1 = $request->get('color1');
                $descripcion->color2 = $request->get('color2');
                $descripcion->talla = $request->get('talla');
                $descripcion->categoria = $request->get('categoria');
                $descripcion->observacion = $request->get('observacion');
                $descripcion->tipo_servicio = $request->get('tipo_servicio');
                $descripcion->update();

                if ($request->get('cp') != null) {
                    $direccion = new Direccion;
                    $direccion->id_user = $regresar_ticket->id_user;
                    $direccion->calle = $request->get('calle');
                    $direccion->colonia = $request->get('colonia');
                    $direccion->alcaldia = $request->get('alcaldia');
                    $direccion->estado = $request->get('estado');
                    $direccion->cp = $request->get('cp');
                    $direccion->update();

                    $direccion_ticket = PrecioTicket::where('id_venta', '=', $id)->first();
                    $direccion_ticket->id_direccion = $direccion->id;
                    $direccion_ticket->update();
                }

                if ($request->get('cp_factura') != null) {
                    $direccion_fac = Client::find($regresar_ticket->id_user);
                    $direccion_fac->calle = $request->get('calle_factura');
                    $direccion_fac->colonia = $request->get('colonia_factura');
                    $direccion_fac->alcaldia = $request->get('alcaldia_factura');
                    $direccion_fac->estado = $request->get('estado_factura');
                    $direccion_fac->cp = $request->get('cp_factura');
                    $direccion_fac->rfc = $request->get('rfc');
                    $direccion_fac->update();
                }

                if ($venta->Precio->promocion) {
                    $promocion = $venta->Precio->promocion;
                } else {
                    $promocion = 0;
                }

                $recoleccion = $venta->Precio->recoleccion;

                $descuento = $venta->suma * $promocion;
                $subtotal = $venta->suma - $descuento;
                $total = $subtotal + $recoleccion;

                if ($venta->Precio->anticipo == 2) {
                    $por_pagar2 = $total;
                } elseif($venta->Precio->anticipo == 0) {
                    $por_pagar2 = '0';
                }else{
                    $por_pagar2 = $total - $request->get('por_pagar');
                }

                if ($venta->Precio->gifcard) {
                    $por_pagar = $por_pagar2 - $venta->Precio->gifcard;
                } else {
                    $por_pagar = $por_pagar2;
                }

                $precio = PrecioTicket::where('id_venta', '=', $id)->first();
                $precio->descuento = $descuento;
                $precio->recoleccion = $recoleccion;
                $precio->por_pagar = $por_pagar;
                $precio->subtotal = $subtotal;
                $precio->total = $total;
                $precio->update();


                if ($request->get('num_rack') == true) {
                    $racke = Racks::find($request->get('num_rack'));
                    $racke->estatus = 1;
                    $racke->update();
                }

                return redirect()->route('ticket.index')
                    ->with('success', 'Venta editada exitosamente!');

                // //Envio de Email
                // $id_user = $request->get('id_user');
                // $clients = Client::find($id_user);
                // $emial_user = $clients->email;

                // $emailSubject = 'Envio de Ticket';
                // $emailBody = 'Detalles del Ticket  KLINMEXICO';


                // //usar para un solo correo de destino
                // $emaifor = $emial_user;
                // //usar para varios  correos de destino

                // // Enviar para Admin
                // Mail::send('emails.ticket_admin_email', ['msg' => $emailBody], function ($message) use ($emailSubject, $emaifor) {
                //     $message->from("noreply@klinmexico.com", "KlinMexico");
                //     $message->subject($emailSubject);
                //     $message->to($emaifor);
                // });

                // // Enviar para cliente
                // $arrayEmails = ['noreply@klinmexico.com', $emaifor];
                // $emailBody2 = 'Detalles del Ticket  KLINMEXICO';

                // Mail::send('emails.ticket_user_email', ['msg' => $emailBody2], function ($message) use ($emailSubject, $arrayEmails) {
                //     $message->from("noreply@klinmexico.com", "KlinMexico");
                //     $message->subject($emailSubject);
                //     $message->to($arrayEmails);
                // });
    }

    public function update_precio(Request $request, $id)
    {
        if ($request->get('promocion')) {
            $promocion = $request->get('promocion');
        } else {
            $promocion = 0;
        }

        $venta = Venta::findOrFail($id);

        $descuento = $venta->suma * $promocion;
        $subtotal = $venta->suma - $descuento;
        $total = $subtotal + $request->get('recoleccion');

        if ($request->get('anticipo') == 2) {
            $por_pagar2 = $total;
        } elseif($request->get('anticipo') == 0) {
            $por_pagar2 = '0';
        }else{
            $por_pagar2 = $total - $request->get('por_pagar');
        }

        if ($request->get('gifcard')) {
            $por_pagar = $por_pagar2 - $request->get('gifcard');
        } else {
            $por_pagar = $por_pagar2;
        }

        $precio = PrecioTicket::where('id_venta', '=', $id)->first();
        $precio->id_venta = $venta->id;
        $precio->descuento = $descuento;
        $precio->anticipo = $request->get('anticipo');
        $precio->promocion = $request->get('promocion');
        $precio->recoleccion = $request->get('recoleccion');
        $precio->pago = $request->get('pago');
        $precio->gifcard = $request->get('gifcard');
        $precio->por_pagar = $por_pagar;
        $precio->subtotal = $subtotal;
        $precio->total = $total;
        $precio->factura = $request->get('factura');
        if ($request->get('calle') == null) {
            $precio->id_direccion = $request->get('direccion');
        }
        $precio->update();

        if ($request->get('cp') != null) {
            $direccion = new Direccion;
            $direccion->id_user = $venta->id_user;
            $direccion->calle = $request->get('calle');
            $direccion->colonia = $request->get('colonia');
            $direccion->alcaldia = $request->get('alcaldia');
            $direccion->estado = $request->get('estado');
            $direccion->cp = $request->get('cp');
            $direccion->save();

            $direccion_ticket = PrecioTicket::find($precio->id);
            $direccion_ticket->id_direccion = $direccion->id;
            $direccion_ticket->update();
        }

        if ($request->get('cp_factura') != null) {
            $direccion_fac = Client::find($venta->id_user);
            $direccion_fac->calle = $request->get('calle_factura');
            $direccion_fac->colonia = $request->get('colonia_factura');
            $direccion_fac->alcaldia = $request->get('alcaldia_factura');
            $direccion_fac->estado = $request->get('estado_factura');
            $direccion_fac->cp = $request->get('cp_factura');
            $direccion_fac->rfc = $request->get('rfc');
            $direccion_fac->update();
        }

        return redirect()->route('ticket.index')
                ->with('success', 'Venta editada exitosamente!');

    }

    public function changeUserStatus(Request $request)
    {
        $ticket = Ticket::find($request->id);
        $ticket->estatus = $request->estatus;
        $ticket->save();

        $rack = Racks::find($ticket->rack);
        $rack->estatus = 0;
        $rack->update();


        return response()->json(['success' => 'Se cambio el estado exitosamente.']);
    }

    public function destroy($id)
    {
        $venta = Venta::find($id)->delete();

        return redirect()->route('ticket.create')
            ->with('success', 'Cambiar cliente');
    }

}
