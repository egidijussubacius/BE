@extends('layouts.app')
@section('content')

<form class="form-inline" action="{{ route('restaurant.index') }}" method="GET">
    <select name="meniu_id" id="" class="form-control">
        <option value="" selected disabled>Filtruoti pagal patiekala:</option>
        @foreach ($menius as $meniu)
        <option value="{{ $meniu->id }}" 
            @if($meniu->id == app('request')->input('meniu_id')) 
                selected="selected" 
            @endif>{{ $meniu->title }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="card-body">
    <table class="table">
        <tr>
            <th>Pavadinimas</th>
            <th>Klientai</th>
            <th>Darbutojai</th>
            <th>Uzsakymas</th>
            <th>Veiksmai</th>
        </tr>
        @foreach ($restaurants as $restaurant)
        <tr>
            <td>{{ $restaurant->title }}</td>
            <td>{{ $restaurant->customers }}</td>
            <td>{{ $restaurant->employees }}</td>
            <td>{{ $restaurant->meniu->title }}</td>
          {{-- echo var_dump ({{ $restaurant->meniu->title }}); --}}
            {{-- $meniu->title --}}
          

            <td>
                <form action={{ route('restaurant.destroy', $restaurant->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('restaurant.edit', $restaurant->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('restaurant.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection
