@extends('layouts.app')

@section('template_title')
API
@endsection

@section('content')

<section>

    <section class="w-ful">
        <div id="api" class="p-5 lg:px-44">
            <div class="flex justify-around flex-wrap space-y-2 sm:space-y-0">
                <button onclick="ConsumAPI()" class="bg-blue-500 hover:bg-gradient-to-r hover:from-sky-500 hover:to-sky-700 py-2 px-7 font-black rounded-xl shadow-xl text-white text-xl">
                    Patrimonio
                </button>

                <button onclick="ConsumAPI2()" class="bg-blue-500 hover:bg-gradient-to-r hover:from-sky-500 hover:to-sky-700 py-2 px-7 font-black rounded-xl shadow-xl text-white text-xl">
                    Ingresos Operacionales
                </button>
            </div>
            <div id="grafo"></div>

            <div id="grafo2"></div>
        </div>
    </section>
    <section>
        <div>

        </div>
    </section>
</section>
<script src="js/scriptAPI.js"></script>

@endsection