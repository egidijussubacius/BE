@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pakeiskime Maisto pasirinkima</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('meniu.update', $meniu->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Pavadinimas</label>
                            <input type="text" name="title" class="form-control" value="{{ $meniu->title }}">
                        </div>
                        <div class="form-group">
                            <label for="">Kaina</label>
                            <input type="text" name="price" class="form-control" value="{{ $meniu->price }}">
                        </div>
                        <div class="form-group">
                            <label for="">Bendras svoris</label>
                            <input type="text" name="weight" class="form-control" value="{{ $meniu->weight }}">
                        </div>
                        <div class="form-group">
                            <label for="">Mesos svoris</label>
                            <input type="text" name="meat" class="form-control" value="{{ $meniu->meat }}">
                        </div>
                        <div class="form-group">
                            <label for="">Aprašas</label>
                            <textarea id ="mce" type="text" name="about" rows=10 cols=100 class="form-control">{{ $meniu->about }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Pakeisti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
