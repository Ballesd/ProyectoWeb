@extends('layouts.app')

@section('template_title')
    Editar Proveedor
@endsection

@section('content')
    <section class="bg-gray-200">
        <div>
            <div>

                @includeif('partials.errors')

                <div>
                    <div class="py-5 flex justify-center">
                        <span class="text-3xl font-bold">Editar Proveedor</span>
                    </div>
                    <div class="flex justify-center px-5 md:px-44 lg:px-72">
                        <form method="POST" action="{{ route('proveedor.update', $proveedor->id) }}" class="w-full" role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('proveedor.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
