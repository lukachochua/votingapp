<div 
    x-data
    @click="const clicked = $event.target
        const target=clicked.tagName.toLowerCase()
        const ignores = ['button', 'svg', 'path', 'a']
        if (! ignores.includes(target)){ 
            $event.target.closest('.idea-container').querySelector('.idea-link').click()
        }
    "
    class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer transition duration-150 ease-in"
>
    <div class="hidden md:block border-r border-gray-100 px-5 py-8">
        <div class="text-center">
            <div class="font-semibold text-2xl @if($hasVoted) text-blue @endif">{{ $votesCount }}</div>
            <div class="text-gray-500">Votes</div>
        </div>

        <div class="mt-8">
            @if ($hasVoted)
                <button 
                    wire:click.prevent="vote"                                     
                    class="w-20 bg-gray-200 bg-blue text-white font-bold text-xxs uppercase rounded-xl px-4 py-3 border border-blue 
                    hover:bg-blue-hover transition duration-150 ease-in"
                >Voted</button>   
            @else
            <button 
                    wire:click.prevent="vote"                          
                    class="w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 border border-gray-200 
                    hover:border-gray-400 transition duration-150 ease-in"
                >Vote</button>
            @endif
        </div>
    </div>

    <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
        <div class="flex-none mx-2 md:mx-0">                    
            <a href="#">
                <img src="{{ $idea->user->getAvatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
        </div>
        <div class="md:mx-4 mx-2 flex flex-col justify-between w-full">
            <h4 class="text-xl font-semibold">
                <a href="{{ route('idea.show', $idea)}}" class="idea-link hover:underline">{{ $idea->title }}</a>
            </h4>
            <div class="text-gray-600 mt-3 line-clamp-3">
                @admin
                    @if($idea->spam_reports > 0)
                        <div class="text-red mb-2">Spam Reports: {{ $idea->spam_reports }}</div>
                    @endif
                @endadmin
                
                {{ $idea->description }}
            </div>

            <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                <div class="flex items-center text-gray-400 text-xs font-semibold space-x-2">
                    <div>{{ $idea->created_at->diffForHumans() }}</div>
                    <div>&bull;</div>
                    <div>{{ $idea->category->name }}</div>
                    <div>&bull;</div>
                    <div class="text-gray-900">{{ $idea->comments_count." Comments" }}</div>
                </div>

                <div 
                    x-data="{isOpen: false}"
                    class="flex items-center space-x-2 mt-4 md:mt-0"
                >
                    <div class="{{ 'status-'.Str::kebab($idea->status->name) }} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                        {{ $idea->status->name }}
                    </div>
                </div>

                <div class="flex items-center md:hidden mt-4 md:mt-0 ">
                    <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                        <div class="text-sm font-bold leading-none @if($hasVoted) text-blue @endif">{{ $votesCount }}</div>
                        <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                    </div>
                    <div>
                        @if ($hasVoted)
                            <button 
                                wire:click.prevent="vote" 
                                class="w-20 bg-blue text-white font-bold text-xxs uppercase rounded-xl px-4 py-3 border border-gray-200 
                                hover:bg-blue-hover transition duration-150 ease-in -mx-5"
                            >Vote</button>
                        @else
                            <button 
                                ire:click.prevent="vote" 
                                class="w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 border border-gray-200 
                                hover:border-gray-400 transition duration-150 ease-in -mx-5"
                            >Vote</button>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!--  end idea container -->