<form method="POST" action="index.php?action=home">
    <div class="rounded me-3 ms-3 pb-3 mb-1 pt-3" style="background-color: #ECF1F3;">
        <h5 class="mt-0 me-3 ms-3 mb-1" style="color: #115098; font-size: 16px; font-weight: normal;">Old Home Bulletin
            Board - Registration</h5>
        <hr class="border border-secondary-subtle opacity-50 mt-0 me-3 ms-3 mb-1">
        <div class="mt-2 me-3 ms-3 mb-0">
            <strong style="font-size: 11px;">Please note that you will need to enter a valid email address before your
                account is activated. The administrator will review your account and if approved you will receive an
                email at the address you specified.</strong>
        </div>
        <div class="mt-1 me-3 ms-3 mb-1 pt-2">
            <div>
                <label class="formRegister" for="name">Username: </label>
                <input class="formInput" type="text" name="name" id="name" required
                    style="background-color: white; height: 18px;" />
            </div>
            <p class="formTip">Length must be between <br>CHARACTERS_XY and <br>CHARACTERS_XY.</p>
            <div>
                <label class="formRegister" for="password">Password: </label>
                <input class="formInput" type="password" name="password" id="password" required
                    style="background-color: white; height: 18px;" />
            </div>
            <p class="formTip">Must be at least <br> CHARACTERS_XY long.</p>
            <div class="mb-2">
                <label class="formRegister" for="password">Confirm password: </label>
                <input class="formInput" type="password" name="password" id="password" required
                    style="background-color: white; height: 18px;" />
            </div>
            <div>
                <label class="formRegister" for="email">Email address: </label>
                <input class="formInput" type="email" name="email" id="email" required
                    style="background-color: white; height: 18px;" />
            </div>
            <hr class="border border-secondary-subtle opacity-50 mt-1 mb-1">
            <div>
                <label class="formRegister" for="language">Language: </label>
                <input class="formInput" type="text" name="language" id="language" required
                    style="background-color: white; height: 18px;" />
            </div>
            <div>
                <label class="formRegister" for="language">My timezone: </label>
                <input class="formInput" type="text" name="language" id="language" required
                    style="background-color: white; height: 18px;" />
            </div>
        </div>
    </div>
    <div class="rounded me-3 ms-3 pb-3 mb-1 pt-3" style="background-color: #ECF1F3;">
        <p class="mt-0 me-3 ms-3 mb-0" style="color: #115098; font-size: 10.5px; font-weight: 700;">CONFIRMATION OF
            REGISTRATION</p>
        <hr class="border border-secondary-subtle opacity-50 mt-0 me-3 ms-3 mb-0">
        <div class="mt-0 me-3 ms-3 mb-1 pt-1">
            <div>
                <label class="formRegister" for="language">Rakka is to Reki as Reki is <br> to ____________?: </label>
                <input class="formInput" type="text" name="language" id="language" required
                    style="background-color: white; height: 18px;" />
            </div>
            <p class="formTip">This question is a means of preventing automated form submissions by spambots.</p>
        </div>
    </div>
    <div class="d-flex align-content-center justify-content-center rounded me-3 ms-3 pt-2 pb-2"
        style="background-color: #ECF1F3;">
        <input class="loginButton" type="submit" value="Submit" />
    </div>
</form>