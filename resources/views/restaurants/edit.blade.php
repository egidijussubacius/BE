@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pakeiskime restorano informaciją</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('restaurant.update', $restaurant->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Pavadinimas: </label>
                            <input type="text" name="title" class="form-control" value="{{ $restaurant->title }}">
                        </div>
                        <div class="form-group">
                            <label for="">Klientu skaicius: </label>
                            <input type="number" name="customers" class="form-control" value="{{ $restaurant->customers }}">
                        </div>
                        <div class="form-group">
                            <label for="">Darbuotoju skaicius: </label>
                            <input type="number" name="employees" class="form-control" value="{{ $restaurant->employees }}">
                        </div>
                        <div class="form-group">
                            <label>Uzsakytas patiekalas: </label>
                            <select name="meniu_id" id="" class="form-control">
                                @foreach ($menius as $meniu)
                                <option value="{{ $meniu->id }}" @if($meniu->id == $restaurant->meniu_id) selected="selected" @endif>{{ $meniu->title }}</option>
                                @endforeach
                            </select>

                       

                        </div>
                        <button type="submit" class="btn btn-primary">Pakeisti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
