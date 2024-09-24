<div id="message-view">

    <div class="section">
        <div class="item-row" style="border-radius: 4px">
            {{ $user->name }}
        </div>
        <div  id="message-container">

            @forelse($messages as $message)
                @if($message->sender_id == auth()->id())
                    <div class="message-block">
                        <div class="message message-sender">{{ $message->text }}</div>
                        @if($message->attachments)
                            <div class="message">{{ $message->attachments }}</div>
                        @endif
                    </div>
                @else
                    <div class="message-block sender">
                        <div>
                            <div class="message">{{ $message->text }}</div>
                            @empty(!$message->attachments)
                                <div class="message">{{ $message->attachments }}</div>
                            @endempty
                        </div>
                        <div>
                            <img src="{{ url($message->sender->img) }}" style="width: 36px;border-radius: 50%;">
                        </div>
                    </div>

                @endif

            @empty
                <h1> there is no messages</h1>
            @endforelse
        </div>
    </div>

    <form wire:submit="send" action="">
        <div class="section flex input-message">
            <input placeholder="enter message here" type="text" name="message" wire:model="content">
            @error('content')
            <span class="error-text">{{ $message }}</span>
            @enderror
            <img src="{{ url('svg/link.svg') }}" onclick="document.getElementById('file-upload').click()" style="margin-right: 1.5%">
            <input wire:click="saveFile" multiple wire:model="attachment" type="file" style="display: none" id="file-upload">
            <button id="submit-button"></button>
            <img src="{{ url('svg/send.svg') }}" onclick="submitButton()">
        </div>
    </form>
    <div>
        <div  class="section" wire:loading wire:target="attachment" style="color: #32c8a7">
            uploading your file..
        </div>
    </div>
    <div class="section">
        <div class="item-row" style="display: none"></div>
            @php($i = 0)
            @forelse($attachment as $attach)
                @php($i++)
                <div class="item-row flex">
                    <div>{{ $attach->getClientOriginalName() }}</div>
                    <img wire:click="deleteFile({{ $i }})" style="cursor: pointer" src="{{ url('svg/delete.svg') }}">
                </div>
            @empty
            @endforelse
            @forelse($attachments as $attach)
                    <div class="item-row">
                        {{ $attach->getClientOriginalName() }}
                    </div>
            @empty
            @endforelse
    </div>
</div>
