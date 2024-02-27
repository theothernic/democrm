<div>
    @if ($errors->any())
        <x-message type="error" />
    @endif
    <form id="frmAuthLogin" name="frmAuthLogin" method="post" action="{{ route('login') }}">
        <div class="control">
            <label for="txtLoginEmail">@lang('user.fields.email')</label>
            <input type="text" id="txtLoginEmail" name="email" />
        </div>
        <div class="control">
            <label for="txtLoginPass">@lang('user.fields.password')</label>
            <input type="password" id="txtLoginPass" name="password" />
        </div>
        <div class="control checkbox">
            <input type="checkbox" id="chkRememberMe" name="remember_me" />
            <label for="chkRememberMe">@lang('user.fields.remember')</label>
        </div>
        @csrf
        <div class="actions">
            <button type="submit">Log in</button>
        </div>
    </form>
</div>
