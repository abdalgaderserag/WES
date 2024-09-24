<div id="main">
    <div id="login">
        <form wire:submit="login" action="">
            <div>
                <label for="username">Enter username:</label><br>
                <input wire:model="username" type="text" name="username" id="username">
                @error('username')
                <span class="error-text">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="password">Enter password:</label><br>
                <input wire:model="password" type="password" name="password" id="password">
                @error('password')
                <span class="error-text">{{ $message }}</span>
                @enderror
            </div>
            <button>login</button>
        </form>
    </div>
</div>
