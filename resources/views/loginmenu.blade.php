    @if (Route::has('login'))
    <div class="fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-500 underline">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-500 underline">Log in</a>
        
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-500 underline">Register</a>
        @endif
        @endauth
    </div>
    @endif
<div class="fixed top-0 right-1 px-6 py-4 sm:block">
    <?php 
        $url = parse_url(URL::current());
        $parsedURL = "";
        $word = "/help";

        foreach ($url as $item)
        {
            $parsedURL .= "$item, ";
        }

        $parsedURL = substr($parsedURL, 0, -2);
    ?>
        
    @if (strpos($parsedURL, $word) !== false)
    <a href="{{ route('home') }}" class="text-sm text-gray-500 underline">Home</a>
    @else
    <a href="{{ route('help') }}" class="text-sm text-gray-500 underline">Help</a>
    @endif
</div>
