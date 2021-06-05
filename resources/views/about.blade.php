{{-- 
Ejercicios video 16    
@if(5 < 10)
    <p>Five is lower than ten</p>
@endif 

@if(5 > 10)
    <p>Five is lower than ten</p>
@elseif (5==10) 
    <p>Five is indeed lower than ten</p>
@else
    <p>All conditions are wrong!</p>
@endif

@unless (empty($name))
    <h2>Name isn't empty</h2>
@endunless

@empty($Secondname) is empty because not exists
    <h2>Second Name is empty</h2>
@endempty

@isset($name)
    <h2>Name have been set</h2>
@endisset

@switch($name)
    @case('Dary')
        <h2>Name is Dary</h2>
        @break
    @case('John')
        <h2>Name is John</h2>
        @break
    @default
        <h2>Name is not Dary or John, is {{ $name }}</h2>
@endswitch

--}}

{{-- 
Videos video 17: Loops.    
@for ($i=0; $i<10; $i++)
    <h2>The number is {{ $i }}</h2>
@endfor

@foreach ($names as $name)
    <h2>The name is {{ $name }}</h2>
@endforeach

@forelse ($names as $name)
    <h2>The name is {{ $name }}</h2>
@empty
    <h2>No names in array</h2>
@endforelse

{{ $i=0 }} 
@while ($i < 10)
    <h2>Print from while loop i value: {{ $i }}</h2>
    {{ $i++ }}
@endwhile --}}