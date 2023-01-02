{{-- @props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
@endif --}}

@props(['status'])

@if ($status)
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="rounded-md bg-blue-50 p-4 z-30 my-5">
        <div class="flex">
            <div class="flex-shrink-0">
                <!-- Heroicon name: mini/information-circle -->
                <svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M19 10.5a8.5 8.5 0 11-17 0 8.5 8.5 0 0117 0zM8.25 9.75A.75.75 0 019 9h.253a1.75 1.75 0 011.709 2.13l-.46 2.066a.25.25 0 00.245.304H11a.75.75 0 010 1.5h-.253a1.75 1.75 0 01-1.709-2.13l.46-2.066a.25.25 0 00-.245-.304H9a.75.75 0 01-.75-.75zM10 7a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3 flex-1 md:flex md:justify-between">
                <div {{ $attributes->merge(['class' => 'font-medium text-sm text-blue-700']) }}>
                    {{ $status }}
                </div>
            </div>
        </div>
    </div>
@endif