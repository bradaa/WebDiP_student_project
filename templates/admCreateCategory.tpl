<section class="sekcija">
    <h6>.</h6>
    <div  class="reg_form" >
        <p>
            <label for="koris2" id="lab_koris"> Naslov kategorije: </label>
            <input id="koris2" name="koris2" type="text"/>
        </p>
        <p>
            <label for="opis_proizvoda" > Opis kategorije: </label>
            <textarea rows="50" cols="100" id="opis_proizvoda" name="opis_proizvoda"></textarea>
        </p>
        <p id="catToSer">
            <label> Moderator:</label>
            {html_options name=modIzbor options=$myOptions selected=$mySelect}
        </p>

        <p class="form_gumb">
            <button class="gumb_prijava" id="catIzbor" ><i id="ikona" class="material-icons">&#xE163;</i>  POŠALJI</button>
        </p>
    </div>
</section>

<script src="./js/userCheck.js"></script>