@if ($paginator->hasPages())
<div class="pagination mt-5 pt-4">
    <ul class=" list-inline"> {{-- Previous Page Link --}} @if ($paginator->onFirstPage()) <li class="list-inline-item disabled" aria-disabled=" true" aria-label="@lang('pagination.previous')"> <span aria-hidden=" true"><i class="ti-arrow-left"></i></span> </li> @else <li class=" list-inline-item"> <a href="{{ $paginator->previousPageUrl() }}" rel=" prev" aria-label="@lang('pagination.previous')"><i class=" ti-arrow-left"></i></a> </li> @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li class="list-inline-item disabled" aria-disabled="true"><span>{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="list-inline-item active" aria-current="page"><span>{{ $page }}</span></li>
        @else
        <li class="list-inline-item"><a href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="list-inline-item">
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="ti-arrow-right"></i></a>
        </li>
        @else
        <li class="list-inline-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
            <span aria-hidden="true"><i class="ti-arrow-right"></i></span>
        </li>
        @endif
    </ul>
</div>
@endif