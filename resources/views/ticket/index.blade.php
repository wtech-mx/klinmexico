@extends('layouts.app')

@section('active2', 'active')

@section('content')

    <div class="content container-fluid p-3">
        <div class="row">

            <div class="d-flex justify-content-between mt-5">
                <h1> Tickets </h1>
            </div>

            <div class="col-12 mt-5">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-striped table-responsive table-hover" id="tale_id" >
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
										<th>Cliente</th>
										<th>Por pagar</th>
                                        <th>Rack</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($venta as $item)

                                    <?php
                                        $rest = substr($item->id, 0, -4);
                                        $rest2 = substr($item->id, 1);
                                    ?>
                                        <tr>

                                            <td>0{{$rest}}-{{$rest2}}</td>
											<td>{{ $item->Client->name }}</td>
                                            @if (!empty($item->Precio))
                                            <td>{{ $item->Precio->por_pagar }}</td>
                                            <td>{{ $item->Ticket->rack }}</td>


                                             <td>
                                                <a class="icon_actions eye"  data-bs-toggle="modal" data-bs-target="#exampleModal_{{$item->id}}">
                                                    <i class="fa fa-fw fa-eye"></i>
                                                </a>
                                                <a class="icon_actions edit" href="{{ route('ticket.edit', $item->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i>
                                                </a>
                                                <a type="submit" class="icon_actions trash">
                                                    <i class="fa fa-fw fa-trash"></i>
                                                </a>
                                            </td>
                                            @endif
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
            </div>
                @foreach ($venta as $item)
                    @include('.ticket.view')
                 @endforeach
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var estatus = $(this).prop('checked disabled') == true ? 1 : 0;
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('ticket.ChangeUserStatus') }}',
                    data: {
                        'estatus': estatus,
                        'id': id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })
        })
    </script>
@endsection
