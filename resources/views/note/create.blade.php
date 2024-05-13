<x-app-layout>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Create new note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="note">
            @csrf
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here"></textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">cancel</a>
                <button class="note-submit-button"> submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
