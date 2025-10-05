@props(['title','excerpt'=>null,'author'=>'Автор','date'=>null])
<article class="p-3 border rounded shadow-sm">
    <h2>{{ $title }}</h2>
    <p>{{ $excerpt }}</p>
    <small>{{ $author }} --- {{ $date }}</small>
</article>
