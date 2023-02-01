<x-app-layout>
    <x-slot name="header">
       
        <a href="{{route('mother_dashboard')}}">
            <span  class="font-semibold text-xl text-gray-800 leading-tight" style="color: green; font-weight:bold;">
                {{ __('Go to mother dashboard to control everything') }}
            </span >
        </a>
    </x-slot>

  
</x-app-layout>
