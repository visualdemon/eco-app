@extends('layouts.app')

@section('template_title')
    {{ $contribution->name ?? 'Show Contribution' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contribution</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contributions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $contribution->cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Deleted Mail:</strong>
                            {{ $contribution->deleted_mail }}
                        </div>
                        <div class="form-group">
                            <strong>Free Mb:</strong>
                            {{ $contribution->free_mb }}
                        </div>

                    
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
