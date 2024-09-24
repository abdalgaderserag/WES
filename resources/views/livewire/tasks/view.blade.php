<div>
    <div class="task-title">
        <h2>{{ $task->title }}</h2>
        <h4>{{ $task->creator->name }}</h4>
    </div>

    <div class="task">
        <div class="item-row">
            Description :
        </div>
        <div class="content">
            {{ $task->description }}
        </div>
    </div>
    @empty(!$task->attachments)
        <div class="task">
            <div class="item-row">
                Attachments :
            </div>
            <div class="content">
                <a href="#">sadasd.jpg</a><br>
                <a href="#">movie.mp4</a><br>
                <a href="#">sheet.xlx</a>
            </div>
        </div>
    @endempty

    @if(\Illuminate\Support\Facades\Auth::user()->role == 'employ')
    <div class="flex" style="margin: 20px 3% 120px 3%;justify-content: flex-start;flex-direction: row-reverse;">
        <button wire:click="submit" class="button button-1">submit</button>
        <button wire:click="message" class="button button-2">message</button>
    </div>
    @endif


    @if(!empty($media))
        <div class="task">
            <div class="item-row">
                Submission :
            </div>
            <div class="content">
                {{ $media->text }}
            </div>
        </div>
        @empty(!$media->attachments)
            <div class="task">
                <div class="item-row">
                    Attachments :
                </div>
                <div class="content">
                    <a href="#">sadasd.jpg</a><br>
                    <a href="#">movie.mp4</a><br>
                    <a href="#">sheet.xlx</a>
                </div>
            </div>
        @endempty
    @endif

    @if(!empty($task->submit_at))
        <div class="flex" style="margin: 20px 3% 120px 3%;justify-content: flex-start;flex-direction: row-reverse;">
            <button wire:click="accept" class="button button-1">accept</button>
            <button wire:click="reject" class="button button-2">reject</button>
        </div>
    @endif
</div>
