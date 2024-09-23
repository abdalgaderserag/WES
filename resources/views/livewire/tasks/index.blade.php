<div class="section" id="orders">
    <div class="item-row flex">
        <div class="item">
            Task
        </div>

        <div class="item">
            Deadline
        </div>

        <div class="item center-text">
            status
        </div>

        <div class="item center-text">
            Actions
        </div>
    </div>
    @foreach($tasks as $task)
        <div class="item-row flex">
            <div class="item">
                {{ $task->description }}
            </div>

            <div class="item">
                {{ $task->deadline }}
            </div>

            <div class="item center-text">
                <div class="status status-d">{{ $task->status }}</div>
            </div>

            <div class="item center-text">
                <img src="{{ url('/svg/view.svg') }}" wire:click="view({{ $task->id }})">
                <img src="{{ url('/svg/chat.svg') }}" onclick="window.location.href='/messages'">
            </div>
        </div>
    @endforeach

</div>

