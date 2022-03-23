<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Racks;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){

        $ticket = Ticket::get();

        return view('ticket.index', compact('ticket'));
    }

    public function create()
    {
        $client = Client::get();

        return view('ticket.create', compact('client'));
    }

    public function store(Request $request)
    {

        $validate = $this->validate($request, [
            'id_user' => 'required',
        ]);

        $ticket = new Ticket;
        $ticket->id_user = $request->get('id_user');
        $ticket->estatus = 0;

        $ticket->unyellow = $request->get('unyellow');
        $ticket->tint = $request->get('tint');
        $ticket->tint_descripcion = $request->get('tint_descripcion');
        $ticket->klin = $request->get('klin');
        $ticket->protector = $request->get('protector');
        $ticket->factura = $request->get('factura');
        $ticket->save();

        return redirect()->route('ticket.index');
    }
}
