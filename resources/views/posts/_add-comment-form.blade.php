@auth
    <x-panel>
        <form 
            action="/posts/{{ $post->slug }}/comments" 
            method="POST">
            @csrf

            <header class="flex items-center">
                <img 
                    src="https://i.pravatar.cc/60?u={{ auth()->id() }}" 
                    alt="" 
                    width="40" 
                    height="40" 
                    class="rounded-full">

                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea 
                    name="body" 
                    cols="10" 
                    rows="5" 
                    placeholder="Quick, thing of something to say!" 
                    class="w-full text-sm focus:outline-none focus:ring rounded-xl p-3"
                    required></textarea>

                @error('body')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-center mt-4">
                <x-submit-button>
                    post
                </x-submit-button>
            </div>
        </form>     
    </x-panel>
    @else
    <x-panel class="flex items-center">
        <img 
            src="https://i.pravatar.cc/60?u={{ auth()->id() }}" 
            alt="" 
            width="40" 
            height="40" 
            class="rounded-full">
            
        <div class="ml-4"> 
            <a href="/register" class="uppercase hover:underline">Register</a> or <a href="/login" class="uppercase hover:underline">log in</a> to leave a comment.
        </div>
    </x-panel>                
@endauth