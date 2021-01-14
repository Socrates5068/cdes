<div class="buttons-social-media-share">
    <ul class="share-buttons">
        <li>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}" title="Compartir en Facebook" target="_blank"><img alt="Compartir en Facebook" src="/img/flat_web_icon_set/Facebook.svg" height="32px"></a>
{{--            <a href="http://www.facebook.com/sharer.php?s=100&p[url]={{ request()->fullUrl() }}&p[title]={{ $post->title }}&p[summary]={{ $post->excerpt }}&p[images][0]={{ $post->photos->first()->url }}" title="Share on Facebook" target="_blank"><img alt="Compartir en Facebook" src="/img/flat_web_icon_set/Facebook.svg" height="32px"></a>--}}
        </li>
        <li>
            <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ $description }}&via=SEDESPOTOSÍ&hashtags=SEDES" target="_blank" title="Tweet"><img alt="Tweet" src="/img/flat_web_icon_set/Twitter.svg" height="32px"></a>
        </li>
        <li>
            <a href="whatsapp://send?text={{ request()->fullUrl() }}" data-action="share/whatsapp/share">
                <img alt="Whatsapp" src="/img/flat_web_icon_set/whatsapp.svg" alt="Compartir en Whatsapp" height="32px">
            </a>
        </li>
{{--        <li>--}}
{{--            <a href="http://pinterest.com/pin/create/button/?url={{ request()->fullUrl() }}&description={{ $description }}" target="_blank" title="Pin it"><img alt="Pin it" src="/img/flat_web_icon_set/Pinterest.png"></a>--}}
{{--        </li>--}}
    </ul>
</div>