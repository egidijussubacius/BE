@extends('layouts.app')
@section('content')
@if($errors->any())
<h4 style="color: red">{{$errors->first()}}</h4>
@endif

<div class="card-body">
    <table class="table">
        <tr>
            <th>Pavadinimas</th>
            <th>Kaina</th>
            <th>Bendras svoris</th>
            <th>Mesos svoris</th>
            <th>Apie</th>
        </tr>
        @foreach ($menius as $meniu)
        <tr>
            <td>{{ $meniu->title }}</td>
            <td>{{ $meniu->price }}</td>
            <td>{{ $meniu->weight }}</td>
            <td>{{ $meniu->meat }}</td>
            <td>{!! $meniu->about !!}</td>
            <td><td>
                <form action={{ route('meniu.destroy', $meniu->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('meniu.edit', $meniu->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
</td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('meniu.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection
