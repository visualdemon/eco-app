@extends('layouts.app')

@section('template_title')
    Contribution
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contribution') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contributions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Cliente</th>
										<th>Deleted Mail</th>
										<th>Free Mb</th>
                                        <th>Total</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contributions as $contribution)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contribution->cliente }}</td>
											<td>{{ $contribution->deleted_mail }}</td>
											<td>{{ $contribution->free_mb }}</td>
                                            
                                            <td>
                                                <form action="{{ route('contributions.destroy',$contribution->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contributions.show',$contribution->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contributions.edit',$contribution->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                         
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $contributions->links() !!}
            </div>
        </div>
    </div>
@endsection
