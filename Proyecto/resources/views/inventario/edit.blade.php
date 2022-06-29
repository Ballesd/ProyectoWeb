@extends('layouts.app')

@section('template_title')
Update Inventario
@endsection

@section('content')
<section class="bg-gray-200">
    <div>
        <div>

            @includeif('partials.errors')

            <div>
                <div class="py-5 flex justify-center">
                    <span class="text-3xl font-bold">Actualizar Inventario</span>
                </div>
                <div class="flex justify-center px-5 md:px-44 lg:px-72">
                    <form method="POST" action="{{ route('inventario.update', $inventario->id) }}" role="form" enctype="multipart/form-data" class="w-full">
                        {{ method_field('PATCH') }}
                        @csrf

                        @include('inventario.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection