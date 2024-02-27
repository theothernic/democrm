@props(['type'])

<div {{ $attributes->merge(['class' => sprintf('message %s', $type)])}}>
    <h2>Just a second, please.</h2>

    <p>
        @lang('ui.message.directions')

        <ul>
        @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
        @endforeach
        </ul>
    </p>
</div>
