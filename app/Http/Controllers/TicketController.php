<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\DescripcionTicket;
use App\Models\Fixer;
use App\Models\PrecioTicket;
use App\Models\Direccion;
use App\Models\Racks;
use App\Models\Ticket;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


class TicketController extends Controller
{
    public function index()
    {

        $ticket = Ticket::get();

        $precio_ticket = PrecioTicket::get();

        return view('ticket.index', compact('ticket', 'precio_ticket'));
    }

    public function create()
    {
        $client = Client::get();

        $racks = Racks::get();

        $racks2 = Racks::take(140)->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

        return view('ticket.create', compact('client', 'racks', 'racks2'));
    }

    public function email_admin($id)
    {
        $ticket = Ticket::findOrFail($id);

        $precio_ticket = PrecioTicket::where('id_ticket', '=', $id)->first();

        return view('emails.ticket_admin_email', compact('ticket', 'precio_ticket'));
    }

    public function sed_mail(Request $request)
    {

            $validator = Validator::make($request->all(), [
                'id_user' => 'required',
                'id_ticket_id' => 'required',
            ]);

            $ticket = Ticket::findOrFail($request->get('id_ticket_id'));

            $precio_ticket = PrecioTicket::where('id_ticket', '=', $request->get('id_ticket_id'))->first();

            if ($validator->fails()) {
                return redirect()->back()
                    ->with('errorForm', $validator->errors()->getMessages())
                    ->withInput();
            }

            try {

            //Envio de Email
            $id_user = $request->get('id_user');
            $clients = Client::find($id_user);
            $emial_user = $clients->email;


            $emailSubject = 'Envio de Ticket';
            $emailBody = 'Detalles del Ticket  KLINMEXICO';

            //usar para un solo correo de destino
            $emaifor = $emial_user;
            //usar para varios  correos de destino
            $arrayEmails = ['noreply@klinmexico.com', $emaifor];
            // Enviar para Admin

                // Email server settings

                $mail = new PHPMailer(true);
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';             //  smtp host

                $mail->SMTPAuth = true;
                $mail->Username = 'pruebaswebtech@gmail.com';   //  sender username
                $mail->Password = 'Ytumamatambien1';       // sender password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                  // encryption - ssl/tls
                $mail->Port = 587;                          // port - 587/465

                $mail->Subject = $emailSubject;
                $mail->addAddress($emaifor,'noreply@klinmexico.com');

                $mail->setFrom('noreply@klinmexico.com', 'KLINMEXICO');

                $mail->isHTML(true);

                $mail->Body    = 'Envio de corre de ticker';

//              $mail->Body    = '<!doctype html>
//                                    <html lang="es">

//                                    <head>
//                                        <meta charset="utf-8">
//                                        <meta name="viewport" content="width=device-width, initial-scale=1">
//                                        <title></title>
//                                        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
//                                        <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
//                                        <link href="css/app.css" rel="stylesheet">
//                                        <link href="css/email.css" rel="stylesheet">
//                                        <link href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
//                                    </head>

//                                    <body id="body-pd" class="">
//                                             <div class="d-flex justify-content-center">
//                                                <div class="limit_ticket">
//                                                            <p class="text-dark">
//                                                                <strong> Recibo No.  </strong>: '. $precio_ticket->Ticket->id .' <br>
//                                                                <strong> Sucrusal: </strong> Condesa Nuevo Leon <br>
//                                                                <strong> Fecha: </strong>
//
//                                                                 '. $matriz = explode(" ", $precio_ticket->created_at).'
//                                                                    '.$originalDate = $matriz[0].'
//                                                                    '.$newDate = date("d/m/Y", strtotime($originalDate)).'
//                                                                    '.$entrega_estandar = date("d/m/Y",strtotime($originalDate."+ 8 days")).'
//                                                                    '.$entrega_express = date("d/m/Y",strtotime($originalDate."+ 1 days")).'
//                                                                    '.$newDate.'
//                                                                <br><br>
//                                                                <strong> Cliente: </strong> '. $precio_ticket->Ticket->Client->name .' <br><br>
//                                                                <strong> Prenda: </strong> ('. $precio_ticket->DescripcionTicket->marca .',
//                                                                '. $precio_ticket->DescripcionTicket->modelo .'
//                                                                '. $precio_ticket->DescripcionTicket->talla .'
//                                                                '. $precio_ticket->DescripcionTicket->categoria .'
//                                                                <span class="badge rounded-pill " style="background-color: '. $precio_ticket->DescripcionTicket->color1.'">-</span>
//                                                                <span class="badge rounded-pill " style="background-color: '. $precio_ticket->DescripcionTicket->color2.'">-</span>) <br>
//                                                                '.if('.$precio_ticket->Ticket->tint != 0.'):.'
//                                                                <strong> Observaciones Tint: </strong> '. $precio_ticket->Ticket->tint_descripcion .' <br>
//                                                                '.endif.'
//                                                                <strong> Observaciones del articulo: </strong> '. $precio_ticket->DescripcionTicket->observacion .', <br><br>
//
//                                                                <strong> Rack: </strong> '. $precio_ticket->Ticket->rack .'
//                                                                    .'@if ($precio_ticket->DescripcionTicket->tipo_servicio == '0').'
//                                                                         Servicio Estandar
//                                                                    .'@else.'
//                                                                         Servicio Express
//                                                                    .'@endif.'
//                                                                <br>
//                                                                <strong> Servicio: </strong> '. $precio_ticket->Ticket->servicio_primario ' <br>
//                                                                    .'@if ($precio_ticket->DescripcionTicket->tipo_servicio == '110').'
//                                                                    <strong> Entrega: </strong> '. $entrega_express ' <br>
//                                                                    .'@else.'
//                                                                    <strong> Entrega: </strong> '. $entrega_estandar ' <br>
//                                                                    .'@endif.'
//
//                                                            </p>
//
//
//                                                                '.switch($precio_ticket->Ticket->servicio_primario){
//                                                                    case($precio_ticket->Ticket->servicio_primario == 'Essential'):
//                                                                        $precio_primario  = 110;
//                                                                        break;
//                                                                    case($precio_ticket->Ticket->servicio_primario == 'Plus'):
//                                                                        $precio_primario = 160;
//                                                                        break;
//                                                                    case($precio_ticket->Ticket->servicio_primario == 'Elite'):
//                                                                        $precio_primario = 190;
//                                                                        break;
//                                                                    case($precio_ticket->Ticket->servicio_primario == 'Pure White'):
//                                                                        $precio_primario = 170;
//                                                                        break;
//                                                                    case($precio_ticket->Ticket->servicio_primario == 'Special Care'):
//                                                                        $precio_primario = 160;
//                                                                        break;
//                                                                    case($precio_ticket->Ticket->servicio_primario == 'Klin Cap'):
//                                                                        $precio_primario = 60;
//                                                                        break;
//                                                                    case($precio_ticket->Ticket->servicio_primario == 'Protector'):
//                                                                        $precio_primario = 55;
//                                                                        break;
//                                                                    }
//
//                                                                    if ($precio_ticket->Ticket->tint == '1') {
//                                                                        $nombre_tint  = 'Tint 1';
//                                                                        $precio_tint  = 160;
//                                                                    }elseif ($precio_ticket->Ticket->tint == '2') {
//                                                                        $nombre_tint  = 'Tint 2';
//                                                                        $precio_tint  = 300;
//                                                                    }elseif ($precio_ticket->Ticket->tint == '3') {
//                                                                        $nombre_tint  = 'Tint 3';
//                                                                        $precio_tint  = 160;
//                                                                    }else {
//                                                                        $nombre_tint  = 'Tint Personalizado';
//                                                                        $precio_tint  = $precio_ticket->Ticket->tint;
//                                                                    }
//
//                                                                    switch($precio_ticket->Ticket->klin){
//                                                                    case($precio_ticket->Ticket->klin == 'Klin Bag'):
//                                                                        $precio_klin  = 160;
//                                                                        break;
//                                                                    case($precio_ticket->Ticket->klin == 'Klin Purse'):
//                                                                        $precio_klin = 110;
//                                                                        break;
//                                                                    case($precio_ticket->Ticket->klin == 'Klin Bag Extra'):
//                                                                        $precio_klin = 260;
//                                                                        break;
//                                                                    }
//
//                                                                    $i = 1;
//                                                                    $ii = 1;
//
//                                                                    $anticipo = $precio_ticket->Ticket->total - $precio_ticket->por_pagar;.'
//
//                                                                <table class="table table-borderless" id="Admin">
//                                                                  <thead>
//                                                                    <tr>
//                                                                      <th ></th>
//                                                                      <th ></th>
//                                                                      <th ></th>
//                                                                      <th ></th>
//                                                                    </tr>
//                                                                  </thead>
//                                                                  <tbody>
//                                                                    <tr>
//                                                                      <th>'.$i++.' </th>
//                                                                      <td>'. $precio_ticket->Ticket->servicio_primario .'</td>
//
//                                                                      <td>$'.$precio_primario.'.00</td>
//                                                                      <td>$'.$precio_primario.'.00</td>
//                                                                    </tr>
//                                                                    '.@if ($precio_ticket->Ticket->unyellow == 1).'
//                                                                        <tr>
//                                                                        <th>'.$i++' </th>
//                                                                        <td>
//                                                                                Unyellow
//                                                                        </td>
//                                                                        <td>$80.00</td>
//                                                                        <td>$80.00</td>
//                                                                        </tr>
//                                                                    '.@endif.'
//                                                                    '.@if ($precio_ticket->Ticket->tint != 0).'
//                                                                        <tr>
//                                                                        <th>'.$i++' </th>
//                                                                        <td>
//                                                                            '.$nombre_tint.'
//                                                                        </td>
//                                                                        <td>$'.$precio_tint.'.00</td>
//                                                                        <td>$'.$precio_tint.'.00</td>
//                                                                        </tr>
//                                                                    '.@endif.'
//                                                                    '.@if ($precio_ticket->Ticket->klin_dye == 1).'
//                                                                        <tr>
//                                                                        <th>'.$i++.' </th>
//                                                                        <td>
//                                                                            klin dye
//                                                                        </td>
//                                                                        <td>$260.00</td>
//                                                                        <td>$260.00</td>
//                                                                        </tr>
//                                                                    '.@endif.'
//                                                                    '.@if ($precio_ticket->Ticket->protector == 1).'
//                                                                        <tr>
//                                                                        <th>'.$i++.' </th>
//                                                                        <td>
//                                                                            Protector
//                                                                        </td>
//                                                                        <td>$55.00</td>
//                                                                        <td>$55.00</td>
//                                                                        </tr>
//                                                                    '.@endif.'
//                                                                    '.@if ($precio_ticket->Ticket->klin != NULL).'
//                                                                        <tr>
//                                                                        <th>'.$i++.' </th>
//                                                                        <td>
//                                                                            '.$precio_ticket->Ticket->klin.'
//                                                                        </td>
//                                                                        <td>$'.$precio_klin.'.00</td>
//                                                                        <td>$'.$precio_klin.'.00</td>
//                                                                        </tr>
//                                                                    '.@endif.'
//                                                                    '.@if($precio_ticket->Fixer->glue).'
//                                                                        <tr>
//                                                                            <th>'.$i++' </th>
//                                                                            '.@if($precio_ticket->Fixer->glue == 1).'
//                                                                                <td>Sole Glue (Vulcanized) Media</td>
//                                                                                '.@else.'
//                                                                                <td>Sole Glue (Vulcanized) Full</td>
//                                                                            '.@endif.'
//                                                                            <td>$130.00</td>
//                                                                            <td>$130.00</td>
//                                                                        </tr>
//                                                                    '.@endif.'
//                                                                    '.@if($precio_ticket->Fixer->sew).'
//                                                                        <tr>
//                                                                            <th>'.$i++.' </th>
//                                                                            '.@if($precio_ticket->Fixer->sew == 1).'
//                                                                                <td>Sole Sew 5cm</td>
//                                                                                <td>$130.00</td>
//                                                                                <td>$130.00</td>
//                                                                                '.@else.'
//                                                                                <td>Sole Sew Full</td>
//                                                                                <td>$240.00</td>
//                                                                                <td>$240.00</td>
//                                                                            '.@endif.'
//                                                                        </tr>
//                                                                    '.@endif.'
//                                                                    '.@if($precio_ticket->Fixer->sole == 1).'
//                                                                        <tr>
//                                                                            <th>'.$i++.' </th>
//                                                                            <td>
//                                                                                Generic Sole AF1
//                                                                            </td>
//                                                                            <td>$520.00</td>
//                                                                            <td>$520.00</td>
//                                                                        </tr>
//                                                                    '.@endif.'
//                                                                    '.@if($precio_ticket->Fixer->patch).'
//                                                                        '.@switch($precio_ticket->Fixer->patch).'
//                                                                            '.@case($precio_ticket->Fixer->patch == '1').'
//                                                                            <tr>
//                                                                                <th>'.$i++.' </th>
//                                                                                <td>Snkrs Patch (Talonera) Par </td>
//                                                                                <td>$240.00</td>
//                                                                                <td>$240.00</td>
//                                                                            </tr>
//                                                                                '.@break.'
//                                                                            '.@case($precio_ticket->Fixer->patch == '2').'
//                                                                            <tr>
//                                                                                <th>'.$i++.' </th>
//                                                                                <td>Snkrs Patch (Talonera) 1PZ</td>
//                                                                                <td>$160.00</td>
//                                                                                <td>$160.00</td>
//                                                                            </tr>
//                                                                                '.@break.'
//                                                                            '.@case($precio_ticket->Fixer->patch == '3').'
//                                                                            <tr>
//                                                                                <th>'.$i++.' </th>
//                                                                                <td>Heel Stopper Dama</td>
//                                                                                <td>$160.00</td>
//                                                                                <td>$160.00</td>
//                                                                            </tr>
//                                                                                '.@break.'
//                                                                            '.@case($precio_ticket->Fixer->patch == '4').'
//                                                                                <tr>
//                                                                                    <th>'.$i++.' </th>
//                                                                                    <td>Heel Stopper Caballero</td>
//                                                                                    <td>$240.00</td>
//                                                                                    <td>$240.00</td>
//                                                                                </tr>
//                                                                                    '.@break.'
//                                                                        '.@endswitch.'
//                                                                    '.@endif.'
//                                                                    '.@if($precio_ticket->Fixer->invisible == 1).'
//                                                                        <tr>
//                                                                            <th>'.$i++' </th>
//                                                                            <td>Invisible Snkers Patch</td>
//                                                                            <td>$180.00</td>
//                                                                            <td>$180.00</td>
//                                                                        </tr>
//                                                                    '.@endif
//                                                                    '.@if($precio_ticket->Fixer->personalizado)
//                                                                        <tr>
//                                                                            <th>'.$i++' </th>
//                                                                            <td>Fixer Personalizado</td>
//                                                                            <td>$'.$precio_ticket->Fixer->personalizado.'.00</td>
//                                                                            <td>$'.$precio_ticket->Fixer->personalizado.'.00</td>
//                                                                        </tr>
//                                                                    '.@endif.'
//
//                                                                  </tbody>
//                                                                </table>
//
//                                                                <p class="text-dark text-center">
//                                                                   <strong>Subtotal</strong> -------------------- $'.$precio_ticket->Ticket->subtotal.'
//                                                                </p>
//                                            </div>
//                                            </div>
//
//                                    </body>
//                                    </html>';

                if( $mail->send() ) {
                    return redirect()->back()->with('success', 'Email enviado exitosamentee!');
                 }else {
                    return back()->with("failed", "No se envio el correo")->withErrors($mail->ErrorInfo);
                }
            } catch (\Exception $e){

                return redirect()->back()->with('error', 'No se envio el correo');
            }
    }

