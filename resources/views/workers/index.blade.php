@foreach ($workers as $worker)
    <br>{{ $worker->id }}
    <br>{{ $worker->name }}
    <br>{{ $worker->job }}
    <br>{{ $worker->status }}
@endforeach