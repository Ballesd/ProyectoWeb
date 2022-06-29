@extends('layouts.app')

@section('template_title')
    Ingresar Compañia
@endsection

@section('content')
    <section class="bg-gray-200">
        <div>
            <div>

                @includeif('partials.errors')

                <div>
                    <div class="py-5 flex justify-center">
                        <span class="text-3xl font-bold">Ingresar Compañia</span>
                    </div>
                    <div class="flex justify-center px-5 md:px-44 lg:px-72">
                        <form method="POST" action="{{ route('compañia.store') }}"  role="form" enctype="multipart/form-data"  class="w-full">
                            @csrf

                            @include('compañia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
