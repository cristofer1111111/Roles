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
<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <br />
                        <a href="{{url('product')}}" class="btn btn-warning">Ir al inicio</a>
                        <div class="table-responsive">
                            <table class="table table-striped mt-3">
                                <tr>
                                    <th>NOMBRE</th>
                                    <td>{{$products->name}}</td>
                                </tr>
                                <tr>
                                    <th>DESCRIPCIÓN</th>
                                    <td>{{$products->description}}</td>
                                </tr>
                                <tr>
                                    <th>PRECIO</th>
                                    <td>{{$products->value}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>
