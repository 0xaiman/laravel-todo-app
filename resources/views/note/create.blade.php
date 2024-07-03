<x-layout>
    <h1>CREATE - create.blade.php</h1>
    <div class="note0-container">
        <h1>Create New Note</h1>
        <form action={{route('note.store')}} method="POST" class="note" style="margin:10px; display:flex; flex-direction:column; ">
            @csrf
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here" style="border:2px solid black; width:50%; margin-bottom: 20px;; ">

            </textarea>
            <div class="note-buttons">
                <a href={{route('note.index')}} class="note-cancel-button" style="border:2px solid black; background:coral; padding:10px 20px;">Cancel</a>
                <button class="note-submit"  style="border:2px solid black; background:lightgreen; padding:10px 20px;">SUBMIT</button>
            </div>
        </form>
    </div>
</x-layout>