<div id="masonry-grid" class="posts masonry">
    @foreach ( $posts as $post )
        <div class="item post masonry-brick">
            @if($post->featuredimage && !empty(get_theme_setting('content.general.featuredImage.indexPageHeight')))
                <a class="index-image-link" href="/{{ $post->type->slug }}/{{ $post->slug }}">
                    <div class="post-img" style='background-image: url({{ $post->featuredimage->original }});'>
                        {{-- <{{ get_theme_setting('content.general.postTitle.size') }} class="index-post-title">{{ $post->title }}</{{ get_theme_setting('content.general.postTitle.size') }}> --}}
                    </div>
                </a>
            @elseif($post->featuredimage && empty(get_theme_setting('content.general.featuredImage.indexPageHeight')))
                <img src="{{ $post->featuredimage->original }}" class="post-img" alt="">
            @endif
        </div>
    @endforeach
</div>
{{ $posts->links() }}
