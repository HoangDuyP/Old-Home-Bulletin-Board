<?php
require __DIR__ . '/../model/forum/homeBoards.php';
include __DIR__ . '/layout/board.php';
?>
<div class="mt-3 me-3 ms-3 mb-1">
    <div class="d-flex ">
        <a class="loginLink" href="#">LOGIN</a>
        <svg class="mt-0" xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
            class="bi bi-dot" viewBox="0 0 16 16">
            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
        </svg>
        <a class="loginLink" href="#">REGISTER</a>
    </div>
    <hr class="border border-secondary-subtle opacity-50 m-0">
    <form action="" method="get" class="d-flex mt-1">
        <div class="formLogin">
            <label for="name">Username: </label>
            <input class="formInput" type="text" name="name" id="name" required />
        </div>
        <div class="formLogin">
            <label for="password">Password: </label>
            <input class="formInput" type="password" name="password" id="password" required />
        </div>
        <div class="d-flex align-items-center">
            <a class="formForgotPassword" href="#">I forgot my password</a>
        </div>
        <div class="formLogin d-flex align-items-center">
            <label for="rememberMe" class="mb-0">|&nbsp;&nbsp;Remember me</label>
            <input type="checkbox" id="rememberMe" name="rememberMe" class="ms-2 me-1" />
            
        </div>
        <input class="loginButton" type="submit" value="Login" />
    </form>
</div>
<div class="mt-3 me-3 ms-3 mb-1">
    <div style="color: #105289 !important; font-size: 12px !important; font-weight: 600;">
        WHO IS ONLINE
    </div>
    <hr class="border border-secondary-subtle opacity-50 m-0">
    <div class="text-muted" style="font-size: 0.77rem; line-height: 1.2;">
        In total there are <b>0</b> users online :: <b>0</b> registered and <b>0</b> hidden (based on users active over the past 5 minutes)<br>
        Most users ever online was <b>0</b> on Wed Jan 17, 2007 11:46 pm
    </div>
</div>
<div class="mt-3 me-3 ms-3 mb-1">
    <div style="color: #105289 !important; font-size: 12px !important; font-weight: 600;">
        STATISTICS
    </div>
    <hr class="border border-secondary-subtle opacity-50 m-0">
    <div class="text-muted" style="font-size: 0.77rem; line-height: 1.2;">
        Total posts <b>105874</b> • Total topics <b>3110</b> • Total members <b>693</b> • Our newest member <b>RingMeisterr</b>
    </div>
</div>