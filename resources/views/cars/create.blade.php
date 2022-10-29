@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <b class="">{{ __('Sell a car ') }}</b>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cars.store') }}">
                            @csrf
                            <div class="col-md-6 offset-3"> 
                                <div class="form-group ">
                                    <label for="name" class="form-label">Car Name *</label>
                                    <input id="name" class="form-control" placeholder="Enter Car name" type="text"
                                        name="name" />
                                    @if ($errors->has('name'))
                                        <div class="input-errors">
                                            <span class="error-msg text-danger">{{ $errors->first('name') }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group mt-4">
                                    <label for="price" class="form-label">Car Price *</label>
                                    <input id="price" class="form-control" placeholder="Enter Car Price" type="number"
                                        name="price" />
                                    @if ($errors->has('price'))
                                        <div class="input-errors">
                                            <span class="error-msg text-danger">{{ $errors->first('price') }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group mt-4">
                                    <label for="top_speed" class="form-label">Car top speed *</label>
                                    <input id="top_speed" class="form-control" placeholder="Enter Car top speed"
                                        type="number" name="top_speed" />
                                    @if ($errors->has('top_speed'))
                                        <div class="input-errors">
                                            <span class="error-msg text-danger">{{ $errors->first('top_speed') }}</span>
                                        </div>
                                    @endif
                                </div>

                                <div class="buttons-w mt-5 d-flex justify-content-between">
                                    <a href="{{ route('home') }}" class="btn btn-warning">Cancel</a>
                                    <input class="btn btn-success ml-3" type="submit" value="Sell a Car" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
