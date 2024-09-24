<div id="message-view">
    <div class="section">
        <div class="item-row">
            Add new task
        </div>
        <div class="item-row" style="padding: 24px 10px">
            <form wire:submit="send" action="">
                <label for="title">title:</label><br><br>
                <input wire:model="title" class="input-text" type="text" name="title" placeholder="title">
                @error('title')
                <span class="error-text">{{ $message }}</span>
                @enderror
                <br><br><br>
                <textarea wire:model="text" class="input-area input-text" placeholder="task description"></textarea>
                @error('text')
                <span class="error-text">{{ $message }}</span>
                @enderror
                <br><br>


                <input wire:model="deadline" type="date" name="deadline" class="input-text">
                @error('deadline')
                <span class="error-text">{{ $message }}</span>
                @enderror
                <br><br>

                <label for="files">attach images, videos and files :</label><br><br>
                <input class="input-text" type="file"><br><br>
                <button class="button">send</button>
            </form>
        </div>
    </div>
</div>
