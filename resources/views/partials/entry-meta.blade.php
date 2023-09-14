<time class="dt-published italic" datetime="{{ get_post_time('c', true) }}">
  {{ get_the_date() }}
</time>

<p class="text-xs">
@php
    $tags = get_the_tags();
    $tag_list = array();

    if ($tags) {
        foreach ($tags as $tag) {
            $tag_link = get_tag_link($tag->term_id);
            $tag_list[] = "<a href='{$tag_link}'>{$tag->name}</a>";
        }
    }

    $categories = get_the_category();
    $category_list = array();

    if ($categories) {
        foreach ($categories as $category) {
            $cat_link = get_category_link($category->term_id);
            $category_list[] = "<a href='{$cat_link}'>{$category->name}</a>";
        }
    }
@endphp

@if(!empty($tag_list) || !empty($category_list))
    @if(!empty($tag_list))
        Tags: {!! implode(', ', $tag_list) !!}
    @endif

    @if(!empty($tag_list) && !empty($category_list))
        &bull;
    @endif

    @if(!empty($category_list))
        Categories: {!! implode(', ', $category_list) !!}
    @endif
@endif
</p>
