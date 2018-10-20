@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{!! url('oauth/clients') !!}" method="POST">

                    {!! csrf_field() !!}

                    <p>
                        <input type="text" name="name">
                    </p>
                    <p>
                        <input type="text" name="redirect">
                    </p>
                    <p>
                        <input type="submit" name="send" value="Enviar">
                    </p>
                </form>
            </div>
        </div>


        <table border="1">
            <tbody>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Redirect</td>
                <td>secret</td>
            </tr>

            @foreach($clientes as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->redirect}}</td>
                    <td>{{$client->secret}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
