<div class="section">
    <div class="item-row">{{ $user->name }}</div>
    <div class="item-row" style="display: flex;align-items: flex-start">
        <div style="margin: 12px 2px">
            <img src="{{ url($user->img) }}" style="width: 210px;border-radius: 12px">
            <div style="margin-left: 12px">
                <div style="color: #1a202c;font-size: 1.1rem;font-weight: 700">{{ $user->name }}</div>
                <div style="font-size: 1rem">{{ '@' . $user->username }}</div>
            </div>
        </div>
        <div>
            <div>

            </div>
            <div style="padding: 30px 0 0 14px">
                <div>department : {{ $user->department->name }}</div>
                <div>user role : {{ $user->role }}</div>
                <div>on time delivery rate {{ $user->rate.'%' }}</div>
                <div>ongoing tasks: {{ $ongoing }}</div>
                <div>completed tasks: {{ $completed }}</div>
                <div>tasks submited and waiting for review: {{ $waiting }}</div>
                <div>Contact: {{ $user->phone }}</div>
            </div>
        </div>
    </div>
</div>
