
<x-layout>
<!-- <h1>INDEX - index.blade.php</h1> -->
<div class="note-container">
    <div style=" width:100%; display: flex; align-items:center; padding:24px;">
    <a href={{route('note.create')}} class="new-note-btn" style="border:2px solid black; padding: 4px 12px; background:gray; margin:0 auto;">CREATE NEW NOTE</a>


    </div>
    <div class="notes">
        @foreach ($notes as $note )
        <div class="note" style=" background:white; border:1px solid gray; border-radius:8px; padding: 40px; margin:2px 40px;">
            <div class="note-body" style="padding:8px;">
                {{Str::words($note -> note,30)}}
            </div>
            <div class="note-btn">
                <a href={{route('note.show',$note)}} style="background:green; padding: 2px 4px; border: 2px solid black;">VIEW</a>
                <a href={{route('note.update', $note)}}  style="background:lightblue; padding: 2px 4px; border: 2px solid black;">EDIT</a>
                <a href={{route('note.destroy',$note)}}  style="background:coral; padding: 2px 4px; border: 2px solid black;">DELETE</a>
            </div>
        </div>
        @endforeach
        
    </div>

</div>


</x-layout>