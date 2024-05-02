@extends('layouts.admin')

@section('timeTable')
<div class="p-4 h-screen sm:ml-64 bg-slate-200">
<div class="p-4 rounded-lg mt-14">

            <h1 class="font-mono font-bold text-xl text-slate-600 mb-2">Classe: <span class="text-sky-800">{{ $class->name }}</span>
            </h1>

            <table class="w-full">
                <thead>
                    <tr class="text-lg  font-bold tracking-wide text-left text-slate-600 bg-sky-200 uppercase border border-white">
                        <th class="  px-6 py-4">Time / Days</th>
                        <th class="  px-6 py-4">Monday</th>
                        <th class="  px-6 py-4">Tuesday</th>
                        <th class="  px-6 py-4">Wednesday</th>
                        <th class="  px-6 py-4">Thursday</th>
                        <th class="  px-6 py-4">Friday</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @for ($hour = 8; $hour <= 17; $hour++)
                        <tr>
                            <td class="px-4 py-3 text-m font-mono text-blue bg-blue-200 font-bold  border">
                                {{ $hour }}:00 - {{ $hour + 1 }}:00</td>
                            @foreach (['monday', 'tuesday', 'wednesday', 'thursday', 'friday'] as $day)
                                <td class="px-4 py-3 text-m font-mono text-slate-600 text-center  uppercase font-bold   border">
                                    @foreach ($timetable as $event)
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

        </div>
    </div>
@endsection
