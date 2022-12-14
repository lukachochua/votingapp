@props([
    'redirect' => false,
    'messageToDisplay' => '',
]) 

<div 
    x-data="{ 
        isOpen: false,
        messageToDisplay: '{{ $messageToDisplay }}',
        showNotification(message){
            this.isOpen = true
            this.messageToDisplay = message
            setTimeout(() => {
                this.isOpen=false
            }, 5000)
        }
    }"
    x-cloak
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-x-8"
    x-transition:enter-end="opacity-100 transform translate-x-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 transform translate-x-0"
    x-transition:leave-end="opacity-0 transform translate-x-8"
    x-show="isOpen"
    @keydown.escape.window="isOpen = false"
    x-init="
        @if($redirect)
            $nextTick(()=> showNotification(messageToDisplay))
        @else
            Livewire.on('ideaWasUpdated', message => {
                showNotification(message)
            })

            Livewire.on('ideaWasMarkedAsSpam', message => {
                showNotification(message)
            })

            Livewire.on('ideaWasMarkedAsNotSpam', message => {
                showNotification(message)
            })

            Livewire.on('statusWasUpdated', message => {
                showNotification(message)
            })

            Livewire.on('commentWasAdded', message => {
                showNotification(message)
            })

            Livewire.on('commentWasUpdated', message => {
                showNotification(message)
            })

            Livewire.on('commentWasDeleted', message => {
                showNotification(message)
            })

            Livewire.on('commentWasMarkedAsSpam', message => {
                showNotification(message)
            })

            Livewire.on('commentWasMarkedAsNotSpam', message => {
                showNotification(message)
            })
        @endif
    "
    class="flex justify-between max-w-xs sm:max-w-sm w-full fixed bottom-0 right-0 
    bg-white rounded-xl shadow-lg border px-4 py-5 mx-2 sm:mx-6 my-8 z-10"
>
    <div class="flex items-center">
        <svg class="text-green h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        
        <span class='font-semibold sm:text-base text-gray-500 text-small ml-2' x-text="messageToDisplay"></span>
    </div>

    <button @click="isOpen=false" class="text-gray-400 hover:text-gray-500">
        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>              
    </button>
</div>
