<div id="workers">
    @forelse($workers as $worker)
        <div class="section" id="workers-cards">
            <div class="item-row"></div>
            <div class="item-row flex">
                <img src="{{ url($worker->img) }}">


                <div class="card-title">{{ $worker->name }}</div>


                <button wire:click="create({{ $worker->id }})" class="card-button">+ add task</button>


                <div class="flex" style="flex-direction: column;margin-top: 16px">
                    <div class="flex">
                        <div>on-time task completion rate :</div>
                        @php($rate = rand(70,95) . '%')
                        <div>{{ $rate }}</div>
                    </div>
{{--                    <progress value="{{ $rate }}" max="100"></progress>--}}
                    <div style="border-radius: 8px;height: 16px;width:82%;background-color: #e4e8ed;margin-top: 16px">
                        <div style="border-radius: 8px;height: 16px;width: {{ $rate }};background-color: #32c8a7"></div>
                    </div>
                </div>


                <div class="flex" style="font-size: 1rem;width: 96%;margin: 16px 2% 12px 0;">
                    <div style="width: 50%;display: flex;flex-direction: column;align-items: center">
                        <div>Active Tasks</div>
                        <div>{{ $worker->tasks->count() }}</div>
                    </div>
                    <div style="width: 50%;display: flex;flex-direction: column;align-items: center">
                        <div>completed Tasks</div>
                        <div>{{ $worker->tasks->count() }}</div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <h1>there is no employ in this department</h1>
    @endforelse
</div>
