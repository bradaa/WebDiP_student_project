<section class="sekcija">
    <h6>.</h6>
    <form  class="reg_form" action="./prijava.php" method="post">
        <div id="twoStep" style="display: {$nesto}">
            <a style="text-decoration: none; margin-top: 200px;" id="twoStepInput" class="material-icons" data-fancybox data-type="iframe" href="./twoStep.php">lock_open</a>
        </div>

        <p>
            <label for="koris" id="lab_koris"> Korisničko ime: </label>
            <input id="koris" name="koris" type="text" placeholder="marija" value="{$cookie_user}"/>
        </p>
        <p>
            <label for="lozinka_p" id="lab_loznika_p"> Lozinka: </label>
            <input id="lozinka_p" name="lozinka" type="password" placeholder="MIrko69" />
        </p>
        <p>
            <label for="rad" id="lab_rad"> Zapamti me </label>
            <label for="rad" id="labela_radio" > Da  </label>
            <input id="rad" name="rad" type="radio" value="Da"/>
            <label for="rada" id="nelabela_radio" > Ne  </label>
            <input id="rada" name="rad" type="radio" value="Ne" checked/>
        </p>
        <p>
            <a href="./lostPass.php">Zaboravljena lozinka?</a>
        </p>
        <p class="form_gumb">
            <button class="gumb_prijava" name="submit" value="submit" type="submit"><i id="ikona" class="material-icons">&#xE163;</i>  PRIJAVA</button>
        </p>
    </form>
</section>


