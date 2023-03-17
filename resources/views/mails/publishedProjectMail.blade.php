<x-mail::message>
# {{$project->name}}

{{$project->description}}

<x-mail::button :url="$url">
Go to Project
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
