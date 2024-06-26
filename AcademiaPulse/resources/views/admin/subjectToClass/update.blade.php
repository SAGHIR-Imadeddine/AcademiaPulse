    @extends('layouts.admin')
    @section('updateSubjectToClasse')
        <div class="p-4 h-screen sm:ml-64 bg-slate-200">
            <div class="p-4  rounded-lg  mt-24">
                @if (session('success'))
                    <script>
                        Swal.fire({
                            icon: "success",
                            title: "Success!",
                            text: "{{ session('success') }}",
                        });
                    </script>
                @endif
                <div class="py-8">
                    <div class="w-full flex items-center justify-center">
                        <div class=" rounded-lg shadow-lg flex-col w-5/6 sm:max-w-2xl px-6 bg-sky-800">

                   
                            <div class="px-5 py-3 mb-3 text-3xl font-medium text-gray-800 mt-6">
                                <div class="text-center font-mono font-bold text-white">Update Subject To Classe  
                                          </div>
                            </div>

                            <form action="{{ route('subject-to-class.update',$subjetToClasse->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div>
                                    @if ($errors->any())
                                        <h2 class="text-xl font-mono font-bold text-black">Validation errors:</h2>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li class="text-white">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                               

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5">
                                    <div class="grid grid-cols-1">
                                        <label class="md:text-sm text-xs text-white text-light font-semibold">Classe</label>
                                        <select name="classe_id" id="classe"
                                            class="py-2 px-3 rounded-lg border-2 mt-1 focus:outline-none">
                                            @foreach ($classes as $classe)
                                                <option value="{{ $classe->id }}">{{ $classe->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="grid grid-cols-1">
                                        <label class="md:text-sm text-xs text-white text-light font-semibold">Subject</label>
                                        <select name="subject_id" id="subject"
                                            class="py-2 px-3 rounded-lg border-2 mt-1 focus:outline-none">
                                            @foreach ($subjects as $subject)
                                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1">
                                    <label class="md:text-sm text-xs text-white text-light font-semibold mt-2">Statut</label>
                                    <select name="statut" class="py-2 px-3 rounded-lg border-2 mt-1 focus:outline-none">
                                        <option value="activer">Activer</option>
                                        <option value="desactiver">Desactiver</option>
                                    </select>
                                </div>
                                <div class="flex items-center justify-center  my-6">
                                    <button type="submit"
                                        class="font-mono font-bold py-2 px-8 bg-gray-300 rounded-full text-slate-700 border-2 border-slate-700  hover:bg-gray-600 hover:text-slate-300 hover:border-slate-300 cursor-pointer ease-in-out duration-200">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
