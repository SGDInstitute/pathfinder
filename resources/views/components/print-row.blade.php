<div @class(['rounded-md p-4 flex items-center space-x-4', 'bg-gray-100'=> $odd])>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-600">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>

    <div>
        <h2>{{ $badge->name }}</h2>
        <p>{{ $badge->pronouns }}</p>
    </div>
</div>