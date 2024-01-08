<div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
      <span></span>
    </label>

    <ul class="menu__box">
        <li><a class="nav-link pl-8" href="/">Home</a></li>
        <li><a class="nav-link pl-8" href="{{ url('directories', [2]) }}">Buildings</a></li>
        <li><a class="nav-link pl-8" href="{{ url('directories', [27]) }}">Plans</a></li>
        <li><a class="nav-link pl-8" href="{{ url('diys') }}">DIY</a></li>
        <li><a class="nav-link pl-8" href="{{ url('books') }}">Publications</a></li>
        <li><a class="nav-link pl-8" href="{{ url('people') }}">People</a></li>
        <li><a class="nav-link pl-8" href="{{ url('directories', [28]) }}">Contact</a></li>
    </ul>
</div>