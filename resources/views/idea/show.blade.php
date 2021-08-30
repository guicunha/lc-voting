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
                    <a href="#" class="hove:underline">{{ $idea->title }}</a>
                </h4>
                <div class="text-gray-600 mt-3">
                    {{$idea->description}}
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="font-bold text-gray-900">{{$idea->user->name}}</div>
                        <div>&bull;</div>
                        <div>{{$idea->created_at->diffForHumans()}}</div>
                        <div>&bull;</div>
                        <div>Category</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>
                    </div>
                    <div x-data="{ isOpen: false }" class="flex items-center space-x-2">
                        <div class="bg-gray-200 text-xs font-bold uppercase
                                leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>
                        <button
                            @click="isOpen = !isOpen"
                            class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition
                                duration-150 ease-in text-center px-4">
                            <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                            </svg>
                            <ul
                                x-cloak
                                x-show.transition.origin.top.left="isOpen"
                                @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="absolute w-44 font-semibold
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
            <div class="relative" x-data="{ isOpen: false }">
                <button
                    type="button"
                    @click="isOpen = !isOpen"
                    class="flex items-center justify-center h-11 w-32
                text-white text-sm  font-semibold rounded-xl border bg-blue
                border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                    Reply
                </button>
                <div
                    x-cloak
                    x-show.transition.origin.top.left="isOpen"
                    @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-10 w-104 text-left font-semibold text-sm bg-white
                shadow-dialog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                            class="w-full text-sm bg-gray-100 rounded-xl
                            placeholder-gray-900 border-none px-4 py-2" placeholder="Go ahead..."></textarea>
                        </div>
                        <div class="flex justify-between space-x-3">
                            <button type="button" class="flex items-center justify-center w-32 h-11
                            text-xs bg-gray-200 font-semibold rounded-xl border
                            border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                <svg class="h-4 w-4 text-gray-600 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                            <button
                                type="button"
                                class="flex items-center justify-center h-11 w-1/2
                text-white text-sm  font-semibold rounded-xl border bg-blue
                border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                                Post Comment
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="relative" x-data="{ isOpen: false }"
                 >
                <button
                    type="button"
                    @click="isOpen = !isOpen"
                    class="flex items-center justify-center h-11 w-36
                            text-sm bg-gray-200 font-semibold rounded-xl border
                            border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                    <span>Set Status</span>
                    <svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div
                x-cloak
                x-show.transition.origin.top.left="isOpen"
                @click.away="isOpen = false"
                @keydown.escape.window="isOpen = false"
                class="absolute z-20 w-76 text-left font-semibold text-sm bg-white
                shadow-dialog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 border-none text-gray-700"
                                           checked="" name="radio-direct" value="open">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 border-none text-purple"
                                           checked="" name="radio-direct" value="considering">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 border-none text-yellow"
                                           checked="" name="radio-direct" value="in_progress">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 border-none text-blue"
                                           checked="" name="radio-direct" value="inplemented">
                                    <span class="ml-2">Inplemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 border-none text-red"
                                           checked="" name="radio-direct" value="closed">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div> <!-- end status radios -->
                        <div>
                        <textarea name="update_comment" id="update_comment" cols="30" rows="3"
                                  class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900
                                    border-none px-4 py-2" placeholder="Add an update comment (optional)"></textarea>
                        </div>
                        <div class="flex items-center justify-between space-x-3">
                            <button type="button" class="flex items-center justify-center w-1/2 h-11
                            text-xs bg-gray-200 font-semibold rounded-xl border
                            border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                <svg class="h-4 w-4 text-gray-600 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                            <button type="submit" class="
                            flex items-center justify-center w-1/2 h-11
                            text-white text-xs  font-semibold rounded-xl border bg-blue
                            border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                                <span class="ml-1">Submit</span>
                            </button>
                        </div> <!-- end buttons on status update modal -->
                        <div>
                            <label class="font-normal inline-flex items-center">
                                <input class="bg-gray-200 border-none rounded" type="checkbox" name="notify_voters" checked="">
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
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
