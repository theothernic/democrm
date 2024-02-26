<div>
    <form id="frmAuthLogin">
        <div class="control">
            <label for="txtLoginEmail">Email Address</label>
            <input type="text" id="txtLoginEmail" name="email" />
        </div>
        <div class="control">
            <label for="txtLoginPass">Password</label>
            <input type="password" id="txtLoginPass" name="password" />
        </div>
        <div class="control checkbox">
            <input type="checkbox" id="chkRememberMe" name="remember_me" />
            <label for="chkRememberMe">Remember Me</label>
        </div>
        @csrf
        <div class="actions">
            <button type="submit">Log in</button>
        </div>
    </form>
</div>
