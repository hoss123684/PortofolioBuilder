<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-welcome /> -->
            </div>
        </div>
        <!-- <form action="{{route('subdomain.store')}}" method="post">
            @csrf
            <label for="">Subdomain</label>
            <input type="text" name="subdomain" id="">
            <button type="submit">Save</button>
        </form>
    </div> -->
    <a href="{{route('createWeb')}}">Create your website</a>
</x-app-layout>
