<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            <span class="ml-2">All Ideas</span>
        </a>
    </div>

    <livewire:idea-show 
        :idea="$idea" 
        :votesCount="$votesCount" 
    />

    <div class="comments-container relative space-y-6 md:ml-22 my-8 pt-4 mt-1 ">
        <div class="comment-container relative bg-white rounded-xl flex ease-in mt-4">
            <div class="flex flex-1 flex-col md:flex-row px-4 py-6">
                <div class="flex-none mx-4">                    
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                 </div>
                <div class="md:mx-4 w-full">
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam harum eum tempore corrupti dolor adipisci recusandae voluptate, ratione facilis, aperiam mollitia nihil dicta labore molestias porro assumenda exercitationem impedit sapiente excepturi omnis maiores! Quia eligendi incidunt veritatis mollitia sit at?
                    </div>
    
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-xs font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
    
                        <div 
                            x-data="{isOpen:false}"    
                            class="flex items-center space-x-2"
                        >
                            <button 
                                @click="isOpen=!isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 border transition duration-150 ease-in rounded-full h-7 py-2 px-3"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                </svg>
                                <ul

                                    x-cloak
                                    x-show="isOpen"
                                    x-transition.origin.top.left
                                    @click.away="isOpen=false"
                                    @keydown.escape.window="isOpen=false"
                                    class="absolute z-10 w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10"
                                >
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment container -->

        <div class="comment-container relative bg-white rounded-xl flex ease-in mt-4">
            <div class="flex flex-1 flex-col md:flex-row px-4 py-6">
                <div class="flex-none mx-4">                    
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                 </div>
                <div class="md:mx-4 w-full">
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam harum eum tempore corrupti dolor adipisci recusandae voluptate, ratione facilis, aperiam mollitia nihil dicta labore molestias porro assumenda exercitationem impedit sapiente excepturi omnis maiores! Quia eligendi incidunt veritatis mollitia sit at?
                    </div>
    
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-xs font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
    
                        <div 
                            x-data="{isOpen:false}"    
                            class="flex items-center space-x-2"
                        >
                            <button 
                                @click="isOpen=!isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 border transition duration-150 ease-in rounded-full h-7 py-2 px-3"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                </svg>
                                <ul

                                    x-cloak
                                    x-show="isOpen"
                                    x-transition.origin.top.left
                                    @click.away="isOpen=false"
                                    @keydown.escape.window="isOpen=false"
                                    class="absolute z-10 w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10"
                                >
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment container -->

        <div class="comment-container relative bg-white rounded-xl flex ease-in mt-4">
            <div class="flex flex-1 flex-col md:flex-row px-4 py-6">
                <div class="flex-none mx-4">                    
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                 </div>
                <div class="md:mx-4 w-full">
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam harum eum tempore corrupti dolor adipisci recusandae voluptate, ratione facilis, aperiam mollitia nihil dicta labore molestias porro assumenda exercitationem impedit sapiente excepturi omnis maiores! Quia eligendi incidunt veritatis mollitia sit at?
                    </div>
    
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-xs font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
    
                        <div 
                            x-data="{isOpen:false}"    
                            class="flex items-center space-x-2"
                        >
                            <button 
                                @click="isOpen=!isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 border transition duration-150 ease-in rounded-full h-7 py-2 px-3"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                </svg>
                                <ul

                                    x-cloak
                                    x-show="isOpen"
                                    x-transition.origin.top.left
                                    @click.away="isOpen=false"
                                    @keydown.escape.window="isOpen=false"
                                    class="absolute z-10 w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10"
                                >
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment container -->


    </div> <!-- end comments container -->
</x-app-layout>