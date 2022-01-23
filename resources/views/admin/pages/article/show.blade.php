<div>
    @if ($article->thumbnail != null)
    <img src="{{ Storage::url($article->thumbnail) }}" class="img-fluid" alt="...">
    @endif
    <div class="card-body">
        <div class="card-body-content">
            <h5 class="card-title">{{ $article->title }}</h5>
            <p class="card-text">
                {!! $article->content !!}
            </p>
            <p class="card-text"><small class="text-muted">{{ $article->created_at->format('Y-m-d') }}</small></p>
        </div>
    </div>
</div>