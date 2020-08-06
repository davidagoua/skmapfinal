@php
$nb_pages = ceil($items->total() / $items->perPage())
@endphp

<!-- Pagination Area Start -->
<div class="academy-pagination-area wow fadeInUp" data-wow-delay="400ms">
    <nav>
        <ul class="pagination">
            <li class="page-item  active  "><a class="page-link " href="{{$items->previousPageUrl()}}"> < </a></li>
            @foreach($items->getUrlRange(1, $nb_pages) as $url)
                <li class="page-item @if($items->currentPage() == $loop->index+1) active  @endif"><a class="page-link " href="{{$url}}">{{ $loop->index + 1}}</a></li>
            @endforeach
            <li class="page-item  active  "><a class="page-link " href="{{$items->nextPageUrl()}}"> > </a></li>
        </ul>
    </nav>
</div>
