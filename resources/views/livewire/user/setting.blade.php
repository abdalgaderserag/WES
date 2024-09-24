<div class="section">
    <div class="item-row">Edit Profile</div>
    <div class="item-row">
        <form wire:submit="save" action="" class="flex">
            <div>
                <div class="flex"
                     onclick="document.getElementById('file-upload').click()"
                     style="width: 210px;height: 210px;border-radius: 12px;background:radial-gradient(#00000050, #00000050), @if(!empty($avatar)) url('{{ $avatar->temporaryUrl() }}') @else url('{{ $img }}') @endif;background-size: cover;justify-content: center;cursor: pointer">
                    <img src="{{ url('svg/edit.svg') }}" style="background-color: rgba(255,255,255,0.47);border-radius: 8px;padding: 4px">
                    <input wire:model="avatar" type="file" style="display: none" id="file-upload" accept="image/jpeg,image/png,image/jpeg">
                </div>
                @error('avatar')
                <span class="error-text">{{ $message }}</span>
                @enderror
            </div>
            <div style="width: 100%;height: 240px;padding: 4px 36px">
                <div>
                    <label for="name">your name:</label>
                    <input wire:model="name" type="text" class="input-text"><br>
                    @error('name')
                    <span class="error-text">{{ $message }}</span>
                    @enderror
                    <br><br>
                </div>
                <div>
                    <label for="contact">your phone number:</label>
                    <input wire:model="phone" type="tel" class="input-text"><br>
                    @error('phone')
                    <span class="error-text">{{ $message }}</span>
                    @enderror
                    <br><br>
                </div>
            </div>
            <button id="submit-button"></button>
        </form>
    </div>
    <div class="item-row flex" style="justify-content: flex-end">
        <button wire:click="cancel" class="button button-2" style="margin-right: 2%">cancel</button>
        <button class="button" onclick="submitButton()">Save</button>
    </div>
</div>
