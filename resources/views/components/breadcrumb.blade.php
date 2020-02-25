<ol class="breadcrumb float-sm-right">
  @foreach($breadcrumbs as $key=>$breadcrumb)
    <li class="breadcrumb-item @if($key+1 === count($breadcrumbs)) active @endif">
      @if($key+1 === count($breadcrumbs))
        {{ $breadcrumb }}
      @else
        <a href="#">{{ $breadcrumb }}</a>
      @endif

    </li>
  @endforeach
</ol>
