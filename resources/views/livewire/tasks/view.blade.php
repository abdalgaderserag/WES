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

    <div class="flex" style="margin: 20px 3% 120px 3%;justify-content: flex-start;flex-direction: row-reverse;">
        <button wire:click="submit" class="button button-1">submit</button>
        <button wire:click="message" class="button button-2">message</button>
    </div>
</div>
