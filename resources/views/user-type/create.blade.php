<x-admin-layout>
    <div class="content-header" >
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('messages.user_types') }}</h1>
                </div>
                {{--<!-- /.col -->--}}
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('messages.home') }}</a></li>
                        <li class="breadcrumb-item "><a href="{{ route('user-types.index') }}">{{ __('messages.user_types') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('messages.create') }}</li>
                    </ol>
                </div>
                {{--<!-- /.col -->--}}
            </div>
            {{--<!-- /.row -->--}}
        </div>
        {{--<!-- /.container-fluid -->--}}
    </div>
    {{--<!-- /.content-header -->--}}

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('messages.create') }}</span>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('user-types.index') }}"> {{ __('messages.back') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user-types.store') }}" role="form"
                              enctype="multipart/form-data">
                            @csrf

                            @include('user-type.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>