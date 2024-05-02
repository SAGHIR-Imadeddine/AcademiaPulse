@extends('layouts.auth')
@section('home')
@include('include.navbar')

<div class="w-full h-[72vh]">
 
    <div class="flex flex-wrap h-full p-6" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('photos/homeBG.jpg') }}') no-repeat center; background-size: cover; ">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
            <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5 ">
                <!-- <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-white uppercase rounded-full bg-slate-500">
                   AcademiaPulse
                </p> -->
                <h2 class="mb-5  text-3xl font-bold font-mono tracking-tight text-slate-300 sm:text-4xl sm:leading-none">
                    Learning Made Easy
                </h2>
                <p class="pr-5 mb-5 text-base font-mono text-white md:text-lg">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, quasi cumque unde dignissimos ullam magnam debitis ducimus id harum iure.
                </p>
                
            </div>
        </div>
        
        <div class="h-full w-[35%] p-4 hidden min-w-[280px] bg-slate-700 skew-x-6 rounded-md lg:inline-block opacity-95">
            <h1 class="text-slate-200 text-center font-bold font-mono text-4xl tracking-widest skew-x-12 mb-12">
                AcademiaPulse
            </h1>
            <p class="text-2xl text-slate-300 font-mono tracking-wide leading-8 pt-6 ">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt quod eaque ducimus ipsa magni! Dolore rem provident quaerat, accusantium in neque cumque quod explicabo quia aspernatur expedita magnam minima quo assumenda. Aut rem magnam fugiat aspernatur in tempora iusto vero.
            </p>
        </div>
    </div>
</div>

@include('include.footer')
@endsection

    
   
