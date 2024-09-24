<div class="section" id="contact-view">
    <div class="item-row info-card">
        Contacts
    </div>

    @foreach($contacts as $contact)
        <div class="item-row info-card @if($contact->username == $username) active @endif" onclick="location.href = '/messages/{{ $contact->username }}'">
            <img class="info-img info-img-disconnected" src="{{ url($contact->img) }}">
            <div class="info-text">
                <div class="info-name">{{ $contact->name }}</div>
                <div class="info-job" style="margin-top: -1px">{{ $contact->role }}</div>
            </div>
        </div>
    @endforeach
</div>
