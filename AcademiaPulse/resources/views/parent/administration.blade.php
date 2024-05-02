@extends('layouts.parent')

@section('administration')
<div class="p-4 h-screen sm:ml-64 bg-slate-200">
<div class="p-4 rounded-lg mt-14">
              
            @if (session('success'))
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "{{ session('success') }}",

                });
            </script>
        @endif

        <h3 class="text-4xl text-sky-700 font-bold text-center uppercase mt-4">Contact Us</h3>

             <div class="items-center  space-y-8 mx-4 mb-12">
                
                <form action="{{ route('send-message') }}" method="POST" class="form bg-white p-6 my-10 relative">
                    @csrf
                    <div class="icon bg-blue text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px">
                        <i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i>
                    </div>
                     
                    <input type="hidden" name="role" value="parent">
                    
                    <input type="text" name="name" placeholder="Your Name" class="border p-2 w-full mt-3">
                    <input type="email" name="email" placeholder="Your Email" class="border p-2 w-full mt-3">
                    <textarea name="message" cols="10" rows="3" placeholder="Tell us about desired property" class="border p-2 mt-3 w-full"></textarea>
                    <div>
                        @if ($errors->any())
                            <h2 class="text-xl font-mono font-bold text-red-600">Please check :</h2>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <input type="submit" value="Submit" class=" w-full text-white  flex items-center justify-center  text-xl font-bold font-mono  bg-gray-400 hover:bg-gray-600 ease-in duration-200 rounded-lg  px-5 py-2.5 mt-4">
               
                </form>
        </div>
    </div>
@endsection