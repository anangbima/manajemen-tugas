@extends('user/layout/master')

@section('content')

    <div class="container mt-5">
        {{-- Section deadline --}}
        <div class="mb-4">
            <h4>Deadline</h4>
            <div>You have a deadline that must be completed in the near future</div>

            <div class="row mt-3">
                <div class="col-lg-4 col-sm-12 mb-3">
                    
                    {{-- list deadline projects --}}
                    <div class="card shadow-sm border-0 bg-white">
                        <div class="card-body">
                            <h7 class="card-subtitle text-body-secondary">
                                Project 1
                            </h7>
                            <h5 class="card-title mt-2">
                                Task 1
                            </h5>

                            <div class=mt-3>
                                <span class="badge rounded-pill text-bg-danger">Deadline</span>
                            </div>
                        </div>

                        <a href="#" class="stretched-link"></a>
                    </div>

                </div>

                <div class="col-lg-4 col-sm-12 mb-3">
                    
                    {{-- list deadline projects --}}
                    <div class="card shadow-sm border-0 bg-white">
                        <div class="card-body">
                            <h7 class="card-subtitle text-body-secondary">
                                Project 1
                            </h7>
                            <h5 class="card-title mt-2">
                                Task 1
                            </h5>

                            <div class=mt-3>
                                <span class="badge rounded-pill text-bg-warning">Deadline</span>
                            </div>
                        </div>

                        <a href="#" class="stretched-link"></a>
                    </div>

                </div>

                <div class="col-lg-4 col-sm-12 mb-3">
                    
                    {{-- list deadline projects --}}
                    <div class="card shadow-sm border-0 bg-white">
                        <div class="card-body">
                            <h7 class="card-subtitle text-body-secondary">
                                Project 1
                            </h7>
                            <h5 class="card-title mt-2">
                                Task 1
                            </h5>

                            <div class=mt-3>
                                <span class="badge rounded-pill text-bg-warning">Deadline</span>
                            </div>
                        </div>

                        <a href="#" class="stretched-link"></a>
                    </div>

                </div>
            </div>
        </div>

        {{-- Section Project milik yang dibuat oleh user --}}
        <div class="mb-4">
            <div class="d-flex justify-content-between align-items-center">
                <h4>Your Projects</h4>

                <a class="btn btn-outline-dark btn-sm" href="{{ route('projects.create') }}">Add New Project</a>
            </div>

            <div class="mt-3">
                <div class="card shadow-sm border-0 bg-white mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">
                                Project 1
                            </h5>

                            <div>
                                <img src="{{ URL::asset('/user/default.png') }}" class="rounded-circle" style="width: 24px; height: 24px"></img>
                                <img src="{{ URL::asset('/user/default.png') }}" class="rounded-circle" style="width: 24px; height: 24px"></img>
                                <img src="{{ URL::asset('/user/default.png') }}" class="rounded-circle" style="width: 24px; height: 24px"></img>
                                <img src="{{ URL::asset('/user/default.png') }}" class="rounded-circle" style="width: 24px; height: 24px"></img>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#" class="stretched-link"></a>
                </div>

                <div class="card shadow-sm border-0 bg-white mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">
                                Project 2
                            </h5>

                            <div>
                                <img src="{{ URL::asset('/user/default.png') }}" class="rounded-circle" style="width: 24px; height: 24px"></img>
                                <img src="{{ URL::asset('/user/default.png') }}" class="rounded-circle" style="width: 24px; height: 24px"></img>
                                <img src="{{ URL::asset('/user/default.png') }}" class="rounded-circle" style="width: 24px; height: 24px"></img>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

        {{-- Section Project sebagai member --}}
        <div class="mb-4">
            <h4>Member Projects</h4>
            
            <div class="mt-3">
                <div class="card shadow-sm border-0 bg-white mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">
                                Project 3
                            </h5>

                            <div>
                                <img src="{{ URL::asset('/user/default.png') }}" class="rounded-circle" style="width: 24px; height: 24px"></img>
                                <img src="{{ URL::asset('/user/default.png') }}" class="rounded-circle" style="width: 24px; height: 24px"></img>
                                <img src="{{ URL::asset('/user/default.png') }}" class="rounded-circle" style="width: 24px; height: 24px"></img>
                                <img src="{{ URL::asset('/user/default.png') }}" class="rounded-circle" style="width: 24px; height: 24px"></img>
                                <img src="{{ URL::asset('/user/default.png') }}" class="rounded-circle" style="width: 24px; height: 24px"></img>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        
    </div>

@endsection