@extends('layouts.app')

@section('template_title')
    Ingresar Nuevo Proveedor
@endsection

@section('content')
    <section class="bg-gray-200">
        <div>
            <div>

                @includeif('partials.errors')

                <div>
                    <div class="py-5 flex justify-center">
                        <span class="text-3xl font-bold">Ingresar Proveedor</span>
                    </div>
                    <div class="flex justify-center px-5 md:px-44 lg:px-72">
                        <form method="POST" action="{{ route('proveedor.store') }}"  class="w-full" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('proveedor.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
