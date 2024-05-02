@extends('layouts.student')
@section('myTimeTable')
    <div class="p-4 h-screen sm:ml-64 bg-slate-200">
        <div class="p-4 rounded-lg mt-14">
            @foreach ($classeTable as $class)
              

                @if ($class->timetable->count() > 0)
                    <h1 class="font-mono font-bold text-2xl text-center text-slate-600 mb-4">Classe: <span class="text-sky-800">{{ $class->name }}</span>
                    </h1>
                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-l  font-bold tracking-wide text-left text-slate-600 bg-sky-200 uppercase border border-white">
                                <th class="px-6 py-4">Time / Days</th>
                                <th class="px-6 py-4">Monday</th>
                                <th class="px-6 py-4">Tuesday</th>
                                <th class="px-6 py-4">Wednesday</th>
                                <th class="px-6 py-4">Thursday</th>
                                <th class="px-6 py-4">Friday</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @for ($hour = 8; $hour <= 17; $hour++)
                                <tr>
                                    <td class="px-4 py-3 text-m font-mono text-blue bg-blue-200 font-bold  border">
                                        {{ $hour }}:00 - {{ $hour + 1 }}:00</td>
                                    @foreach (['monday', 'tuesday', 'wednesday', 'thursday', 'friday'] as $day)
                                        <td
                                            class="px-4 py-3 text-m font-mono text-slate-600 text-center uppercase font-bold border">
                                            @foreach ($class->timetable as $event)
                                                @if (date('H', strtotime($event->time)) == $hour && strtolower($event->days) == $day)
                                                    {{ $event->subject->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                    @endforeach
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                    @else
                    <div class="bg-blue rounded-lg shadow-xl pb-8">
                        <div class="w-full h-[200px]">
                            <img src="{{ asset('photos/classe.jpg') }}" class="w-full h-full rounded-tl-lg rounded-tr-lg">
                        </div>
                        <div class="flex flex-col items-center mt-4">

                            <div class="flex items-center space-x-2 mt-2">
                                <p class="text-xl text-white font-mono">No time table found. You should be assigned to a
                                    classes first</p>

                            </div>

                        </div>
                    </div>
                @endif


                @endforeach
        </div>
    </div>
@endsection
