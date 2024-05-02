@extends('layouts.auth')
@section('login')
    <div class="w-full flex flex-wrap">

        <div class="w-full md:w-1/2 flex flex-col">

            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                <a href="/"><img src="{{ asset('photos/urSchoolLogo.png') }}" class="h-[80px]" alt=""></a> 
            </div>

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl font-mono font-bold text-slate-700">Start Your Journey</p>
                <form action="{{ route('login') }}" method="post" class="flex flex-col pt-3 md:pt-8">
                    @csrf
                    @method('post')
                    <div class="flex flex-col pt-4">
                        <label class="text-lg font-mono font-bold">Email</label>
                        <input type="email" id="email" name="email" placeholder="example@email.com"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="flex flex-col pt-4">
                        <label class="text-lg font-mono font-bold">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <button type="submit"
                        class="bg-slate-600 hover:bg-slate-400 text-white hover:text-slate-800 hover:border-2 hover:border-slate-500 ease-in-out duration-300 font-bold font-mono text-lg  p-2 mt-8 rounded ">Login</button>
                </form>

                <div class="text-center pt-12 pb-12">
                    <p class="font-mono font-bold text-slate-600">Forgot Password ? <a href="{{ route('forgotPassword') }}" class="underline font-semibold font-mono font-bold text-slate-600">Reset
                            here.</a>
                    </p>
                </div>
            </div>

        </div>

        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="{{ asset('photos/login.png') }}">
        </div>
    </div>
@endsection
