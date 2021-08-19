@extends('layouts.app')

@section('template_title')
    Microorganisms Translation
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Microorganisms Translation') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('microorganisms-translations.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Locale</th>
										<th>Microorganism Id</th>
										<th>Title</th>
										<th>Slug</th>
										<th>Body</th>
										<th>Description</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($microorganismsTranslations as $microorganismsTranslation)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $microorganismsTranslation->locale }}</td>
											<td>{{ $microorganismsTranslation->microorganism_id }}</td>
											<td>{{ $microorganismsTranslation->title }}</td>
											<td>{{ $microorganismsTranslation->slug }}</td>
											<td>{{ $microorganismsTranslation->body }}</td>
											<td>{{ $microorganismsTranslation->description }}</td>

                                            <td>
                                                <form action="{{ route('microorganisms-translations.destroy',$microorganismsTranslation->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('microorganisms-translations.show',$microorganismsTranslation->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('microorganisms-translations.edit',$microorganismsTranslation->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $microorganismsTranslations->links() !!}
            </div>
        </div>
    </div>
@endsection
