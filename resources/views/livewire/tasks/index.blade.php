<div>
    @if($tasks->count() == 0)
        <h1>You don't have any tasks at the moment</h1>
    @else
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
                    {{ $task->title }}
                </div>

                <div class="item">
                    {{ $task->deadline }}
                </div>

                <div class="item center-text">
                    @php
                        $sta = $task->status;
                        if ($sta == 3){
                            $sta = 'status-r';
                        }elseif($sta == 2){
                            $sta = 'status-f';
                        }elseif ($sta == 1){
                            $sta = 'status-d';
                        }
                    @endphp
                    <div class="status {{ $sta }}">{{ $task->getStatus() }}</div>
                </div>

                <div class="item center-text">
                    <img src="{{ url('/svg/view.svg') }}" wire:click="view({{ $task->id }})">
                    <img src="{{ url('/svg/chat.svg') }}" onclick="window.location.href = '/messages/{{ $task->user->username }}'">
                </div>
            </div>
        @endforeach
    </div>
    @endif
</div>

