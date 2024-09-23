<div id="main">
    <div id="login">
        {{ $user }}
        <div>
            <label for="username">Enter username:</label><br>
            <input wire:model="username" type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Enter password:</label><br>
            <input wire:model="password" type="password" name="password" id="password">
        </div>

        <button wire:click="login">login</button>
    </div>
</div>
