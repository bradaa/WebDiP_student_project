<section class="sekcija">
    <h6>.</h6>
    <div  class="reg_form" >
        <p id="poruka"></p>

        <p id="catToSer">
            <label > Kategorija: </label>
            {html_options name=modCoupon options=$myOptions selected=$mySelect}
        </p>
        <p>
            <label for="koris2" id="lab_koris"> Vrijednost: </label>
            <input id="koris2" name="koris2" type="number"/>
        </p>
        <p>
            <label for="datum" > Datum od: </label>
            <input id="datum" name="datum" type="date">
        </p>
        <p>
            <label for="vrijeme" > datum do: </label>
            <input id="vrijeme" name="vrijeme" type="date" />
        </p>
        <p class="form_gumb">
            <button class="gumb_prijava" id="modCoupon" ><i id="ikona" class="material-icons">&#xE163;</i>  POŠALJI</button>
        </p>
    </div>
</section>

<script src="./js/userCheck.js"></script>