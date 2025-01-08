
<div class="max-w-xl mx-auto">
  <a class="mt-4" href="/">&nbsp;&nbsp;<img src="/images/header/header.jpg" width="90%" alt="Alistair Knox heading" /></a>
  <div class="hidden sm:block">
    <ul class=" flex flex-row mt-1 -ml-3 text-[0.95rem] w-[90%]" >
      <li><a class="nav-link" href="/">Home</a></li>
      <li><a  class="nav-link" href="{{route('buildlanding')}}">Buildings</a></li>
      <li><a class="nav-link" href="{{route('planlanding')}}">Plans</a></li>
      <li><a class="nav-link" href="{{route('diys.index')}}">DIY</a></li>
      <li><a class="nav-link" href="{{route('books.index')}}">Publications</a></li>
      <li><a class="nav-link" href="{{route('people.index')}}">People</a></li>
      <li><a class="nav-link" href="{{ url('asknoxes', [28]) }}">Contact</a></li>
    </ul>
  </div>
  <div class="space-y-2 visible sm:hidden mt-2 mb-2">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <section class="top-nav">
      @include('includes/nav-burger')
    </section>
  </div>


</div>