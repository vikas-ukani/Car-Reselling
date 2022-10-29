@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><b class=" py-2">{{ __('Cars View Page.') }}</b></h4>
                    </div>
                    <div class="card-body">

                        @isset($cars)
                            <div class="row">
                                @foreach ($cars as $car)
                                    <div class="col-xs-4 col-sm-6 col-md-4 col-lg-3 col-xl-3  mb-4">
                                        <div class="card card-inverse card-primary text-center">
                                            <img class="p-4 card-img-top"
                                                src="{{ $car->type === 'Normal Car'
                                                    ? 'https://img.icons8.com/ios-glyphs/452/sedan.png'
                                                    : ($car->type === 'Luxury Car'
                                                        ? 'https://img.icons8.com/ios-filled/344/suv-2.png'
                                                        : ($car->type === 'Sports Car'
                                                            ? 'https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/344/external-sport-car-transportation-kmg-design-detailed-outline-kmg-design.png'
                                                            : '')) }}"
                                                height="150" height="150" alt="Card image cap">
                                            <div class="card-block my-3">
                                                <span
                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    On Sale
                                                </span>
                                                <h3>
                                                    <b class="card-title mt-4 text-primary text-xl clearfix">{{ $car->name }}
                                                    </b>
                                                    </h2>

                                                    <span class="clearfix">Type: <b
                                                            class="card-text">{{ $car->type }}</b></span>
                                                    <span class="clearfix">Price: <b
                                                            class="card-text">${{ $car->price }}</b></span>
                                                    <span class="clearfix">Top Speed : <b class="card-text">
                                                            {{ $car->top_speed }}km/h</b></span>
                                                    <span class="clearfix">Owner : <b class="card-text">
                                                            {{ $car->owner->name }}</b></span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endisset



                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Selling Price</th>
                                    <th>Top Speed</th>
                                    <th>Car Type</th>
                                    <th>Owner</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!isset($cars))
                                    <tr>
                                        <td colspan="9" class="text-center text-muted fs-5">
                                            No cars found, Please create any page.
                                        </td>
                                    </tr>
                                @endif

                                @isset($cars)
                                    @foreach ($cars as $car)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $car->name }}</td>
                                            <td>{{ $car->top_speed }}</td>
                                            <td>{{ $car->type }}</td>
                                            <td>{{ $car->price }}</td>
                                            <td>{{ $car->owner->name }}</td>
                                            <td>{{ $car->created_at }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    @if (auth()->id() == $car->owner->id)
                                                        <a href="{{ route('cars.edit', ['car' => $car]) }}"
                                                            class="btn btn-info">
                                                            Edit
                                                        </a>

                                                        <button class="btn btn-danger">
                                                            Delete
                                                        </button>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endisset
                            </tbody>
                        </table> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
