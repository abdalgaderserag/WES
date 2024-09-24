<div id="message-view">
    <div class="section">
        <div class="item-row">
            Submit Task
        </div>
        <div class="item-row">
            <h2>{{ $task->title }}</h2>
            <p>{{ $task->description }}</p>
        </div>
        <div class="item-row" style="padding: 24px 10px">
            <form wire:submit="send" action="">
                <textarea wire:model="text" class="input-area input-text" placeholder="task description"></textarea>
                @error('text')
                <span class="error-text">{{ $message }}</span>
                @enderror
                <br><br>
                <label for="files">attach images, videos and files :</label><br><br>
                <input class="input-text" type="file"><br><br>
                <button id="submit-button"></button>
            </form>
        </div>
        <div class="item-row">
            <button class="button" onclick="submitButton()">send</button>
        </div>
    </div>
</div>
