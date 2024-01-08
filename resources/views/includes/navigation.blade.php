
<div class="max-w-xl mx-auto">
    <a class="mt-4" href="/">&nbsp;&nbsp;<img src="/images/header/header.jpg" width="90%" alt="Alistair Knox heading" /></a>
    <div class="hidden sm:block">
        <ul class="flex flex-row justify-between mt-1 text-[0.95rem] w-[90%]">
            <li><a class="nav-link" href="/">Home</a></li>
            <li><a class="nav-link" href="{{ url('mydirectories', [2]) }}">Buildings</a></li>
            <li><a class="nav-link" href="{{ url('mydirectories', [27]) }}">Plans</a></li>
            <li><a class="nav-link" href="{{ url('diys') }}">DIY</a></li>
            <li><a class="nav-link" href="{{ url('books') }}">Publications</a></li>
            <style>
                #sortbox:checked ~ #sortboxmenu {
                    opacity: 1;
                }
            </style>
            <div class="relative">
                <input type="checkbox" id="sortbox" class="hidden absolute">
                <label for="sortbox" class="flex items-center space-x-1 cursor-pointer">
                <span class="">Biography</span> 
                </label>
                <div id="sortboxmenu" class="absolute mt-1 right-1 top-full min-w-max shadow rounded opacity-0  transition delay-75 ease-in-out z-10">
                    <ul class="text-left ">
                        <li><a href="{{ url('mydirectories', [1]) }}" class="px-3 py-2 block bg-gray-50">Biography</a></li>
                        <li><a href="url('mydirectories', [6]) }}" class="px-3 py-2 block bg-gray-50">Childhood</a></li>
                        <li><a href="{{ url('mydirectories', [7]) }}" class="px-3 py-2 block bg-gray-50">The&nbsp;Bank</a></li>
                        <li><a href="/{{ url('mydirectories', [8]) }}" class="px-3 py-2 block bg-gray-50">Adolesence</a></li>
                        <li><a href="{{ url('mydirectories', [9]) }}" class="px-3 py-2 block bg-gray-50">Marriage</a></li>
                        <li><a href="{{ url('mydirectories', [10]) }}" class="px-3 py-2 block bg-gray-50">The&nbsp;Navy</a></li>
                        <li><a href="{{ url('mydirectories', [11]) }}" class="px-3 py-2 block bg-gray-50">First&nbsp;Buildings</a></li>
                        <li><a href="{{ url('mydirectories', [12]) }}" class="px-3 py-2 block bg-gray-50">Bohemian&nbsp;Associations</a></li>
                        <li><a href="{{ url('mydirectories', [13]) }}" class="px-3 py-2 block bg-gray-50">Early&nbsp;Houses</a></li>
                        <li><a href="{{ url('mydirectories', [14]) }}" class="px-3 py-2 block bg-gray-50">Margot</a></li>
                        <li><a href="{{ url('mydirectories', [18]) }}" class="px-3 py-2 block bg-gray-50">Professional&nbsp;Building</a></li>
                        <li><a href="{{ url('mydirectories', [15]) }}" class="px-3 py-2 block bg-gray-50">Hard&nbsp;Times</a></li>
                        <li><a href="{{ url('mydirectories', [17]) }}" class="px-3 py-2 block bg-gray-50">The&nbsp;Knox House</a></li>
                        <li><a href="{{ url('mydirectories', [16]) }}" class="px-3 py-2 block bg-gray-50">Landscape&nbsp;Architecture</a></li>
                        <li><a href="{{ url('mydirectories', [20]) }}" class="px-3 py-2 block bg-gray-50">Helping&nbsp;Hand</a></li>
                        <li><a href="{{ url('mydirectories', [19]) }}" class="px-3 py-2 block bg-gray-50">Eltham&nbsp;Shire Council</a></li>
                        <li><a href="{{ url('mydirectories', [24]) }}" class="px-3 py-2 block bg-gray-50">Mature&nbsp;Houses</a></li>
                        <li><a href="{{ url('mydirectories', [25]) }}" class="px-3 py-2 block bg-gray-50">Postscript</a></li>
                    </ul>
                </div>
            </div>

            <li><a class="nav-link" href="{{ url('people') }}">People</a></li>
            <li><a class="nav-link" href="{{ url('mydirectories', [28]) }}">Contact</a></li>
        </ul>
    </div>
<div class="space-y-2 visible sm:hidden mt-2 mb-2">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <section class="top-nav">
    @include('includes/nav-burger')
  </section>
</div>


</div>