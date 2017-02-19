<tr>
    <td {{ $category->threadsEnabled ? '' : 'colspan=5' }}>
        <p class="{{ isset($titleClass) ? $titleClass : '' }}">
        	<a href="{{ Forum::route('category.show', $category) }}">{{ $category->title }}</a><br>
        	<span class="forum-text-muted">{{ ($titleClass=='forum-lead') ? $category->description : '' }}</span>
        </p>
        
    </td>
    @if ($category->threadsEnabled)
    
        <td>
        	<p class="{{ isset($titleClass) ? $titleClass : '' }}">
            @if ($category->newestThread)
                <a href="{{ Forum::route('thread.show', $category->newestThread) }}">
                    {{ $category->newestThread->title }}
                    ({{ $category->newestThread->authorName }})
                </a>
            @endif
            </p>
        </td>
        <td>
        	<p class="{{ isset($titleClass) ? $titleClass : '' }}">
            @if ($category->latestActiveThread)
                <a href="{{ Forum::route('thread.show', $category->latestActiveThread->lastPost) }}">
                    {{ $category->latestActiveThread->title }}
                    ({{ $category->latestActiveThread->lastPost->authorName }})
                </a>
            @endif
            </p>
        </td>
    @endif
</tr>
