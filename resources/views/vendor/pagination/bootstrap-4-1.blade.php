@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @php
           $a = $paginator->previousPageUrl() ;
           
            
                $insert = '/trending';
            

            $previousPageUrl = substr($paginator->previousPageUrl(), 0,strpos($paginator->previousPageUrl(), $insert)).'yearbook'.substr($paginator->previousPageUrl(), strpos($paginator->previousPageUrl(), $insert));
           // $paginator->previousPageUrl() = $b;
           // $a = $paginator->nextPageUrl() ;
            //strpos($a, $insert);
            $nextPageUrl = substr($paginator->nextPageUrl(), 0,strpos($paginator->nextPageUrl(), $insert)).'yearbook'.substr($paginator->nextPageUrl(), strpos($paginator->nextPageUrl(), $insert));
          //  $paginator->nextPageUrl() = $b;
          /*  $a = $url ;
            strpos($a, '/trending');
            $b = substr($a, 0,strpos($a, '/trending')).'yearbook/'.substr($a, strpos($a, '/trending'));
            $paginator->$url = $b;*/
        @endphp
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
        @else
            <li class="page-item"><a class="page-link" href="{{ $previousPageUrl }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @else
                    @php
                        $a = $url ;
                        strpos($a, $insert);
                        $b = substr($a, 0,strpos($a, $insert)).'yearbook'.substr($a, strpos($a, $insert));
                        $url = $b;
                    @endphp
                        <li class="page-item"><a class="page-link" id="ads" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $nextPageUrl }}" rel="next">&raquo;</a></li>
        @else
            <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
        @endif
    </ul>
@endif
