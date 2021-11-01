<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"><br>
     <!-- Authentication -->
     <form method="POST"  action="{{ route('logout') }}">
         Usuario: {{ Auth::user()->name }}
                                @csrf
                    <x-jet-dropdown-link class="btn btn-danger" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                   this.closest('form').submit();">
                                    {{ __('Cerrar Sesion') }}
                     </x-jet-dropdown-link>
     </form><br>
        @role('admin')
        <a href="{{route('product.create')}}" class="btn btn-primary">Crear Elemento</a>
        @endrole
        @if(session('status'))
                        <div class="alert alert-success mt-3">
                            {{session('status')}}
                        </div>
                        @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>DESCRIPCIÓN</th>
                <th>PRECIO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($products as $product)
            <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>$ {{$product->value}}</td>
            <td>

                <form action="{{route('product.destroy',$product->id)}}" method="post">
                                 @csrf
                                 @method('DELETE')
                                @role('client')
                                <a href="{{route('product.show',$product->id)}}" class="btn btn-sm btn-info">Detalles</a>
                                    @endrole
                                @role('admin')
                                <a href="{{route('product.edit',$product->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                @endrole
                </form>

               </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    @yield('formul')
    </div>

</body>
</html>