    public function email_user_send($id)
    {
        $ticket = Ticket::findOrFail($id);

        $precio_ticket = PrecioTicket::where('id_ticket', '=', $id)->first();

        return view('emails.ticket_user_email', compact('ticket', 'precio_ticket'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id_user' => 'required',
            'servicio_primario' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'talla' => 'required',
            'categoria' => 'required',
            'observacion' => 'required',
            'tipo_servicio' => 'required',
            'num_rack' => 'required',
            'pago' => 'required',
            'por_pagar' => 'required',
            'factura' => 'required',
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

            if ($request->get('promocion')) {
                $promocion = $request->get('promocion');
            } else {
                $promocion = 0;
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

            $suma = $precio_cap + $protector + $tint + $tipo_servicio + $klin + $klin_dye + $unyellow + $glue + $sew + $sole + $patch + $invisible + $request->get('personalizado');

            $descuento = $suma * $promocion;
            $subtotal = $suma - $descuento;
            $total = $subtotal + $request->get('recoleccion');

            if ($request->get('por_pagar') == 2) {
                $por_pagar2 = $total;
            } else {
                $por_pagar2 = $total - $request->get('por_pagar');
            }

            if ($request->get('gifcard')) {
                $por_pagar = $por_pagar2 - $request->get('gifcard');
            } else {
                $por_pagar = $por_pagar2;
            }

            if ($request->get('por_pagar') == 0) {
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

            if ($request->get('calle') != null) {
                $direccion = new Direccion;
                $direccion->id_user = $ticket->id_user;
                $direccion->calle = $request->get('calle');
                $direccion->colonia = $request->get('colonia');
                $direccion->alcaldia = $request->get('alcaldia');
                $direccion->estado = $request->get('estado');
                $direccion->cp = $request->get('cp');
                $direccion->save();
            }

            $precio = new PrecioTicket;
            $precio->id_ticket = $ticket->id;
            $precio->id_descripcion = $descripcion->id;
            $precio->id_fixer = $fixer->id;
            $precio->descuento = $descuento;
            $precio->anticipo = $request->get('por_pagar');
            $precio->promocion = $request->get('promocion');
            $precio->recoleccion = $request->get('recoleccion');
            $precio->pago = $request->get('pago');
            $precio->gifcard = $request->get('gifcard');
            $precio->por_pagar = $por_pagar;
            $precio->save();

            if ($request->get('num_rack') == true) {
                $racke = Racks::find($request->get('num_rack'));
                $racke->estatus = 1;
                $racke->save();
            }

            return redirect()->route('ticket.index')
                ->with('success', 'Ticket creado exitosamente!');

            //Envio de Email
            $id_user = $request->get('id_user');
            $clients = Client::find($id_user);
            $emial_user = $clients->email;

            $emailSubject = 'Envio de Ticket';
            $emailBody = 'Detalles del Ticket  KLINMEXICO';


            //usar para un solo correo de destino
            $emaifor = $emial_user;
            //usar para varios  correos de destino

            // Enviar para Admin
            Mail::send('emails.ticket_admin_email', ['msg' => $emailBody], function ($message) use ($emailSubject, $emaifor) {
                $message->from("noreply@klinmexico.com", "KlinMexico");
                $message->subject($emailSubject);
                $message->to($emaifor);
            });

            // Enviar para cliente
            $arrayEmails = ['noreply@klinmexico.com', $emaifor];
            $emailBody2 = 'Detalles del Ticket  KLINMEXICO';

            Mail::send('emails.ticket_user_email', ['msg' => $emailBody2], function ($message) use ($emailSubject, $arrayEmails) {
                $message->from("noreply@klinmexico.com", "KlinMexico");
                $message->subject($emailSubject);
                $message->to($arrayEmails);
            });
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Faltan Validar datos!');
        }
    }

    public function  edit($id)
    {
            $client = Client::get();
            $ticket = PrecioTicket::findOrFail($id);
            $racks2 = Racks::take(140)->get()->makeHidden(['id', 'id_ticket', 'updated_at', 'created_at']);

            return view('ticket.edit.edit', compact('ticket', 'client', 'racks2'));
    }
}
