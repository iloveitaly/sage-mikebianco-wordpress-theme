<article @php(post_class("prose max-w-none post-summary"))>
  <a href="{{ get_permalink() }}">
    <header>
      <h2 class="entry-title mb-2">
        {!! $title !!}
      </h2>
    </header>

    <div class="entry-summary">
      <p class="mb-0 mt-2">@php(the_excerpt())</p>
      <p class="excerpt-continue uppercase tracking-wider mt-2">
        Continue Reading
        <svg class="w-5 h-5 -mt-[2px] inline-block opacity-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor">
          <path stroke-linecap="miter" stroke-linejoin="miter" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
      </p>
    </div>
  </a>
</article>
