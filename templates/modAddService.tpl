<section class="sekcija">
    <h6>.</h6>
    <div  class="reg_form" >
        <p id="poruka"></p>
        <p>
            <label for="koris2" id="lab_koris"> Naziv usluge: </label>
            <input id="koris2" name="koris2" type="text"/>
        </p>
        <p>
            <label for="opis_proizvoda" > Opis usluge: </label>
            <textarea rows="50" cols="100" id="opis_proizvoda" name="opis_proizvoda"></textarea>
        </p>
        <p>
            <label for="vrijeme" > Trajanje usluge: </label>
            <input id="vrijeme" name="vrijeme" type="time" value="00:00"/>
        </p>
        <p id="catToSer">
            <label > Kategorija: </label>
            {html_options name=modIzbor options=$myOptions selected=$mySelect}
        </p>

        <p class="form_gumb">
            <button class="gumb_prijava" id="modCoupons" ><i id="ikona" class="material-icons">&#xE163;</i>  POŠALJI</button>
        </p>
    </div>
</section>

<script src="./js/userCheck.js"></script>