<section class="sekcija">
    <h6>.</h6>
    <form  class="reg_form" action="./registracija.php" method="post">
        <p>
            <label for="ime" > Ime: </label>
            <input id="ime" name="ime" type="text" placeholder="Ime"/>
        </p>
        <p id="error7" class="error" style="display: {$imeErr}" >Ime krivo!</p>
        <p>
            <label for="prezime" > Prezime: </label>
            <input id="prezime" name="prezime" type="text" placeholder="Prezime" />
        </p>
        <p id="error8" class="error" style="display: {$preErr}" >Prezime krivo!</p>
        <p>
            <label for="koris" > Korisničko ime: </label>
            <input id="koris" name="koris" type="text" placeholder="Korisničko ime" />
        </p>
        <p id="error9" class="error" style="display: {$korErr}" >Korisničko ime postoji</p>
        <p>
            <label for="email" > Email: </label>
            <input id="email" name="email" type="email" placeholder="Email" />
        </p>
        <p id="error10" class="error" style="display: {$emaErr}" >Unesite validan email ili već postoji!</p>
        <p>
            <label for="lozinka" > Lozinka: </label>
            <input id="lozinka" name="lozinka" type="password" placeholder="Lozinka" />
        </p>
        <p id="error11" class="error" style="display: {$lozErr}" >Lozinka nije ispravna!</p>
        <p>
            <label for="lozinka_p" > Potvrda loznike </label>
            <input id="lozinka_p" name="lozinka_p" type="password" placeholder="Potvrda lozinke" />
        </p>
        <p id="error12" class="error" style="display: {$lozpErr}" >Lozinka ne odgovara!</p>

        <p>
            <label for="twoStep" > Two-step: </label>
            <input id="twoStep" name="twoStep" type="checkbox" value="1"/>
        </p>

        <div class="g-recaptcha" data-sitekey="6LdTsx8UAAAAAA1_49Pyu17piNMf9Uio1r0_2az8"></div>

        <p id="error13" class="error" style="display: {$capErr}" >Označite captcha!</p>

        <p class="form_gumb">
            <button id="submit" class="gumb_prijava" name="registracija" value="registracija" type="submit"><i id="ikona" class="material-icons">&#xE163;</i>  REGISTRACIJA</button>
        </p>
        <p id="link" class="error" style="display: {$linErr}" ></p>
    </form>
</section>