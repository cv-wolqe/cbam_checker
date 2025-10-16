@extends('layouts.default')
@section('content')
<h1 @class(['text-slate-900'])>Contact Us</h1>
<p>If you have any questions or need further information, please feel free to reach out to us. We are here to help you with your CBAM compliance needs.</p>
<!-- resources/views/components/contact-form.blade.php -->
<form method="POST" action="{{ route('contact.submit') }}" class="max-w-xl mx-auto my-8 p-6 bg-white shadow rounded-lg space-y-6">
    @csrf

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="name" class="block text-slate-950">Firstname</label>
            <input type="text" id="name" name="name" required
                   class="mt-1 block w-full rounded-md border-slate-300 focus:border-amber-400 focus:ring-amber-400 p-2 text-slate-950 bg-slate-50
                   placeholder:text-slate-400 transition duration-150 ease-in-out" />
        </div>
        <div>
            <label for="lastname" class="block text-slate-950">Lastname</label>
            <input type="text" id="lastname" name="lastname" required
                   class="mt-1 block w-full rounded-md border-slate-300 focus:border-amber-400 focus:ring-amber-400 p-2 text-slate-950 bg-slate-50
                   placeholder:text-slate-400 transition duration-150 ease-in-out" />
        </div>
    </div>

    <div>
        <label for="email" class="block text-slate-950">Email</label>
        <input type="email" id="email" name="email" required
               class="mt-1 block w-full rounded-md border-slate-300 focus:border-amber-400 focus:ring-amber-400 p-2 text-slate-950 bg-slate-50
               placeholder:text-slate-400 transition duration-150 ease-in-out" />
    </div>

    <div>
        <label for="message" class="block text-slate-950">Message</label>
        <textarea id="message" name="message" required rows="4"
                  class="mt-1 block w-full rounded-md border-slate-300 focus:border-amber-400 focus:ring-amber-400 p-2 text-slate-950 bg-slate-50
                  placeholder:text-slate-400 transition duration-150 ease-in-out resize-none"></textarea>
    </div>

    <div>
        <button type="submit"
                class="w-full py-3 rounded-md bg-amber-400 text-slate-950 font-bold hover:bg-amber-500 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-offset-2">
            Absenden
        </button>
    </div>
</form>
<div class="message-container">
    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="error-messages">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection