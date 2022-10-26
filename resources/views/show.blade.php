<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            <span class="ml-2">All Ideas</span>
        </a>
    </div>

    <div class="idea-container bg-white rounded-xl flex ease-in mt-4">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">                    
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
             </div>
            <div class="mx-4 w-full">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore nam saepe itaque eveniet officiis distinctio temporibus, et vero hic veritatis fugiat tenetur praesentium sequi quae maiores alias quisquam, in voluptatum officia, commodi odit id rem nesciunt porro! Vel molestiae dolor vitae quis optio nulla expedita animi dolorum numquam, odit iusto corporis! Dignissimos, adipisci. Minus libero ducimus neque culpa consequatur perspiciatis aspernatur qui nobis iste! Eveniet neque vero nostrum molestiae itaque.
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-gray-400 text-xs font-semibold space-x-2">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>

                    <div class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 border transition duration-150 ease-in rounded-full h-7 py-2 px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                            </svg>
                            {{-- <ul class="absolute w-44 font-semibold bg-white shadow-dialogg rounded-xl py-3 text-left ml-8">
                                <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                            </ul> --}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--  end idea container -->

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <button 
            type="button"
            class="flex items-center justify-center h-11 w-32 text-xs text-white bg-blue font-semibold rounded-xl border 
            border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
            >
                <span class="ml-1">
                    Reply
                </span>
            </button>

            <button 
            type="button"
            class="flex items-center justify-center h-11 w-36 text-xs bg-gray-200 font-semibold rounded-xl border 
            border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
            >
                <span>
                    Set Status
                </span>
                <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
        </div>
        
        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>

            <button 
            type="button"
            class="h-11 w-32 text-xs bg-gray-200 font-semibold uppercase rounded-xl border 
            border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
            >
                <span>
                    Vote
                </span>
            </button>
        </div>        
    </div> <!--  end buttons container -->

    <div class="comments-container relative space-y-6 ml-22 my-8 pt-4 mt-1 ">
        <div class="comment-container relative bg-white rounded-xl flex ease-in mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">                    
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                 </div>
                <div class="mx-4 w-full">
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam harum eum tempore corrupti dolor adipisci recusandae voluptate, ratione facilis, aperiam mollitia nihil dicta labore molestias porro assumenda exercitationem impedit sapiente excepturi omnis maiores! Quia eligendi incidunt veritatis mollitia sit at?
                    </div>
    
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-xs font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
    
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 border transition duration-150 ease-in rounded-full h-7 py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                </svg>
                                {{-- <ul class="absolute w-44 font-semibold bg-white shadow-dialogg rounded-xl py-3 text-left ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                </ul> --}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment container -->

        <div class="is-admin comment-container relative bg-white rounded-xl flex ease-in mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">                    
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center text-blue font-bold uppercase text-xxs mt-1">Admin</div>
                 </div>
                <div class="mx-4 w-full">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Status changed to "Under Consideration"</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam harum eum tempore corrupti dolor adipisci recusandae voluptate, ratione facilis, aperiam mollitia nihil dicta labore molestias porro assumenda exercitationem impedit sapiente excepturi omnis maiores! Quia eligendi incidunt veritatis mollitia sit at?
                    </div>
    
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-xs font-semibold space-x-2">
                            <div class="font-bold text-blue">Adrea</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
    
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 border transition duration-150 ease-in rounded-full h-7 py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                </svg>
                                {{-- <ul class="absolute w-44 font-semibold bg-white shadow-dialogg rounded-xl py-3 text-left ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                </ul> --}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment container -->

        <div class="comment-container relative bg-white rounded-xl flex ease-in mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">                    
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                 </div>
                <div class="mx-4 w-full">
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam harum eum tempore corrupti dolor adipisci recusandae voluptate, ratione facilis, aperiam mollitia nihil dicta labore molestias porro assumenda exercitationem impedit sapiente excepturi omnis maiores! Quia eligendi incidunt veritatis mollitia sit at?
                    </div>
    
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-gray-400 text-xs font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
    
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 border transition duration-150 ease-in rounded-full h-7 py-2 px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                </svg>
                                {{-- <ul class="absolute w-44 font-semibold bg-white shadow-dialogg rounded-xl py-3 text-left ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                </ul> --}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment container -->
    </div> <!-- end comments container -->
</x-app-layout>