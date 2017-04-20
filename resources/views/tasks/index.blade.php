@foreach($tasks as $task)
 {{ $task['id'] }} 
 {{ $task['name'] }}
 <a href="{{route('tasks.show',['id' => $task['id']])}}">{{ $task['duration'] }}</a>
 <br/>
@endforeach