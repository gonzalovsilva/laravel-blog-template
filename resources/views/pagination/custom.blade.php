@if ($paginator->hasPages())
    @if ($paginator->count())

        <ul class="page-numbers">

            @if (!$paginator->onFirstPage())
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i
                            class="fa fa-angle-double-left"></i></a></li>
            @endif

            @foreach ($elements as $element)

                @if (is_string($element))
                    <li class="disabled"><a>{{ $element }}</a></li>
                @endif



                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a>{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa fa-angle-double-right"></i></a>
                </li>
            @endif
        </ul>
    @else
        <p>No more posts found</p>
    @endif
@endif
