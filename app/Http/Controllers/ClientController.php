<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Direccion;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * Class ClientController
 * @package App\Http\Controllers
 */
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate();

        $direccion = Direccion::get();

        return view('client.index', compact('clients', 'direccion'))
            ->with('i', (request()->input('page', 1) - 1) * $clients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client();
        return view('client.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'apellido_ma' => 'required',
            'apellido_pa' => 'required',
            'telefono' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        try {
            $client = Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'apellido_ma' => $request->apellido_ma,
            'apellido_pa' =>$request->apellido_pa,
            'telefono' => $request->telefono,
            'calle' => $request->calle,
            'cp' => $request->cp,
            'estado' => $request->estado,
            'alcaldia' => $request->alcaldia,
            'colonia' => $request->colonia,
            'rfc' => $request->rfc,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'genero' => $request->genero,
            ]);

            $direccion = Direccion::create([
                'id_user' =>  $client->id,
                'calle' => $request->calle_cliente,
                'cp' => $request->cp_cliente,
                'estado' => $request->estado_cliente,
                'alcaldia' => $request->alcaldia_cliente,
                'colonia' => $request->colonia_cliente,
                ]);

//            return redirect()->route('clients.index')
                return redirect()->back()
                ->with('success', 'Cliente creado exitosamente!');
        } catch (\Exception $e){

            return redirect()->back()
                ->with('error', 'Faltan Validar datos!');
        }

    }


    public function store_venta(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'apellido_ma' => 'required',
            'apellido_pa' => 'required',
            'telefono' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        try {
            $client = Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'apellido_ma' => $request->apellido_ma,
            'apellido_pa' =>$request->apellido_pa,
            'telefono' => $request->telefono,
            ]);

            $venta = new Venta;
            $venta->id_user = $client->id;
            $venta->save();

            return redirect()->route('ticket_tab.store_venta');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Faltan Validar datos!');
        }

    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);

        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        request()->validate(Client::$rules);

        $client->update($request->all());

        return redirect()->route('clients.index')
            ->with('success', 'Cliente actualizado con éxito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $direccion = Direccion::where('id_user', '=', $id)->delete();
        $client = Client::find($id)->delete();

        return redirect()->route('clients.index')
            ->with('success', 'Cliente eliminado con éxito');
    }
}
