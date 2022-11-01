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
        <div class="flex flex-1 flex-col md:flex-row px-4 py-6">
            <div class="flex-none">                    
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
             </div>
            <div class="md:mx-4 mx-2 w-full">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">{{ $idea->title }}</a>
                </h4>
                <div class="text-gray-600 mt-3">
                    {{ $idea->description }} 
                </div>

                <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                    <div class="flex items-center text-gray-400 text-xs font-semibold space-x-2">
                        <div class="md:block hidden font-bold text-gray-900">{{ $idea->user->name }}</div>
                        <div class="md:block hidden">&bull;</div>
                        <div>{{ $idea->created_at->diffForHumans() }}</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>

                    <div 
                        x-data="{isOpen:false}"
                        class="flex items-center space-x-2 mt-4 md:mt-2"
                    >
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>
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
                                class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left md:ml-8 top-8 md:top-6 right-0 md:left-0 z-10"
                            >
                                <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                            </ul>
                        </button>
                    </div>

                    <div class="flex items-center md:hidden mt-4 md:mt-0 ">
                        <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                            <div class="text-sm font-bold leading-none">12</div>
                            <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                        </div>
                        <div>
                            <button 
                            class="w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 border border-gray-200 
                            hover:border-gray-400 transition duration-150 ease-in -mx-5"
                            >Vote</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--  end idea container -->

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex flex-col md:flex-row items-center space-x-4 md:ml-6">
            <div 
                x-data="{isOpen:false}"
                class="relative"
            >
                <button 
                    @click="isOpen=!isOpen"
                    type="button"
                    class="flex items-center justify-center h-11 w-32 text-sm text-white bg-blue font-semibold rounded-xl border 
                    border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                >
                    <span class="ml-1">
                        Reply
                    </span>
                </button>

                <div class="absolute z-10 w-64 md:w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form 
                        x-cloak
                        x-show="isOpen"
                        x-transition.origin.top.left
                        @click.away="isOpen=false"
                        @keydown.escape.window="isOpen=false"
                        action="" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                            class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                            placeholder="Go ahead, don't be shy. Share your thoughts..."
                            ></textarea>
                        </div>

                        <div class="flex flex-col md:flex-row items-center md:space-x-3">
                            <button 
                                type="button"
                                class="flex items-center justify-center h-11 w-full md:w-1/2 text-sm text-white bg-blue font-semibold rounded-xl border 
                                border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                            >
                            Post Comment                               
                            </button>

                            <button 
                                type="button"
                                class="flex items-center justify-center w-full md:w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border 
                                border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 mt-2 md:mt-0"
                            >
                            <svg  class="text-gray-600 w-4 -rotate-45" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 
                                0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 
                                7.81a1.5 1.5 0 002.112 2.13" />
                            </svg>
                            <span class="ml-1">
                                Attach
                            </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div 
                x-data="{isOpen:false}"
                class="relative"
            >
                <button 
                    @click="isOpen=!isOpen"
                    type="button"
                    class="flex items-center justify-center h-11 w-36 text-sm bg-gray-200 font-semibold rounded-xl border 
                    border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 mt-2 md:mt-0"
                >
                    <span>
                        Set Status
                    </span>
                    <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>

                <div class="absolute z-20 w-64 md:w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form 
                        x-cloak
                        x-show="isOpen"
                        x-transition.origin.top.left
                        @click.away="isOpen=false"
                        @keydown.escape.window="isOpen=false"
                        action="" class="space-y-4 px-4 py-6"
                    >
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-slate-200 text-black border-none" name="radio-direct" value="1">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-slate-200 text-purple border-none" name="radio-direct" value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-slate-200 text-yellow border-none" name="radio-direct" value="3">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-slate-200 text-green border-none" name="radio-direct" value="4">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-slate-200 text-red border-none" name="radio-direct" value="5">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comment" cols="30" rows="3"
                            class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                            placeholder="Add an update comment (optional)"
                            ></textarea>
                        </div>

                        <div class="flex items-center justify-between space-x-3">
                            <button 
                                type="button"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border 
                                border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                                >
                                <svg  class="text-gray-600 w-4 -rotate-45" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 
                                    0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 
                                    7.81a1.5 1.5 0 002.112 2.13" />
                                </svg>
                                <span class="ml-1">
                                    Attach
                                </span>
                            </button>

                            <button 
                                type="submit"
                                class="flex items-center justify-center w-1/2 h-11 text-xs text-white bg-blue font-semibold rounded-xl border 
                                border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                            >
                                <span class="ml-1">
                                    Update
                                </span>
                            </button>
                        </div>

                        <div>
                            <label class="font-normal inline-flex items-center">
                                <input type="checkbox" name="notify_voters" class="rounded bg-gray-200" checked="">
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        
        <div class="hidden md:flex items-center space-x-3">
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