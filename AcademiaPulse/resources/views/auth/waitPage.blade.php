@extends('layouts.auth')
@section('waitPage')
<section class="flex items-center h-screen sm:p-16 dark:bg-gray-900 dark:text-gray-100" style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('photos/homeBG.jpg') }}') no-repeat center;background-size:cover">
	<div class="container flex flex-col items-center justify-center px-5 mx-auto my-8 space-y-8 text-center sm:max-w-md">
        <a href="/"><img src="{{ asset('photos/urSchoolLogo.png') }}" class="h-[100px]" alt=""></a> 
        
		<p class="text-2xl font-mono font-bold text-white">Password Reset Email Has Been Sent Chek Your Email</p>
        <div class='flex space-x-2 justify-center items-center  dark:invert'>
             <div class='h-6 w-6 bg-white rounded-full animate-bounce [animation-delay:-0.3s]'></div>
           <div class='h-6 w-6 bg-white rounded-full animate-bounce [animation-delay:-0.15s]'></div>
           <div class='h-6 w-6 bg-white rounded-full animate-bounce'></div>
        </div>
		<a href="/" class="text-white bg-slate-600 border-2 border-slate-300  hover:bg-slate-300 hover:border-slate-600 hover:text-slate-600 hover:text-lg ease-in duration-200   font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center  ">
             Back To Homepage</a>
	</div>
    
</section>
@endsection

