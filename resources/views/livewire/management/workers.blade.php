<div class="flex" style="flex-direction: column;">
    <input wire:model.live="search" type="search" name="search" style="width: 56%;border-radius: 20px;font-size: 1.1rem;padding: 4px 20px;border:2px solid #718096" placeholder="search here"><br>

    <div id="workers">
        @forelse($workers as $worker)
            <div class="section" id="workers-cards">
                <div class="item-row"></div>
                <div class="item-row flex">
                    <img src="{{ url($worker->img) }}">


                    <div class="card-title">{{ $worker->name }}</div>


                    <button wire:click="create({{ $worker->id }})" class="card-button">+ add task</button>


                    <div class="flex" style="flex-direction: column;margin-top: 16px">
                        <div style="display: flex;align-items: center;flex-direction: column">
                            @empty($worker->rate)
                                <div style="text-align: center; height: 58px">employ didn't complete any task yet</div>
                                @php($rate = '0')
                            @else
                                @php($rate = $worker->rate . '%')
                                <div>on-time task completion rate :</div>
                                <div style="margin-top: 8px;font-size: 1.4rem;color: #2d3748">{{ $rate }}</div>
                            @endempty

                        </div>
                        <div style="border-radius: 8px;height: 16px;width:82%;background-color: #e4e8ed;margin-top: 16px">
                            <div style="border-radius: 8px;height: 16px;width: {{ $rate }};background: linear-gradient(45deg,#32c8a7, #32c840);"></div>
                        </div>
                    </div>


                    <div class="flex" style="font-size: 1rem;width: 96%;margin: 16px 2% 12px 0;">
                        <div style="width: 50%;display: flex;flex-direction: column;align-items: center">
                            <div style="color: #2d3748">Active Tasks</div>
                            <div>{{ $worker->tasks->filter(function ($t){return $t->status == 1;})->count() }}</div>
                        </div>
                        <div style="width: 50%;display: flex;flex-direction: column;align-items: center">
                            <div style="color: #2d3748">completed Tasks</div>
                            <div>{{ $worker->tasks->filter(function ($t){return $t->status == 3;})->count() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <h1>there is no employ in this department</h1>
        @endforelse
    </div>

</div>
