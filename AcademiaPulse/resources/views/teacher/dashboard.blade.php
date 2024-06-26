@extends('layouts.teacher')
@section('dashboard')
<div class="p-4 h-screen sm:ml-64 bg-slate-200">
<div class="p-4 rounded-lg mt-14">

            <div class="grid grid-cols-1 gap-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 mt-4">
          
                <div class="bg-gray-200 p-8 rounded-xl shadow-xl flex items-center justify-between   border-4 border-blue  ">
                    <div class="flex space-x-6 items-center">
                        <img src="{{ asset('photos/students.png') }}" class="w-auto h-14 rounded-lg" />

                        <div>
                            <p class="font-bold font-mono text-orange text-xl">{{ $studentCount }}</p>
                            <p class="font-bold font-mono  text-l text-black">Students</p>
                        </div>
                    </div>

                 
                </div>
             
                <div class="bg-gray-200 p-8 rounded-xl shadow-xl flex items-center justify-between   border-4 border-blue ">
                    <div class="flex space-x-6 items-center">
                        <img src="{{ asset('photos/salle-de-classe.png') }}" class="w-auto h-14 rounded-lg" />

                        <div>
                            <p class="font-bold font-mono text-orange text-xl">{{ $className }}</p>
                            <p class="font-bold font-mono  text-l text-black">Classes</p>
                        </div>
                    </div>

                   
                </div>
                <div class="bg-gray-200 p-8 rounded-xl shadow-xl flex items-center justify-between border-4 border-blue ">
                    <div class="flex space-x-6 items-center">
                        <img src="{{ asset('photos/bibliotheque.png') }}" class="w-auto h-14 rounded-lg" />

                        <div>
                            <p class="font-bold font-mono text-orange text-xl">{{ $subjectCount }}</p>
                            <p class="font-bold font-mono  text-l text-black">Subjects</p>
                        </div>
                    </div>
 
                </div>
                <div class="bg-gray-200 p-8 rounded-xl shadow-xl flex items-center justify-between border-4 border-blue ">
                    <div class="flex space-x-6 items-center">
                        <img src="{{ asset('photos/tester.png') }}" class="w-auto h-14 rounded-lg" />

                        <div>
                            <p class="font-bold font-mono text-orange  text-xl">{{ $examCount }}</p>
                            <p class="font-bold font-mono  text-l text-black">Exams</p>
                        </div>
                    </div>

                    
                </div>
            </div>
      

                <div class="mt-14 flex flex-col lg:flex-row rounded-lg border-2 border-white bg-slate-300 p-6 shadow-2xl">
                  
                    <div class="relative">
                     
                        <img class="w-40 h-40 rounded-md object-cover" src="{{ asset('users/' . Auth::user()->picture) }}"
                            alt="User" />


                    </div>

               
                    <div
                        class=" w-full max-w-4xl flex flex-col sm:flex-row gap-3 sm:items-center  justify-between px-5 py-4 rounded-md">
                        <div>
                            <span class="text-slate-700 font-mono font-bold text-sm">Teacher</span>
                            <h3 class="font-bold font-mono mt-px text-white ">{{Auth::user()->name}}</h3>
                            <div class="flex items-center gap-3 mt-2">
                                <span
                                    class=" text-slate-600 font-mono italic  text-sm">{{Auth::user()->genre}}</span>
                                <span class="bg-slate-600 px-4 rounded-lg text-white font-mono font-bold text-sm"> {{Auth::user()->email}}</span>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>


                    <div class="w-100  flex flex-grow flex-col items-end justify-start">
                        <div class="flex flex-row space-x-3">
                            
                                <div class="w-32 flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center shadow-lg ">
                                    <div class="block rounded-t overflow-hidden  text-center ">
                                        <div class="bg-slate-600 text-white font-bold font-mono text-l py-1">
                                            {{ \Carbon\Carbon::now()->format('F') }}
                                        </div>
                                        <div class="pt-1 border-l border-r border-white bg-white">
                                            <span class="text-5xl font-bold  font-mono">
                                                {{ \Carbon\Carbon::now()->format('d') }}
                                          </span>
                                        </div>
                                        <div class="border-l border-r border-b rounded-b-lg text-center border-white bg-white -pt-2 -mb-1">
                                            <span class="font-bold font-mono text-l">
                                                {{ \Carbon\Carbon::now()->format('l') }}
                                          </span>
                                        </div>
                                        <div class="pb-2 border-l border-r border-b rounded-b-lg text-center border-white bg-white">
                                            <span class="font-bold font-mono text-l text-blue">
                                                {{ \Carbon\Carbon::now()->format('g:i ') }} 
                                          </span>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            
        </div>
    </div>
@endsection
