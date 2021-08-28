<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            <span class="ml-2">All Ideas</span>
        </a>
    </div>
    <div class="idea-container bg-white rounded-xl flex mt-4">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                         class="w-14 h-14 rounded-xl">
                </a>
            </div>

            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hove:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Mussum Ipsum, cacilds vidis litro abertis. Si u mundo.
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-900">João das Neves</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xs font-bold uppercase
                                leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>
                        <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition
                                duration-150 ease-in text-center px-4">
                            <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                            </svg>
                            <ul class="hidden absolute w-44 font-semibold
                                text-left ml-8
                                bg-white shadow-dialog rounded-xl transition
                                duration-150 ease-in">
                                <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">
                                        mark as spam</a></li>
                                <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">
                                        delete post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>  <!-- end idea-container -->

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <button
                type="button"
                class="flex items-center justify-center h-11 w-32
                text-white text-xs  font-semibold rounded-xl border bg-blue
                border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                <span class="ml-1">Reply</span>
            </button>
            <button type="button" class="flex items-center justify-center h-11 w-36
                            text-xs bg-gray-200 font-semibold rounded-xl border
                            border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                <span>Set Status</span>
                <svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>
        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button type="button" class="flex uppercase items-center justify-center h-11 w-32
                            text-xs bg-gray-200 font-semibold rounded-xl border
                            border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                <span>Vote</span>
            </button>

        </div>
    </div> <!-- end buttons-container -->

    <div class="comments-container relative space-y-6 ml-22 my-8 pt-6 mt-1">
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    {{--<h4 class="text-xl font-semibold">
                        <a href="#" class="hove:underline">A random title can go here</a>
                    </h4>--}}
                    <div class="text-gray-600 mt-3">
                        Mussum Ipsum, cacilds vidis litro abertis. Si u mundo. text
                        Mussum Ipsum, cacilds vidis litro abertis. Si u mundo. text
                        Mussum Ipsum, cacilds vidis litro abertis. Si u mundo. text
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">João das Neves</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition
                                duration-150 ease-in text-center px-4">
                                <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="hidden absolute w-44 font-semibold
                                text-left ml-8
                                bg-white shadow-dialog rounded-xl transition
                                duration-150 ease-in">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">
                                            mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">
                                            delete post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>  <!-- end comment-container -->
        <div class="comment-container is-admin relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center font-bold uppercase
                    text-xs mt-1 text-blue">
                        Admin</div>
                </div>

                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hove:underline">Status Changed: Under Construction</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Mussum Ipsum, cacilds vidis litro abertis. Si u mundo. text
                        Mussum Ipsum, cacilds vidis litro abertis. Si u mundo. text
                        Mussum Ipsum, cacilds vidis litro abertis. Si u mundo. text
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue">Andrea</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition
                                duration-150 ease-in text-center px-4">
                                <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="hidden absolute w-44 font-semibold
                                text-left ml-8
                                bg-white shadow-dialog rounded-xl transition
                                duration-150 ease-in">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">
                                            mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">
                                            delete post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>  <!-- end admin comment-container -->
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=6" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>

                <div class="w-full mx-4">
                    {{--<h4 class="text-xl font-semibold">
                        <a href="#" class="hove:underline">A random title can go here</a>
                    </h4>--}}
                    <div class="text-gray-600 mt-3">
                        Mussum Ipsum, cacilds vidis litro abertis. Si u mundo. text
                        Mussum Ipsum, cacilds vidis litro abertis. Si u mundo. text
                        Mussum Ipsum, cacilds vidis litro abertis. Si u mundo. text
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">João das Neves</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition
                                duration-150 ease-in text-center px-4">
                                <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="hidden absolute w-44 font-semibold
                                text-left ml-8
                                bg-white shadow-dialog rounded-xl transition
                                duration-150 ease-in">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">
                                            mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block">
                                            delete post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>  <!-- end comment-container -->
    </div> <!-- end comments-container -->

</x-app-layout>
