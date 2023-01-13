@extends('layout')



@section('content')
    <h1>Voila tous notre clients : </h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <th scope="row">{{ $client['id'] }}</th>
                    <td>{{ $client['nom'] }}</td>
                    <td>{{ $client['prenom'] }}</td>
                    <td>{{ $client['email'] }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
