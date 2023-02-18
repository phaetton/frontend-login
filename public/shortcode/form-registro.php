<?php
function rfsu_add_register_form(){
    $response='
    <div class="signin">
        <div class="signin__container">
            <h1 class="sigin__titulo">Register</h1>
            <form class="signin__form">
                <div class="signin__name name--campo">
                    <label for="Name">Name</label>
                    <input type="text" id="Name" name="name">
                </div>
                <div class="signin__email name--campo">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email>
                </div>
                <div class="signin__pass name--campo">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="signin__submit">
                    <input type="submit" value="Create">
                </div>
            </form>
        </div>
    </div>';

    return $response;
}

add_shortcode("rfsu_registro","rfsu_add_register_form");